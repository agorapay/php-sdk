<?php

namespace CAPSPaymentApi;

/**
 * Description of class ListPaymentMethodOptions. Used for call api /paymentMethod.list
 * List payment methods and eventually aliases,
 * according to the transaction amount and the country of the payer.
 * This API is preferred to payin/paymentMethods if you are not intending to create any order
 *
 */
class ListPaymentMethodOptions
{
    /**
     * countryCode
     * @var string countryCode (required)
     * The ISO country code in 3 characters format
     */
    public $countryCode;

    /**
     * Amount.
     * @var object $amount contain instance of class \CAPSPaymentApi\Amount() (required)
     * Amount information
     */

    public $amount;

    /**
     * @var object payer Instance of class \CAPSPaymentApi\Payer
     * Payer's details
     */
    public $payer;



    /**
     * Constructor
     * @param string $countryCode (required)
     * @param object $amount (required)
     * @param object $payer
     */
    public function __construct(
        $countryCode,
        $amount,
        $payer = ''
    ) {
        $this->countryCode  = $countryCode;
        $this->amount       = $amount;
        $this->payer        = $payer;
    }
}
