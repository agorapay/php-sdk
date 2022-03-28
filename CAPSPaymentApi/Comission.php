<?php

namespace CAPSPaymentApi;

/**
 * Description of class Comission.
 */
class Comission
{
    /**
     * Amout of the commission in the currency of the order with two decimal maximum (required)
     * @var string amount Amout of the commission in the currency of the order with two decimal maximum (required)
     */
    public $amount;

    /**
     * Account number for the commission
     * @var string $account Account number for the commission
     */
    public $account;

    /**
     * Constructor
     */
    public function __construct($amount, $account)
    {
        $this->amount = $amount;
        $this->account = $account;
    }
}
