<?php

$secretKey = 'YOUR SECRET KEY'; //the secret key will be provided by MundiPagg.
$basicAuthPassword = ''; //fill it with an empty string

$apiClient = new \MundiAPILib\MundiAPIClient(
    $secretKey,
    $basicAuthPassword
);

$chargesController = $apiClient->getCharges();

$chargeId = "ch_ExAmPlExxxxxxxxx";
$request = new \MundiAPILib\Models\CreateCaptureChargeRequest();
$request->code = "new_code";
$request->amount = 100;

$result = $chargesController->captureCharge($chargeId, $request);

return $result;
