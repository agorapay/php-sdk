<?php

namespace CAPSPaymentApi;

/**
 * Class to management CAPSPaymentApi for ApiPaymentAccounts
 */
class ApiPaymentAccounts extends Librairies\ApiBase
{
    public $_root;

    public $tokenValue;

    public function __construct($root)
    {
        $this->_root = $root;
    }

    /**
     * Call api /paymentAccount/setFloorLimit
     *
     * @param object $setFloorLimitPaymentAccountOptions instance of \CAPSPaymentApi\SetFloorLimitPaymentAccountOptions
     * @return object Response data
     */
    public function setFloorLimit($setFloorLimitPaymentAccountOptions)
    {
        try {
            $endPoint = "/paymentAccount/setFloorLimit";
            return $this->filterObject($endPoint, $setFloorLimitPaymentAccountOptions);
        } catch (\Exception $exception) {
            return $this->getMsgException($exception);
        }
    }

    /**
     * Call api /paymentAccount/setIBAN
     *
     * @param object $setIbanPaymentAccountOptions instance of\CAPSPaymentApi\SetIbanPaymentAccountOptions
     * @return object Response data
     */
    public function setIBAN($setIbanPaymentAccountOptions)
    {
        try {
            $endPoint = "/paymentAccount/setIBAN";
            return $this->filterObject($endPoint, $setIbanPaymentAccountOptions, 'POST', true);
        } catch (\Exception $exception) {
            return $this->getMsgException($exception);
        }
    }

    /**
     * Call api /paymentAccount/List
     * Get list account
     *
     * @param object $listPaymentAccountOptions instance of \CAPSPaymentApi\ListPaymentAccountOptions
     * @return object Response data
     */
    public function List($listPaymentAccountOptions)
    {
        try {
            $endPoint = "/paymentAccount/list";
            return $this->filterObject($endPoint, $listPaymentAccountOptions);
        } catch (\Exception $exception) {
            return $this->getMsgException($exception);
        }
    }

    /**
     * Call api /paymentAccount/credit
     * Credit an account
     *
     * @param object $creditPaymentAccountOptions instance of \CAPSPaymentApi\CreditPaymentAccountOptions
     * @return object Response data
     */
    public function credit($creditPaymentAccountOptions)
    {
        try {
            $endPoint = "/paymentAccount/credit";
            return $this->filterObject($endPoint, $creditPaymentAccountOptions);
        } catch (\Exception $exception) {
            return $this->getMsgException($exception);
        }
    }

    /**
     * Call api /paymentAccount
     * 
     * Get account details
     *
     * @param object $paymentAccountOptions Instance of class \CAPSPaymentApi\PaymentAccountOptions
     * @return object Response data
     */
    public function paymentAccount($paymentAccountOptions)
    {
        try {
            $endPoint = "/paymentAccount";
            $paymentAccount = $this->filterObject($endPoint, $paymentAccountOptions, "GET");
            $urlParameters = http_build_query($paymentAccount);
            return $this->callApi($endPoint, $urlParameters, "GET");
        } catch (\Exception $exception) {
            return $this->getMsgException($exception);
        }
    }

    /**
     * Call api /paymentAccount/payoutAuto
     * Schedule a payout
     *
     * @param object $payoutAutoPaymentAccountOptions Instance of class \CAPSPaymentApi\PayoutAutoPaymentAccountOptions
     * @return object Response data
     */
    public function payoutAuto($payoutAutoPaymentAccountOptions)
    {
        try {
            $endPoint = "/paymentAccount/payoutAuto";
            return $this->filterObject($endPoint, $payoutAutoPaymentAccountOptions);
        } catch (\Exception $exception) {
            return $this->getMsgException($exception);
        }
    }

    /**
     * Call api /paymentAccount/disableIBAN
     * Start disable IBAN process
     *
     * @param object $disableIbanPaymentAccountOptions Instance of class \CAPSPaymentApi\DisableIbanPaymentAccountOptions
     * @return object Response data
     */
    public function disableIBAN($disableIbanPaymentAccountOptions)
    {
        try {
            $endPoint = "/paymentAccount/disableIBAN";
            return $this->filterObject($endPoint, $disableIbanPaymentAccountOptions);
        } catch (\Exception $exception) {
            return $this->getMsgException($exception);
        }
    }
}
