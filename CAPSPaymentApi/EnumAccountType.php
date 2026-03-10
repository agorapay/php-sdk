<?php
namespace CAPSPaymentApi;

/**
 * Abstract class Enum for AccountType.
 * In /operations/list response, accountType is now a string from this list (not numeric id).
 */
abstract class EnumAccountType
{
    const principal = "principal";
    const collection = "collection";
    const waiting = "waiting";
    const suspense = "suspense";
    const change = "change";
    const commission = "commission";
    const collect = "collect";
    const cantonment = "cantonment";
    const technical = "technical";
    const reconciliation = "reconciliation";
    const cancel = "cancel";
    const freeze = "freeze";
    const voucher = "voucher";
    const reliquat = "reliquat";
    const autorization = "autorization";
    const preAutorization = "pre-autorization";
    const counterAutorization = "counter autorization";
    const counterPreAutorization = "counter pre-autorization";
    const waitingRefund = "waiting refund";
    const disbursement = "disbursement";
    const tva = "tva";
    const hit = "hit";
}
