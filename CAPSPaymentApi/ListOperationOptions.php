<?php

namespace CAPSPaymentApi;

/**
 * Description of class ListOperationOptions. Used for call api operations/list
 *
 */
class ListOperationOptions
{
    /**
     * @var string $pagination Numbers of ligne in reporting. Limited to 100
     */
    public $pagination;

    /**
     * @var string $offset Start response line. Set to 0 when not indicated
     */
    public $offset;

    /**
     * @var string $startDate Begin date of operation reporting in YYYYMMDDHHMMSS format
     */
    public $startDate;

    /**
     * @var string $endDate Ended Date of operation Reporting in YYYYMMDDHHMMSS format
     */
    public $endDate;

    /**
     * @var string $maxAmount Maximum amount
     */
    public $maxAmount;

    /**
     * @var string $minAmount Minimum amount
     */
    public $minAmount;

    /**
     * @var string $orderReference Marketplace reference for this order
     */
    public $orderReference;

    /**
     * @var string $currency Currency code in 3 characters ISO format
     */
    public $currency;

    /**
     * @var string $transactionId Id of the payment transaction.
     */
    public $transactionId;

    /**
     * @var string $paymentMethodKey Key identifier of the payment method type id
     */
    public $paymentMethodKey;

    /**
     * @var string $sellerAccountNumber Account number of the merchant
     */
    public $sellerAccountNumber;

    /**
     * @var string $parentAccountNumber A string representing the account number
     */
    public $parentAccountNumber;

    /**
     * Operation type filter (string label, not numeric id — API 12.2.0+).
     * Use values from \CAPSPaymentApi\EnumOperationType.
     * @var string $operationType
     */
    public $operationType;

    /**
     * Operation status filter.
     * Use values from \CAPSPaymentApi\EnumOperationStatus.
     * @var string $operationStatus
     */
    public $operationStatus;

    /**
     * Internal remittance filter (operationsListRequest — OpenAPI 12.2.0).
     * @var string $internalRemittance
     */
    public $internalRemittance;

    /**
     * Constructor
     * @param string $parentAccountNumber
     * @param string $pagination
     * @param string $offset
     * @param string $startDate
     * @param string $endDate
     * @param string $maxAmount
     * @param string $minAmount
     * @param string $orderReference
     * @param string $currency
     * @param string $transactionId
     * @param string $paymentMethodKey
     * @param string $sellerAccountNumber
     * @param string $operationType API 12.2.0+
     * @param string $operationStatus API 12.2.0+
     */
    public function __construct(
        $parentAccountNumber = "",
        $pagination = "",
        $offset = "",
        $startDate = "",
        $endDate = "",
        $maxAmount = "",
        $minAmount = "",
        $orderReference = "",
        $currency = "",
        $transactionId = "",
        $paymentMethodKey = "",
        $sellerAccountNumber = "",
        $operationType = "",
        $operationStatus = ""
    ) {
        $this->pagination = $pagination;
        $this->offset = $offset;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->maxAmount = $maxAmount;
        $this->minAmount = $minAmount;
        $this->orderReference = $orderReference;
        $this->currency = $currency;
        $this->transactionId = $transactionId;
        $this->paymentMethodKey = $paymentMethodKey;
        $this->sellerAccountNumber = $sellerAccountNumber;
        $this->parentAccountNumber = $parentAccountNumber;
        $this->operationType = $operationType;
        $this->operationStatus = $operationStatus;
    }
}
