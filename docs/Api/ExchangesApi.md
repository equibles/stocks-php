# EquiblesStocks\ExchangesApi

All URIs are relative to *https://api.equibles.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**callList**](ExchangesApi.md#calllist) | **GET** /stocks/exchanges/list | List Exchanges
[**currencies**](ExchangesApi.md#currencies) | **GET** /stocks/exchanges/currencies | List Currencies
[**stocks**](ExchangesApi.md#stocks) | **GET** /stocks/exchanges/stocks | List Stocks

# **callList**
> \EquiblesStocks\Models\ExchangesResponse callList($apiKey)

List Exchanges

Get the list of all the exchanges supported by this API.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Query String
$config = EquiblesStocks\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EquiblesStocks\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');

$apiInstance = new EquiblesStocks\Clients\ExchangesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apiKey = "apiKey_example"; // string | 

try {
    $result = $apiInstance->callList($apiKey);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExchangesApi->callList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **apiKey** | **string**|  |

### Return type

[**\EquiblesStocks\Models\ExchangesResponse**](../Model/ExchangesResponse.md)

### Authorization

[Query String](../../README.md#Query String)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **currencies**
> \EquiblesStocks\Models\CurrenciesResponse currencies($apiKey)

List Currencies

Get the list of all the currencies supported by this API.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Query String
$config = EquiblesStocks\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EquiblesStocks\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');

$apiInstance = new EquiblesStocks\Clients\ExchangesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apiKey = "apiKey_example"; // string | 

try {
    $result = $apiInstance->currencies($apiKey);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExchangesApi->currencies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **apiKey** | **string**|  |

### Return type

[**\EquiblesStocks\Models\CurrenciesResponse**](../Model/CurrenciesResponse.md)

### Authorization

[Query String](../../README.md#Query String)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stocks**
> \EquiblesStocks\Models\FinancialAssetsResponse stocks($apiKey, $operatingMic)

List Stocks

List all the stocks in a given exchange.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Query String
$config = EquiblesStocks\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EquiblesStocks\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');

$apiInstance = new EquiblesStocks\Clients\ExchangesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apiKey = "apiKey_example"; // string | 
$operatingMic = "operatingMic_example"; // string | The operating MIC of the exchange to search.

try {
    $result = $apiInstance->stocks($apiKey, $operatingMic);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExchangesApi->stocks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **apiKey** | **string**|  |
 **operatingMic** | **string**| The operating MIC of the exchange to search. |

### Return type

[**\EquiblesStocks\Models\FinancialAssetsResponse**](../Model/FinancialAssetsResponse.md)

### Authorization

[Query String](../../README.md#Query String)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

