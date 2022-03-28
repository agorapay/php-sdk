<?php

namespace CAPSPaymentApi;

/**
 * Description of class UnregisterAccountHolderOptions. Used for call api /accountHolder/unregister
 * 
 */
class UnregisterAccountHolderOptions
{
    /**
     * A string representing the account number..
     * @var string $accountNumber  A string representing the account number
     */
    public $accountNumber;

    /**
     * ID to identify processing request (required)
     * @var string $requestId ID to identify processing request (required)
     */
    public $requestId;

    /**
     * Constructor
     * @param string $requestId (required)
     * @param string $accountNumber
     */
    public function __construct($requestId, $accountNumber = "")
    {
        $this->requestId = $requestId;
        $this->accountNumber = $accountNumber;
    }
}
