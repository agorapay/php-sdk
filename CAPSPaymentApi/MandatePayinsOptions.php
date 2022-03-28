<?php

namespace CAPSPaymentApi;

/**
 * Description of MandatePayinsOptions class. Used for call api /payin/mandate
 *
 */
class MandatePayinsOptions
{
    /**
     * transactionId. Must be a transaction for card. Must be provided if reference is not present.
     * @var string $transactionId Order id obtained in order creation and to provide in each next request (required)
     */
    public $transactionId;

    /**
     * reference. Mandate reference (UMR). Must be provided if transationId is not present.
     * @var string $reference Id of the payment transaction
     */
    public $reference;

    /**
     * Constructor
     * @param string $transactionId
     * @param string $reference
     */
    public function __construct(
        $transactionId = "",
        $reference = ""
    ) {
        $this->transactionId = $transactionId;
        $this->reference = $reference;
    }
}
