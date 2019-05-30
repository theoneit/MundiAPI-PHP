<?php

$apiClient = new \MundiAPILib\MundiAPIClient(
    $testSecretKey,
    ''
);

$customerController = $apiClient->getCustomers();

$customerId = "cus_G6gwy4xtJIOyNbrK";

$result = $customerController->getCards($customerId, 1, 30);

return $result;