<?php

namespace CAPSPaymentApi;

/**
 * Description of OrderDetailsPayinsOptions class. Used for call api /payin/orderDetails
 *
 */
class OrderDetailsPayinsOptions
{
    /**
     * orderId. Id of the order. (required)
     * @var string $orderId Id of the order. (required)
     */
    public $orderId;

    /**
     * Constructor
     * @param string $orderId
     */
    public function __construct(
        $orderId
    ) {
        $this->orderId = $orderId;
    }
}
