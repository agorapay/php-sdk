<?php

namespace CAPSPaymentApi;

/**
 * Description of class PayerSimple.
 */
class PayerSimple
{
    /**
     * reference of the customer from the marketplace
     * @var string $reference Reference of the customer from the marketplace
     */
    public $reference;

    /**
     * The default language of the browser. The first two characters are used to identify the language code. Must be in upper case. Only french is supported at this time.
     * @var string language 
     */
    public $language;

    /**
     * Constructor
     * @param string $reference
     */
    public function __construct($reference, $language = "")
    {
        $this->reference = $reference;
        $this->language = $language;
    }
}
