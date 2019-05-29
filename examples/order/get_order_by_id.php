<?php

\MundiAPILib\Configuration::$basicAuthPassword = '';

$apiClient = new \MundiAPILib\MundiAPIClient(
    'YOUR SECRET KEY',
    ''
);

$orderController = $apiClient->getOrders();

$result = $orderController->getOrder("or_5dak14yI3fy4RL72");

echo json_encode($result, JSON_PRETTY_PRINT);