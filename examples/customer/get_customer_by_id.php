<?php

$apiClient = new \MundiAPILib\MundiAPIClient(
    $testSecretKey,
    ''
);

$customersController = $apiClient->getCustomers();

$customerId = "cus_6l5dMWZ0hkHZ4XnE";

$result = $customersController->getCustomer($customerId);

return $result;
