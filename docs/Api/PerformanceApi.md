# EquiblesStocks\PerformanceApi

All URIs are relative to *https://api.equibles.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**callList**](PerformanceApi.md#calllist) | **GET** /stocks/performance/list | Performance

# **callList**
> \EquiblesStocks\Models\PerformanceResponse callList($apiKey, $fullTicker)

Performance

Returns the performance for a given stock.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Query String
$config = EquiblesStocks\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EquiblesStocks\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');

$apiInstance = new EquiblesStocks\Clients\PerformanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apiKey = "apiKey_example"; // string | 
$fullTicker = "fullTicker_example"; // string | The fully qualified ticker of the stock. Example: AAPL.XNAS

try {
    $result = $apiInstance->callList($apiKey, $fullTicker);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PerformanceApi->callList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **apiKey** | **string**|  |
 **fullTicker** | **string**| The fully qualified ticker of the stock. Example: AAPL.XNAS |

### Return type

[**\EquiblesStocks\Models\PerformanceResponse**](../Model/PerformanceResponse.md)

### Authorization

[Query String](../../README.md#Query String)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

