<?php
namespace CAPSPaymentApi;

/**
 * Abastract class Enum for AccountType
 * @abstract
 */
abstract class EnumAccountType
{
    const principal = "1";
    const waiting = "3";
    const suspense = "4";
    const change = "5";
    const commission = "6";
    const voucher = "13";
    const reliquat = "14";
    const autorization = "15";
    const preAutorization = "16";
    
}
