<?php
namespace CAPSPaymentApi;

/**
 * Abastract class Enum for PaymentMethodType
 * @abstract
 */
abstract class EnumPaymentMethodType
{
    /** Sepa Direct Debit   */
    const SepaDirectDebit = "1";
    /** Sepa Credit Transfer  */
    const SepaCreditTransfer = "2";
    /** Transfer  */
    const Transfer = "3";
    /** Card  */
    const Card = "4";
    /** SWIFT  */
    const SWIFT = "5";
    /** Sepa Direct Debit B2B  */
    const SepaDirectDebitB2B = "6";
    /** Letter of credit  */
    const LetterOfcredit = "7";
    /** Voucher  */
    const Voucher = "8";
    /** Remainder */
    const Remainder = "9";
}
