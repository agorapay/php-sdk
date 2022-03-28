<?php

namespace CAPSPaymentApi;

/**
 * Description of PaymentAccountOptions class. Used for call api /paymentAccount
 *
 */
class PaymentAccountOptions
{
    /**
     * accountNumber. Identifier of the account to get details.
     * @var string $accountNumber Identifier of the account to get details. (required)
     */
    public $accountNumber;

    /**
     * Constructor
     * @param string $accountNumber
     */
    public function __construct(
        $accountNumber
    ) {
        $this->accountNumber = $accountNumber;
    }
}
