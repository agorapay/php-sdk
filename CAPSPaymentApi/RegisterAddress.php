<?php

namespace CAPSPaymentApi;

/**
 * Description of RegistrerAddress class.
 * Information to register address.
 */

class RegisterAddress
{
    /**
     * @var string $address Number and road name (required)
     */
    public $address;

    /**
     * @var string $city  (required)
     */
    public $city;

    /**
     * @var string $postalCode (required)
     */
    public $postalCode;

    /**
     * @var string $country The ISO country code in 3 characters form (required)
     */
    public $country;
    /**
     * Constructor
     * @param string $address
     * @param string $city
     * @param string $postalCode
     * @param string $country
     */
    public function __construct($address, $city, $postalCode, $country)
    {
        $this->address = $address;
        $this->city = $city;
        $this->postalCode = $postalCode;
        $this->country = $country;
    }
}
