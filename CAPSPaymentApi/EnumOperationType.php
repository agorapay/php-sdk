<?php
namespace CAPSPaymentApi;

/**
 * Abastract class Enum for OperationType
 * @abstract
 */
abstract class EnumOperationType
{
    const Payment = "Payment";
    const Refund = "Refund";
    const Manual = "Manual";
    const Transfer = "Transfer";
    const Purchase = "Purchase";
    const Reload = "Reload";
}
