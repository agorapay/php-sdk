CAPSPAYMENT API PHP SDK
=================================================

CAPSPAYMENT API SDK is a PHP client library to work with CAPSPAYMENT REST API.

Requirements
-------------------------------------------------
To use this SDK, you will need (as a minimum):
* PHP >= v5.3.3
* cURL (included and enabled in a standard PHP distribution)

This SDK provide an autoloader. You need to use it in your project :

    require_once '/absolute/path/sdk/api/vendor/autoload.php';

After require_once , you can instantiate the main class  :

    $api = new CAPSPaymentApi\Main();

Base Configuration
-------------------------------------------------

Set a base url for calling API :
```php
<?php
$api->Config->BaseUrl = 'https://hostname:port/version';
?>
```

Getting token
-------------------------------------------------

Before calling API, you need to get a token. Set the following variables for getting one

Set url for getting authentication token
```php
<?php
$api->Config->TokenUrl = 'https://your_url_authentication';
?>
```

Set user
```php
<?php
$api->Config->TokenUser = 'your_user';
?>
```

Set password
```php
<?php
$api->Config->TokenPassword = 'your_password';
?>
```

Example
-------------------------------------------------
```php
<?php
require_once '/absolute/path/to/sdk/api/vendor/autoload.php';

$api = new CAPSPaymentApi\Main();

$api->Config->BaseUrl = 'http://hostname:port/version';

$api->Config->TokenUrl = 'your_url';
$api->Config->TokenUser = 'your_username';
$api->Config->TokenPassword = 'your_password';

// Call paymentMethods from PayIn API
$result = $api->PayIn->paymentMethods($object);

?>
```

List SDK functions to use for API Payin
-------------------------------------------------

You will find in this table which function to used for each API "Payin" endpoint :

| Payin Endpoint      | SDK Functions | Method |
| ----------- | ----------- |----------- |
| /payin/payment      | $api->Payin->payment($object)       | POST
| /payin/paymentDetails   | $api-> Payin->paymentDetails($object)        | POST
| /payin/paymentMethods   | $api-> Payin->paymentMethods($object)        | POST
| /payin/capture   | $api-> Payin->capture($object)        | POST
| /payin/cancel   | $api-> Payin->cancel($object)        | POST
| /payin/orderDetails   | $api-> Payin->orderDetails($object)        | GET
| /payin/adjustPayment   | $api-> Payin->adjustPayment($object)        | POST
| /payin/paymentIframe   | $api-> Payin->paymentIframe($object)        | POST
| /payin/refund   | $api-> Payin->refund($object)        | POST
| /payin/mandate   | $api-> Payin->mandate($object)        | GET
| /payin/ticket   | $api-> Payin->ticket($object)        | GET


#### Examples

Here, we call API with payin/payment (Method POST)
```php
<?php
require_once '/absolute/path/sdk/api/vendor/autoload.php';

$api = new CAPSPaymentApi\Main();
$api->Config->BaseUrl = 'http://hostname:port/version';
$api->Config->TokenUrl = 'your_url';
$api->Config->TokenUser = 'your_username';
$api->Config->TokenPassword = 'your_password';

$paymentMethodObj = new \CAPSPaymentApi\PaymentPayinsOptions();
$paymentMethodObj->orderId = "2987721";
$paymentMethodObj->transactionAmount->value = "70.10";
$paymentMethodObj->transactionAmount->currency = "EUR";
$paymentMethodObj->urlRedirect = "http://www.url.fr";
$paymentMethodObj->transPaymentMethod->id = "4";

// call API with payin/payment
$result = $api->Payin->payment($paymentMethodObj);
?>
```

Here, we call API with payin/orderDetails (Method GET)
```php
<?php
require_once '/absolute/path/sdk/api/vendor/autoload.php';

$api = new CAPSPaymentApi\Main();

$api->Config->BaseUrl = 'http://hostname:port/version';
$api->Config->TokenUrl = 'your_url';
$api->Config->TokenUser = 'your_username';
$api->Config->TokenPassword = 'your_password';

// call API with payin/orderDetails
$orderDetails = new \CAPSPaymentApi\OrderDetailsPayinsOptions('4596521');
$result = $api->PayIn->orderDetails($orderDetails);
?>
```


List SDK functions to use for API Operation
-------------------------------------------------

You will find in this table which function to used for each API "Operation" endpoint :

| Operation Endpoint      | SDK Functions | Method
| ----------- | ----------- |----------- |
| /operations/list     | $api->Operation->operationList($object)       | POST


#### Example


```php
<?php
require_once '/absolute/path/sdk/api/vendor/autoload.php';

$api = new CAPSPaymentApi\Main();

$api->Config->BaseUrl = 'http://hostname:port/version';
$api->Config->TokenUrl = 'your_url';
$api->Config->TokenUser = 'your_username';
$api->Config->TokenPassword = 'your_password';

$listOperationOptions = new \CAPSPaymentApi\ListOperationOptions('10', '1', '010820101000', '281020101900', '150.00', '100.00', '123456', 'EUR', '123456', 'SDD', '234567', '345678');

// call API with /operations/list
$result = $api->Operation->operation_list($listOperationOptions);

?>
```

List SDK functions to use for API PaymentAccount
-------------------------------------------------

You will find in this table which function to used for each API "PaymentAccount" endpoint :

| PaymentAccount Endpoint      | SDK Functions | Method
| ----------- | ----------- |----------- |
| /paymentAccount/setFloorLimit      | $api->PaymentAccount->setFloorLimit($payload) | POST
| /paymentAccount/setIBAN   | $api->PaymentAccount->setIBAN($payload)        | POST
| /paymentAccount/List   | $api->PaymentAccount->List($payload)        | POST
| /paymentAccount   | $api->PaymentAccount->paymentAccount(payload)       | GET
| /paymentAccount/payoutAuto   | $api->PaymentAccount->payoutAuto(payload)       | POST
| /paymentAccount/credit   | $api->PaymentAccount->credit(payload)       | POST
| /paymentAccount/disableIBAN   | $api->PaymentAccount->disableIBAN(payload)       | POST

#### Examples

Here, we call API with paymentAccount/List (Method POST)
```php
<?php
require_once '/absolute/path/sdk/api/vendor/autoload.php';

$api = new CAPSPaymentApi\Main();

$api->Config->BaseUrl = 'http://hostname:port/version';
$api->Config->TokenUrl = 'your_url';
$api->Config->TokenUser = 'your_username';
$api->Config->TokenPassword = 'your_password';

// encode array to json object
$listPaymentAccountOptions = new \CAPSPaymentApi\ListPaymentAccountOptions('1300600000EUR01005110', 'EUR', 'A', '123456');

// call API with paymentAccount/modifyIBAN
$result = $api->PaymentAccount->List($listPaymentAccountOptions);

?>
```

Here, we call API with /paymentAccount (Method GET)
```php
<?php
require_once '/absolute/path/sdk/api/vendor/autoload.php';

$api = new CAPSPaymentApi\Main();

$api->Config->BaseUrl = 'http://hostname:port/version';
$api->Config->TokenUrl = 'your_url';
$api->Config->TokenUser = 'your_username';
$api->Config->TokenPassword = 'your_password';

// call API with /paymentAccount
$paymentAccount = new \CAPSPaymentApi\PaymentAccountOptions('1300600000EUR01005110');
$result = $api->PaymentAccount->payment_account($paymentAccount);

?>
```

List SDK functions to use for API Payout
-------------------------------------------------

You will find in this table which function to used for each API "Payout" endpoint :

| Payout Endpoint      | SDK Functions | Method
| ----------- | ----------- |----------- |
| /payout/create      | $api->Payout->create(payload)       | POST

#### Example

Here, we call API with /payout/create

```php
<?php
require_once '/absolute/path/sdk/api/vendor/autoload.php';

$api = new CAPSPaymentApi\Main();

$api->Config->BaseUrl = 'http://hostname:port/version';
$api->Config->TokenUrl = 'your_url';
$api->Config->TokenUser = 'your_username';
$api->Config->TokenPassword = 'your_password';

$createPayoutsOptions = new \CAPSPaymentApi\CreatePayoutsOptions("RefEndToEnd1", new \CAPSPaymentApi\Amount("50.00", "EUR"), "PM2021011300GLR1100", "", "test", "1300600000EUR01006110", new \CAPSPaymentApi\Comission("50.00", "1300600000EUR60002411"), "123456");

// call API with /payout/create
$result = $api->Payout->create($createPayoutsOptions);

?>
```

List SDK functions to use for API Transfer
-------------------------------------------------

You will find in this table which function to used for each API "Transfert" endpoint :

| Transfer Endpoint      | SDK Functions | Method
| ----------- | ----------- | ----------- |
| /transfer/create      | $api->Transfer->create(payload)       | POST

#### Example


```php
<?php
require_once '/absolute/path/sdk/api/vendor/autoload.php';

$api = new CAPSPaymentApi\Main();

$api->Config->BaseUrl = 'http://hostname:port/version';
$api->Config->TokenUrl = 'your_url';
$api->Config->TokenUser = 'your_username';
$api->Config->TokenPassword = 'your_password';

$createTransfersOptions = new \CAPSPaymentApi\CreateTransfersOptions("1300600000EUR01006110", new \CAPSPaymentApi\Amount("50.00", "EUR"), "", "Operation label", "1300600000EUR01004110", "ref178623786");

// call API with /transfert/create
$result = $api->Transfer->create($createTransfersOptions);

?>
```

List SDK functions to use for API AccountHolder
-------------------------------------------------

You will find in this table which function to used for each API "AccountHolder" endpoint :

| Transfer Endpoint      | SDK Functions | Method
| ----------- | ----------- | ----------- |
| /accountHolder/register      | $api->AccountHolder->register(payload)       | POST
| /accountHolder/update      | $api->AccountHolder->update(payload)       | POST
| /accountHolder/uploadDocument      | $api->AccountHolder->uploadDocument(payload)       | POST
| /accountHolder/registrationDetails      | $api->AccountHolder->registrationDetails(payload)       | GET
| /accountHolder/unregister      | $api->AccountHolder->unregister(payload)       | POST

#### Example

Here, we call API with /accountHolder/register (Method POST)
```php
<?php
require_once '/absolute/path/sdk/api/vendor/autoload.php';

$api = new CAPSPaymentApi\Main();

$api->Config->BaseUrl = 'http://hostname:port/version';
$api->Config->TokenUrl = 'your_url';
$api->Config->TokenUser = 'your_username';
$api->Config->TokenPassword = 'your_password';

$registerAccountHolder = new \CAPSPaymentApi\RegisterAccountHolderOptions("123456", "reason", "compagny", "FRA", "SA", "4252378780001", new \CAPSPaymentApi\RegisterAddress("5 rue de blabla", 'City', '75019', 'FRA'), new \CAPSPaymentApi\RegisterAddress("5 rue de blabla", 'City', '75019', 'FRA'), "2020", "Y", new \CAPSPaymentApi\RegisterPerson('moi', 'moi', 'F', 'email@email.fr', '010101010101', array(new \CAPSPaymentApi\Role('BE'), new \CAPSPaymentApi\Role('MD')), '19800101'), new \CAPSPaymentApi\RegisterAccount('FRA', 'EUR', 'FR7611808009101234567890147', '230.00'));

// call API with /accountHolder/register
$result = $api->AccountHolder->register($registerAccountHolder);

?>
```

Here, we call API with /accountHolder/registrationDetails (Method GET)
```php
<?php
require_once '/absolute/path/sdk/api/vendor/autoload.php';

$api = new CAPSPaymentApi\Main();

$api->Config->BaseUrl = 'http://hostname:port/version';
$api->Config->TokenUrl = 'your_url';
$api->Config->TokenUser = 'your_username';
$api->Config->TokenPassword = 'your_password';

// call API with /accountHolder/registrationDetails
$registrationDetails = new \CAPSPaymentApi\RegistrationDetailsAccountHolderOptions('CAPS202201120YYEX1');
$result = $api->AccountHolder->registrationDetails($registrationDetails);

?>
```
