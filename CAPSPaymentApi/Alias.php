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
     * Constructor
     * @param string id
     */
    public function __construct(
        $id
    ) {
        $this->id = $id;
    }
}
