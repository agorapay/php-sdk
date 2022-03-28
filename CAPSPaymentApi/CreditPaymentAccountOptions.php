<?php

namespace CAPSPaymentApi;

/**
 * Description of Class CreditPaymentAccountOptions used for call api paymentAccount/credit.
 *
 *
 */
class CreditPaymentAccountOptions
{
    /**
     * @var string $accountNumber A string representing the account number (required)
     */
    public $accountNumber;

    /**
     * @var string $amount Recharge amount (required)
     */
    public $amount;

    /**
     * @var string $paymentMethodKey Key identifier of the payment method type id (required).
     */
    public $paymentMethodKey;

    /**
     * @var string $sequence Mandate sequence
     */
    public $sequence;

    /**
     * @var string $currency Currency code in 3 characters ISO format (required).
     */
    public $currency;

    /**
     * @var string $reference Mandate reference.
     */
    public $reference;

    /**
     * Constructor
     * @param string $accountNumber (required)
     * @param string $amount (required)
     * @param string $paymentMethodKey (required)
     * @param string $currency
     */
    public function __construct(
        $accountNumber,
        $amount,
        $paymentMethodKey,
        $currency = ""
    ) {
        $this->accountNumber = $accountNumber;
        $this->amount = $amount;
        $this->paymentMethodKey = $paymentMethodKey;
        $this->currency = $currency;
    }
}
