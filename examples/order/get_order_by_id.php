<?php

$apiClient = new \MundiAPILib\MundiAPIClient(
    $testSecretKey,
    ''
);

$orderController = $apiClient->getOrders();

$result = $orderController->getOrder("or_5dak14yI3fy4RL72");

return $result;