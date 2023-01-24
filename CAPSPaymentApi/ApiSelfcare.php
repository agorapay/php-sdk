<?php

namespace CAPSPaymentApi;

/**
 * Class to management CAPSPaymentApi for ApiSelfcare
 */
class ApiSelfcare extends Librairies\ApiBase
{
    public $_root;

    public $tokenValue;

    public function __construct($root)
    {
        $this->_root = $root;
    }

    /**
     * Call api /selfcare/init
     * Init Selfcare seller enrollment by creating a new request, identified by requestId value
     *
     * @param object $createTransfersOptions Instance of class \CAPSPaymentApi\CreateTransfersOptions
     * @return object Response data
     */
    public function init($initSelfcareOptions)
    {
        try {
            $endPoint = "/selfcare/init";
            return $this->filterObject($endPoint, $initSelfcareOptions);
        } catch (\Exception $exception) {
            return $this->getMsgException($exception);
        }
    }
}
