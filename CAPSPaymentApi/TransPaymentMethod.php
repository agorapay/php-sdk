<?php

namespace CAPSPaymentApi;

/**
 * Description of class TransPaymentMethod.
 */
class TransPaymentMethod
{
    /**
     * Id of the payment method.
     * @var string $id Id of the payment method
     */
    public $id;

    /**
     * Constructor
     * @param string id
     */
    public function __construct($id)
    {
        $this->id = $id;
    }
}
