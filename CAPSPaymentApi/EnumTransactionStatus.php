<?php
namespace CAPSPaymentApi;

/**
 * Abastract class Enum for TransactionStatus
 * @abstract
 */
abstract class EnumTransactionStatus
{
    /** The transaction is just created. No payment is already made. */
    const Created = "created";
    /** Payment is in progress. */
    const InProgress = "in_progress";
    /** Payment is accepted. */
    const Accepted = "accepted";
    /** Payment confirmation is received. */
    const Completed = "completed";
    /** Payment is canceled. */
    const Canceled = "canceled";
    /** payment is refused. */
    const Refused = "refused";
    /** Payment is not performed. */
    const Abandonned = "abandonned";
}
