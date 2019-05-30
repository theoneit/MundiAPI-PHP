<?php

$apiClient = new \MundiAPILib\MundiAPIClient(
    $testSecretKey,
    ''
);

$recipientsController = $apiClient->getRecipients();

$request = new \MundiAPILib\Models\CreateTransferRequest();
$request->amount = 100;

$recipientId = "rp_RElaP4NMCJu08V9m";

$result = $recipientsController->createTransfer($recipientId, $request);

return $result;