<?php

$secretKey = 'YOUR SECRET KEY'; //the secret key will be provided by MundiPagg.
$basicAuthPassword = ''; //fill it with an empty string

$apiClient = new \MundiAPILib\MundiAPIClient(
    $secretKey,
    $basicAuthPassword
);

$recipientsController = $apiClient->getRecipients();

$request = new \MundiAPILib\Models\CreateTransferRequest();
$request->amount = 100;

$recipientId = "rp_ExAmPlExxxxxxxxx";

$result = $recipientsController->createTransfer($recipientId, $request);

return $result;