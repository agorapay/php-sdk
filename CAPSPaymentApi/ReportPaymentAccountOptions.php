<?php

namespace CAPSPaymentApi;

/**
 * Description of ReportPaymentAccountOptions class. Used for call api /paymentAccount/report
 *
 */
class ReportPaymentAccountOptions
{
    /**
     * accountNumber. Identifier of the account to get details. Mandatory if type ACCOUNT_STATEMENT.
     * @var string $transactionId Identifier of the account to get details. Mandatory if type ACCOUNT_STATEMENT
     */
    public $accountNumber;

    /**
     * type. Type of report. Can be one of following value: ACCOUNT_STATEMENT, INVOICE, IC_FEE_REPORT
     * @var string $reference Type of report. Can be one of following value: ACCOUNT_STATEMENT, INVOICE, IC_FEE_REPORT (required)
     */
    public $type;

    /**
     * format. Format of the report: 
     * P: PDF format , C: CSV format (not yet implemented)
     * @var string $format Format of the report (required)
     */
    public $format;

    /**
     * Year of the report in AAAA format. Must be less or equal to the current year.
     * @var string $year Year of the report in AAAA format. Must be less or equal to the current year (required)
     * 
     */
    public $year;

    /**
     * Month of the report in MM format. Must be less or equal to the current month
     * @var string month Month of the report in MM format. Must be less or equal to the current month (Available values : 01, 02, 03, 04, 05, 06, 07, 08, 09, 10, 11, 12) (required)
     */
    public $month;

    /**
     * Constructor
     * @param string $accountNumber
     * @param string $type
     * @param string $format
     * @param string $year
     * @param string $month
     */
    public function __construct(
        $accountNumber,
        $type,
        $format,
        $year,
        $month
    ) {
        $this->accountNumber = $accountNumber;
        $this->type = $type;
        $this->format = $format;
        $this->year = $year;
        $this->month = $month;
    }
}
