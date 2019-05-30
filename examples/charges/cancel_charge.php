<?php

$apiClient = new \MundiAPILib\MundiAPIClient(
    $testSecretKey,
    ''
);

$chargesController = $apiClient->getCharges();

$chargeId = "ch_4PAVPy2tAuxxq1aX";
$request = new \MundiAPILib\Models\CreateCancelChargeRequest();

$result = $chargesController->cancelCharge($chargeId, $request);

return $result;
