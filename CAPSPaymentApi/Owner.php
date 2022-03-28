<?php

namespace CAPSPaymentApi;

/**
 * Description of owner class
 * Account owner.
 *
 */

class Owner
{
    /**
     * Mandatory if socialReason not present
     * @var string $firstName
     */
    public $firstName;

    /**
     * andatory if socialReson not present
     * @var string $lastName
     */
    public $lastName;

    /**
     * Mandatory if firstName or lastName not present
     * @var string $socialReason
     */
    public $socialReason;

    /**
     * Number and road name (required)
     * @var string $address
     */
    public $address;

    /**
     * city (required)
     * @var string $city
     */
    public $city;

    /**
     * postalCode (required)
     * @var string $postalCode
     */
    public $postalCode;

    /**
     * The ISO country code in 3 characters format(required)
     * @var string $country
     */
    public $country;

    /**
     * M or F. Mandatory if socialReason not present
     * @var string $gender
     */
    public $gender;

    /**
     * Constructor
     * @param string $firstName
     * @param string $lastName
     * @param string $socialReason
     * @param string $address
     * @param string $city
     * @param string $postalCode
     * @param string $country
     * @param string $gender
     */
    public function __construct(
        $address,
        $city,
        $postalCode,
        $country,
        $gender = "",
        $firstName = "",
        $lastName = "",
        $socialReason = ""
        
    ) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->socialReason = $socialReason;
        $this->address = $address;
        $this->city = $city;
        $this->postalCode = $postalCode;
        $this->country = $country;
        $this->gender = $gender;
    }
}
