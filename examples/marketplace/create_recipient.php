<?php

$secretKey = 'YOUR SECRET KEY'; //the secret key will be provided by MundiPagg.
$basicAuthPassword = ''; //fill it with an empty string

$apiClient = new \MundiAPILib\MundiAPIClient(
    $secretKey,
    $basicAuthPassword
);

$recipientsController = $apiClient->getRecipients();

$request = new \MundiAPILib\Models\CreateRecipientRequest();
$request->name = "Tony Stark";
$request->email = "tstark@mundipagg.com";
$request->description = "Recebedor tony stark";
$request->document = "26224451990";
$request->type = "individual";
$request->defaultBankAccount = new \MundiAPILib\Models\CreateBankAccountRequest();
$request->defaultBankAccount->holderName = "Tony Stark";
$request->defaultBankAccount->holderType = "individual";
$request->defaultBankAccount->holderDocument = "26224451990";
$request->defaultBankAccount->bank = "341";
$request->defaultBankAccount->branchNumber = "12345";
$request->defaultBankAccount->branchCheckDigit = "6";
$request->defaultBankAccount->accountNumber = "12345";
$request->defaultBankAccount->accountCheckDigit = "6";
$request->defaultBankAccount->type = "checking";

$result = $recipientsController->createRecipient($request);

return $result;