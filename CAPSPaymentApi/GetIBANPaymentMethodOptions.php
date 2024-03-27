<?php

namespace CAPSPaymentApi;

/**
 * Description of class GetIBANPaymentMethodOptions. Used for call api /paymentMethod.getIBAN
 * IBAN Payment method request
 */
class GetIBANPaymentMethodOptions
{
    /**
     * paymentMethodAlias
     * @var string paymentMethodAlias (required)
     * minLength: 1
     * maxLength: 50
     * pattern: ^[a-zA-Z0-9]+$
     * Alias identifying a previously registered payment method.
     */
    public $paymentMethodAlias;



    /**
     * Constructor
     * @paymentMethodAlias string $paymentMethodAlias (required)
     */
    public function __construct(
        $paymentMethodAlias
    ) {
        $this->paymentMethodAlias  = $paymentMethodAlias;
    }
}
