<?php

namespace CAPSPaymentApi;

/**
 * Options for POST /accountHolder/onlineRegister — schema accountHolderOnlineRegisterRequest (OpenAPI 12.2.0).
 *
 * Required by the API (set all before call): productCode, externalReference, NAFCode, VATCode, socialReason,
 * currency, country, legalForm, registrationNumber, masterAddress, turnover, regulatedSociety,
 * physicalPersons, account, owner, introducerRiskLevel, usPerson.
 * Optional: companyName, commercialAddress, sellerReference, introducerRiskScore, taxAddress, channel, …
 */
class OnlineRegisterAccountHolderOptions
{
    /** @var string $productCode */
    public $productCode;

    /** @var string $externalReference */
    public $externalReference;

    /** @var string $NAFCode */
    public $NAFCode;

    /** @var string $VATCode */
    public $VATCode;

    /** @var string $sellerReference */
    public $sellerReference;

    /**
     * Holder name (required).
     * @var string $socialReason
     */
    public $socialReason;

    /**
     * The ISO country in 2 characters format (required in 12.2.0 — countryCode2).
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
     * Account owner information (required).
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
     * Vigilance level (required) — digits, 1–4 chars.
     * @var string $introducerRiskLevel
     */
    public $introducerRiskLevel;

    /**
     * US person for legal entity (required) — Y or N.
     * @var string $usPerson
     */
    public $usPerson;

    /**
     * Scoring (optional) — schema field introducerRiskScore (OpenAPI 12.2.0).
     * @var string $introducerRiskScore
     */
    public $introducerRiskScore;

    /**
     * @var object|null $taxAddress Set if required by your contract.
     */
    public $taxAddress;

    /**
     * @var string $channel e.g. EPI
     */
    public $channel;

    /**
     * Constructor — optional parameters default to empty; set required API fields via constructor or properties.
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
        $commercialAddress = "",
        $introducerRiskLevel = "",
        $usPerson = "",
        $introducerRiskScore = "",
        $productCode = "",
        $externalReference = "",
        $NAFCode = "",
        $VATCode = "",
        $sellerReference = ""
    ) {
        $this->socialReason        = $socialReason;
        $this->country             = $country;
        $this->legalForm           = $legalForm;
        $this->registrationNumber  = $registrationNumber;
        $this->masterAddress       = $masterAddress;
        $this->turnover            = $turnover;
        $this->regulatedSociety    = $regulatedSociety;
        $this->physicalPersons     = $physicalPersons;
        $this->account             = $account;
        $this->currency            = $currency;
        $this->owner               = $owner;
        $this->companyName         = $companyName;
        $this->commercialAddress   = $commercialAddress;
        $this->introducerRiskLevel = $introducerRiskLevel;
        $this->usPerson            = $usPerson;
        $this->introducerRiskScore = $introducerRiskScore;
        $this->productCode         = $productCode;
        $this->externalReference   = $externalReference;
        $this->NAFCode             = $NAFCode;
        $this->VATCode             = $VATCode;
        $this->sellerReference     = $sellerReference;
    }
}
