<?php
namespace CAPSPaymentApi;

/**
 * TgPaymentApi main entry point.
 */
class Main
{
    /**
     * Configuration
     * @var object $Config \CAPSPaymentApi\Librairies\Configuration
     */
    public $Config;

    /**
     * Payout
     * @var object $PayOut \CAPSPaymentApi\ApiPayouts
     */
    public $PayOut;

    /**
     * Transfert
     * @var object $Transfer \CAPSPaymentApi\ApiTransferts
     */
    public $Transfer;

    /**
     * Payin
     * @var object $PayIn \CAPSPaymentApi\ApiPayIns
     */
    public $PayIn;

    /**
     * Operation
     * @var object $Operation \CAPSPaymentApi\ApiOperations
     */
    public $Operation;

    /**
     * PaymentAccount
     * @var object $PaymentAccount \CAPSPaymentApi\ApiPaymentAccounts
     */
    public $PaymentAccount;

    /**
     * AccountHolder
     * @var object $AccountHolder \CAPSPaymentApi\ApiAccountHolder
     */
    public $AccountHolder;

    /**
     * Selfcare
     * @var object $Selfcare \CAPSPaymentApi\ApiSelfcare
     */
    public $Selfcare;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Config = new Librairies\Configuration($this);
        $this->PayOut = new ApiPayouts($this);
        $this->Transfer = new ApiTransferts($this);
        $this->PayIn = new ApiPayIns($this);
        $this->Operation = new ApiOperations($this);
        $this->PaymentAccount = new ApiPaymentAccounts($this);
        $this->AccountHolder = new ApiAccountHolder($this);
        $this->Selfcare = new ApiSelfcare($this);
    }
}
