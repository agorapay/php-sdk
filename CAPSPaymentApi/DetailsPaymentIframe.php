<?php

namespace CAPSPaymentApi;

/**
 * Payment details for payin/paymentIframe and payin/paymentIframeSecure.
 * This class does NOT include "iban" - the details object for iframe APIs no longer accepts iban.
 * Use this class instead of Details for paymentIframe and paymentIframeSecure requests.
 */
class DetailsPaymentIframe
{
    /**
     * @var string $firstName
     */
    public $firstName;

    /**
     * @var string $lastName
     */
    public $lastName;

    /**
     * @var string $address Address Road name and number
     */
    public $address;

    /**
     * @var string $city
     */
    public $city;

    /**
     * @var string $postalCode
     */
    public $postalCode;

    /**
     * @var string $country Country in 3 letters ISO format
     */
    public $country;

    /**
     * @var string $email
     */
    public $email;

    /**
     * @var string $state
     */
    public $state;

    /**
     * @var string $gender
     */
    public $gender;

    /**
     * @var string $phoneNumber
     */
    public $phoneNumber;

    /**
     * Sequence. For payment method with mandate, the sequence is :
     * FRST for first use of recurrent mandate
     * RCUR for use of recurrent mandate
     * LAST for last use of recurrent mandate
     * OOFF for a mandate used only one time
     * @var string $sequence
     */
    public $sequence;

    /**
     * Reference. For payment with mandate, this field is the reference to the mandate for sequence RCUR or LAST.
     * For payment with card, this field is the transactionId of the first authorization transaction
     * @var string $reference
     */
    public $reference;

    /**
     * Social reason
     * @var string $socialReason
     */
    public $socialReason;

    /**
     * Address2
     * @var string $address2
     */
    public $address2;

    /**
     * bic
     * @var string $bic
     */
    public $bic;

    /**
     * Constructor
     */
    public function __construct(
        $firstName = '',
        $lastName = '',
        $address = '',
        $city = '',
        $postalCode = '',
        $country = '',
        $email = '',
        $state = '',
        $gender = '',
        $phoneNumber = '',
        $sequence = '',
        $reference = '',
        $socialReason = '',
        $address2 = '',
        $bic = ''
    ) {
        $this->firstName      = $firstName;
        $this->lastName       = $lastName;
        $this->address        = $address;
        $this->city           = $city;
        $this->postalCode     = $postalCode;
        $this->country        = $country;
        $this->email          = $email;
        $this->state          = $state;
        $this->gender         = $gender;
        $this->phoneNumber    = $phoneNumber;
        $this->sequence       = $sequence;
        $this->reference      = $reference;
        $this->socialReason   = $socialReason;
        $this->address2       = $address2;
        $this->bic            = $bic;
    }
}
