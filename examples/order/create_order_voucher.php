<?php

$apiClient = new \MundiAPILib\MundiAPIClient(
    $testSecretKey,
    ''
);

$orderController = $apiClient->getOrders();

$customer = new \MundiAPILib\Models\CreateCustomerRequest();
$customer->name = "sdk customer test";

$voucher = new \MundiAPILib\Models\CreateVoucherPaymentRequest();
$voucher->capture = True;
$voucher->installments = 2;
$voucher->statementDescriptor = "test descriptor";
$voucher->card = new \MundiAPILib\Models\CreateCardRequest();
$voucher->card->number = "4000000000000010";
$voucher->card->holderName = "Tony Stark";
$voucher->card->expMonth = 1;
$voucher->card->expYear = 2025;
$voucher->card->cvv = "123";

$request = new \MundiAPILib\Models\CreateOrderRequest();

$request->items = [new \MundiAPILib\Models\CreateOrderItemRequest()];
$request->items[0]->description = "Tesseract Bracelet";
$request->items[0]->quantity = 3;
$request->items[0]->amount = 1490;

$request->payments = [new \MundiAPILib\Models\CreatePaymentRequest()];
$request->payments[0]->paymentMethod = "voucher";
$request->payments[0]->voucher = $voucher;
$request->customer = $customer;

$result = $orderController->createOrder($request);

return $result;