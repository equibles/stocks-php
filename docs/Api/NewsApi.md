# EquiblesStocks\NewsApi

All URIs are relative to *https://api.equibles.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**callList**](NewsApi.md#calllist) | **GET** /stocks/news/list | List News
[**publishers**](NewsApi.md#publishers) | **GET** /stocks/news/publishers | List Publishers

# **callList**
> \EquiblesStocks\Models\NewsResponse callList($apiKey, $fullTicker, $publisherName, $page, $pageSize)

List News

Get the latest news for a stock.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Query String
$config = EquiblesStocks\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EquiblesStocks\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');

$apiInstance = new EquiblesStocks\Clients\NewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apiKey = "apiKey_example"; // string | 
$fullTicker = "fullTicker_example"; // string | The fully qualified ticker of the stock used to filter the results. Example: AAPL.XNAS
$publisherName = "publisherName_example"; // string | A news publisher used to filter the results.
$page = 1; // int | The number of the page to request.
$pageSize = 100; // int | The number of elements in each page. Max value: 500.

try {
    $result = $apiInstance->callList($apiKey, $fullTicker, $publisherName, $page, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsApi->callList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **apiKey** | **string**|  |
 **fullTicker** | **string**| The fully qualified ticker of the stock used to filter the results. Example: AAPL.XNAS | [optional]
 **publisherName** | **string**| A news publisher used to filter the results. | [optional]
 **page** | **int**| The number of the page to request. | [optional] [default to 1]
 **pageSize** | **int**| The number of elements in each page. Max value: 500. | [optional] [default to 100]

### Return type

[**\EquiblesStocks\Models\NewsResponse**](../Model/NewsResponse.md)

### Authorization

[Query String](../../README.md#Query String)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **publishers**
> \EquiblesStocks\Models\PublishersResponse publishers($apiKey, $page, $pageSize)

List Publishers

Get all the publishers.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Query String
$config = EquiblesStocks\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EquiblesStocks\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');

$apiInstance = new EquiblesStocks\Clients\NewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apiKey = "apiKey_example"; // string | 
$page = 1; // int | The number of the page to request.
$pageSize = 100; // int | The number of elements in each page. Max value: 1000.

try {
    $result = $apiInstance->publishers($apiKey, $page, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsApi->publishers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **apiKey** | **string**|  |
 **page** | **int**| The number of the page to request. | [optional] [default to 1]
 **pageSize** | **int**| The number of elements in each page. Max value: 1000. | [optional] [default to 100]

### Return type

[**\EquiblesStocks\Models\PublishersResponse**](../Model/PublishersResponse.md)

### Authorization

[Query String](../../README.md#Query String)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

