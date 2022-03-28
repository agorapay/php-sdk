<?php

namespace CAPSPaymentApi;

/**
 * Description of Class PayoutAutoPaymentAccountOptions used for call api paymentAccount/payoutAuto
 *
 */

class PayoutAutoPaymentAccountOptions
{
    /**
     * @var string $accountNumber A string representing the account number
     */
    public $accountNumber;

    /**
     * @var string $amount Recharge amount (required)
     */
    public $amount;

    /**
     * @var string $frequency frequency
     */
    public $frequency;

    /**
     * @var string $dayOfWeek dayOfWeek (between 0 and 6)
     */
    public $dayOfWeek;

    /**
     * @var string $dayOfMonth dayOfMonth (between 1 and 31)
     */
    public $dayOfMonth;

    /**
     * @var string $paymentMethodAlias Alias for the payment method
     */
    public $paymentMethodAlias;

    /**
     * Constructor
     * @param string $amount (required)
     * @param string $frequency (required)
     * @param string $accountNumber
     * @param string $dayOfWeek
     * @param string $dayOfMonth
     * @param string $paymentMethodAlias
     *
     */
    public function __construct(
        $amount,
        $frequency,
        $accountNumber = "",
        $dayOfWeek = "",
        $dayOfMonth = "",
        $paymentMethodAlias = ""
    ) {
        $this->accountNumber = $accountNumber;
        $this->amount = $amount;
        $this->frequency = $frequency;
        $this->dayOfWeek = $dayOfWeek;
        $this->dayOfMonth = $dayOfMonth;
        $this->paymentMethodAlias = $paymentMethodAlias;
    }
}
