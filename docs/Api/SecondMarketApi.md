# CedricZiel\OpenAPI\BondoraPHP\SecondMarketApi

All URIs are relative to *http://api.bondora.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**secondMarketBuy**](SecondMarketApi.md#secondMarketBuy) | **POST** /api/v1/secondarymarket/buy | Buy loans from secondary market.
[**secondMarketCancel**](SecondMarketApi.md#secondMarketCancel) | **POST** /api/v1/secondarymarket/{id}/cancel | Remove your loans from secondary market.
[**secondMarketCancelMultiple**](SecondMarketApi.md#secondMarketCancelMultiple) | **POST** /api/v1/secondarymarket/cancel | Remove your loans from secondary market.
[**secondMarketGet**](SecondMarketApi.md#secondMarketGet) | **GET** /api/v1/loanpart/{id} | Gets LoanPartDetails info by identifier
[**secondMarketGetActive**](SecondMarketApi.md#secondMarketGetActive) | **GET** /api/v1/secondarymarket | Gets list of active secondary market items
[**secondMarketGetItem**](SecondMarketApi.md#secondMarketGetItem) | **GET** /api/v1/secondarymarket/{id} | Get the secondary market item summary
[**secondMarketGetItemList**](SecondMarketApi.md#secondMarketGetItemList) | **GET** /api/v1/secondarymarket/list | Get the secondary market item summaries in a list
[**secondMarketGetItemList_0**](SecondMarketApi.md#secondMarketGetItemList_0) | **POST** /api/v1/secondarymarket/list | Get the secondary market item summaries in a list
[**secondMarketGetList**](SecondMarketApi.md#secondMarketGetList) | **GET** /api/v1/loanpart/list | Gets LoanPartDetails info by identifiers in a list (up to 1000 items).
[**secondMarketGetList_0**](SecondMarketApi.md#secondMarketGetList_0) | **POST** /api/v1/loanpart/list | Gets LoanPartDetails info by identifiers in a list (up to 1000 items).
[**secondMarketSell**](SecondMarketApi.md#secondMarketSell) | **POST** /api/v1/secondarymarket/sell | Sell your loans to secondary market.



## secondMarketBuy

> \CedricZiel\OpenAPI\BondoraPHP\Model\ApiResult secondMarketBuy($buyRequest)

Buy loans from secondary market.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = CedricZiel\OpenAPI\BondoraPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CedricZiel\OpenAPI\BondoraPHP\Api\SecondMarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$buyRequest = new \CedricZiel\OpenAPI\BondoraPHP\Model\SecondMarketBuyRequest(); // \CedricZiel\OpenAPI\BondoraPHP\Model\SecondMarketBuyRequest | 

try {
    $result = $apiInstance->secondMarketBuy($buyRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecondMarketApi->secondMarketBuy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **buyRequest** | [**\CedricZiel\OpenAPI\BondoraPHP\Model\SecondMarketBuyRequest**](../Model/SecondMarketBuyRequest.md)|  |

### Return type

[**\CedricZiel\OpenAPI\BondoraPHP\Model\ApiResult**](../Model/ApiResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
- **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## secondMarketCancel

> \CedricZiel\OpenAPI\BondoraPHP\Model\ApiResult secondMarketCancel($id)

Remove your loans from secondary market.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = CedricZiel\OpenAPI\BondoraPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CedricZiel\OpenAPI\BondoraPHP\Api\SecondMarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->secondMarketCancel($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecondMarketApi->secondMarketCancel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

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


## secondMarketCancelMultiple

> \CedricZiel\OpenAPI\BondoraPHP\Model\ApiResult secondMarketCancelMultiple($cancelRequest)

Remove your loans from secondary market.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = CedricZiel\OpenAPI\BondoraPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CedricZiel\OpenAPI\BondoraPHP\Api\SecondMarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cancelRequest = new \CedricZiel\OpenAPI\BondoraPHP\Model\SecondMarketCancelRequest(); // \CedricZiel\OpenAPI\BondoraPHP\Model\SecondMarketCancelRequest | 

try {
    $result = $apiInstance->secondMarketCancelMultiple($cancelRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecondMarketApi->secondMarketCancelMultiple: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cancelRequest** | [**\CedricZiel\OpenAPI\BondoraPHP\Model\SecondMarketCancelRequest**](../Model/SecondMarketCancelRequest.md)|  |

### Return type

[**\CedricZiel\OpenAPI\BondoraPHP\Model\ApiResult**](../Model/ApiResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
- **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## secondMarketGet

> \CedricZiel\OpenAPI\BondoraPHP\Model\ApiResultLoanPartDetails secondMarketGet($id)

Gets LoanPartDetails info by identifier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new CedricZiel\OpenAPI\BondoraPHP\Api\SecondMarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | LoanPartDetails's identifier

try {
    $result = $apiInstance->secondMarketGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecondMarketApi->secondMarketGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| LoanPartDetails&#39;s identifier |

### Return type

[**\CedricZiel\OpenAPI\BondoraPHP\Model\ApiResultLoanPartDetails**](../Model/ApiResultLoanPartDetails.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## secondMarketGetActive

> \CedricZiel\OpenAPI\BondoraPHP\Model\ApiResultSecondMarket secondMarketGetActive($requestLoanIssuedDateFrom, $requestLoanIssuedDateTo, $requestPrincipalMin, $requestPrincipalMax, $requestInterestMin, $requestInterestMax, $requestLengthMax, $requestLengthMin, $requestHasDebt, $requestLoanStatusCode, $requestLoanDebtManagementStageType, $requestLoanDebtManagementDateActiveFrom, $requestLoanDebtManagementDateActiveTo, $requestLatePrincipalAmountMin, $requestLatePrincipalAmountMax, $requestPriceMin, $requestPriceMax, $requestUseOfLoan, $requestHasNewSchedule, $requestCountries, $requestRatings, $requestCreditScoreMin, $requestCreditScoreMax, $requestUserName, $requestGender, $requestAgeMin, $requestAgeMax, $requestIncomeVerificationStatus, $requestShowMyItems, $requestAuctionId, $requestListedOnDateFrom, $requestListedOnDateTo, $requestDebtOccuredOnFrom, $requestDebtOccuredOnTo, $requestDebtOccuredOnForSecondaryFrom, $requestDebtOccuredOnForSecondaryTo, $requestDefaultedDateFrom, $requestDefaultedDateTo, $requestRescheduledFrom, $requestRescheduledTo, $requestLastPaymentDateFrom, $requestLastPaymentDateTo, $requestNextPaymentDateFrom, $requestNextPaymentDateTo, $requestDesiredDiscountRateMin, $requestDesiredDiscountRateMax, $requestXirrMin, $requestXirrMax, $requestPageSize, $requestPageNr)

Gets list of active secondary market items

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new CedricZiel\OpenAPI\BondoraPHP\Api\SecondMarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$requestLoanIssuedDateFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Loan issued start date from
$requestLoanIssuedDateTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Loan issued start date to
$requestPrincipalMin = 3.4; // double | Remaining principal amount min
$requestPrincipalMax = 3.4; // double | Remaining principal amount max
$requestInterestMin = 3.4; // double | Interest rate min
$requestInterestMax = 3.4; // double | Interest rate max
$requestLengthMax = 56; // int | Loan lenght min
$requestLengthMin = 56; // int | Loan lenght max
$requestHasDebt = True; // bool | Is overdue
$requestLoanStatusCode = array(56); // int[] | Loan status code              <para>2 Current</para><para>100 Overdue</para><para>5 60+ days overdue</para>
$requestLoanDebtManagementStageType = 56; // int | Latest debt management stage type
$requestLoanDebtManagementDateActiveFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Latest debt management date active from
$requestLoanDebtManagementDateActiveTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Latest debt management date active to
$requestLatePrincipalAmountMin = 3.4; // double | Principal debt amount min
$requestLatePrincipalAmountMax = 3.4; // double | Principal debt amount max
$requestPriceMin = 3.4; // double | Price amount min
$requestPriceMax = 3.4; // double | Price amount max
$requestUseOfLoan = 56; // int | Use of loan
$requestHasNewSchedule = True; // bool | Has been rescheduled
$requestCountries = array('requestCountries_example'); // string[] | Two letter iso code for country of origin: EE, ES, FI
$requestRatings = array('requestRatings_example'); // string[] | Bondora's rating: AA, A, B, C, D, E, F, HR
$requestCreditScoreMin = 56; // int | Minimum credit score
$requestCreditScoreMax = 56; // int | Maximum credit score
$requestUserName = 'requestUserName_example'; // string | Borrower's username
$requestGender = 56; // int | Borrower's gender: Male 0, Female 1, Unknown 2
$requestAgeMin = 56; // int | Minimal age
$requestAgeMax = 56; // int | Maximum age
$requestIncomeVerificationStatus = 56; // int | Income verification type
$requestShowMyItems = True; // bool | Can find your own items from market: Value Null = ALL, True = only your items, False = other user items
$requestAuctionId = 'requestAuctionId_example'; // string | Can find specific auction from market
$requestListedOnDateFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date when item was published from
$requestListedOnDateTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date when item was published to
$requestDebtOccuredOnFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Principal debt started date from
$requestDebtOccuredOnTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Principal debt started date to
$requestDebtOccuredOnForSecondaryFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Interest debt started date from
$requestDebtOccuredOnForSecondaryTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Interest debt started date to
$requestDefaultedDateFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Defaulted date from
$requestDefaultedDateTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Defaulted date to
$requestRescheduledFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Rescheduled date from
$requestRescheduledTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Rescheduled date to
$requestLastPaymentDateFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Last payment date from
$requestLastPaymentDateTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Last payment date to
$requestNextPaymentDateFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Next payment date from
$requestNextPaymentDateTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Next payment date to
$requestDesiredDiscountRateMin = 3.4; // double | Minimal DesiredDiscountRate
$requestDesiredDiscountRateMax = 3.4; // double | Maximal DesiredDiscountRate
$requestXirrMin = 3.4; // double | Minimal Xirr
$requestXirrMax = 3.4; // double | Maximal Xirr
$requestPageSize = 56; // int | Max items in result, up to 100000
$requestPageNr = 56; // int | Result page nr

try {
    $result = $apiInstance->secondMarketGetActive($requestLoanIssuedDateFrom, $requestLoanIssuedDateTo, $requestPrincipalMin, $requestPrincipalMax, $requestInterestMin, $requestInterestMax, $requestLengthMax, $requestLengthMin, $requestHasDebt, $requestLoanStatusCode, $requestLoanDebtManagementStageType, $requestLoanDebtManagementDateActiveFrom, $requestLoanDebtManagementDateActiveTo, $requestLatePrincipalAmountMin, $requestLatePrincipalAmountMax, $requestPriceMin, $requestPriceMax, $requestUseOfLoan, $requestHasNewSchedule, $requestCountries, $requestRatings, $requestCreditScoreMin, $requestCreditScoreMax, $requestUserName, $requestGender, $requestAgeMin, $requestAgeMax, $requestIncomeVerificationStatus, $requestShowMyItems, $requestAuctionId, $requestListedOnDateFrom, $requestListedOnDateTo, $requestDebtOccuredOnFrom, $requestDebtOccuredOnTo, $requestDebtOccuredOnForSecondaryFrom, $requestDebtOccuredOnForSecondaryTo, $requestDefaultedDateFrom, $requestDefaultedDateTo, $requestRescheduledFrom, $requestRescheduledTo, $requestLastPaymentDateFrom, $requestLastPaymentDateTo, $requestNextPaymentDateFrom, $requestNextPaymentDateTo, $requestDesiredDiscountRateMin, $requestDesiredDiscountRateMax, $requestXirrMin, $requestXirrMax, $requestPageSize, $requestPageNr);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecondMarketApi->secondMarketGetActive: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestLoanIssuedDateFrom** | **\DateTime**| Loan issued start date from | [optional]
 **requestLoanIssuedDateTo** | **\DateTime**| Loan issued start date to | [optional]
 **requestPrincipalMin** | **double**| Remaining principal amount min | [optional]
 **requestPrincipalMax** | **double**| Remaining principal amount max | [optional]
 **requestInterestMin** | **double**| Interest rate min | [optional]
 **requestInterestMax** | **double**| Interest rate max | [optional]
 **requestLengthMax** | **int**| Loan lenght min | [optional]
 **requestLengthMin** | **int**| Loan lenght max | [optional]
 **requestHasDebt** | **bool**| Is overdue | [optional]
 **requestLoanStatusCode** | [**int[]**](../Model/int.md)| Loan status code              &lt;para&gt;2 Current&lt;/para&gt;&lt;para&gt;100 Overdue&lt;/para&gt;&lt;para&gt;5 60+ days overdue&lt;/para&gt; | [optional]
 **requestLoanDebtManagementStageType** | **int**| Latest debt management stage type | [optional]
 **requestLoanDebtManagementDateActiveFrom** | **\DateTime**| Latest debt management date active from | [optional]
 **requestLoanDebtManagementDateActiveTo** | **\DateTime**| Latest debt management date active to | [optional]
 **requestLatePrincipalAmountMin** | **double**| Principal debt amount min | [optional]
 **requestLatePrincipalAmountMax** | **double**| Principal debt amount max | [optional]
 **requestPriceMin** | **double**| Price amount min | [optional]
 **requestPriceMax** | **double**| Price amount max | [optional]
 **requestUseOfLoan** | **int**| Use of loan | [optional]
 **requestHasNewSchedule** | **bool**| Has been rescheduled | [optional]
 **requestCountries** | [**string[]**](../Model/string.md)| Two letter iso code for country of origin: EE, ES, FI | [optional]
 **requestRatings** | [**string[]**](../Model/string.md)| Bondora&#39;s rating: AA, A, B, C, D, E, F, HR | [optional]
 **requestCreditScoreMin** | **int**| Minimum credit score | [optional]
 **requestCreditScoreMax** | **int**| Maximum credit score | [optional]
 **requestUserName** | **string**| Borrower&#39;s username | [optional]
 **requestGender** | **int**| Borrower&#39;s gender: Male 0, Female 1, Unknown 2 | [optional]
 **requestAgeMin** | **int**| Minimal age | [optional]
 **requestAgeMax** | **int**| Maximum age | [optional]
 **requestIncomeVerificationStatus** | **int**| Income verification type | [optional]
 **requestShowMyItems** | **bool**| Can find your own items from market: Value Null &#x3D; ALL, True &#x3D; only your items, False &#x3D; other user items | [optional]
 **requestAuctionId** | **string**| Can find specific auction from market | [optional]
 **requestListedOnDateFrom** | **\DateTime**| Date when item was published from | [optional]
 **requestListedOnDateTo** | **\DateTime**| Date when item was published to | [optional]
 **requestDebtOccuredOnFrom** | **\DateTime**| Principal debt started date from | [optional]
 **requestDebtOccuredOnTo** | **\DateTime**| Principal debt started date to | [optional]
 **requestDebtOccuredOnForSecondaryFrom** | **\DateTime**| Interest debt started date from | [optional]
 **requestDebtOccuredOnForSecondaryTo** | **\DateTime**| Interest debt started date to | [optional]
 **requestDefaultedDateFrom** | **\DateTime**| Defaulted date from | [optional]
 **requestDefaultedDateTo** | **\DateTime**| Defaulted date to | [optional]
 **requestRescheduledFrom** | **\DateTime**| Rescheduled date from | [optional]
 **requestRescheduledTo** | **\DateTime**| Rescheduled date to | [optional]
 **requestLastPaymentDateFrom** | **\DateTime**| Last payment date from | [optional]
 **requestLastPaymentDateTo** | **\DateTime**| Last payment date to | [optional]
 **requestNextPaymentDateFrom** | **\DateTime**| Next payment date from | [optional]
 **requestNextPaymentDateTo** | **\DateTime**| Next payment date to | [optional]
 **requestDesiredDiscountRateMin** | **double**| Minimal DesiredDiscountRate | [optional]
 **requestDesiredDiscountRateMax** | **double**| Maximal DesiredDiscountRate | [optional]
 **requestXirrMin** | **double**| Minimal Xirr | [optional]
 **requestXirrMax** | **double**| Maximal Xirr | [optional]
 **requestPageSize** | **int**| Max items in result, up to 100000 | [optional]
 **requestPageNr** | **int**| Result page nr | [optional]

### Return type

[**\CedricZiel\OpenAPI\BondoraPHP\Model\ApiResultSecondMarket**](../Model/ApiResultSecondMarket.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## secondMarketGetItem

> \CedricZiel\OpenAPI\BondoraPHP\Model\ApiResultSecondMarketItemSummary secondMarketGetItem($id)

Get the secondary market item summary

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new CedricZiel\OpenAPI\BondoraPHP\Api\SecondMarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | SecondaryMarket item identificator

try {
    $result = $apiInstance->secondMarketGetItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecondMarketApi->secondMarketGetItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| SecondaryMarket item identificator |

### Return type

[**\CedricZiel\OpenAPI\BondoraPHP\Model\ApiResultSecondMarketItemSummary**](../Model/ApiResultSecondMarketItemSummary.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## secondMarketGetItemList

> \CedricZiel\OpenAPI\BondoraPHP\Model\ApiResultSecondMarketItemSummaryList secondMarketGetItemList($request)

Get the secondary market item summaries in a list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new CedricZiel\OpenAPI\BondoraPHP\Api\SecondMarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \CedricZiel\OpenAPI\BondoraPHP\Model\SecondMarketListingRequest(); // \CedricZiel\OpenAPI\BondoraPHP\Model\SecondMarketListingRequest | SecondaryMarket item identificators.              This endpoint supports both GET and POST methods.              If using this endpoint with the GET method the request data must be sent with the request body, even though it is a GET request.              The \"Content-Type\" header must be set so the server knows how to decode the data.

try {
    $result = $apiInstance->secondMarketGetItemList($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecondMarketApi->secondMarketGetItemList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\CedricZiel\OpenAPI\BondoraPHP\Model\SecondMarketListingRequest**](../Model/SecondMarketListingRequest.md)| SecondaryMarket item identificators.              This endpoint supports both GET and POST methods.              If using this endpoint with the GET method the request data must be sent with the request body, even though it is a GET request.              The \&quot;Content-Type\&quot; header must be set so the server knows how to decode the data. |

### Return type

[**\CedricZiel\OpenAPI\BondoraPHP\Model\ApiResultSecondMarketItemSummaryList**](../Model/ApiResultSecondMarketItemSummaryList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
- **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## secondMarketGetItemList_0

> \CedricZiel\OpenAPI\BondoraPHP\Model\ApiResultSecondMarketItemSummaryList secondMarketGetItemList_0($request)

Get the secondary market item summaries in a list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new CedricZiel\OpenAPI\BondoraPHP\Api\SecondMarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \CedricZiel\OpenAPI\BondoraPHP\Model\SecondMarketListingRequest(); // \CedricZiel\OpenAPI\BondoraPHP\Model\SecondMarketListingRequest | SecondaryMarket item identificators.              This endpoint supports both GET and POST methods.              If using this endpoint with the GET method the request data must be sent with the request body, even though it is a GET request.              The \"Content-Type\" header must be set so the server knows how to decode the data.

try {
    $result = $apiInstance->secondMarketGetItemList_0($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecondMarketApi->secondMarketGetItemList_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\CedricZiel\OpenAPI\BondoraPHP\Model\SecondMarketListingRequest**](../Model/SecondMarketListingRequest.md)| SecondaryMarket item identificators.              This endpoint supports both GET and POST methods.              If using this endpoint with the GET method the request data must be sent with the request body, even though it is a GET request.              The \&quot;Content-Type\&quot; header must be set so the server knows how to decode the data. |

### Return type

[**\CedricZiel\OpenAPI\BondoraPHP\Model\ApiResultSecondMarketItemSummaryList**](../Model/ApiResultSecondMarketItemSummaryList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
- **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## secondMarketGetList

> \CedricZiel\OpenAPI\BondoraPHP\Model\ApiResultLoanPartDetailsList secondMarketGetList($request)

Gets LoanPartDetails info by identifiers in a list (up to 1000 items).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new CedricZiel\OpenAPI\BondoraPHP\Api\SecondMarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \CedricZiel\OpenAPI\BondoraPHP\Model\LoanPartDetailsRequest(); // \CedricZiel\OpenAPI\BondoraPHP\Model\LoanPartDetailsRequest | LoanPartDetails identifiers list.              This endpoint supports both GET and POST methods.              If using this endpoint with the GET method the request data must be sent with the request body, even though it is a GET request.              The \"Content-Type\" header must be set so the server knows how to decode the data.

try {
    $result = $apiInstance->secondMarketGetList($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecondMarketApi->secondMarketGetList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\CedricZiel\OpenAPI\BondoraPHP\Model\LoanPartDetailsRequest**](../Model/LoanPartDetailsRequest.md)| LoanPartDetails identifiers list.              This endpoint supports both GET and POST methods.              If using this endpoint with the GET method the request data must be sent with the request body, even though it is a GET request.              The \&quot;Content-Type\&quot; header must be set so the server knows how to decode the data. |

### Return type

[**\CedricZiel\OpenAPI\BondoraPHP\Model\ApiResultLoanPartDetailsList**](../Model/ApiResultLoanPartDetailsList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
- **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## secondMarketGetList_0

> \CedricZiel\OpenAPI\BondoraPHP\Model\ApiResultLoanPartDetailsList secondMarketGetList_0($request)

Gets LoanPartDetails info by identifiers in a list (up to 1000 items).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new CedricZiel\OpenAPI\BondoraPHP\Api\SecondMarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \CedricZiel\OpenAPI\BondoraPHP\Model\LoanPartDetailsRequest(); // \CedricZiel\OpenAPI\BondoraPHP\Model\LoanPartDetailsRequest | LoanPartDetails identifiers list.              This endpoint supports both GET and POST methods.              If using this endpoint with the GET method the request data must be sent with the request body, even though it is a GET request.              The \"Content-Type\" header must be set so the server knows how to decode the data.

try {
    $result = $apiInstance->secondMarketGetList_0($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecondMarketApi->secondMarketGetList_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\CedricZiel\OpenAPI\BondoraPHP\Model\LoanPartDetailsRequest**](../Model/LoanPartDetailsRequest.md)| LoanPartDetails identifiers list.              This endpoint supports both GET and POST methods.              If using this endpoint with the GET method the request data must be sent with the request body, even though it is a GET request.              The \&quot;Content-Type\&quot; header must be set so the server knows how to decode the data. |

### Return type

[**\CedricZiel\OpenAPI\BondoraPHP\Model\ApiResultLoanPartDetailsList**](../Model/ApiResultLoanPartDetailsList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
- **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## secondMarketSell

> \CedricZiel\OpenAPI\BondoraPHP\Model\ApiResultSecondMarketSale secondMarketSell($saleRequest)

Sell your loans to secondary market.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = CedricZiel\OpenAPI\BondoraPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CedricZiel\OpenAPI\BondoraPHP\Api\SecondMarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$saleRequest = new \CedricZiel\OpenAPI\BondoraPHP\Model\SecondMarketSaleRequest(); // \CedricZiel\OpenAPI\BondoraPHP\Model\SecondMarketSaleRequest | 

try {
    $result = $apiInstance->secondMarketSell($saleRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecondMarketApi->secondMarketSell: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **saleRequest** | [**\CedricZiel\OpenAPI\BondoraPHP\Model\SecondMarketSaleRequest**](../Model/SecondMarketSaleRequest.md)|  |

### Return type

[**\CedricZiel\OpenAPI\BondoraPHP\Model\ApiResultSecondMarketSale**](../Model/ApiResultSecondMarketSale.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
- **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

