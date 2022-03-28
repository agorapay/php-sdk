<?php

namespace CAPSPaymentApi;

/**
 * Description of RegisterAccountHolderOptions class used for call api /accountHolder/register.
 *
 */
class RegisterAccountHolderOptions
{
    /**
     * Holder name (required).
     * @var string $socialReason Holder name (required)
     */
    public $socialReason;

    /**
     * Commercial name.
     * @var string $compagnyName Commercial name
     */
    public $compagnyName;

    /**
     * The ISO country in 3 characters format (required).
     * @var string $country The ISO country in 3 characters format (required)
     */
    public $country;

    /**
     * legalForm (required).
     * @var string $legalForm (required)
     */
    public $legalForm;

    /**
     * registrationNumber. SIRET for France (required).
     * @var string $registrationNumber SIRET for France (required)
     */
    public $registrationNumber;

    /**
     * masterAddress (required)
     * @var object $masterAddress contain instance of class \CAPSPaymentApi\RegisterAddress().
     */
    public $masterAddress;

    /**
     * billingAddress
     * @var object $billingAddress contains instance of class  \CAPSPaymentApi\RegisterAddress().
     */
    public $billingAddress;

    /**
     * Current or last year turnover in account currency code unit (required).
     * @var string $turnover Current or last year turnover in account currency code unit (required)
     */
    public $turnover;

    /**
     * regulatedSociety (Y or N) (required).
     * @var string $regulatedSociety (required)
     */
    public $regulatedSociety;

    /**
     * At least one person must be provided with CP role (required).
     * @var array $physicalPersons contain instances of class \CAPSPaymentApi\RegisterPerson().
     */
    public $physicalPersons;

    /**
     * Account information for register function (required).
     * @var object $account contain instance of class \CAPSPaymentApi\RegisterAccount().
     */
    public $account;

    /**
     * Currency code in 3 characters ISO format (required).
     * @var string $currency
     */
    public $currency;

    /**
     * Account owner information
     * @var object $owner contains instance of class \CAPSPaymentApi\Owner()
     */
    public $owner;

    /**
     * Constructor
     * @param string $socialReason (required)
     * @param string $country (required)
     * @param string $legalForm (required)
     * @param string $registrationNumber (required)
     * @param object $masterAddress (required)
     * @param string $turnover (required)
     * @param string $regulatedSociety (required)
     * @param array  $physicalPersons (required)
     * @param object $account (required)
     * @param string $compagnyName
     * @param object $billingAddress
     * @param object $owner (required)
     */
    public function __construct(
        $socialReason,
        $country,
        $legalForm,
        $registrationNumber,
        $masterAddress,
        $turnover,
        $regulatedSociety,
        $physicalPersons,
        $account,
        $currency,
        $owner,
        $compagnyName = "",
        $billingAddress = ""
    ) {
        $this->socialReason = $socialReason;
        $this->compagnyName = $compagnyName;
        $this->country = $country;
        $this->legalForm = $legalForm;
        $this->registrationNumber = $registrationNumber;
        $this->masterAddress = $masterAddress;
        $this->billingAddress = $billingAddress;
        $this->turnover = $turnover;
        $this->regulatedSociety = $regulatedSociety;
        $this->physicalPersons = $physicalPersons;
        $this->account = $account;
        $this->currency = $currency;
        $this->owner = $owner;
    }
}
