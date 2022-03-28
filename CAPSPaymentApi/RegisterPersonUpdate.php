<?php

namespace CAPSPaymentApi;

/**
 * Person information for register update.
 */

class RegisterPersonUpdate
{
    /**
     * @var string $id Previous ID provided in register response of physical person to update. If absent, a new person is added
     */
    public $id;

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
     * @var string $email email (required)
     */
    public $email;

    /**
     * @var string $phoneNumber (required)
     */
    public $phoneNumber;

    /**
     * @var string $birthDate format YYYYMMDD (required)
     */
    public $birthDate;

    /**
     * @var array $roles. Contains Intance of class \CAPSPaymentApi\Role() (required)
     */
    public $roles;

    /**
     * Constructor
     * @param string $id
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
        $email,
        $phoneNumber,
        $roles,
        $birthDate,
        $id = ""
    ) {
        $this->id = $id;
        $this->gender = $gender;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->phoneNumber = $phoneNumber;
        $this->roles = $roles;
        $this->birthDate = $birthDate;
    }
}
