<?php

namespace CAPSPaymentApi;

/**
 * Description of PaymentDetailsPayinsOptions class. Used for call api /payin/paymentDetails
 *
 */
class PaymentDetailsPayinsOptions
{
    /**
     * orderId. Order id obtained in order creation and to provide in each next request (required)
     * @var string $orderId Order id obtained in order creation and to provide in each next request (required)
     */
    public $orderId;

    /**
     * paymentData. Specific data for a payment method
     * @var string $paymentData Specific data for a payment method
     */
    public $paymentData;

    /**
     * metaData. JSON data for the marketplace. This data is not used by payment system.
     * @var string $metaData JSON data for the marketplace. This data is not used by payment system
     */
    public $metaData;

    /**
     * Constructor
     * @param string $orderId (required)
     * @param string $paymentData
     * @param string $metaData
     */
    public function __construct($orderId, $paymentData = "", $metaData = "")
    {
        $this->orderId = $orderId;
        $this->paymentData = $paymentData;
        $this->metaData = $metaData;
    }
}
