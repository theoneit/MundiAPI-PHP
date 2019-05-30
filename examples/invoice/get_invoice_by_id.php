<?php

$apiClient = new \MundiAPILib\MundiAPIClient(
    $testSecretKey,
    ''
);

$invoicesController = $apiClient->getInvoices();

$invoiceId = "in_DKRdGqpsaVS4rmpl";

$result = $invoicesController->getInvoice($invoiceId);

return $result;
