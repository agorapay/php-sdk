<?php

namespace CAPSPaymentApi;

/**
 * Description of Cart class.
 */
class Cart
{
    /**
     * @var string $totalQuantity Number of article in cart
     */
    public $totalQuantity;

    /**
     * Constructor
     * @param string totalQuantity
     */
    public function __construct($totalQuantity)
    {
        $this->totalQuantity = $totalQuantity;
    }
}
