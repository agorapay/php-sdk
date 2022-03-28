<?php

namespace CAPSPaymentApi;

/**
 * Description of RegistrationDetailsAccountHolderOptions class. Used for call api /accountHolder/registrationDetails
 *
 */
class RegistrationDetailsAccountHolderOptions
{
    /**
     * requestId. Registration request identifier.
     * @var string $requestId  Registration request identifier. (required)
     */
    public $requestId;

    /**
     * Constructor
     * @param string $requestId
     */
    public function __construct(
        $requestId
    ) {
        $this->requestId = $requestId;
    }
}
