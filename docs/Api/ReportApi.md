# CedricZiel\OpenAPI\BondoraPHP\ReportApi

All URIs are relative to *http://api.bondora.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**reportGenerateReport**](ReportApi.md#reportGenerateReport) | **POST** /api/v1/report | Request to generate specified report type for set period.
[**reportGetPublicDataset**](ReportApi.md#reportGetPublicDataset) | **GET** /api/v1/publicdataset | Provides daily public dataset of all loan data that is not covered by the data protection laws.
[**reportGetReport**](ReportApi.md#reportGetReport) | **GET** /api/v1/report/{id} | Get report data for specified report identificator.
[**reportGetReportList**](ReportApi.md#reportGetReportList) | **GET** /api/v1/reports | List of all reports



## reportGenerateReport

> \CedricZiel\OpenAPI\BondoraPHP\Model\ApiResultCreateReport reportGenerateReport($request)

Request to generate specified report type for set period.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = CedricZiel\OpenAPI\BondoraPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CedricZiel\OpenAPI\BondoraPHP\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \CedricZiel\OpenAPI\BondoraPHP\Model\ReportCreateRequest(); // \CedricZiel\OpenAPI\BondoraPHP\Model\ReportCreateRequest | 

try {
    $result = $apiInstance->reportGenerateReport($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->reportGenerateReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\CedricZiel\OpenAPI\BondoraPHP\Model\ReportCreateRequest**](../Model/ReportCreateRequest.md)|  |

### Return type

[**\CedricZiel\OpenAPI\BondoraPHP\Model\ApiResultCreateReport**](../Model/ApiResultCreateReport.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
- **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## reportGetPublicDataset

> \CedricZiel\OpenAPI\BondoraPHP\Model\ApiResultPublicDataset reportGetPublicDataset($requestLoanIds, $requestCountries, $requestRatings, $requestLoanDateFrom, $requestLoanDateTo, $requestPageSize, $requestPageNr)

Provides daily public dataset of all loan data that is not covered by the data protection laws.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = CedricZiel\OpenAPI\BondoraPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CedricZiel\OpenAPI\BondoraPHP\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$requestLoanIds = array('requestLoanIds_example'); // string[] | Specific loans to search
$requestCountries = array('requestCountries_example'); // string[] | Two letter iso code for country of origin: EE, ES, FI
$requestRatings = array('requestRatings_example'); // string[] | Bondora's rating: AA, A, B, C, D, E, F, HR
$requestLoanDateFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Loan start date from
$requestLoanDateTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Loan start date to
$requestPageSize = 56; // int | Max items in result, up to 10000
$requestPageNr = 56; // int | Result page nr

try {
    $result = $apiInstance->reportGetPublicDataset($requestLoanIds, $requestCountries, $requestRatings, $requestLoanDateFrom, $requestLoanDateTo, $requestPageSize, $requestPageNr);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->reportGetPublicDataset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestLoanIds** | [**string[]**](../Model/string.md)| Specific loans to search | [optional]
 **requestCountries** | [**string[]**](../Model/string.md)| Two letter iso code for country of origin: EE, ES, FI | [optional]
 **requestRatings** | [**string[]**](../Model/string.md)| Bondora&#39;s rating: AA, A, B, C, D, E, F, HR | [optional]
 **requestLoanDateFrom** | **\DateTime**| Loan start date from | [optional]
 **requestLoanDateTo** | **\DateTime**| Loan start date to | [optional]
 **requestPageSize** | **int**| Max items in result, up to 10000 | [optional]
 **requestPageNr** | **int**| Result page nr | [optional]

### Return type

[**\CedricZiel\OpenAPI\BondoraPHP\Model\ApiResultPublicDataset**](../Model/ApiResultPublicDataset.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## reportGetReport

> \CedricZiel\OpenAPI\BondoraPHP\Model\ApiResultReport reportGetReport($id)

Get report data for specified report identificator.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = CedricZiel\OpenAPI\BondoraPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CedricZiel\OpenAPI\BondoraPHP\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ReportId

try {
    $result = $apiInstance->reportGetReport($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->reportGetReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ReportId |

### Return type

[**\CedricZiel\OpenAPI\BondoraPHP\Model\ApiResultReport**](../Model/ApiResultReport.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## reportGetReportList

> \CedricZiel\OpenAPI\BondoraPHP\Model\ApiResultReportList reportGetReportList()

List of all reports

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = CedricZiel\OpenAPI\BondoraPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CedricZiel\OpenAPI\BondoraPHP\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->reportGetReportList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->reportGetReportList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\CedricZiel\OpenAPI\BondoraPHP\Model\ApiResultReportList**](../Model/ApiResultReportList.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

