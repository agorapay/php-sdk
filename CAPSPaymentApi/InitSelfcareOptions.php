<?php

namespace CAPSPaymentApi;

/**
 * Description of class InitSelfcareOptions. Used for call api selcare/init
 * Register Selfcare enrollment informations in request
 *
 */

class InitSelfcareOptions
{
    /**
     * @var string $firstName Seller first name (required)
     */
    public $firstName;

    /**
     * @var string $lastName Seller last name (required)
     */
    public $lastName;

    /**
     * @var string $email Email (required)
     */
    public $email;

    /**
     * @var string $phone Seller phone number (required)
     */
    public $phone;

    /**
     * @var string $socialReason Seller social reason (required)
     */
    public $socialReason;

    /**
     * @var string $accountFloorLimit Seller floor limit amount (required)
     * The value of the amount in decimal with max 2 digits after separator. Only digits and dot are authorized.
     */
    public $accountFloorLimit;

    /**
     * @var string $language (required)
     * The first two characters are used to identify the language code.
     * Must be in upper case.
     * Only french is supported at this time.
     */
    public $language;

    /**
     * Constructor
     * @param string $firstName (required)
     * @param string $lastName (required)
     * @param string $email (required)
     * @param string $phone (required)
     * @param string $socialReason (required)
     * @param string $accountFloorLimit (required)
     * @param string $language (required)
     */
    public function __construct(
        $firstName,
        $lastName,
        $email,
        $phone,
        $socialReason,
        $accountFloorLimit,
        $language
    ) {
        $this->firstName          = $firstName;
        $this->lastName           = $lastName;
        $this->email              = $email;
        $this->phone              = $phone;
        $this->socialReason       = $socialReason;
        $this->accountFloorLimit  = $accountFloorLimit;
        $this->language           = $language;
    }
}
