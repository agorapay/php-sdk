<?php

namespace CAPSPaymentApi;

/**
 * Description of class DisableIbanPaymentAccountOptions. Class used for call api paymentAccount/DisableBAN.
 *
 */

class DisableIbanPaymentAccountOptions
{
    /**
     * @var string $requestId Current payment method, or pending payment method (required)
     */
    public $requestId;

    /**
     * @var string $paymentMethodAlias A string representing the account number
     */
    public $paymentMethodAlias;

    /**
     * Constructor
     * @param string $requestId (required)
     * @param string $accountNumber (required)
     */
    public function __construct($requestId, $paymentMethodAlias)
    {
        $this->requestId = $requestId;
        $this->paymentMethodAlias = $paymentMethodAlias;
    }
}
