<?php

$apiClient = new \MundiAPILib\MundiAPIClient(
    $testSecretKey,
    ''
);

$subscriptionsController = $apiClient->getSubscriptions();

$subscriptionId = "sub_2EvZ8GdFYZhXkbe4";

$result = $subscriptionsController->getSubscription($subscriptionId);

return $result;