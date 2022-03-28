<?php

namespace CAPSPaymentApi;

/**
 * Description of AdjustPaymentPayinsOptions class. Used for call api /payin/adjustPayment
 *
 */
class AdjustPaymentPayinsOptions
{
    /**
     * orderId. Order id obtained in order creation and to provide in each next request
     * @var string $orderId Order id obtained in order creation and to provide in each next request
     */
    public $orderId;

    /**
     * metaData. JSON data for the marketplace. This data is not used by payment system.
     * @var object $metaData Instance of class \CAPSPaymentApi\Metadata(). JSON data for the marketplace. This data is not used by payment system
     */
    public $metaData;

    /**
     * BreakDown.
     * @var array $breakDownList Contains instances of class \CAPSPaymentApi\BreakDown()
     */
    public $breakDownList;

    /**
     * AdjustAmount.
     * @var object $adjustAmount Contains instance of class \CAPSPaymentApi\Amount()
     */
    public $adjustAmount;

    /**
     * Constructor
     * @param string $orderId (required)
     * @param object $metaData
     * @param object $breakDown
     * @param object $adjustAmount
     */
    public function __construct(
        $orderId,
        $metaData = "",
        $breakDown = "",
        $adjustAmount = ""
    ) {
        $this->orderId = $orderId;
        $this->metaData = $metaData;
        $this->breakDownList = $breakDown;
        $this->adjustAmount = $adjustAmount;
    }
}
