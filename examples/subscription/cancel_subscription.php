<?php

$secretKey = 'YOUR SECRET KEY'; //the secret key will be provided by MundiPagg.
$basicAuthPassword = ''; //fill it with an empty string

$apiClient = new \MundiAPILib\MundiAPIClient(
    $secretKey,
    $basicAuthPassword
);

$subscriptionsController = $apiClient->getSubscriptions();

$subscriptionId = "sub_ExAmPlExxxxxxxxx";

$request = new \MundiAPILib\Models\CreateCancelSubscriptionRequest();
$request->cancelPendingInvoices = true;

$result = $subscriptionsController->cancelSubscription($subscriptionId, $request);

return $result;