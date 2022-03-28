<?php

namespace CAPSPaymentApi;

/**
 * Role of a physical person
 */

class Role
{
    /**
     * Person role
     * @var string $role Person role
     */
    public $role;

    /**
     * Constructor
     * @param string $role
     */
    public function __construct($role)
    {
        $this->role = $role;
    }
}
