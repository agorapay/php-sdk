<?php

namespace CAPSPaymentApi;

/**
 * Class to management CAPSPaymentApi for ApiOperations
 */
class ApiOperations extends Librairies\ApiBase
{
	/**
     * Main object.
     * @var object $_root Main object
     */
	public $_root;

	/**
     * $tokenValue
     * @var string  $tokenValue
     */
	public $tokenValue;


	public function __construct($root)
	{
		$this->_root = $root;
		
	}

	/**
	 * Call api /operations/list
	 * Get operations matching a set of criterias
	 * 
	 * @param object $listOperationOptions Instance of class \CAPSPaymentApi\ListOperationOptions  
	 * @return object Response data
	 */
	public function operationList($listOperationOptions)
	{

		try {

			$endPoint = '/operations/list';
			return $this->filterObject($endPoint, $listOperationOptions);

		} catch(\Exception $exception) {
			return $this->getMsgException($exception);
		}

	}
}