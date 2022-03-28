<?php

namespace CAPSPaymentApi;

/**
 * Description of RegisterAccount class.
 * Account information for register function.
 *
 */

class RegisterAccount
{
    /**
     * @var string $country The ISO country code in 3 characters format (required)
     */
    public $country;

    /**
     * @var string $currency Currency code in 3 characters ISO format (required)
     */
    public $currency;

    /**
     * @var string $iban  International Bank Account Number (required)
     */
    public $iban;

    /**
     * @var string $floorLimit Floor limit in currency unit (required)
     */
    public $floorLimit;

    /**
     * Constructor
     * @param string $country
     * @param string $currency
     * @param string $iban
     * @param string $floorLimit
     * 
     */
    public function __construct($country, $currency, $iban, $floorLimit)
    {
        $this->country = $country;
        $this->currency = $currency;
        $this->iban = $iban;
        $this->floorLimit = $floorLimit;
    }
}
