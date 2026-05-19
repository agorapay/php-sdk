<?php

namespace CAPSPaymentApi;

/**
 * Options for POST /vIban/create — schema vIbanCreateRequest (OpenAPI 12.2.0).
 *
 * @see https://... apiin 12.2.0 components/schemas/vIbanCreateRequest
 */
class VIbanCreateOptions
{
    /**
     * Account number for which a virtual IBAN is requested (required).
     * @var string $accountNumber
     */
    public $accountNumber;

    /**
     * Your client's reference (payerBasic: reference required if payer is sent).
     * @var object|null $payer Instance of \CAPSPaymentApi\PayerSimple
     */
    public $payer;

    /**
     * @param string $accountNumber
     * @param object|null $payer \CAPSPaymentApi\PayerSimple or null
     */
    public function __construct($accountNumber = "", $payer = null)
    {
        $this->accountNumber = $accountNumber;
        $this->payer         = $payer;
    }
}
