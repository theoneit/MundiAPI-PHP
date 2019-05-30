<?php

$apiClient = new \MundiAPILib\MundiAPIClient(
    $testSecretKey,
    ''
);

$plansController = $apiClient->getPlans();

$request = new \MundiAPILib\Models\CreatePlanRequest();
$request->name = "Plano Gold";
$request->currency = "BRL";
$request->interval = "month";
$request->intervalCount = 3;
$request->billingType = "prepaid";
$request->minimumPrice = 10000;
$request->installments = [3];
$request->paymentMethods = ["credit_card", "boleto"];
$request->items = [
    new \MundiAPILib\Models\CreatePlanItemRequest(),
    new \MundiAPILib\Models\CreatePlanItemRequest()
];
// Plan Item 1
$request->items[0]->name = "Musculação";
$request->items[0]->quantity = 1;
$request->items[0]->pricingScheme = new \MundiAPILib\Models\CreatePricingSchemeRequest();
$request->items[0]->pricingScheme->price = 18990;
$request->items[0]->price = 18990;
// Plan Item 2
$request->items[1]->name = "Matrícula";
// Matrícula ira cobrar apenas 1 vez-> Após a primeira cobrança, nao será mais cobrado
$request->items[1]->cycles = 1;
$request->items[1]->quantity = 1;
$request->items[1]->pricingScheme = new \MundiAPILib\Models\CreatePricingSchemeRequest();
$request->items[1]->pricingScheme->price = 5990;
$request->items[1]->price = 18990;

$result = $plansController->createPlan($request);

return $result;