<?php

namespace CAPSPaymentApi;

/**
 * Class used for call api paymentAccount/setIBAN (Start the change IBAN process.).
 *
 */

class SetIbanPaymentAccountOptions
{
    /**
     * A string representing the account number.
     * @var string accountNumber A string representing the account number
     */
    public $accountNumber;

    /**
     * The first name of the IBAN account's owner.
     * @var string firstName The first name of the IBAN account's owner
     */
    public $firstName;

    /**
     * The last name of the IBAN account's owner.
     * @var string lastName The last name of the IBAN account's owner
     */
    public $lastName;

    /**
     * The name of the IBAN account's owner if company.
     * @var string socialReason The name of the IBAN account's owner if company
     */
    public $socialReason;

    /**
     * The road name and number of the IBAN account's owner (required).
     * @var string address The road name and number of the IBAN account's owner (required)
     */
    public $address;

    /**
     * The city of the IBAN account's owner (required).
     * @var string city  The city of the IBAN account's owner (required)
     */
    public $city;

    /**
     * The postal code of the IBAN account's owner (required).
     * @var string postalCode The postal code of the IBAN account's owner (required)
     */
    public $postalCode;

    /**
     * The country (in 3 letter format) of the IBAN account's owner (required).
     * @var string country The country code (in 3 letter format) of the IBAN account's owner (required)
     */
    public $country;

    /**
     * Type of the file contening the proof document [JPEG, JPG, PNG, PDF] (required) .
     * @var string fileType Type of the file contening the proof document [JPEG, JPG, PNG, PDF] (required)
     */
    public $fileType;

    /**
     * The content of the file contening the proof in base64 encoding format.
     * @var string fileContent The content of the file contening the proof in base64 encoding format
     */
    public $fileContent;

    /**
     * The new IBAN (required).
     * @var string iban  The new IBAN (required)
     */
    public $iban;

    /**
     * Currency code in 3 characters ISO format (required).
     * @var string currency Currency code in 3 characters ISO format (required)
     */
    public $currency;

    /**
     * Current payment method alias to update. If not provided a new payment method is added.
     * @var string paymentMethodAlias Current payment method alias to update. If not provided a new payment method is added
     */
    public $paymentMethodAlias;

    /**
     * Date of the activation operation. The format must be YYYYMMDD.
     * @var string activationDate Upper or equal to the date of the day
     */
    public $activationDate;

    /**
     * Constructor
     * @param string $address (required)
     * @param string $city (required)
     * @param string $postalCode (required)
     * @param string $country (required)
     * @param string $fileType (required)
     * @param string $iban (required)
     * @param string $currency (required)
     * @param string $accountNumber
     * @param string $firstName
     * @param string $lastName
     * @param string $socialReason
     * @param string $fileContent
     * @param string $paymentMethodAlias
     * @param string $activationDate
     */
    public function __construct(
        $address,
        $city,
        $postalCode,
        $country,
        $fileType,
        $iban,
        $currency,
        $accountNumber = "",
        $firstName = "",
        $lastName = "",
        $socialReason = "",
        $fileContent = "",
        $paymentMethodAlias = "",
        $activationDate = ""
    ) {
        $this->accountNumber = $accountNumber;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->socialReason = $socialReason;
        $this->address = $address;
        $this->city = $city;
        $this->postalCode = $postalCode;
        $this->country = $country;
        $this->fileType = $fileType;
        $this->fileContent = $fileContent;
        $this->iban = $iban;
        $this->currency = $currency;
        $this->paymentMethodAlias = $paymentMethodAlias;
        $this->activationDate = $activationDate;
    }
}
