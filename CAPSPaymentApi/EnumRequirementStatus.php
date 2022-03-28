<?php
namespace CAPSPaymentApi;

/**
 * Abastract class Enum for RequirementStatus
 * @abstract
 */
abstract class EnumRequirementStatus
{
    const Missing = "MISSING";
    const Partial = "PARTIAL";
    const ToValidate = "TOVALIDATE";
    const Validated = "VALIDATED";
    const Refused = "REFUSED";
}
