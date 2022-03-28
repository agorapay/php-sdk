<?php

namespace CAPSPaymentApi;

/**
 * Class to management CAPSPaymentApi for ApiTransferts
 */
class ApiTransferts extends Librairies\ApiBase
{
    public $_root;

    public $tokenValue;

    public function __construct($root)
    {
        $this->_root = $root;
    }

    /**
     * Call api /transfer/create
     * Ask for a transfer between two accounts
     * submit a transfer from one account (accountNumber) to another (accountCtpNumber)
     *
     * @param object $createTransfersOptions Instance of class \CAPSPaymentApi\CreateTransfersOptions
     * @return object Response data
     */
    public function create($createTransfersOptions)
    {
        try {
            $endPoint = "/transfer/create";
            return $this->filterObject($endPoint, $createTransfersOptions);
        } catch (\Exception $exception) {
            return $this->getMsgException($exception);
        }
    }
}
