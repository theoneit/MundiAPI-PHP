<?php

$apiClient = new \MundiAPILib\MundiAPIClient(
    $testSecretKey,
    ''
);

$customerController = $apiClient->getCustomers();

$request = new \MundiAPILib\Models\UpdateCustomerRequest();
$request->name = "Peter Parker";
$request->email = "parker@avengers.com";

$customerId = "cus_6l5dMWZ0hkHZ4XnE";

$result = $customerController->updateCustomer($customerId, $request);

return $result;