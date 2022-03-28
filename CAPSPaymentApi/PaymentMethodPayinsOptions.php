<?php

namespace CAPSPaymentApi;

/**
 * Description of PaymentMethodPayinsOptions class. Used for call api /payin/paymentMethods
 *
 */
class PaymentMethodPayinsOptions
{
    /**
     * orderReference. Marketplace reference for this order (required)
     * @var string $orderReference Marketplace reference for this order (required)
     */
    public $orderReference;

    /**
     * orderCountryCode. The ISO country code in 3 characters format (required)
     * @var string $orderCountryCode The ISO country code in 3 characters format (required)
     */
    public $orderCountryCode;

    /**
     * metaData. JSON data for the marketplace. This data is not used by payment system.
     * @var object $metaData Instance of class \CAPSPaymentApi\Metadata(). JSON data for the marketplace. This data is not used by payment system
     */
    public $metaData;

    /**
     * Amount. (required)
     * @var object $amount Contains instance of class \CAPSPaymentApi\Amount() (required)
     */
    public $amount;

    /**
     * Payer. (required)
     * @var object $payer Contrains instance of class \CAPSPaymentApi\Payer() (required)
     */
    public $payer;

    /**
     * Constructor
     * @param string $orderReference (required)
     * @param string $orderCountryCode (required)
     * @param string $amount (required)
     * @param string $payer (required)
     * @param object $metaData
     */
    public function __construct(
        $orderReference,
        $orderCountryCode,
        $amount,
        $payer,
        $metaData = ""
    ) {
        $this->orderReference = $orderReference;
        $this->orderCountryCode = $orderCountryCode;
        $this->metaData = $metaData;
        $this->amount = $amount;
        $this->payer = $payer;
    }
}
