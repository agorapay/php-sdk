<?php

namespace CAPSPaymentApi;

/**
 * Information to register a person.
 * At least one person must be provided with CP role
 */

class RegisterPerson
{
    /**
     * @var string $gender Person gender M or F (required)
     */
    public $gender;

    /**
     * @var string $firstName (required)
     */
    public $firstName;

    /**
     * @var string $lastName (required)
     */
    public $lastName;

    /**
     * @var string $email email
     */
    public $email;

    /**
     * @var string $phoneNumber
     */
    public $phoneNumber;

    /**
     * @var string $birthDate format YYYYMMDD
     */
    public $birthDate;

    /**
     * @var array $roles. Contains Intance of class \CAPSPaymentApi\Role() (required)
     */
    public $roles;

    /**
     * Constructor
     * @param string $gender
     * @param string $firstname
     * @param string $lastName
     * @param string $email 
     * @param string $phoneNumber
     * @param array  $roles
     * @param string $birthDate
     */
    public function __construct(
        $firstName,
        $lastName,
        $gender,
        $roles,
        $email = "",
        $phoneNumber = "",
        $birthDate = ""
    ) {
        $this->gender = $gender;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->phoneNumber = $phoneNumber;
        $this->roles = $roles;
        $this->birthDate = $birthDate;
    }
}
