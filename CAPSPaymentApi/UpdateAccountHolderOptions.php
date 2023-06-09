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
     * masterAddress (required)
     * @var object $masterAddress contain instance of class \CAPSPaymentApi\RegisterAddress().
     */
    public $masterAddress;

    /**
     * commercialAddress
     * @var object $commercialAddress contain instance of class \CAPSPaymentApi\RegisterAddress().
     */
    public $commercialAddress;

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
     * @param string $companyName
     * @param string $country
     * @param object $masterAddress
     * @param object $commercialAddress
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
        $companyName = "",
        $country = "",
        $masterAddress = "",
        $commercialAddress = "",
        $turnover = "",
        $regulatedSociety = "",
        $physicalPersons = "",
        $currency = "",
        $owner = ""
    ) {
        $this->socialReason       = $socialReason;
        $this->companyName        = $companyName;
        $this->country            = $country;
        $this->masterAddress      = $masterAddress;
        $this->commercialAddress  = $commercialAddress;
        $this->turnover           = $turnover;
        $this->regulatedSociety   = $regulatedSociety;
        $this->physicalPersons    = $physicalPersons;
        $this->account            = $account;
        $this->currency           = $currency;
        $this->requestId          = $requestId;
        $this->owner              = $owner;
    }
}
