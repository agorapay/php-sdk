<?php

namespace CAPSPaymentApi;

/**
 * Description of class RemoveAliasPaymentMethodOptions. Used for call api /paymentMethod.removeAlias
 * Remove payment method alias request
 *
 */
class RemoveAliasPaymentMethodOptions
{
    /**
     * @var object payer Instance of class \CAPSPaymentApi\Payer (required) Payer's details
     */
    public $payer;

    /**
     * @var object $transPaymentMethod Instance of class \CAPSPaymentApi\TransPaymentMethod (required) Payment method information
     */
    public $transPaymentMethod;

    /**
     * @var object $alias Instance of class \CAPSPaymentApi\Alias (required) Identifier for the alias
     */
    public $alias;



    /**
     * Constructor
     * @param object $payer (required)
     * @param object $transPaymentMethod (required)
     * @param object $alias (required)
     */
    public function __construct(
        $payer,
        $transPaymentMethod,
        $alias
    ) {
        $this->payer              = $payer;
        $this->transPaymentMethod = $transPaymentMethod;
        $this->alias              = $alias;
    }
}
