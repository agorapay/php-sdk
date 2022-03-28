<?php

namespace CAPSPaymentApi;

/**
 * Description of class Alias.
 */
class Alias
{
    /**
     * Identifier for the alias
     * @var string $id Identifier for the alias
     */
    public $id;

    /**
     * Format MMYY
     * @var string $expirationDate Format MMYY
     */
    public $expirationDate;

    /**
     * First 6 and last 4 digits of the PAN for card or Masqued IABN for SDD
     * @var string $maskedPan First 6 and last 4 digits of the PAN for card or Masqued IABN for SDD
     */
    public $maskedPan;

    /**
     * Label of the alias
     * @var string $label Label of the alias
     */
    public $label;

    /**
     * Card brand (CB, VISA, MASTERCARD) or bank code for IBAN
     * @var string $brand Card brand (CB, VISA, MASTERCARD) or bank code for IBAN
     */
    public $brand;

    /**
     * Constructor
     * @param string id
     * @param string expirationDate
     * @param string maskedPan
     * @param string label
     * @param string brand
     */
    public function __construct(
        $id,
        $expirationDate,
        $maskedPan,
        $label,
        $brand
    ) {
        $this->id = $this->id;
        $this->expirationDate = $expirationDate;
        $this->maskedPan = $maskedPan;
        $this->label = $label;
        $this->brand = $brand;
    }
}
