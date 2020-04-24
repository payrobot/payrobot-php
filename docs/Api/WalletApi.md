# Payrobot\WalletApi

All URIs are relative to *https://api.payrobot.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createWallet**](WalletApi.md#createWallet) | **POST** /{currency}/wallets | Create new wallet
[**createWalletSendRequest**](WalletApi.md#createWalletSendRequest) | **POST** /{currency}/wallets/{walletId}/send-requests | Send funds from a wallet
[**getWallet**](WalletApi.md#getWallet) | **GET** /{currency}/wallets/{walletId} | Get Wallet information
[**getWalletHistory**](WalletApi.md#getWalletHistory) | **GET** /{currency}/wallets/{walletId}/history | Get last transactions of wallet
[**getWalletSendRequest**](WalletApi.md#getWalletSendRequest) | **GET** /{currency}/wallets/{walletId}/send-requests/{requestId} | Obtain information of a send request



## createWallet

> \Payrobot\Model\WalletCreationInfo createWallet($currency)

Creates a new wallet where you can receive, store and send funds for your web or app.

---
## Important
This method returns your `Wallet Passphrase`, it will be required when you send funds from your wallet. **Please keep it safe and private**

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Payrobot\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$currency = 'btc'; // string | Object Currency:   * `btc`: Bitcoin   * `ltc`: Litecoin   * `bch`: Bitcoin Cash

try {
    $result = $apiInstance->createWallet($currency);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->createWallet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**| Object Currency:   * &#x60;btc&#x60;: Bitcoin   * &#x60;ltc&#x60;: Litecoin   * &#x60;bch&#x60;: Bitcoin Cash |

### Return type

[**\Payrobot\Model\WalletCreationInfo**](../Model/WalletCreationInfo.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createWalletSendRequest

> \Payrobot\Model\WalletSendRequest createWalletSendRequest($currency, $walletId, $destination, $walletPassphrase, $callback)

Send funds from a wallet to one or multiple addresses.

---
## Important

  * Send requests are commonly queued, optionally you can specify a callback to get your web / app notified as soon as the request has been fully broadcasted to the Network.

  * Transaction is limited to `25` destination addresses per request

  * Tx Hash is provided only through the callback

  * Confirmed send requests information is `DELETED`
after `3 days` of being confirmed

---
## Minimum Send Amounts


  * `Bitcoin`: 0.0001 BTC
  * `Litecoin`: 0.001 LTC
  * `Bitcoin Cash`: 0.001 BCH

---
## Callback
Send requests are commonly queued, optionally you can specify a callback to get your web / app notified as soon as the request has been fully broadcasted to the Network.

The callback sent to your callback url is a **POST** request with the following parameters:


*Example:*

    currency:     "BTC"
    walletId:     "698fd3f6-5482-4798-8a46-6732af440616"
    requestId:    "123fd3f6-9078-5790-4f40-6932bf440120"
    timestamp:    1577179288
    lastupdate:   1577179388
    amount:       "0.01"
    callback:     "https://callback-url.com"
    destination:  '[{"address": "bc1qf6ss0qtdn5q42..."
                  "amount": "0.01"}]'
    txid:         "2cdac43e92e65cb428e3ed992bcf61347..."
    status:       0


### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Payrobot\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$currency = 'btc'; // string | Object Currency:   * `btc`: Bitcoin   * `ltc`: Litecoin   * `bch`: Bitcoin Cash
$walletId = '9df3f909-088d-4724-b34f-9a587c5ccc15'; // string | Wallet where funds to send are stored
$destination = [["address" => "bc1q5defveu0acrf87m3huwxjq6pqaszdjf3d4ej9y","amount" => 0.01],["address" => "bc1qs59a7e23zpjm0znteytrxvj839dlp205e50zch","amount" => 0.056]]
; // string | Array with all the destination addres(es) and the amount(s) to send
$walletPassphrase = '6547265n4xefhdkjfhe8754574rtiuehfkwjhe385yegfeiur847gr4'; //Passphrase obtained when you created the wallet
$callback = 'https://your-app-url.com/example'; // string | Optional callback to notify your web / app as soon as the send request has been fully broadcasted to the Network

try {
    $result = $apiInstance->createWalletSendRequest($currency, $walletId, $destination, $walletPassphrase, $callback);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->createWalletSendRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**| Object Currency:   * &#x60;btc&#x60;: Bitcoin   * &#x60;ltc&#x60;: Litecoin   * &#x60;bch&#x60;: Bitcoin Cash |
 **walletId** | **string**| Wallet where funds to send are stored |
 **destination** | **string**| JSON formatted array with all the destination addres(es) and the amount(s) to send\\ &#x60;[{\&quot;address\&quot;:\&quot;desired-destination-address\&quot;,\&quot;amount\&quot;:X.XXXXXXXX}, ...]&#x60; |
 **seed** | **string**| Unique random string generated by your web/app. **IT MUST BE UNIQUE PER TRANSACTION PER WALLET** |
 **token** | **string**| SHA-256 hash of the concatenated string (substituting with the proper data):\\ &#x60;walletId~destination~seed~walletPassphrase&#x60; |
 **callback** | **string**| Optional callback to notify your web / app as soon as the send request has been fully broadcasted to the Network | [optional]

### Return type

[**\Payrobot\Model\WalletSendRequest**](../Model/WalletSendRequest.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getWallet

> \Payrobot\Model\Wallet getWallet($currency, $walletId)

Get detailed information from a Wallet

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Payrobot\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$currency = 'btc'; // string | Object Currency:   * `btc`: Bitcoin   * `ltc`: Litecoin   * `bch`: Bitcoin Cash
$walletId = 'a364f918-3136-43db-a79e-508a1498b7a0'; // string | ID of the desired Wallet

try {
    $result = $apiInstance->getWallet($currency, $walletId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->getWallet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**| Object Currency:   * &#x60;btc&#x60;: Bitcoin   * &#x60;ltc&#x60;: Litecoin   * &#x60;bch&#x60;: Bitcoin Cash |
 **walletId** | **string**| ID of the desired Wallet |

### Return type

[**\Payrobot\Model\Wallet**](../Model/Wallet.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getWalletHistory

> \Payrobot\Model\WalletHistory getWalletHistory($currency, $walletId)

Get last 100 transactions of the wallet

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Payrobot\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$currency = 'ltc'; // string | Object Currency:   * `btc`: Bitcoin   * `ltc`: Litecoin   * `bch`: Bitcoin Cash
$walletId = 'dd304d65-b606-4462-854b-51cdf061b00f'; // string | ID of the desired Wallet

try {
    $result = $apiInstance->getWalletHistory($currency, $walletId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->getWalletHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**| Object Currency:   * &#x60;btc&#x60;: Bitcoin   * &#x60;ltc&#x60;: Litecoin   * &#x60;bch&#x60;: Bitcoin Cash |
 **walletId** | **string**| ID of the desired Wallet |

### Return type

[**\Payrobot\Model\WalletHistory**](../Model/WalletHistory.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getWalletSendRequest

> \Payrobot\Model\WalletSendRequest getWalletSendRequest($currency, $walletId, $requestId)

Obtain detailed information about a send request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Payrobot\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$currency = 'btc'; // string | Object Currency:   * `btc`: Bitcoin   * `ltc`: Litecoin   * `bch`: Bitcoin Cash
$walletId = '9df3f909-088d-4724-b34f-9a587c5ccc15'; // string | Wallet where funds to send are stored
$requestId = '54f78565-56e2-4ece-b925-cab6ed67eb63'; // string | Send Request ID

try {
    $result = $apiInstance->getWalletSendRequest($currency, $walletId, $requestId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->getWalletSendRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**| Object Currency:   * &#x60;btc&#x60;: Bitcoin   * &#x60;ltc&#x60;: Litecoin   * &#x60;bch&#x60;: Bitcoin Cash |
 **walletId** | **string**| Wallet where funds to send are stored |
 **requestId** | **string**| Send Request ID |

### Return type

[**\Payrobot\Model\WalletSendRequest**](../Model/WalletSendRequest.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

