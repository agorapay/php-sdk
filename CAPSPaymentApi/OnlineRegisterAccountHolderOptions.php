<?php

namespace CAPSPaymentApi;

/**
 * Description of OnlineRegisterAccountHolderOptions used for call api /accountHolder/onlineRegister
 */
class OnlineRegisterAccountHolderOptions
{
    /**
     * Holder name (required).
     * @var string $socialReason
     */
    public $socialReason;

    /**
     * The ISO country in 3 characters format (required).
     * @var string $country
     */
    public $country;

    /**
     * legalForm (required).
     * @var string $legalForm
     */
    public $legalForm;

    /**
     * registrationNumber. SIRET for France (required).
     * @var string $registrationNumber
     */
    public $registrationNumber;

    /**
     * masterAddress (required)
     * @var object $masterAddress Instance of \CAPSPaymentApi\RegisterAddress
     */
    public $masterAddress;

    /**
     * Current or last year turnover in account currency code unit (required).
     * @var string $turnover
     */
    public $turnover;

    /**
     * regulatedSociety (Y or N) (required).
     * @var string $regulatedSociety
     */
    public $regulatedSociety;

    /**
     * At least one person must be provided with CP role (required).
     * @var array $physicalPersons Instances of \CAPSPaymentApi\RegisterPerson
     */
    public $physicalPersons;

    /**
     * Account information (required).
     * @var object $account Instance of \CAPSPaymentApi\RegisterAccount
     */
    public $account;

    /**
     * Currency code in 3 characters ISO format (required).
     * @var string $currency
     */
    public $currency;

    /**
     * Account owner information
     * @var object $owner Instance of \CAPSPaymentApi\Owner
     */
    public $owner;

    /**
     * Commercial name.
     * @var string $companyName
     */
    public $companyName;

    /**
     * Commercial address
     * @var object $commercialAddress Instance of \CAPSPaymentApi\RegisterAddress
     */
    public $commercialAddress;

    /**
     * Constructor
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
        $companyName = "",
        $commercialAddress = ""
    ) {
        $this->socialReason       = $socialReason;
        $this->country            = $country;
        $this->legalForm          = $legalForm;
        $this->registrationNumber = $registrationNumber;
        $this->masterAddress      = $masterAddress;
        $this->turnover           = $turnover;
        $this->regulatedSociety   = $regulatedSociety;
        $this->physicalPersons    = $physicalPersons;
        $this->account            = $account;
        $this->currency           = $currency;
        $this->owner              = $owner;
        $this->companyName        = $companyName;
        $this->commercialAddress  = $commercialAddress;
    }
}
