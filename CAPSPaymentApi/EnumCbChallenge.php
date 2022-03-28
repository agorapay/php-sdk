<?php
namespace CAPSPaymentApi;

/**
 * Abastract class Enum for CbChallenge
 * @abstract
 */
abstract class EnumCbChallenge
{
    const noPreference = "01";
    const noChallengeRequired = "02";
    const desiredChallenge = "03";
    const requiredChallenge = "04";
}