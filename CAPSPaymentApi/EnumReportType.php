<?php
namespace CAPSPaymentApi;

/**
 * Abastract class Enum for ReportType
 * @abstract
 */
abstract class EnumReportType
{
    const accountStatement = "ACCOUNT_STATEMENT";
    const invoice = "INVOICE";
    const icFeeReport = "IC_FEE_REPORT";
}
