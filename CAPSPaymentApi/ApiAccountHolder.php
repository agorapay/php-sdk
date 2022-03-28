<?php

namespace CAPSPaymentApi;

/**
 * Class to management CAPSPaymentApi for ApiAccountHolder
 */
class ApiAccountHolder extends Librairies\ApiBase
{
    /**
     * Main object.
     * @var object $_root Main object
     */
    public $_root;

    /**
     * $tokenValue
     * @var string  $tokenValue
     */
    public $tokenValue;

    public function __construct($root)
    {
        $this->_root = $root;
    }

    /**
     * Call api /accountHolder/register
     *  Start registering new account holder
     *
     * @param object $registerAccountHolderOptions Instance of class \CAPSPaymentApi\RegisterAccountHolderOptions
     * @return object Response data
     */
    public function register($registerAccountHolderOptions)
    {
        try {
            $endPoint = "/accountHolder/register";
            return $this->filterObject($endPoint, $registerAccountHolderOptions);
        } catch (\Exception $exception) {
            return $this->getMsgException($exception);
        }
    }

    /**
     * Call api /accountHolder/update
     * Start updating  account holder
     *
     * @param object $updateAccountHolderOptions Instance of class \CAPSPaymentApi\UpdateAccountHolderOptions
     * @return object Response data
     */
    public function update($updateAccountHolderOptions)
    {
        try {
            $endPoint = "/accountHolder/update";
            return $this->filterObject($endPoint, $updateAccountHolderOptions);
        } catch (\Exception $exception) {
            return $this->getMsgException($exception);
        }
    }

    /**
     * Call api /accountHolder/uploadDocument
     * Start uploading document for account holder
     *
     * @param object $uploadDocumentAccountHolderOptions Instance of class \CAPSPaymentApi\UploadDocumentAccountHolderOptions
     * @return object Response data
     */
    public function uploadDocument($uploadDocumentAccountHolderOptions)
    {
        try {
            $endPoint = "/accountHolder/uploadDocument";
            return $this->filterObject($endPoint, $uploadDocumentAccountHolderOptions, 'POST', true);
        } catch (\Exception $exception) {
            return $this->getMsgException($exception);
        }
    }

    /**
     * Call api /accountHolder/registrationDetails
     * Start registering new account holder
     *
     * @param object $registrationDetailsAccountHolderOptions Instance of class \CAPSPaymentApi\RegistrationDetailsAccountHolderOptions
     * @return object Response data
     */
    public function registrationDetails($registrationDetailsAccountHolderOptions)
    {
        try {
            $endPoint = "/accountHolder/registrationDetails";
            $registrationDetails = $this->filterObject($endPoint, $registrationDetailsAccountHolderOptions, "GET");
            $urlParameters = http_build_query($registrationDetails);
            return $this->callApi($endPoint, $urlParameters, "GET");
        } catch (\Exception $exception) {
            return $this->getMsgException($exception);
        }
    }

    /**
     * Call api /accountHolder/unregister
     * Unregister pending account holder registration
     *
     * @param object $unregisterAccountHolderOptions Instance of class \CAPSPaymentApi\UnregisterAccountHolderOptions
     * @return object Response data
     */
    public function unregister($unregisterAccountHolderOptions)
    {
        try {
            $endPoint = "/accountHolder/unregister";
            return $this->filterObject($endPoint, $unregisterAccountHolderOptions);
        } catch (\Exception $exception) {
            return $this->getMsgException($exception);
        }
    }
}
