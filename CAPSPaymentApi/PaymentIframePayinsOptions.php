<?php

namespace CAPSPaymentApi;

/**
 * Description of Class PaymentIframePayinsOptions used for call api payin/paymentIframe
 *
 */
class PaymentIframePayinsOptions
{
    /**
     * Account number of the marketplace
     * @var string $paymentAccount Account number of the marketplace
     */
    public $paymentAccount;

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
     * Use to identify transaction in SEPA transfer. Autorized characters are alpha numeric, - and /. Characters / and space are authorized but not in first and last position. Also, two // are not allowed.
     * @var string $endToEndId Use to identify transaction in SEPA transfer
     */
    public $endToEndId;

    /**
     * Amount.
     * @var object $amount contain instance of class \CAPSPaymentApi\Amount()
     */

    public $amount;

    /**
     * List of breakdown for this payment
     * @var array $breakDownList contains instances of class \CAPSPaymentApi\BreakDown()
     */
    public $breakDownList;

    /**
     * Payer.
     * @var object $payer contain instances of  class \CAPSPaymentApi\PayerSimple()
     */
    public $payer;

    /**
     * Cart.
     * @var object $cart contain instance of class \CAPSPaymentApi\Cart()
     */
    public $cart;

    /**
     * "1" for recurrent payment "0" or absent if not a recurrent payment
     * @var string $recurrent "1" for recurrent payment "0" or absent if not a recurrent payment
     */
    public $recurrent;

    /**
     * Identifier of tjhe payment method
     * @var string $paymentMethodId Identifier of the payment method
     */
    public $paymentMethodId;

    /**
     * Challenge negotiation for card payment. 01: No preference 02: No challenge required 03: Desired challenge 04: Required challenge
     * @var string $cbChallenge
     */
    public $cbChallenge;

    /**
     * Constructor
     * @param string $orderReference (required)
     * @param string $orderCountryCode (required)
     * @param object $amount (required)
     * @param object $payer (required)
     * @param string $paymentAccount
     * @param object $metaData
     * @param string $capture
     * @param string $urlRedirect
     * @param string $endToEndId
     * @param array  $breakDownList
     * @param object $cart
     * @param string $recurrent
     * @param string $paymentMethodId
     * @param string $cbChallenge
     */
    public function __construct(
        $orderReference,
        $orderCountryCode,
        $amount,
        $payer,
        $paymentAccount = "",
        $metaData = "",
        $capture = "",
        $urlRedirect = "",
        $endToEndId = "",
        $breakDownList = "",
        $cart = "",
        $recurrent = "",
        $paymentMethodId = "",
        $cbChallenge = ""
    ) {
        $this->paymentAccount = $paymentAccount;
        $this->orderReference = $orderReference;
        $this->orderCountryCode = $orderCountryCode;
        $this->metaData = $metaData;
        $this->capture = $capture;
        $this->urlRedirect = $urlRedirect;
        $this->endToEndId = $endToEndId;
        $this->amount = $amount;
        $this->breakDownList = $breakDownList;
        $this->payer = $payer;
        $this->cart = $cart;
        $this->recurrent = $recurrent;
        $this->paymentMethodId = $paymentMethodId;
        $this->cbChallenge = $cbChallenge;
    }
}
