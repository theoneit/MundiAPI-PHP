<?php

$apiClient = new \MundiAPILib\MundiAPIClient(
    $testSecretKey,
    ''
);

$subscriptionsController = $apiClient->getSubscriptions();

$subscriptionId = "sub_2EvZ8GdFYZhXkbe4";

$request = new \MundiAPILib\Models\CreateCancelSubscriptionRequest();
$request->cancelPendingInvoices = true;

$result = $subscriptionsController->cancelSubscription($subscriptionId, $request);

return $result;