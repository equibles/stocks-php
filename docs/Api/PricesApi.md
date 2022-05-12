# EquiblesStocks\PricesApi

All URIs are relative to *https://api.equibles.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**endOfDay**](PricesApi.md#endofday) | **GET** /stocks/prices/endofday | End Of Day Prices
[**intraday**](PricesApi.md#intraday) | **GET** /stocks/prices/intraday | Intraday Prices

# **endOfDay**
> \EquiblesStocks\Models\PricesResponse endOfDay($apiKey, $fullTicker, $startTime, $endTime, $sort, $page, $pageSize)

End Of Day Prices

Lists the end of day prices for a given stock.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Query String
$config = EquiblesStocks\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EquiblesStocks\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');

$apiInstance = new EquiblesStocks\Clients\PricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apiKey = "apiKey_example"; // string | 
$fullTicker = "fullTicker_example"; // string | The fully qualified ticker of the stock. Example: AAPL.XNAS
$startTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start time of the window. UTC time formatted according to ISO 8601 (i.e: 2022-02-01T13:45:17)
$endTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end time of the window. UTC time formatted according to ISO 8601 (i.e: 2022-02-01T13:45:17)
$sort = new \EquiblesStocks\Models\Sort(); // \EquiblesStocks\Models\Sort | The method of sorting the results. The sorting is based on the time axis.
$page = 1; // int | The number of the page to request.
$pageSize = 1000; // int | The number of elements in each page. Max value: 50000.

try {
    $result = $apiInstance->endOfDay($apiKey, $fullTicker, $startTime, $endTime, $sort, $page, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricesApi->endOfDay: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **apiKey** | **string**|  |
 **fullTicker** | **string**| The fully qualified ticker of the stock. Example: AAPL.XNAS |
 **startTime** | **\DateTime**| The start time of the window. UTC time formatted according to ISO 8601 (i.e: 2022-02-01T13:45:17) | [optional]
 **endTime** | **\DateTime**| The end time of the window. UTC time formatted according to ISO 8601 (i.e: 2022-02-01T13:45:17) | [optional]
 **sort** | [**\EquiblesStocks\Models\Sort**](../Model/.md)| The method of sorting the results. The sorting is based on the time axis. | [optional]
 **page** | **int**| The number of the page to request. | [optional] [default to 1]
 **pageSize** | **int**| The number of elements in each page. Max value: 50000. | [optional] [default to 1000]

### Return type

[**\EquiblesStocks\Models\PricesResponse**](../Model/PricesResponse.md)

### Authorization

[Query String](../../README.md#Query String)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **intraday**
> \EquiblesStocks\Models\PricesResponse intraday($apiKey, $fullTicker, $startTime, $endTime, $sort, $page, $pageSize)

Intraday Prices

Lists the intraday prices for a given stock with one minute precision.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Query String
$config = EquiblesStocks\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EquiblesStocks\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');

$apiInstance = new EquiblesStocks\Clients\PricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apiKey = "apiKey_example"; // string | 
$fullTicker = "fullTicker_example"; // string | The fully qualified ticker of the stock. Example: AAPL.XNAS
$startTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start time of the window. UTC time formatted according to ISO 8601 (i.e: 2022-02-01T13:45:17)
$endTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end time of the window. UTC time formatted according to ISO 8601 (i.e: 2022-02-01T13:45:17)
$sort = new \EquiblesStocks\Models\Sort(); // \EquiblesStocks\Models\Sort | The method of sorting the results. The sorting is based on the time axis.
$page = 1; // int | The number of the page to request.
$pageSize = 1000; // int | The number of elements in each page. Max value: 50000.

try {
    $result = $apiInstance->intraday($apiKey, $fullTicker, $startTime, $endTime, $sort, $page, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricesApi->intraday: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **apiKey** | **string**|  |
 **fullTicker** | **string**| The fully qualified ticker of the stock. Example: AAPL.XNAS |
 **startTime** | **\DateTime**| The start time of the window. UTC time formatted according to ISO 8601 (i.e: 2022-02-01T13:45:17) | [optional]
 **endTime** | **\DateTime**| The end time of the window. UTC time formatted according to ISO 8601 (i.e: 2022-02-01T13:45:17) | [optional]
 **sort** | [**\EquiblesStocks\Models\Sort**](../Model/.md)| The method of sorting the results. The sorting is based on the time axis. | [optional]
 **page** | **int**| The number of the page to request. | [optional] [default to 1]
 **pageSize** | **int**| The number of elements in each page. Max value: 50000. | [optional] [default to 1000]

### Return type

[**\EquiblesStocks\Models\PricesResponse**](../Model/PricesResponse.md)

### Authorization

[Query String](../../README.md#Query String)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

