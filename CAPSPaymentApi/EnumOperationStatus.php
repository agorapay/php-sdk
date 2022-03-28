<?php
namespace CAPSPaymentApi;

/**
 * Abastract class Enum for OperationStatus
 * @abstract
 */
abstract class EnumOperationStatus
{
  const Registered = 'registered';
  const Waiting = 'waiting';
  const Cashed = 'cashed';
  const Cancelled = 'cancelled';
  const Suspended = 'suspended';
  const Rejected = 'rejected';
}

