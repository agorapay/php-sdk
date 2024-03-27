<?php

namespace CAPSPaymentApi;

/**
 * Description of class CreateMandateOptions. Used for call api /mandate.create
 * The data structure to request a mandate
 *
 */
class CreateMandateOptions
{
    /**
     * @var object $transPaymentMethod Instance of class \CAPSPaymentApi\TransPaymentMethod (required) Payment method information
     */
    public $transPaymentMethod;

    /**
     * @var object payer Instance of class \CAPSPaymentApi\Payer (required) Payer's details
     */
    public $payer;

    /**
     * @var object $details Instance of class \CAPSPaymentApi\Details (required) Payment details information For some payment methods, additional details are needed.
     */
    public $details;

    /**
     * @var string $urlRedirect Url where the customer must be redirected at the end of the payment with the partner
     */
    public $urlRedirect;

    /**
     * @var string $otp Force signature by OTP
     * Enum: [ 1, Y ]
     */
    public $otp;


    /**
     * Constructor
     * @param object $transPaymentMethod (required)
     * @param object $payer (required)
     * @param object $details (required)
     * @param string $urlRedirect
     * @param string $otp
     */
    public function __construct(
        $transPaymentMethod,
        $payer,
        $details,
        $urlRedirect = '',
        $otp = ''
    ) {
        $this->transPaymentMethod = $transPaymentMethod;
        $this->payer = $payer;
        $this->details = $details;
        $this->urlRedirect = $urlRedirect;
        $this->otp = $otp;
    }
}
