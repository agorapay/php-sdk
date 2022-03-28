<?php

namespace CAPSPaymentApi;

/**
 * Description of class Metadata.
 */

class Metadata
{
    /**
     * metadata JSON data for the marketplace. This data is not used by payment systems.
     * @var string $metadata
     */
    public $metadata;

    /**
     * Constructor
     */
    public function __construct($metadata)
    {
        $this->metadata = $metadata;
    }
}
