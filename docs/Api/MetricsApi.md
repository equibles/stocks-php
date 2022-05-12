# EquiblesStocks\MetricsApi

All URIs are relative to *https://api.equibles.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**priceToEarnings**](MetricsApi.md#pricetoearnings) | **GET** /stocks/metrics/pricetoearnings | Historical P/E

# **priceToEarnings**
> \EquiblesStocks\Models\MetricNullablePointsResponse priceToEarnings($apiKey, $fullTicker, $page, $pageSize)

Historical P/E

Get the price to earnings ratio over time for this stock.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Query String
$config = EquiblesStocks\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EquiblesStocks\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');

$apiInstance = new EquiblesStocks\Clients\MetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apiKey = "apiKey_example"; // string | 
$fullTicker = "fullTicker_example"; // string | The fully qualified ticker of the stock. Example: AAPL.XNAS
$page = 1; // int | The number of the page to request.
$pageSize = 1000; // int | The number of elements in each page. Max value: 1000.

try {
    $result = $apiInstance->priceToEarnings($apiKey, $fullTicker, $page, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->priceToEarnings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **apiKey** | **string**|  |
 **fullTicker** | **string**| The fully qualified ticker of the stock. Example: AAPL.XNAS |
 **page** | **int**| The number of the page to request. | [optional] [default to 1]
 **pageSize** | **int**| The number of elements in each page. Max value: 1000. | [optional] [default to 1000]

### Return type

[**\EquiblesStocks\Models\MetricNullablePointsResponse**](../Model/MetricNullablePointsResponse.md)

### Authorization

[Query String](../../README.md#Query String)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

