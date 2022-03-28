<?php

namespace CAPSPaymentApi;

/**
 * Description of UpdateAccountHolderOptions class used for call api /accountHolder/update.
 *
 */
class UpdateAccountHolderOptions
{
    /**
     * Account number of the marketplace
     * @var string $accountNumber Account number of the marketplace
     */
    public $accountNumber;

    /**
     * Holder name.
     * @var string $socialReason Holder name
     */
    public $socialReason;

    /**
     * Commercial name.
     * @var string $companyName Commercial name
     */
    public $companyName;

    /**
     * The ISO country code in 3 characters format.
     * @var string $country The ISO country code in 3 characters format
     */
    public $country;

    /**
     * registrationNumber. SIRET for France.
     * @var string $registrationNumber SIRET for France
     */
    public $registrationNumber;

    /**
     * masterAddress (required)
     * @var object $masterAddress contain instance of class \CAPSPaymentApi\RegisterAddress().
     */
    public $masterAddress;

    /**
     * billingAddress
     * @var object $billingAddress contain instance of class \CAPSPaymentApi\RegisterAddress().
     */
    public $billingAddress;

    /**
     * Current or last year turnover in account currency code unit.
     * @var string $turnover Current or last year turnover in account currency code unit
     */
    public $turnover;

    /**
     * regulatedSociety (Y or N) .
     * @var string $regulatedSociety
     */
    public $regulatedSociety;

    /**
     * At least one person must be provided with CP role.
     * @var array $physicalPersons contain instance of class \CAPSPaymentApi\RegisterPersonUpdate().
     */
    public $physicalPersons;

    /**
     * Account information for register function (required).
     * @var object $account contain instance of class \CAPSPaymentApi\RegisterAccount().
     */
    public $account;

    /**
     * Currency in 3 characters ISO format.
     * @var string $currency Currency in 3 characters ISO format
     */
    public $currency;

    /**
     * ID to identify processing request (required)
     * @var string $requestId ID to identify processing request (required)
     */
    public $requestId;

    /**
     * Account owner information
     * @var object $owner contains instance of class \CAPSPaymentApi\Owner()
     */
    public $owner;

    /**
     * Constructor
     * @param object $account (required)
     * @param string $requestId (required)
     * @param string $socialReason
     * @param string $compagnyName
     * @param string $country
     * @param string $registrationNumber
     * @param object $masterAddress
     * @param object $billingAddress
     * @param string $turnover
     * @param string $regulatedSociety
     * @param object $physicalPersons
     * @param string $currency
     * @param object $owner
     */
    public function __construct(
        $account,
        $requestId,
        $socialReason = "",
        $compagnyName = "",
        $country = "",
        $registrationNumber = "",
        $masterAddress = "",
        $billingAddress = "",
        $turnover = "",
        $regulatedSociety = "",
        $physicalPersons = "",
        $currency = "",
        $owner = ""
    ) {
        $this->socialReason = $socialReason;
        $this->compagnyName = $compagnyName;
        $this->country = $country;
        $this->registrationNumber = $registrationNumber;
        $this->masterAddress = $masterAddress;
        $this->billingAddress = $billingAddress;
        $this->turnover = $turnover;
        $this->regulatedSociety = $regulatedSociety;
        $this->physicalPersons = $physicalPersons;
        $this->account = $account;
        $this->currency = $currency;
        $this->requestId = $requestId;
        $this->owner = $owner;
    }
}
