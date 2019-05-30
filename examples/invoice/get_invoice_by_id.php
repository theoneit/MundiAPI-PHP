<?php

$secretKey = 'YOUR SECRET KEY'; //the secret key will be provided by MundiPagg.
$basicAuthPassword = ''; //fill it with an empty string

$apiClient = new \MundiAPILib\MundiAPIClient(
    $secretKey,
    $basicAuthPassword
);

$invoicesController = $apiClient->getInvoices();

$invoiceId = "in_ExAmPlExxxxxxxxx";

$result = $invoicesController->getInvoice($invoiceId);

return $result;
