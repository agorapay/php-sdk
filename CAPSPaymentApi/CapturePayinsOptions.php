<?php

namespace CAPSPaymentApi;

/**
 * Description of CapturePayinsOptions class. Used for call api /payin/capture
 *
 */
class CapturePayinsOptions
{

    /**
     * Order id obtained in order creation and to provide in each next request.
     * @var string $orderId  Order id obtained in order creation and to provide in each next request
     */
    public $orderId;

    /**
     * Id of the payment transaction..
     * @var string $transactionId Id of the payment transaction
     */
    public $transactionId;

    /**
     * Amount.
     * @var object $transactionAmount Instance of class \CAPSPaymentApi\Amount()
     */

    public $transactionAmount;

    /**
     * BreakDown.
     * @var array $breakdownList Contains instances of class \CAPSPaymentApi\BreakDown()
     */
    public $breakdownList;

    /**
     * JSON data for the marketplace
     * @var object $metaData Instance of class \CAPSPaymentApi\Metadata(). JSON data for the marketplace. This data is not used by payment system
     */
    public $metaData;

    /**
     * Constructor
     * @param string $orderId (required)
     * @param object $transactionAmount (required)
     * @param string $transactionId
     * @param object $metaData
     * @param array $breakdownList
     */
    public function __construct(
        $orderId,
        $transactionAmount,
        $transactionId = "",
        $metaData = "",
        $breakdownList = ""
    ) {
        $this->orderId = $orderId;
        $this->transactionId = $transactionId;
        $this->metaData = $metaData;
        $this->transactionAmount = $transactionAmount;
        $this->breakdownList = $breakdownList;
    }
}
