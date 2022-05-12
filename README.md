# EquiblesStocks

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/equibles/stocks-php.git"
    }
  ],
  "require": {
    "equibles/stocks-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/EquiblesStocks/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *https://api.equibles.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ExchangesApi* | [**callList**](docs/Api/ExchangesApi.md#calllist) | **GET** /stocks/exchanges/list | List Exchanges
*ExchangesApi* | [**currencies**](docs/Api/ExchangesApi.md#currencies) | **GET** /stocks/exchanges/currencies | List Currencies
*ExchangesApi* | [**stocks**](docs/Api/ExchangesApi.md#stocks) | **GET** /stocks/exchanges/stocks | List Stocks
*FundamentalsApi* | [**dividends**](docs/Api/FundamentalsApi.md#dividends) | **GET** /stocks/fundamentals/dividends | Dividends
*FundamentalsApi* | [**financialReports**](docs/Api/FundamentalsApi.md#financialreports) | **GET** /stocks/fundamentals/financialreports | Financial Statements
*MetricsApi* | [**priceToEarnings**](docs/Api/MetricsApi.md#pricetoearnings) | **GET** /stocks/metrics/pricetoearnings | Historical P/E
*NewsApi* | [**callList**](docs/Api/NewsApi.md#calllist) | **GET** /stocks/news/list | List News
*NewsApi* | [**publishers**](docs/Api/NewsApi.md#publishers) | **GET** /stocks/news/publishers | List Publishers
*PerformanceApi* | [**callList**](docs/Api/PerformanceApi.md#calllist) | **GET** /stocks/performance/list | Performance
*PricesApi* | [**endOfDay**](docs/Api/PricesApi.md#endofday) | **GET** /stocks/prices/endofday | End Of Day Prices
*PricesApi* | [**intraday**](docs/Api/PricesApi.md#intraday) | **GET** /stocks/prices/intraday | Intraday Prices
*SectorsApi* | [**callList**](docs/Api/SectorsApi.md#calllist) | **GET** /stocks/sectors/list | List Sectors
*SectorsApi* | [**searchStocks**](docs/Api/SectorsApi.md#searchstocks) | **GET** /stocks/sectors/searchstocks | List Stocks
*StocksApi* | [**callList**](docs/Api/StocksApi.md#calllist) | **GET** /stocks/list | List Stocks
*StocksApi* | [**officers**](docs/Api/StocksApi.md#officers) | **GET** /stocks/officers | Officers
*StocksApi* | [**profile**](docs/Api/StocksApi.md#profile) | **GET** /stocks/profile | Profile
*StocksApi* | [**screener**](docs/Api/StocksApi.md#screener) | **POST** /stocks/screener | Screener
*StocksApi* | [**search**](docs/Api/StocksApi.md#search) | **GET** /stocks/search | Search
*StocksApi* | [**splits**](docs/Api/StocksApi.md#splits) | **GET** /stocks/splits | Splits
*TransactionsApi* | [**insiders**](docs/Api/TransactionsApi.md#insiders) | **GET** /stocks/transactions/insiders | Insider Transactions
*TransactionsApi* | [**institutional**](docs/Api/TransactionsApi.md#institutional) | **GET** /stocks/transactions/institutional | Institutional Transactions

## Documentation For Models

 - [AssetType](docs/Model/AssetType.md)
 - [BalanceSheet](docs/Model/BalanceSheet.md)
 - [CashFlowStatement](docs/Model/CashFlowStatement.md)
 - [CurrenciesResponse](docs/Model/CurrenciesResponse.md)
 - [Currency](docs/Model/Currency.md)
 - [ErrorResponse](docs/Model/ErrorResponse.md)
 - [Exchange](docs/Model/Exchange.md)
 - [ExchangesResponse](docs/Model/ExchangesResponse.md)
 - [FinancialAssetsResponse](docs/Model/FinancialAssetsResponse.md)
 - [FinancialReport](docs/Model/FinancialReport.md)
 - [FiscalPeriod](docs/Model/FiscalPeriod.md)
 - [FundamentalsResponse](docs/Model/FundamentalsResponse.md)
 - [Image](docs/Model/Image.md)
 - [IncomeStatement](docs/Model/IncomeStatement.md)
 - [Industry](docs/Model/Industry.md)
 - [MetricNullablePointsResponse](docs/Model/MetricNullablePointsResponse.md)
 - [News](docs/Model/News.md)
 - [NewsResponse](docs/Model/NewsResponse.md)
 - [NullablePoint](docs/Model/NullablePoint.md)
 - [Officer](docs/Model/Officer.md)
 - [OfficersResponse](docs/Model/OfficersResponse.md)
 - [Performance](docs/Model/Performance.md)
 - [PerformanceResponse](docs/Model/PerformanceResponse.md)
 - [Price](docs/Model/Price.md)
 - [PricesResponse](docs/Model/PricesResponse.md)
 - [Publisher](docs/Model/Publisher.md)
 - [PublishersResponse](docs/Model/PublishersResponse.md)
 - [Recommendation](docs/Model/Recommendation.md)
 - [ResponseStatus](docs/Model/ResponseStatus.md)
 - [ScreenerRequest](docs/Model/ScreenerRequest.md)
 - [Sector](docs/Model/Sector.md)
 - [SectorsResponse](docs/Model/SectorsResponse.md)
 - [Sort](docs/Model/Sort.md)
 - [SplitsResponse](docs/Model/SplitsResponse.md)
 - [StockProfile](docs/Model/StockProfile.md)
 - [StockProfileResponse](docs/Model/StockProfileResponse.md)
 - [StockProfilesResponse](docs/Model/StockProfilesResponse.md)
 - [StockSplit](docs/Model/StockSplit.md)
 - [Transaction](docs/Model/Transaction.md)
 - [TransactionType](docs/Model/TransactionType.md)
 - [TransactionsResponse](docs/Model/TransactionsResponse.md)

## Documentation For Authorization


## Query String

- **Type**: API key
- **API key parameter name**: apiKey
- **Location**: URL query string


## Author

contact@equibles.com

