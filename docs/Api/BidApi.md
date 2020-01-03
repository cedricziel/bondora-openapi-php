# CedricZiel\OpenAPI\BondoraPHP\BidApi

All URIs are relative to *http://api.bondora.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bidCancelBid**](BidApi.md#bidCancelBid) | **POST** /api/v1/bid/{id}/cancel | Cancel the Bid
[**bidGetBid**](BidApi.md#bidGetBid) | **GET** /api/v1/bid/{id} | Get the Bid
[**bidGetBidSummaries**](BidApi.md#bidGetBidSummaries) | **GET** /api/v1/bids | Gets list of bids the investor has made.
[**bidMakeBids**](BidApi.md#bidMakeBids) | **POST** /api/v1/bid | Makes bid(s) into specified auction(s).



## bidCancelBid

> \CedricZiel\OpenAPI\BondoraPHP\Model\ApiResult bidCancelBid($id)

Cancel the Bid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = CedricZiel\OpenAPI\BondoraPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CedricZiel\OpenAPI\BondoraPHP\Api\BidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Bid identificator

try {
    $result = $apiInstance->bidCancelBid($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BidApi->bidCancelBid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Bid identificator |

### Return type

[**\CedricZiel\OpenAPI\BondoraPHP\Model\ApiResult**](../Model/ApiResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## bidGetBid

> \CedricZiel\OpenAPI\BondoraPHP\Model\ApiResultBid bidGetBid($id)

Get the Bid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = CedricZiel\OpenAPI\BondoraPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CedricZiel\OpenAPI\BondoraPHP\Api\BidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Bid identificator

try {
    $result = $apiInstance->bidGetBid($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BidApi->bidGetBid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Bid identificator |

### Return type

[**\CedricZiel\OpenAPI\BondoraPHP\Model\ApiResultBid**](../Model/ApiResultBid.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## bidGetBidSummaries

> \CedricZiel\OpenAPI\BondoraPHP\Model\ApiResultBids bidGetBidSummaries($requestBidStatusCode, $requestStartDate, $requestEndDate, $requestPageSize, $requestPageNr)

Gets list of bids the investor has made.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = CedricZiel\OpenAPI\BondoraPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CedricZiel\OpenAPI\BondoraPHP\Api\BidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$requestBidStatusCode = 56; // int | Bid status code
$requestStartDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date
$requestEndDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End date
$requestPageSize = 56; // int | Max items in result, up to 20000
$requestPageNr = 56; // int | Result page nr

try {
    $result = $apiInstance->bidGetBidSummaries($requestBidStatusCode, $requestStartDate, $requestEndDate, $requestPageSize, $requestPageNr);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BidApi->bidGetBidSummaries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestBidStatusCode** | **int**| Bid status code | [optional]
 **requestStartDate** | **\DateTime**| Start date | [optional]
 **requestEndDate** | **\DateTime**| End date | [optional]
 **requestPageSize** | **int**| Max items in result, up to 20000 | [optional]
 **requestPageNr** | **int**| Result page nr | [optional]

### Return type

[**\CedricZiel\OpenAPI\BondoraPHP\Model\ApiResultBids**](../Model/ApiResultBids.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## bidMakeBids

> \CedricZiel\OpenAPI\BondoraPHP\Model\ApiResultMakeBids bidMakeBids($bidRequest)

Makes bid(s) into specified auction(s).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = CedricZiel\OpenAPI\BondoraPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CedricZiel\OpenAPI\BondoraPHP\Api\BidApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bidRequest = new \CedricZiel\OpenAPI\BondoraPHP\Model\BidRequest(); // \CedricZiel\OpenAPI\BondoraPHP\Model\BidRequest | 

try {
    $result = $apiInstance->bidMakeBids($bidRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BidApi->bidMakeBids: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bidRequest** | [**\CedricZiel\OpenAPI\BondoraPHP\Model\BidRequest**](../Model/BidRequest.md)|  |

### Return type

[**\CedricZiel\OpenAPI\BondoraPHP\Model\ApiResultMakeBids**](../Model/ApiResultMakeBids.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
- **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

