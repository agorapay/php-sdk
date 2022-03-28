<?php

namespace CAPSPaymentApi;

/**
 * Class to management CAPSPaymentApi for ApiPayouts
 */
class ApiPayouts extends Librairies\ApiBase
{
    public $_root;

    public $tokenValue;

    public function __construct($root)
    {
        $this->_root = $root;
    }

    /**
     * Call api /payout/create
     * Submit a payout for a specific account.
     *
     * @param object $createPayoutsOptions Instance of class  \CAPSPaymentApi\CreatePayoutsOptions
     * @return object Response data
     */
    public function create($createPayoutsOptions)
    {
        try {
            $endPoint = "/payout/create";
            return $this->filterObject($endPoint, $createPayoutsOptions);
        } catch (\Exception $exception) {
            return $this->getMsgException($exception);
        }
    }
}
