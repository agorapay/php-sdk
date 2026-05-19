<?php

namespace CAPSPaymentApi;

/**
 * Options for POST /vIban/delete — schema vIbanDeleteRequest (OpenAPI 12.2.0).
 * Required: virtualIBAN
 */
class VIbanDeleteOptions
{
    /**
     * Virtual IBAN to be deleted (required). Property name must serialize as virtualIBAN.
     * @var string $virtualIBAN
     */
    public $virtualIBAN;

    /**
     * @param string $virtualIBAN
     */
    public function __construct($virtualIBAN = "")
    {
        $this->virtualIBAN = $virtualIBAN;
    }
}
