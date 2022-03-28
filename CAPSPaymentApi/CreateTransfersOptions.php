<?php

namespace CAPSPaymentApi;

/**
 * Description of class CreateTransfersOptions. Used for call api transfer/create
 * The data structure to make a transfer Resquest
 *
 */

class CreateTransfersOptions
{
    /**
     * @var string $accountCptNumber A string representing the account number (required)
     */
    public $accountCptNumber;

    /**
     * @var object $transferAmount Instance of class \CAPSPaymentApi\Amount() (required)
     */
    public $transferAmount;

    /**
     * @var object $metaData Instance of class \CAPSPaymentApi\Metadata(). JSON data for the marketplace. This data is not used by payment system
     */
    public $metaData;

    /**
     * @var string $reason Operation label transmited in payment system (required)
     */
    public $reason;

    /**
     * @var string $accountNumber A string representing the account number (required)
     */
    public $accountNumber;

    /**
     * @var string $orderRef Marketplace reference for this order
     */
    public $orderRef;

    /**
     * Constructor
     * @param string $accountCptNumber (required)
     * @param object $transferAmount (required)
     * @param string $accountNumber (required)
     * @param object $metaData
     * @param string $reason (required)
     * @param string $orderRef
     */
    public function __construct(
        $accountCptNumber,
        $transferAmount,
        $accountNumber,
        $reason,
        $metaData = "",
        $orderRef = ""
    ) {
        $this->accountCptNumber = $accountCptNumber;
        $this->transferAmount = $transferAmount;
        $this->metaData = $metaData;
        $this->reason = $reason;
        $this->accountNumber = $accountNumber;
        $this->orderRef = $orderRef;
    }
}
