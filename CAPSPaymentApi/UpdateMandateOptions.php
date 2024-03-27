<?php

namespace CAPSPaymentApi;

/**
 * Description of class UpdateMandateOptions. Used for call api /mandate.update
 * Update information like Unique Mandate Reference (UMR) for an existing mandate
 * Generate a SEPA Direct debit mandate B2C or B2B, do not generate any transactions
 *
 */
class UpdateMandateOptions
{
    /**
     * @var string $reference (required)
     * minLength: 1
     * maxLength: 30
     * pattern: ^[a-zA-Z0-9]+$
     * Mandate reference
     */
    public $reference;

    /**
     * @var string mandateId (required)
     * Identifier for the mandate to update
     */
    public $mandateId;


    /**
     * Constructor
     * @param string $reference (required)
     * @param string $mandateId (required)
     */
    public function __construct(
        $reference,
        $mandateId
    ) {
        $this->reference = $reference;
        $this->mandateId = $mandateId;
    }
}
