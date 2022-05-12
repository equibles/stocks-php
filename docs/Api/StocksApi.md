# EquiblesStocks\StocksApi

All URIs are relative to *https://api.equibles.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**callList**](StocksApi.md#calllist) | **GET** /stocks/list | List Stocks
[**officers**](StocksApi.md#officers) | **GET** /stocks/officers | Officers
[**profile**](StocksApi.md#profile) | **GET** /stocks/profile | Profile
[**screener**](StocksApi.md#screener) | **POST** /stocks/screener | Screener
[**search**](StocksApi.md#search) | **GET** /stocks/search | Search
[**splits**](StocksApi.md#splits) | **GET** /stocks/splits | Splits

# **callList**
> \EquiblesStocks\Models\StockProfilesResponse callList($apiKey, $page, $pageSize)

List Stocks

Get a list of all the available stocks.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Query String
$config = EquiblesStocks\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EquiblesStocks\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');

$apiInstance = new EquiblesStocks\Clients\StocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apiKey = "apiKey_example"; // string | 
$page = 1; // int | The number of the page to request.
$pageSize = 100; // int | The number of elements in each page. Max value: 100.

try {
    $result = $apiInstance->callList($apiKey, $page, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StocksApi->callList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **apiKey** | **string**|  |
 **page** | **int**| The number of the page to request. | [optional] [default to 1]
 **pageSize** | **int**| The number of elements in each page. Max value: 100. | [optional] [default to 100]

### Return type

[**\EquiblesStocks\Models\StockProfilesResponse**](../Model/StockProfilesResponse.md)

### Authorization

[Query String](../../README.md#Query String)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **officers**
> \EquiblesStocks\Models\OfficersResponse officers($apiKey, $fullTicker)

Officers

Get the officers of the company.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Query String
$config = EquiblesStocks\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EquiblesStocks\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');

$apiInstance = new EquiblesStocks\Clients\StocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apiKey = "apiKey_example"; // string | 
$fullTicker = "fullTicker_example"; // string | The fully qualified ticker of the stock. Example: AAPL.XNAS

try {
    $result = $apiInstance->officers($apiKey, $fullTicker);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StocksApi->officers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **apiKey** | **string**|  |
 **fullTicker** | **string**| The fully qualified ticker of the stock. Example: AAPL.XNAS |

### Return type

[**\EquiblesStocks\Models\OfficersResponse**](../Model/OfficersResponse.md)

### Authorization

[Query String](../../README.md#Query String)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profile**
> \EquiblesStocks\Models\StockProfileResponse profile($apiKey, $fullTicker)

Profile

Returns the profile of a given stock.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Query String
$config = EquiblesStocks\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EquiblesStocks\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');

$apiInstance = new EquiblesStocks\Clients\StocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apiKey = "apiKey_example"; // string | 
$fullTicker = "fullTicker_example"; // string | The fully qualified ticker of the stock. Example: AAPL.XNAS

try {
    $result = $apiInstance->profile($apiKey, $fullTicker);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StocksApi->profile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **apiKey** | **string**|  |
 **fullTicker** | **string**| The fully qualified ticker of the stock. Example: AAPL.XNAS |

### Return type

[**\EquiblesStocks\Models\StockProfileResponse**](../Model/StockProfileResponse.md)

### Authorization

[Query String](../../README.md#Query String)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **screener**
> \EquiblesStocks\Models\StockProfilesResponse screener($body, $apiKey, $page, $pageSize)

Screener

Get a list of the stocks constraint to several criteria. You only need to fill the fields that you want to use as filters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Query String
$config = EquiblesStocks\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EquiblesStocks\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');

$apiInstance = new EquiblesStocks\Clients\StocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \EquiblesStocks\Models\ScreenerRequest(); // \EquiblesStocks\Models\ScreenerRequest | The criteria used to filter the search results. You only need to fill the fields that you want to use on the search.
$apiKey = "apiKey_example"; // string | 
$page = 1; // int | The number of the page to request.
$pageSize = 100; // int | The number of elements in each page. Max value: 100.

try {
    $result = $apiInstance->screener($body, $apiKey, $page, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StocksApi->screener: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\EquiblesStocks\Models\ScreenerRequest**](../Model/ScreenerRequest.md)| The criteria used to filter the search results. You only need to fill the fields that you want to use on the search. |
 **apiKey** | **string**|  |
 **page** | **int**| The number of the page to request. | [optional] [default to 1]
 **pageSize** | **int**| The number of elements in each page. Max value: 100. | [optional] [default to 100]

### Return type

[**\EquiblesStocks\Models\StockProfilesResponse**](../Model/StockProfilesResponse.md)

### Authorization

[Query String](../../README.md#Query String)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **search**
> \EquiblesStocks\Models\StockProfilesResponse search($apiKey, $text, $page, $pageSize)

Search

Search among all the available stocks.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Query String
$config = EquiblesStocks\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EquiblesStocks\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');

$apiInstance = new EquiblesStocks\Clients\StocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apiKey = "apiKey_example"; // string | 
$text = "text_example"; // string | The text to search for.
$page = 1; // int | The number of the page to request.
$pageSize = 100; // int | The number of elements in each page. Max value: 100.

try {
    $result = $apiInstance->search($apiKey, $text, $page, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StocksApi->search: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **apiKey** | **string**|  |
 **text** | **string**| The text to search for. |
 **page** | **int**| The number of the page to request. | [optional] [default to 1]
 **pageSize** | **int**| The number of elements in each page. Max value: 100. | [optional] [default to 100]

### Return type

[**\EquiblesStocks\Models\StockProfilesResponse**](../Model/StockProfilesResponse.md)

### Authorization

[Query String](../../README.md#Query String)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **splits**
> \EquiblesStocks\Models\SplitsResponse splits($apiKey, $fullTicker, $page, $pageSize)

Splits

Get all the splits for a given stock.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Query String
$config = EquiblesStocks\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EquiblesStocks\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');

$apiInstance = new EquiblesStocks\Clients\StocksApi(
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
    $result = $apiInstance->splits($apiKey, $fullTicker, $page, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StocksApi->splits: ', $e->getMessage(), PHP_EOL;
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

[**\EquiblesStocks\Models\SplitsResponse**](../Model/SplitsResponse.md)

### Authorization

[Query String](../../README.md#Query String)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

