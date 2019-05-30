<?php

$secretKey = 'YOUR SECRET KEY'; //the secret key will be provided by MundiPagg.
$basicAuthPassword = ''; //fill it with an empty string

$apiClient = new \MundiAPILib\MundiAPIClient(
    $secretKey,
    $basicAuthPassword
);

$customerController = $apiClient->getCustomers();

$request = new \MundiAPILib\Models\UpdateCustomerRequest();
$request->name = "Peter Parker";
$request->email = "parker@avengers.com";

$customerId = "cus_ExAmPlExxxxxxxxx";

$result = $customerController->updateCustomer($customerId, $request);

return $result;