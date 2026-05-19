<?php
namespace CAPSPaymentApi;

/**
 * Operation type labels (API 12.2.0+).
 * Use these string values in /operations/list filters (operationType) and in responses;
 * numeric identifiers are no longer used.
 *
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
    /** API string value is "Pre-autho" (hyphen only in the value, not in the PHP constant name). */
    const PreAutorization = "Pre-autho";
    const Unpaid        = "Unpaid";
    const Reject        = "Reject";
    const Fee           = "Fee";
}
