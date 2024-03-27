<?php

namespace CAPSPaymentApi;

/**
 * Description of class GetAliasPaymentMethodOptions. Used for call api /paymentMethod.getAlias
 * Get a list of the available payment method aliases
 * according to the payer reference and eventually for a specific payment method
 *
 */
class GetAliasPaymentMethodOptions
{
    /**
     * @var object payer Instance of class \CAPSPaymentApi\Payer (required)
     * Payer's details
     */
    public $payer;

    /**
     * @var object $transPaymentMethod Instance of class \CAPSPaymentApi\TransPaymentMethod
     * Payment method information
     */
    public $transPaymentMethod;



    /**
     * Constructor
     * @param object $payer (required)
     * @param object $transPaymentMethod
     */
    public function __construct(
        $payer,
        $transPaymentMethod = ''
    ) {
        $this->payer              = $payer;
        $this->transPaymentMethod = $transPaymentMethod;
    }
}
