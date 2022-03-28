<?php

namespace CAPSPaymentApi;

/**
 * Description of Class RefundPayinsOptions used for call api payin/refund
 *
 */
class RefundPayinsOptions
{
    /**
     * Order id obtained in order creation and to provide in each next request (required)
     * @var string $orderId Order id obtained in order creation and to provide in each next request (required)
     */
    public $orderId;

    /**
     * Amount (required).
     * @var object $transactionAmount contains instance of class \CAPSPaymentApi\Amount()
     */
    public $transactionAmount;

    /**
     * Id of the payment transaction.
     * @var string $transactionId Id of the payment transaction
     */
    public $transactionId;

    /**
     * JSON data for the marketplace. This data is not used by payment system.
     * @var object $metaData Instance of class \CAPSPaymentApi\Metadata(). JSON data for the marketplace. This data is not used by payment system
     */
    public $metaData;

    /**
     * Operation label transmited in payment system.
     * @var string $reason Operation label transmited in payment system
     */
    public $reason;

    /**
     * List of breakdown for this payment
     * @var array $breakdownList contains instances of class \CAPSPaymentApi\BreakDown()
     */
    public $breakdownList;

    /**
     * Marketplace reference for this order (required)
     * @var string $orderReference  Marketplace reference for this order (required)
     */
    public $orderReference;

    /**
     * Payer (required).
     * @var object $payer contains instance of class \CAPSPaymentApi\PayerSimple()
     */
    public $payer;

    /**
     * Constructor
     * @param string $orderId (required)
     * @param string $orderReference (required)
     * @param object $transactionAmount (required)
     * @param array  $breakdownList
     * @param object $payerSimple (required)
     * @param string $transactionId
     * @param string $reason
     * @param object $metaData
     */
    public function __construct(
        $orderId,
        $orderReference,
        $transactionAmount,
        $payerSimple,
        $breakdownList = "",
        $transactionId = "",
        $reason = "",
        $metaData = ""
        
    ) {
        $this->orderId = $orderId;
        $this->transactionId = $transactionId;
        $this->reason = $reason;
        $this->orderReference = $orderReference;
        $this->metaData = $metaData;
        $this->transactionAmount = $transactionAmount;
        $this->breakdownList = $breakdownList;
        $this->payer = $payerSimple;
    }
}
