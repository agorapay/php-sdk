<?php

namespace CAPSPaymentApi;

/**
 * Description of CancelPayinsOptions class. Used for call api /payin/cancel
 *
 */
class CancelPayinsOptions
{
    /**
     * orderId. Order id obtained in order creation and to provide in each next request (required)
     * @var string $orderId Order id obtained in order creation and to provide in each next request (required)
     */
    public $orderId;

    /**
     * transactionId. Id of the payment transaction.
     * @var string $transactionId Id of the payment transaction
     */
    public $transactionId;

    /**
     * metaData. JSON data for the marketplace. This data is not used by payment system.
     * @var object $metaData Instance of class \CAPSPaymentApi\Metadata(). JSON data for the marketplace. This data is not used by payment system
     */
    public $metaData;

    /**
     * Constructor
     * @param string $orderId (required)
     * @param string $transactionId
     * @param object $metaData
     */
    public function __construct(
        $orderId,
        $transactionId = "",
        $metaData = ""
    ) {
        $this->orderId = $orderId;
        $this->transactionId = $transactionId;
        $this->metaData = $metaData;
    }
}
