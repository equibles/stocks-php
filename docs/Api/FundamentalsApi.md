# EquiblesStocks\FundamentalsApi

All URIs are relative to *https://api.equibles.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**dividends**](FundamentalsApi.md#dividends) | **GET** /stocks/fundamentals/dividends | Dividends
[**financialReports**](FundamentalsApi.md#financialreports) | **GET** /stocks/fundamentals/financialreports | Financial Statements

# **dividends**
> \EquiblesStocks\Models\FundamentalsResponse dividends($apiKey, $fullTicker, $page, $pageSize)

Dividends

Get the dividends for a given stock.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Query String
$config = EquiblesStocks\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EquiblesStocks\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');

$apiInstance = new EquiblesStocks\Clients\FundamentalsApi(
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
    $result = $apiInstance->dividends($apiKey, $fullTicker, $page, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FundamentalsApi->dividends: ', $e->getMessage(), PHP_EOL;
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

[**\EquiblesStocks\Models\FundamentalsResponse**](../Model/FundamentalsResponse.md)

### Authorization

[Query String](../../README.md#Query String)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **financialReports**
> \EquiblesStocks\Models\FundamentalsResponse financialReports($apiKey, $fullTicker, $year, $fiscalPeriod, $page, $pageSize)

Financial Statements

List the financial statements for a given stock.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Query String
$config = EquiblesStocks\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EquiblesStocks\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');

$apiInstance = new EquiblesStocks\Clients\FundamentalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apiKey = "apiKey_example"; // string | 
$fullTicker = "fullTicker_example"; // string | The fully qualified ticker of the stock. Example: AAPL.XNAS
$year = 56; // int | The year of the report.
$fiscalPeriod = new \EquiblesStocks\Models\FiscalPeriod(); // \EquiblesStocks\Models\FiscalPeriod | The fiscal period of the report.
$page = 1; // int | The number of the page to request.
$pageSize = 50; // int | The number of elements in each page. Max value: 50.

try {
    $result = $apiInstance->financialReports($apiKey, $fullTicker, $year, $fiscalPeriod, $page, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FundamentalsApi->financialReports: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **apiKey** | **string**|  |
 **fullTicker** | **string**| The fully qualified ticker of the stock. Example: AAPL.XNAS |
 **year** | **int**| The year of the report. |
 **fiscalPeriod** | [**\EquiblesStocks\Models\FiscalPeriod**](../Model/.md)| The fiscal period of the report. |
 **page** | **int**| The number of the page to request. | [optional] [default to 1]
 **pageSize** | **int**| The number of elements in each page. Max value: 50. | [optional] [default to 50]

### Return type

[**\EquiblesStocks\Models\FundamentalsResponse**](../Model/FundamentalsResponse.md)

### Authorization

[Query String](../../README.md#Query String)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

