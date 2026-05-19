<?php

namespace CAPSPaymentApi;

/**
 * Options for GET /vIban/list — schema vIbanListRequest (OpenAPI 12.2.0).
 * All properties optional filters; at least one is typically used.
 */
class VIbanListOptions
{
    /**
     * Account number linked to the virtual IBAN to be selected.
     * @var string $accountNumber
     */
    public $accountNumber;

    /**
     * Reference of your payer to be selected (payerBasic).
     * @var object|null $payer Instance of \CAPSPaymentApi\PayerSimple
     */
    public $payer;

    /**
     * Virtual IBAN to be selected.
     * @var string $virtualIBAN JSON key must match schema: virtualIBAN
     */
    public $virtualIBAN;

    /**
     * @param string $accountNumber
     * @param object|null $payer
     * @param string $virtualIBAN
     */
    public function __construct($accountNumber = "", $payer = null, $virtualIBAN = "")
    {
        $this->accountNumber = $accountNumber;
        $this->payer         = $payer;
        $this->virtualIBAN   = $virtualIBAN;
    }
}
