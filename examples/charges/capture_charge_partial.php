<?php

$apiClient = new \MundiAPILib\MundiAPIClient(
    $testSecretKey,
    ''
);

$chargesController = $apiClient->getCharges();

$chargeId = "ch_8YQ1JeTLzF8zlqWy";
$request = new \MundiAPILib\Models\CreateCaptureChargeRequest();
$request->code = "new_code";
$request->amount = 100;

$result = $chargesController->captureCharge($chargeId, $request);

return $result;
