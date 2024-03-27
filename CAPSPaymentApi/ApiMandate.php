<?php

namespace CAPSPaymentApi;

/**
 * Class to management CAPSPaymentApi for ApiMandate
 */
class ApiMandate extends Librairies\ApiBase
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
	 * Call api /mandate/create
	 * Generate a new direct debit mandate without payment
	 *
	 * @param object $createMandateOptions Instance of class \CAPSPaymentApi\CreateMandateOptions
	 * @return object Response data
	 */
	public function create($createMandateOptions)
	{

		try {

			$endPoint = '/mandate/create';
			return $this->filterObject($endPoint, $createMandateOptions);

		} catch(\Exception $exception) {
			return $this->getMsgException($exception);
		}

	}

	/**
	 * Call api /mandate/update
	 * Update existing SEPA Direct Debit mandate with information like Unique Mandate Reference (UMR)
	 *
	 * @param object $updateMandateOptions Instance of class \CAPSPaymentApi\UpdateMandateOptions
	 * @return object Response data
	 */
	public function update($updateMandateOptions)
	{

		try {

			$endPoint = '/mandate/update';
			return $this->filterObject($endPoint, $updateMandateOptions);

		} catch(\Exception $exception) {
			return $this->getMsgException($exception);
		}

	}


}