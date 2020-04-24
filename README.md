# Payrobot PHP SDK

# Introduction
Accept, store, send or forward Bitcoin, Litecoin and Bitcoin Cash for your website or app and protect your privacy.

Supported crytocurrencies:
  * BTC Bitcoin
  * LTC Litecoin
  * BCH Bitcoin Cash


## Benefits

  * **Anonymous** No personal details are required and transactions are mixed among all payments. You can forward your payments so as soon payrobot.io receives it forwards it to another address under your control.
  
  * **No Registration** No registration, sign-up, application or form required to use payrobot.io
  
  * **Easy Integration** Integrate your web / app through our simple RESTful API, you can accept payments with just one line of code!
  
  * **Instant Payment Notification** Our servers notify your web / app the status of your payments. No polling, daemons or cronjobs required on your side!
  
  * **Secure** Payrobot.io works with SSL and bank-level security protocols. Your transactions are safe!


## Features
**Payment Forward**
Generate one-time addresses to recieve payments. Payrobot will notify your web /app through callbacks (webhooks) the status of the payment. As soon as it's confirmed the payment is forwarded to your desired address.

**Wallet**
Receive, send payments and store your coins in a secure, private and anonymous wallet. All events are notified to your web / app through callbacks (webhooks). You can generate wallets with just one line of code without registration or further information

## Fees
**Only 0.90% per inbound transaction** (receive payments), NO HIDDEN FEES. All outbound transactions (send funds) are totally free.

Minimum fees applies, therefore the largest amount is going to be considered as fee either: `(inboundAmount*feePct)` or `the minimum fee`

**Inbound Fees (Receive payments)**

  - `Bitcoin` 0.90% *(Minimum fee 0.00005 BTC)*
  - `Litecoin` 0.90% *(Minimum fee 0.0005 LTC)*
  - `Bitcoin Cash` 0.90% *(Minimum fee 0.0005 BCH)*
  

**Outbound Fees (Send funds)**

  - `Bitcoin` 0.00%
  - `Litecoin` 0.00%
  - `Bitcoin Cash` 0.00%


## Rate Limit
To guarantee the good performance of the service and its fair use. The API is **limited to receiving 120 requests per minute per IP**, which is sufficient for most use cases.

Payrobot.io is asynchronous in most API methods to communicate with your application through callbacks (webhooks), thus reducing unnecessary calls to the service.

**If the limit is exceeded, the IP will be banned for 1 minute.**

If you require an upper limit for your application, do not hesitate to contact us

## Considerations

  * Amounts in responses are expresed as `strings`
  
  * Wallets are not multi-currency, you have to create a different wallet per cryptocurrency (You can't store Litecoin in a Bitcoin wallet and vice-versa)
  
  * Payment forwarding has to be of the same type of currency (You can't forward a Bitcoin Cash payment to a Bitcoin address and vice-versa)
  


This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: 1.0
- Build package: org.openapitools.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage

### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/payrobot/payrobot-php.git"
    }
  ],
  "require": {
    "payrobot/payrobot-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```bash
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Payrobot\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$currency = 'currency_example'; // string | Object Currency:   * `btc`: Bitcoin   * `ltc`: Litecoin   * `bch`: Bitcoin Cash
$type = 0; // int | * `0: Receive and forward` payment is forwarded to a desired coin address once it's confirmed  * `1: Receive and store` payment is stored in a payrobot.io wallet
$destination = 'destination_example'; // string | * For `Receive and forward` payment is the `ADDRESS` where the payment is going to be forwarded as soon as it's confirmed. **ADDRESS HAVE TO BE OF THE SAME TYPE OF CURRENCY**  * For `Receive and store` payment is the payrobot.io `WALLET ID` where the payment is going to be stored as soon as it's confirmed. **WALLET HAVE TO BE OF THE SAME TYPE OF CURRENCY**
$amount = 3.4; // float | Amount of the payment
$callback = 'callback_example'; // string | Your URL where payrobot.io will send the status of the payment (Webhook)
$reference = 'reference_example'; // string | Optional custom reference to identify the payment

try {
    $result = $apiInstance->createPayment($currency, $type, $destination, $amount, $callback, $reference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->createPayment: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.payrobot.io*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*PaymentApi* | [**createPayment**](docs/Api/PaymentApi.md#createpayment) | **POST** /{currency}/payments | Generate a new one-use address to receive a payment
*PaymentApi* | [**getPayment**](docs/Api/PaymentApi.md#getpayment) | **GET** /{currency}/payments/{paymentId} | Get detailed information about a payment
*WalletApi* | [**createWallet**](docs/Api/WalletApi.md#createwallet) | **POST** /{currency}/wallets | Create new wallet
*WalletApi* | [**createWalletSendRequest**](docs/Api/WalletApi.md#createwalletsendrequest) | **POST** /{currency}/wallets/{walletId}/send-requests | Send funds from a wallet
*WalletApi* | [**getWallet**](docs/Api/WalletApi.md#getwallet) | **GET** /{currency}/wallets/{walletId} | Get Wallet information
*WalletApi* | [**getWalletHistory**](docs/Api/WalletApi.md#getwallethistory) | **GET** /{currency}/wallets/{walletId}/history | Get last transactions of wallet
*WalletApi* | [**getWalletSendRequest**](docs/Api/WalletApi.md#getwalletsendrequest) | **GET** /{currency}/wallets/{walletId}/send-requests/{requestId} | Obtain information of a send request


## Documentation For Models

 - [AddressDetail](docs/Model/AddressDetail.md)
 - [CryptoCurrency](docs/Model/CryptoCurrency.md)
 - [ErrorResponse](docs/Model/ErrorResponse.md)
 - [PaymentRequest](docs/Model/PaymentRequest.md)
 - [Wallet](docs/Model/Wallet.md)
 - [WalletCreationInfo](docs/Model/WalletCreationInfo.md)
 - [WalletHistory](docs/Model/WalletHistory.md)
 - [WalletSendRequest](docs/Model/WalletSendRequest.md)
 - [WalletTransaction](docs/Model/WalletTransaction.md)


## Documentation For Authorization

All endpoints do not require authorization.

## Author

contact@payrobot.io
