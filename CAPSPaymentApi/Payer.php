<?php

namespace CAPSPaymentApi;

/**
 * Description of class Payer.
 */

class Payer
{
    /**
     * IP Address of the customer
     * @var string $IPAddress IP Address of the customer
     */
    public $IPAddress;

    /**
     * reference of the customer from the marketplace
     * @var string $reference Reference of the customer from the marketplace
     */
    public $reference;

    /**
     * The browser information use to request the payment
     * @var string $userAgent The browser information use to request the payment
     */
    public $userAgent;

    /**
     * The default language of the browser. The first two characters are used to identify the language code
     * @var string $language The default language of the browser. The first two characters are used to identify the language code
     */
    public $language;

    /**
     * Constructor
     */
    public function __construct($IPAddress, $reference, $userAgent, $language)
    {
        $this->IPAddress = $IPAddress;
        $this->reference = $reference;
        $this->userAgent = $userAgent;
        $this->language = $language;
    }
}
