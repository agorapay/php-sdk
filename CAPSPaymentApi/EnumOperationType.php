<?php
namespace CAPSPaymentApi;

/**
 * Abastract class Enum for OperationType
 * @abstract
 */
abstract class EnumOperationType
{
    const Payment       = "Payment";
    const Refund        = "Refund";
    const Manual        = "Manual";
    const Transfer      = "Transfer";
    const Purchase      = "Purchase";
    const Reload        = "Reload";
    const Authorization = "Authorization";
    const Pre-autho     = "Pre-autho";
    const Unpaid        = "Unpaid";
    const Reject        = "Reject";
    const Fee           = "Fee";
}
