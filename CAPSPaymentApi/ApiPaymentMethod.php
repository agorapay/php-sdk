<?php

  namespace CAPSPaymentApi;

  /**
   * Class to management CAPSPaymentApi for ApiPaymentMethod
   */
  class ApiPaymentMethod extends Librairies\ApiBase
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
     * Call api /paymentMethod/removeAlias
     * Remove a given payment method alias id
     *
     * @param object $removeAliasPaymentMethodOptions Instance of class \CAPSPaymentApi\RemoveAliasPaymentMethodOptions
     * @return object Response data
     */
    public function removeAlias($removeAliasPaymentMethodOptions)
    {

      try {

        $endPoint = '/paymentMethod/removeAlias';
        return $this->filterObject($endPoint, $removeAliasPaymentMethodOptions);

      } catch(\Exception $exception) {
        return $this->getMsgException($exception);
      }
    }

    /**
     * Call api /paymentMethod/getAlias
     * Get a list of the available payment method aliases
     * according to the payer reference and eventually for a specific payment method
     *
     * @param object $getAliasPaymentMethodOptions Instance of class \CAPSPaymentApi\GetAliasPaymentMethodOptions
     * @return object Response data
     */
    public function getAlias($getAliasPaymentMethodOptions)
    {

      try {

        $endPoint = '/paymentMethod/getAlias';
        return $this->filterObject($endPoint, $getAliasPaymentMethodOptions);

      } catch(\Exception $exception) {
        return $this->getMsgException($exception);
      }
    }

    /**
     * Call api /paymentMethod/list
     * List payment methods and eventually aliases,
     * according to the transaction amount and the country of the payer.
     * This API is preferred to payin/paymentMethods if you are not intending to create any order
     *
     * @param object $listPaymentMethodOptions Instance of class \CAPSPaymentApi\ListPaymentMethodOptions
     * @return object Response data
     */
    public function list($listPaymentMethodOptions)
    {

      try {

        $endPoint = '/paymentMethod/list';
        return $this->filterObject($endPoint, $listPaymentMethodOptions);

      } catch(\Exception $exception) {
        return $this->getMsgException($exception);
      }
    }

    /**
     * Call api /paymentMethod/getIBAN
     * Get IBAN from a given payment method alias, as saved during an instant payment SCT
     *
     * @param object $getIBANPaymentMethodOptions Instance of class \CAPSPaymentApi\GetIBANPaymentMethodOptions
     * @return object Response data
     */
    public function getIBAN($getIBANPaymentMethodOptions)
    {
      try {
        $endPoint = '/paymentMethod/getIBAN';
        return $this->filterObject($endPoint, $getIBANPaymentMethodOptions);

      } catch(\Exception $exception) {
        return $this->getMsgException($exception);
      }
    }



  }
