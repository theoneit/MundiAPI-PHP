<?php

$apiClient = new \MundiAPILib\MundiAPIClient(
    $testSecretKey,
    ''
);

$recipientsController = $apiClient->getRecipients();

$request = new \MundiAPILib\Models\CreateAnticipationRequest();
$request->amount = 10000;
$request->timeframe = "start";
$request->paymentDate = DateTime::createFromFormat("Y-m-d", "2020-12-12");

$recipientId = "rp_RElaP4NMCJu08V9m";

$result = $recipientsController->createAnticipation($recipientId, $request);

return $result;
