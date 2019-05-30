<?php

$apiClient = new \MundiAPILib\MundiAPIClient(
    $testSecretKey,
    ''
);

$chargesController = $apiClient->getCharges();

$chargeId = "ch_8YQ1JeTLzF8zlqWy";

$result = $chargesController->retryCharge($chargeId);

return $result;
