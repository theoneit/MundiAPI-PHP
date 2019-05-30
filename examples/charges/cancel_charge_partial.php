<?php

$apiClient = new \MundiAPILib\MundiAPIClient(
    $testSecretKey,
    ''
);

$chargesController = $apiClient->getCharges();

$chargeId = "ch_xvrd7kOuRZfnQdz0";
$request = new \MundiAPILib\Models\CreateCancelChargeRequest();
$request->amount = 100;

$result = $chargesController->cancelCharge($chargeId, $request);

return $result;

