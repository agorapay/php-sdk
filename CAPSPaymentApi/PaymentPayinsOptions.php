<?php

namespace CAPSPaymentApi;

/**
 * Description of PaymentPayinsOptions class. Used for call api /payin/payment
 *
 */
class PaymentPayinsOptions
{
    /**
     * paymentData. Specific data for a payment method
     * @var string $paymentData Specific data for a payment method
     */
    public $paymentData;

    /**
     * orderId.
     * @var string $orderId
     */
    public $orderId;

    /**
     * Marketplace reference for this order
     * @var string $orderReference Marketplace reference for this order
     */
    public $orderReference;

    /**
     * The ISO country code in 3 characters format
     * @var string $orderCountryCode The ISO country code in 3 characters format
     */
    public $orderCountryCode;

    /**
     * Account number of the marketplace
     * @var string $paymentAccount Account number of the marketplace
     */
    public $paymentAccount;

    /**
     * JSON data for the marketplace. This data is not used by payment system.
     * @var object $metaData Instance of class \CAPSPaymentApi\Metadata(). JSON data for the marketplace. This data is not used by payment system
     */
    public $metaData;

    /**
     * Capture indicator
     * @var string $capture Capture indicator
     */
    public $capture;

    /**
     * Url where the client must be redirected at the end of the payment with the partner
     * @var string $urlRedirect Url where the client must be redirected at the end of the payment with the partner
     */
    public $urlRedirect;

    /**
     * registerAlias. Specific data for a payment method
     * @var string $registerAlias Specific data for a payment method
     */
    public $registerAlias;

    /**
     * Operation label transmited in payment system
     * @var string $reason Operation label transmited in payment system
     */
    public $reason;

    /**
     * Use to identify transaction in SEPA transfer
     * @var string $endToEndId Use to identify transaction in SEPA transfer
     */
    public $endToEndId;

    /**
     * Amount.
     * @var object $transactionAmount Instance of class \CAPSPaymentApi\Amount()
     */

    public $transactionAmount;

    /**
     * TransPaymentMethod
     * @var object transPaymentMethod instance of class \CAPSPaymentApi\TransPaymentMethod()
     */
    public $transPaymentMethod;

    /**
     * List of breakdown for this payment
     * @var Array $breakDownList Contains instance of class \CAPSPaymentApi\BreakDown()
     */
    public $breakDownList;

    /**
     * Alias.
     * @var object $alias Instance of class \CAPSPaymentApi\Alias()
     */
    public $alias;

    /**
     * Payer.
     * @var object $payer Instance of class \CAPSPaymentApi\Payer()
     */
    public $payer;

    /**
     * Details.
     * @var object $details Instance of class \CAPSPaymentApi\Details()
     */
    public $details;

    /**
     * Cart.
     * @var object $cart Instance of class \CAPSPaymentApi\Cart()
     */
    public $cart;

    /**
     * Date of the requested operation. The format must be YYYYMMDD.
     * @var string $operationDate Date of the requested operation
     */
    public $operationDate;

    /**
     * Challenge negotiation for card payment. 01: No preference 02: No challenge required 03: Desired challenge 04: Required challenge
     * @var string $cbChallenge
     */
    public $cbChallenge;

    /**
     * Constructor
     * @param string $urlRedirect (required)
     * @param object $transactionAmount (required)
     * @param string $paymentData
     * @param string $orderId
     * @param string $orderReference
     * @param string $orderCountryCode
     * @param string $paymentAccount
     * @param object $metaData
     * @param string $capture
     * @param string $registerAlias
     * @param string $reason
     * @param string $endToEndId
     * @param object $transPaymentMethod
     * @param array  $breakDownList
     * @param object $alias
     * @param object $payer
     * @param object $details
     * @param object $cart
     * @param string $operationDate
     * @param string $cbChallenge
     *
     */
    public function __construct(
        $urlRedirect,
        $transactionAmount,
        $paymentData = "",
        $orderId = "",
        $orderReference = "",
        $orderCountryCode  = "",
        $paymentAccount  = "",
        $metaData  = "",
        $capture  = "",
        $registerAlias  = "",
        $reason  = "",
        $endToEndId  = "",
        $transPaymentMethod  = "",
        $breakDownList  = "",
        $alias  = "",
        $payer  = "",
        $details  = "",
        $cart = "",
        $operationDate  = "",
        $cbChallenge = ""
    ) {
        $this->paymentData = $paymentData;
        $this->orderId = $orderId;
        $this->orderReference = $orderReference;
        $this->orderCountryCode = $orderCountryCode;
        $this->paymentAccount = $paymentAccount;
        $this->metaData = $metaData;
        $this->capture = $capture;
        $this->urlRedirect = $urlRedirect;
        $this->registerAlias = $registerAlias;
        $this->reason = $reason;
        $this->endToEndId = $endToEndId;
        // object
        $this->transactionAmount = $transactionAmount;
        // object
        $this->transPaymentMethod = $transPaymentMethod;
        // array of objects
        $this->breakDownList = $breakDownList;
        // object
        $this->alias = $alias;
        // object
        $this->payer = $payer;
        // object
        $this->details = $details;
        // object
        $this->cart = $cart;
        $this->operationDate = $operationDate;
        $this->cbChallenge = $cbChallenge;
    }
}
