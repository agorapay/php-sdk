<?php
namespace CAPSPaymentApi;

/**
 * Enum for OrderStatus
 * @abstract
 */
abstract class EnumOrderStatus
{
    /** The order is created. */
    const Created = "created";
    /** Payment in progress. */
    const PendingPayment = "pending_payment";
    /** Payment is completed. */
    const Complete = "complete";
    /** Payment is completed but all order amount is not payed. */
    const PartialComplete = "partial_complete";
    /** The order is canceled. */
    const Canceled = "canceled";
}
