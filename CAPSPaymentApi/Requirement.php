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
		 * Path to the file to upload.
     * @var string $filePath Path of the file to upload.
     */
    public $filePath;

    /**
		 * Name of the file to upload.
     * @var string $fileName Name of the file to upload.
     */
    public $fileName;

    /**
		 * Mime type of the file to upload.
     * @var string $fileMime Mime type of the file to upload.
     */
    public $fileMime;

    /**
     * Type of document (National card identity, KBIS, ...) (required)
     * @var string $fileType Type of docuemnt (National card identity, KBIS, ...) (required)
     */
    public $fileType;

    /**
     * Constructor
     * @param string $id
     * @param string $fileExt
     * @param string $filePath
     * @param string $fileName
     * @param string $fileMimle
     * @param string $fileType
     * 
     */
    public function __construct($id, $fileExt, $filePath, $fileName, $fileMime, $fileType)
    {
        $this->id = $id;
        $this->fileExt = $fileExt;
        $this->filePath = $filePath;
        $this->fileName = $fileName;
        $this->fileMime = $fileMime;
        $this->fileType = $fileType;
    }
}
