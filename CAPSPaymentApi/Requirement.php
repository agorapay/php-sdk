<?php

namespace CAPSPaymentApi;

/**
 * Class for Document requirement for registration in AccountHolder API
 *
 */

class Requirement
{
    /**
     * Requirement identification number (required).
     * @var string $id Requirement identification number (required)
     */
    public $id;

    /**
     * Type of file provided (JPEG, JPG, PNG, PDF, DOC).
     * @var string $fileExt  Type of file provided (JPEG, JPG, PNG, PDF, DOC)
     */
    public $fileExt;

    /**
     * Content of the document base64 encoded.
     * @var string $fileContent Content of the document base64 encoded
     */
    public $fileContent;

    /**
     * Type of docuemnt (National card identity, KBIS, ...) (required)
     * @var string $fileType Type of docuemnt (National card identity, KBIS, ...) (required)
     */
    public $fileType;

    /**
     * Constructor
     * @param string $id
     * @param string $fileExt
     * @param string $fileContent
     * @param string $fileType
     * 
     */
    public function __construct($id, $fileExt, $fileContent, $fileType)
    {
        $this->id = $id;
        $this->fileExt = $fileExt;
        $this->fileContent = $fileContent;
        $this->fileType = $fileType;
    }
}
