<?php

namespace CAPSPaymentApi;

/**
 * Description of class Amount.
 */
class Amount
{
    /**
     * value. (required)
     * @var string $value
     */
    public $value;

    /**
     * currency. (required)
     * @var string $currency
     */
    public $currency;

    /**
     * Constructor
     * @param string $value (required)
     * @param string $currency (required)
     *
     */
    public function __construct($value, $currency)
    {
        $this->value = $value;
        $this->currency = $currency;
    }
}
