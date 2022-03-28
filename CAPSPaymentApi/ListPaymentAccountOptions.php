<?php

namespace CAPSPaymentApi;

/**
 * Description of ListPaymentAccountOptions class. Used for call api /paymentAccount/List
 *
 */
class ListPaymentAccountOptions
{
    /**
     * @var string $accountNumber A string representing the account number
     */
    public $accountNumber;

    /**
     * @var string $currency Currency code in 3 characters ISO format
     */
    public $currency;

    /**
     * @var string $accountStatus The status of the account
     */
    public $accountStatus;

    /**
     * @var string $sellerReference Account reference
     */
    public $sellerReference;

    /**
     * Numbers of ligne in reporting. Limited to 100. Default value 50.
     * @var string $pagination Numbers of ligne in reporting. Limited to 100. Default value 50.
     */
    public $pagination;

    /**
     * Start response line. Set to 0 when not indicated
     * @var string offset Start response line. Set to 0 when not indicated
     */
    public $offset;

    /**
     * Constructor
     * @param string $accountNumber
     * @param string $currency
     * @param string $accountStatus
     * @param string $sellerReference
     * @param string $pagination
     * @param string $offset
     */
    public function __construct(
        $accountNumber = "",
        $currency = "",
        $accountStatus = "",
        $sellerReference = "",
        $pagination = "",
        $offset = ""
    ) {
        $this->accountNumber = $accountNumber;
        $this->currency = $currency;
        $this->accountStatus = $accountStatus;
        $this->sellerReference = $sellerReference;
        $this->pagination = $pagination;
        $this->offset = $offset;
    }
}
