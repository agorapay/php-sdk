<?php

namespace CAPSPaymentApi;

/**
 * Description of SetAuthorizedOverdraftPaymentAccountOptions used for call api /paymentAccount/setAuthorizedOverdraft
 */
class SetAuthorizedOverdraftPaymentAccountOptions
{
    /**
     * Account number
     * @var string $accountNumber
     */
    public $accountNumber;

    /**
     * Authorized overdraft amount
     * @var string $authorizedOverdraft
     */
    public $authorizedOverdraft;

    /**
     * Constructor
     * @param string $accountNumber
     * @param string $authorizedOverdraft
     */
    public function __construct($accountNumber, $authorizedOverdraft)
    {
        $this->accountNumber = $accountNumber;
        $this->authorizedOverdraft = $authorizedOverdraft;
    }
}
