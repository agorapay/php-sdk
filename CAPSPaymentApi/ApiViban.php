<?php

namespace CAPSPaymentApi;

/**
 * Virtual IBAN API (vIban) — API 12.2.0+
 */
class ApiViban extends Librairies\ApiBase
{
    /**
     * @var object $_root
     */
    public $_root;

    /**
     * @var string $tokenValue
     */
    public $tokenValue;

    public function __construct($root)
    {
        $this->_root = $root;
    }

    /**
     * POST /vIban/create
     *
     * @param object $vIbanCreateOptions Instance of \CAPSPaymentApi\VIbanCreateOptions
     * @return object Response data
     */
    public function create($vIbanCreateOptions)
    {
        try {
            return $this->filterObject('/vIban/create', $vIbanCreateOptions);
        } catch (\Exception $exception) {
            return $this->getMsgException($exception);
        }
    }

    /**
     * GET /vIban/list (OpenAPI 12.2.0: GET with criteria as query parameters).
     * Method name vibanList because "list" is a reserved keyword in PHP.
     *
     * @param object $vIbanListOptions Instance of \CAPSPaymentApi\VIbanListOptions
     * @return object Response data
     */
    public function vibanList($vIbanListOptions)
    {
        try {
            $endPoint = '/vIban/list';
            $queryArray = $this->filterObject($endPoint, $vIbanListOptions, 'GET');
            $urlParameters = http_build_query($queryArray);
            return $this->callApi($endPoint, $urlParameters, 'GET');
        } catch (\Exception $exception) {
            return $this->getMsgException($exception);
        }
    }

    /**
     * POST /vIban/delete
     *
     * @param object $vIbanDeleteOptions Instance of \CAPSPaymentApi\VIbanDeleteOptions
     * @return object Response data
     */
    public function deleteViban($vIbanDeleteOptions)
    {
        try {
            return $this->filterObject('/vIban/delete', $vIbanDeleteOptions);
        } catch (\Exception $exception) {
            return $this->getMsgException($exception);
        }
    }
}
