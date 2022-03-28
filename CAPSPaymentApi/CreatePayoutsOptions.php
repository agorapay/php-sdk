<?php

namespace CAPSPaymentApi;

/**
 * Description of class CreatePayoutsOptions. Used for call api /payout.create
 * The data structure to request a payout
 *
 */
class CreatePayoutsOptions
{
    /**
     * @var string $endToEndId End to end identifier
     */
    public $endToEndId;

    /**
     * @var object payoutAmount Instance of class \CAPSPaymentApi\Amount() (required)
     */
    public $payoutAmount;

    /**
     * @var string $paymentMethodAlias Alias for the payment method (required)
     */
    public $paymentMethodAlias;

    /**
     * @var object $metaData Instance of class \CAPSPaymentApi\Metadata(). JSON data for the marketplace. This data is not used by payment system
     */
    public $metaData;

    /**
     * @var string $reason Operation label transmited in payment system
     */
    public $reason;

    /**
     * @var string $accountNumber  A string representing the account number (required)
     */
    public $accountNumber;

    /**
     * @var object $commission Instance of class \CAPSPaymentApi\Comission(). Commission information
     */
    public $commission;


    /**
     * Constructor
     * @param object $payoutAmount (required)
     * @param string $paymentMethodAlias (required)
     * @param string $accountNumber (required)
     * @param string $endToEndId
     * @param object $metaData
     * @param string $reason
     * @param object $commission
     */
    public function __construct(
        $payoutAmount,
        $paymentMethodAlias,
        $accountNumber,
        $endToEndId = "",
        $metaData = "",
        $reason = "",
        $commission = ""
    ) {
        $this->endToEndId = $endToEndId;
        $this->payoutAmount = $payoutAmount;
        $this->paymentMethodAlias = $paymentMethodAlias;
        $this->metaData = $metaData;
        $this->reason = $reason;
        $this->accountNumber = $accountNumber;
        $this->commission = $commission;
    }
}
