<?php

namespace CAPSPaymentApi;

/**
 * Class to management CAPSPaymentApi for ApiPayins
 */
class ApiPayins extends Librairies\ApiBase
{
    public $_root;

    public $tokenValue;

    public function __construct($root)
    {
        $this->_root = $root;
    }

    /**
     * Call api /payin/payment
     *
     * Submit a Payment
     * When your shopper choose a payment method, this call submit the choice and any data if already given.
     * The return can be final, (transaction completed) or ask to authentification details, or redirect the shopper to PSP or 3DS pages.
     *
     * @param object $paymentPayinsOptions Instance of class \CAPSPaymentApi\PaymentPayinsOptions
     * @return object Response data
     */
    public function payment($paymentPayinsOptions)
    {
        try {
            $endPoint = "/payin/payment";
            return $this->filterObject($endPoint, $paymentPayinsOptions);
        } catch (\Exception $exception) {
        	return $this->getMsgException($exception);
        }
    }

    /**
     * Call api /payin/paymentDetails
     * Submit additionnal Payment details
     * The call send the last mandatory data to finalize the payment
     *
     * @param object $paymentDetailsPayinsOptions Instance of class \CAPSPaymentApi\PaymentDetailsPayinsOptions
     * @return object Response data
     */
    public function paymentDetails($paymentDetailsPayinsOptions)
    {
        try {
            $endPoint = "/payin/paymentDetails";
            return $this->filterObject($endPoint, $paymentDetailsPayinsOptions);
        } catch (\Exception $exception) {
        	return $this->getMsgException($exception);
        }
    }

    /**
     * Call api /payin/paymentMethods
     *
     * Submit an order/Get payment methods
     * When your shopper is ready to pay, submit an order and get a list of the available payment methods and alias.
     * The list is based on the shopper country and the order amount and currency.
     * This is the first call to use when going on a payment operation. The next call should be /payment
     *
     * @param object $paymentMethodsPayinsOptions Instance of class \CAPSPaymentApi\PaymentMethodsPayinsOptions
     * @return object Response data
     */
    public function paymentMethods($paymentMethodsPayinsOptions)
    {
        try {
            $endPoint = "/payin/paymentMethods";
            return $this->filterObject($endPoint, $paymentMethodsPayinsOptions);
        } catch (\Exception $exception) {
        	return $this->getMsgException($exception);
        }
    }

    /**
     * Call api /payin/capture
     *
     * Capture a Transaction/Order
     * Capture a payment transaction or all the capturable payment transactions of an order
     *
     * @param object $capturePayinsOptions Instance of class \CAPSPaymentApi\CapturePayinsOptions
     * @return object Response data
     */
    public function capture($capturePayinsOptions)
    {
        try {
            $endPoint = "/payin/capture";
            return $this->filterObject($endPoint, $capturePayinsOptions);
        } catch (\Exception $exception) {
        	return $this->getMsgException($exception);
        }
    }

    /**
     * Call api /payin/cancel
     *
     * Cancel a Transaction/Order
     *
     * @param object $cancelPayinsOptions Instance of class \CAPSPaymentApi\CancelPayinsOptions
     * @return object Response data
     */
    public function cancel($cancelPayinsOptions)
    {
        try {
            $endPoint = "/payin/cancel";
            return $this->filterObject($endPoint, $cancelPayinsOptions);
        } catch (\Exception $exception) {
        	return $this->getMsgException($exception);
        }
    }

    /**
     * Call api /payin/orderDetails
     * Send back all the data of an order and its transactions
     *
     * @param object $orderDetailsPayinsOptions Instance of class \CAPSPaymentApi\OrderDetailsPayinsOptions
     * @return object Response data
     */
    public function orderDetails($orderDetailsPayinsOptions)
    {
        try {
            $endPoint = "/payin/orderDetails";
            $orderDetails = $this->filterObject($endPoint, $orderDetailsPayinsOptions, "GET");
            $urlParameters = http_build_query($orderDetails);
            return $this->callApi($endPoint, $urlParameters, "GET");
        } catch (\Exception $exception) {
        	return $this->getMsgException($exception);
        }
    }

    /**
     * Call api /payin/adjustPayment
     *
     * Adjust the amount of the payment/change the breakdown of the payment
     * Before the cashing of the operation, change the payment amount and/or the breakdown
     * If it's only a change in the breakdown, set the adjustAmount to the same of the transactionAmount
     *
     * @param object $adjustPaymentPayinsOptions Instance of class \CAPSPaymentApi\AdjustPaymentPayinsOptions
     * @return object Response data
     */
    public function adjustPayment($adjustPaymentPayinsOptions)
    {
        try {
            $endPoint = "/payin/adjustPayment";
            return $this->filterObject($endPoint, $adjustPaymentPayinsOptions);
        } catch (\Exception $exception) {
        	return $this->getMsgException($exception);
        }
    }

    /**
     * Call api /payin/paymentSecure
     *
     * Submit a secure payment (3DS etc.)
     *
     * @param object $paymentPayinsOptions Instance of class \CAPSPaymentApi\PaymentPayinsOptions
     * @return object Response data
     */
    public function paymentSecure($paymentPayinsOptions)
    {
        try {
            $endPoint = "/payin/paymentSecure";
            return $this->filterObject($endPoint, $paymentPayinsOptions);
        } catch (\Exception $exception) {
            return $this->getMsgException($exception);
        }
    }

    /**
     * Call api /payin/paymentIframe
     *
     * Submit an Order/ Get an Authent Code
     * When your shopper is ready to pay, submit your order/payment by this request and get an Authent Code.
     * Then save the orderId and open an iframe for the shopper with the authentCode.
     * Note: the "details" object for this API no longer accepts "iban". Use \CAPSPaymentApi\DetailsPaymentIframe or iban is stripped from the request.
     * @param object $paymentIframePayinsOptions Instance of class \CAPSPaymentApi\PaymentIframePayinsOptions
     * @return object Response data
     */
    public function paymentIframe($paymentIframePayinsOptions)
    {
        try {
            $endPoint = "/payin/paymentIframe";
            $options = $this->stripIbanFromDetails($paymentIframePayinsOptions);
            return $this->filterObject($endPoint, $options);
        } catch (\Exception $exception) {
            return $this->getMsgException($exception);
        }
    }

    /**
     * Call api /payin/paymentIframeSecure
     *
     * Submit an Order/ Get an Authent Code for secure payment (iframe).
     * Note: the "details" object for this API no longer accepts "iban". Use \CAPSPaymentApi\DetailsPaymentIframe or iban is stripped from the request.
     * @param object $paymentIframePayinsOptions Instance of class \CAPSPaymentApi\PaymentIframePayinsOptions
     * @return object Response data
     */
    public function paymentIframeSecure($paymentIframePayinsOptions)
    {
        try {
            $endPoint = "/payin/paymentIframeSecure";
            $options = $this->stripIbanFromDetails($paymentIframePayinsOptions);
            return $this->filterObject($endPoint, $options);
        } catch (\Exception $exception) {
            return $this->getMsgException($exception);
        }
    }

    /**
     * Strip iban from details for paymentIframe/paymentIframeSecure (details no longer accepts iban).
     * @param object $options
     * @return object Clone of options with details.iban removed if present
     */
    private function stripIbanFromDetails($options)
    {
        $opts = clone $options;
        if (isset($opts->details) && is_object($opts->details) && property_exists($opts->details, 'iban')) {
            $d = clone $opts->details;
            unset($d->iban);
            $opts->details = $d;
        }
        return $opts;
    }

    /**
     * Call api payin/refund
     *
     * Refund a Transaction/Order
     * Refund a payment transaction or all the refundable payment transactions of an order
     * @param object $refundPayinsOptions Instance of class \CAPSPaymentApi\RefundPayinsOptions
     * @return object Response data
     */
    public function refund($refundPayinsOptions)
    {
        try {
            $endPoint = "/payin/refund";
            return $this->filterObject($endPoint, $refundPayinsOptions);
        } catch (\Exception $exception) {
        	return $this->getMsgException($exception);
        }
    }

    /**
     * Call api /payin/mandate
     *
     * Get signed mandate file
     *
     * @param object $mandatePayinsOptions Instance of class \CAPSPaymentApi\MandatePayinsOptions
     * @return object Response data
     */
    public function mandate($mandatePayinsOptions)
    {
        try {
            $endPoint = "/payin/mandate";
            $mandate = $this->filterObject($endPoint, $mandatePayinsOptions, "GET");
            $urlParameters = http_build_query($mandate);
            return $this->callApi($endPoint, $urlParameters, "GET");
        } catch (\Exception $exception) {
        	return $this->getMsgException($exception);
        }
    }

    /**
     * Call api /payin/ticket
     *
     * Get a ticket in JSON or PDF format
     *
     *  @param object $ticketPayinsOptions Instance of class \CAPSPaymentApi\TicketPayinsOptions
     * @return object Response data
     */
    public function ticket($ticketPayinsOptions)
    {
        try {
            $endPoint = "/payin/ticket";
            $ticket = $this->filterObject($endPoint, $ticketPayinsOptions, "GET");
            $urlParameters = http_build_query($ticket);
            return $this->callApi($endPoint, $urlParameters, "GET");
        } catch (\Exception $exception) {
        	return $this->getMsgException($exception);
        }
    }

    /**
     * Call api /payin/reload
     *
     * Credit payment account by PayIn SEPA Direct Debit (SDD) for B2C
     *
     * @param object $reloadPayinsOptions Instance of class \CAPSPaymentApi\ReloadPayinsOptions
     * @return object Response data
     */
    public function reload($reloadPayinsOptions)
    {
        try {
            $endPoint = "/payin/reload";
            return $this->filterObject($endPoint, $reloadPayinsOptions);
        } catch (\Exception $exception) {
        	return $this->getMsgException($exception);
        }
    }


}
