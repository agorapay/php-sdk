<?php

namespace CAPSPaymentApi\Librairies;

abstract class ApiBase
{
    /**
     * Do filter datas before callApi function
     *
     * @param string $endPoint
     * @param object $obj
     * @return object stdClass
     */
    public function filterObject($endPoint, $obj, $method = "POST", $files = null)
    {
        $jsonPayload = json_encode($obj, JSON_UNESCAPED_SLASHES);
        $jsonPayload = $this->filterDatas($jsonPayload, function ($value) {
            return is_null($value) || $value === "";
        });
        if ($method == "POST") {
             $jsonPayload = json_encode($jsonPayload, JSON_UNESCAPED_SLASHES);
             return $this->callApi($endPoint, $jsonPayload, $method, $files);
        }
        return $jsonPayload;
    }

    /**
     * Launch calling to api
     *
     * @param string $endPoint
     * @param string $postFields
     * @param string $method
     * @return object
     */
    public function callApi($endPoint, $postFields, $method = "POST", $files = null)
    {
        $url = trim($this->_root->Config->BaseUrl, "/") . $endPoint;
        try {
            // check config before calling api
            $this->_root->Config->checkConfig();
            // call api
            $response = $this->curlApi(
                $url,
                $postFields,
                $this->tokenValue,
                $method,
                $files
            );
            if (!$response) {
                throw new \Exception("Unable to connect to API.");
            }
            else {
                return json_decode($response);
            }
        } catch (\Exception $exception) {
            return $this->getMsgException($exception);
        }
    }

    /**
     * Call curlApi
     *
     * @param string $url
     * @param string $postFields
     * @param string $token
     * @param string $method
     * @return string
     */
    private function curlApi($url, $postFields, $token, $method = "POST", $files = null)
    {
        if (
            !isset($this->_root->Config->TokenValue) ||
            $this->_root->Config->TokenExpiry < time()
        ) {
            $this->mainAuthenticate();
        }

        $attempt = 0;
        $again = 0;
        do
        {
            $curlHandler = curl_init();
            $config = [
                CURLOPT_RETURNTRANSFER => 1,
                CURLOPT_URL => $url,
                CURLOPT_HEADER => 0,
                CURLOPT_HTTPHEADER => [
                    "Authorization: Bearer " . $this->_root->Config->TokenValue,
                    "id_token: " . $this->_root->Config->TokenId,
                ],
            ];
            if ($method === "POST") {
                $this->jsonFieldToString($postFields);
                curl_setopt($curlHandler, CURLOPT_POST, 1);
                if ($files !== null && is_array($files))
                {
                    $post = array();
                    $post['json'] = $postFields;
                    foreach ($files as $var => $content) {
                        $post[$var] = new \CURLFile($content['filePath'], $content['fileType'], $content['fileName']);
                    }
                }
                else
								{
                    $post = $postFields;
										array_push($config[CURLOPT_HTTPHEADER], "Content-Type: application/json");
								}
            		curl_setopt_array($curlHandler, $config);
                curl_setopt($curlHandler, CURLOPT_POSTFIELDS, $post);
            }
						else if ($method === "GET") {
                curl_setopt($curlHandler, CURLOPT_URL, $url . "?" . $postFields);
                curl_setopt($curlHandler, CURLOPT_HTTPHEADER, [
                    "Authorization: Bearer " . $this->_root->Config->TokenValue,
                    "id_token: " . $this->_root->Config->TokenId,
                ]);
            }

            $response = curl_exec($curlHandler);

            $status = curl_getinfo($curlHandler, CURLINFO_RESPONSE_CODE);
            if ($status === 401) {
                if ($attempt++ == 0) $again = 1;
                $this->mainAuthenticate();
            } else {
                $again = 0;
            }
            curl_close($curlHandler);
        } while ($again);
        return $response;
    }

    /**
     * Call authenticate and store in config object
     */
    private function mainAuthenticate() : void
    {
        $json = $this->curlAuthenticate(
            $this->_root->Config->TokenUrl,
            $this->_root->Config->TokenUser,
            $this->_root->Config->TokenPassword,
            $this->_root->Config->TokenMethod
        );

        $this->_root->Config->TokenValue = $json[0];
        $this->_root->Config->TokenExpiry = $json[1];
        $this->_root->Config->TokenId = $json[2];
    }

    /**
     * Launch authentication. Return token in array
     *
     * @param string $url
     * @param string $user
     * @param string $password
     * @param string $method
     * @return array
     */
    private function curlAuthenticate($url, $user, $password, $method = "POST") : array
    {
        $curlHandler = curl_init();
        $config = [
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $url,
            CURLOPT_HEADER => 0,
            CURLOPT_HTTPHEADER => [
                "Authorization: Basic " .
                base64_encode($user . ":" . $password),
            ],
        ];

        curl_setopt_array($curlHandler, $config);

        if ($method === "POST") {
            curl_setopt($curlHandler, CURLOPT_POST, 1);
        }
        $response = curl_exec($curlHandler);

        curl_close($curlHandler);

        $json = json_decode($response, true);
        if (
            isset($json["access_token"]) &&
            isset($json["expires_in"]) &&
            isset($json["id_token"])
        ) {
            return [
                $json["access_token"],
                time() + intval($json["expires_in"]),
                $json["id_token"],
            ];
        }
        return [];
    }

    /**
     * Call arrayFieldsToString
     *
     * @param array $arr
     */
    private function arrayFieldsToString(&$arr): void
    {
        if (!empty($arr)) {
            foreach ($arr as &$value) {
                if (is_array($value)) {
                    $this->arrayFieldsToString($value);
                } else {
                    $value = strval($value);
                }
            }
        }
    }

    /**
     * Call jsonFieldToString
     *
     * @param array $json
     */
    private function jsonFieldToString(&$json): void
    {
        $jsDec = json_decode($json, true);
        $this->arrayFieldsToString($jsDec);
        $json = json_encode($jsDec, JSON_UNESCAPED_SLASHES);
    }

    /**
     * Filter datas empty before send to api
     *
     * @param array $array
     * @param callable $callback
     * @return array $array
     */
    private function filterDatas($array, callable $callback): array
    {
        if (!is_array($array)) {
            $array = json_decode($array, true);
        }

        foreach ($array as $key => $value) {
            if (is_array($value)) {
                $array[$key] = $this->filterDatas($value, $callback);
            } else {
                if ($callback($value)) {
                    unset($array[$key]);
                }
            }
        }
        return $this->removeArrayEmpty($array);
    }

    /**
     * remove array empty before send to api
     *
     * @param array $array
     * @return array $array
     */
    private function removeArrayEmpty($array): array
    {
        foreach ($array as $key => $value) {
            if (is_array($value) && empty($value)) {
                unset($array[$key]);
            }
        }
        return $array;
    }

    /**
     * get object filled by message exception
     *
     * @param object $exception
     * @return string json
     */
    public function getMsgException($exception)
    {
        return json_encode([
            "resultMessage" => $exception->getMessage(),
            "resultCode" => "2202",
        ]);
    }
}
