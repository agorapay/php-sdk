<?php

namespace CAPSPaymentApi;

/**
 * Description of class BreakDown.
 */
class BreakDown
{
    /**
     * Label.
     * @var string $label
     */
    public $label = null;

    /**
     * SellerAccountNumber.
     * @var string $sellerAccountNumber
     */
    public $sellerAccountNumber = null;

    /**
     * Amount.
     * @var object $amount Instance of class Amount
     */
    public $amount = null;

    /**
     * Comission.
     * @var object $commission Instance of class Comission
     */
    public $commission = null;

    /**
     * Constructor
     * @param string $label
     * @param string $sellerAccountNumber
     * @param object $amount
     * @param object $commission
     *
     */
    public function __construct(
        $label,
        $sellerAccountNumber,
        $amount,
        $commission
    ) {
        $this->label = $label;
        $this->sellerAccountNumber = $sellerAccountNumber;
        $this->amount = $amount;
        $this->commission = $commission;
    }
}
