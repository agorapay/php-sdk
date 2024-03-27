<?php

namespace CAPSPaymentApi;

class Details
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
     * @var string $iban
     */
    public $iban;

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
     * minLength: 8
     * maxLength: 11
     * pattern: ^[A-Z]{6,6}[A-Z2-9][A-NP-Z0-9]([A-Z0-9]{3,3})$
     * Business Identifier Code allocated to a financial institution by the ISO 9362 Registration Authority,
     * composed by
      * 4 alphanumerics for the business party prefix,
      * 2 alphabetics for the country code as defined in ISO 3166-1,
      * 2 alphanumerics for the business party suffix and
      * 3 optional alphanumerics for the branch designation
     */
    public $bic;



    /**
     * Constructor
     * @param string firstName
     * @param string lastName
     * @param string address
     * @param string city
     * @param string postalCode
     * @param string country
     * @param string iban
     * @param string email
     * @param string state
     * @param string gender
     * @param string phoneNumber
     * @param string sequence
     * @param string reference
     * @param string socialReason
     * @param string address2
     * @param string bic
     */
    public function __construct(
        $firstName = '',
        $lastName = '',
        $address = '',
        $city = '',
        $postalCode = '',
        $country = '',
        $iban = '',
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
        $this->iban           = $iban;
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
