<?php

namespace CAPSPaymentApi\Librairies;

/**
 * Configuration settings
 */
class Configuration
{
    /**
     * Main object
     * @var object $_root
     */
    public $_root;

    /**
     * Base URL to CAPSPaymentApi
     * @var string $BaseUrl
     */
    public $BaseUrl;

    /**
     * Url for getting token
     * @var string $TokenUrl
     */
    public $TokenUrl;

    /**
     * username for getting token
     * @var string $TokenUser
     */
    public $TokenUser;

    /**
     * password for getting token
     * @var string $TokenPassword
     */
    public $TokenPassword;

    /**
     * http method for getting token
     * @var string $TokenMethod
     */
    public $TokenMethod;

    /**
     * token for api authentication
     * @var string $TokenValue
     */
    public $TokenValue;

    /**
     * timestamp expiry for token
     * @var string $TokenExpiry
     */
    public $TokenExpiry;

    /**
     * token sent for api calling
     * @var string $TokenId
     */
    public $TokenId;

    /**
     * Constructor
     */
    public function __construct($root)
    {
        $this->_root = $root;
        $this->TokenMethod = "POST";
    }

    /**
     * Check configuration
     *
     */
    public function checkConfig(): void
    {
        $missingFields = "";

        if (!preg_match("/^(https:|http:|www\.)\S*/", $this->BaseUrl)) {
            $missingFields .= "Bad format for your base url.";
        }

        if (!empty($missingFields)) {
            throw new \Exception("Errors in the config : " . $missingFields);
        }
    }
}
