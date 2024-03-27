<?php

namespace CAPSPaymentApi;

/**
 * Description of ReloadPayinsOptions class. Used for call api /payin/reload
 *
 * Credit payment account by PayIn SEPA Direct Debit (SDD) for B2C
 */
class ReloadPayinsOptions
{
    /**
     * accountNumber
     * @var string $accountNumber (required)
     * A string representing the account number
     */
    public $accountNumber;

    /**
     * paymentMethodAlias
     * @var string $paymentMethodAlias (required)
     * Alias identifying a previously registered payment method
     */
    public $paymentMethodAlias;

    /**
     * amount
     * @var string $amount (required)
     * Recharge amount
     */
    public $amount;

     /**
     * currency
     * @var string $currency (required)
     * Currency code in 3 characters ISO format
     */
    public $currency;

     /**
     * sequence
     * @var string $sequence (required)
     * 2 options:
        * RCUR for use of recurrent mandate
        * FNAL for last use of recurrent mandate
     * Enum: [ RCUR, FNAL ]
     */
    public $sequence;

     /**
     * reference
     * @var string $reference (required)
     * Mandate reference (mndtRef)
     */
    public $reference;

     /**
     * reason
     * @var string $reason
     * Reason of the actual reload
     */
    public $reason;

     /**
     * endToEndId
     * @var string $endToEndId
     * Use to identify transaction in SEPA transfer.
     * Autorized characters are alpha numeric, - and /.
     * Characters / and space are authorized but not in first and last position.
     * Also, two // are not allowed.
     */
    public $endToEndId;


    /**
     * Constructor
     * @param string $accountNumber (required)
     * @param string $paymentMethodAlias (required)
     * @param string $amount (required)
     * @param string $currency (required)
     * @param string $sequence (required)
     * @param string $reference (required)
     * @param string $reason
     * @param string $endToEndId
     */
    public function __construct(
        $accountNumber,
        $paymentMethodAlias,
        $amount,
        $currency,
        $sequence,
        $reference,
        $reason = '',
        $endToEndId = ''
    ) {
      $this->accountNumber      = $accountNumber;
      $this->paymentMethodAlias = $paymentMethodAlias;
      $this->amount             = $amount;
      $this->currency           = $currency;
      $this->sequence           = $sequence;
      $this->reference          = $reference;
      $this->reason             = $reason;
      $this->endToEndId         = $endToEndId;
    }
}
