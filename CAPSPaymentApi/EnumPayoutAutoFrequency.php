<?php
namespace CAPSPaymentApi;

/**
 * Abastract class Enum for PayoutAutoFrequency
 * @abstract
 */
abstract class EnumPayoutAutoFrequency
{
    const Deactivate = "0";
    const OnceADay = "1";
    const OnceAWeek = "2";
    const OnceAMonth = "3";
}
