<?php

namespace CAPSPaymentApi;

/**
 * Description of class UnregisterAccountHolderOptions. Used for call api /accountHolder/uploadDocument
 * 
 */
class UploadDocumentAccountHolderOptions
{

    /**
     * Document requirement for registration (required).
     * @var array $requirements contain instances of class \CAPSPaymentApi\Requirement().
     */
    public $requirements;

    /**
     * ID to identify processing request (required)
     * @var string $requestId  ID to identify processing request (required)
     */
    public $requestId;

    /**
     * Constructor
     * @param array $requirements (required)
     * @param string $requestId (required)
    
     * 
     */
    public function __construct($requirements, $requestId)
    {
        $this->requirements = $requirements;
        $this->requestId = $requestId;
       
    }
}
