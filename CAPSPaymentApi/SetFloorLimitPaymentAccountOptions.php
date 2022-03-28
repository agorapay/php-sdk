<?php

namespace CAPSPaymentApi;

/**
 * Description of class SetFloorLimitPaymentAccountOptions. Used for call api /paymentAccount/setFloorLimit
 *
 */

class SetFloorLimitPaymentAccountOptions
{
    /**
     * AccountNumber (required) 
     * @var string accountNumber A string representing the account number (required)
     */
    public $accountNumber;

    /**
     * Amount.
     * @var object Amount instance of \CAPSPaymentApi\Amount() (required)
     */
    public $amount;

    /**
     * Constructor
     * @param string $accountNumber (required)
     * @param object $amount (required)
     *
     */
    public function __construct(
        $accountNumber,
        $amount
    ) {
        $this->accountNumber = $accountNumber;
        $this->amount = $amount;
    }
}
