# EquiblesStocks\SectorsApi

All URIs are relative to *https://api.equibles.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**callList**](SectorsApi.md#calllist) | **GET** /stocks/sectors/list | List Sectors
[**searchStocks**](SectorsApi.md#searchstocks) | **GET** /stocks/sectors/searchstocks | List Stocks

# **callList**
> \EquiblesStocks\Models\SectorsResponse callList($apiKey)

List Sectors

Lists all the sectors.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Query String
$config = EquiblesStocks\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EquiblesStocks\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');

$apiInstance = new EquiblesStocks\Clients\SectorsApi(
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
    echo 'Exception when calling SectorsApi->callList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **apiKey** | **string**|  |

### Return type

[**\EquiblesStocks\Models\SectorsResponse**](../Model/SectorsResponse.md)

### Authorization

[Query String](../../README.md#Query String)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchStocks**
> \EquiblesStocks\Models\FinancialAssetsResponse searchStocks($apiKey, $sectorName, $industryName)

List Stocks

Lists all the stocks in a given sector/industry.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Query String
$config = EquiblesStocks\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EquiblesStocks\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');

$apiInstance = new EquiblesStocks\Clients\SectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apiKey = "apiKey_example"; // string | 
$sectorName = "sectorName_example"; // string | The name of the sector to use as filter.
$industryName = "industryName_example"; // string | The name of the industry to use as filter.

try {
    $result = $apiInstance->searchStocks($apiKey, $sectorName, $industryName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SectorsApi->searchStocks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **apiKey** | **string**|  |
 **sectorName** | **string**| The name of the sector to use as filter. | [optional]
 **industryName** | **string**| The name of the industry to use as filter. | [optional]

### Return type

[**\EquiblesStocks\Models\FinancialAssetsResponse**](../Model/FinancialAssetsResponse.md)

### Authorization

[Query String](../../README.md#Query String)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

