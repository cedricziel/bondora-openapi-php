# CedricZiel\OpenAPI\BondoraPHP\AuctionApi

All URIs are relative to *http://api.bondora.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**auctionGet**](AuctionApi.md#auctionGet) | **GET** /api/v1/auction/{id} | Gets Auction info by auction identifier
[**auctionGetActive**](AuctionApi.md#auctionGetActive) | **GET** /api/v1/auctions | Gets list of active Auctions



## auctionGet

> \CedricZiel\OpenAPI\BondoraPHP\Model\ApiResultExtendedAuction auctionGet($id)

Gets Auction info by auction identifier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new CedricZiel\OpenAPI\BondoraPHP\Api\AuctionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Auction's identifier

try {
    $result = $apiInstance->auctionGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuctionApi->auctionGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Auction&#39;s identifier |

### Return type

[**\CedricZiel\OpenAPI\BondoraPHP\Model\ApiResultExtendedAuction**](../Model/ApiResultExtendedAuction.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## auctionGetActive

> \CedricZiel\OpenAPI\BondoraPHP\Model\ApiResultAuctions auctionGetActive($requestCountries, $requestRatings, $requestGender, $requestSumMin, $requestSumMax, $requestTerms, $requestAgeMin, $requestAgeMax, $requestLoanNumber, $requestUserName, $requestApplicationDateFrom, $requestApplicationDateTo, $requestCreditScoreMin, $requestCreditScoreMax, $requestCreditScoresEeMini, $requestInterestMin, $requestInterestMax, $requestIncomeTotalMin, $requestIncomeTotalMax, $requestModelVersion, $requestExpectedLossMin, $requestExpectedLossMax, $requestListedOnUTCFrom, $requestListedOnUTCTo, $requestPageSize, $requestPageNr)

Gets list of active Auctions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new CedricZiel\OpenAPI\BondoraPHP\Api\AuctionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$requestCountries = array('requestCountries_example'); // string[] | Two letter iso code for country of origin: EE, ES, FI
$requestRatings = array('requestRatings_example'); // string[] | Bondora's rating: AA, A, B, C, D, E, F, HR
$requestGender = 56; // int | Borrower's gender: Male 0, Female 1, Unknown 2
$requestSumMin = 56; // int | Minimal loan amount
$requestSumMax = 56; // int | Maximum loan amount
$requestTerms = array(56); // int[] | Loan length: 3, 9, 12, 18, 24, 36, 48, 60 months
$requestAgeMin = 56; // int | Minimal age
$requestAgeMax = 56; // int | Maximum age
$requestLoanNumber = 56; // int | Loan number
$requestUserName = 'requestUserName_example'; // string | Username
$requestApplicationDateFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Loan application started date from
$requestApplicationDateTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Loan application started date to
$requestCreditScoreMin = 56; // int | Minimum credit score
$requestCreditScoreMax = 56; // int | Maximum credit score
$requestCreditScoresEeMini = array('requestCreditScoresEeMini_example'); // string[] | Credit score for EE loans
$requestInterestMin = 3.4; // double | Minimum interest
$requestInterestMax = 3.4; // double | Maximum interest
$requestIncomeTotalMin = 3.4; // double | Minimal total income
$requestIncomeTotalMax = 3.4; // double | Maximum total income
$requestModelVersion = 56; // int | Model version
$requestExpectedLossMin = 3.4; // double | Minimal expected loss
$requestExpectedLossMax = 3.4; // double | Maximum expected loss
$requestListedOnUTCFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date when auction was published from
$requestListedOnUTCTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date when auction was published to
$requestPageSize = 56; // int | Max items in result, up to 20000
$requestPageNr = 56; // int | Result page nr

try {
    $result = $apiInstance->auctionGetActive($requestCountries, $requestRatings, $requestGender, $requestSumMin, $requestSumMax, $requestTerms, $requestAgeMin, $requestAgeMax, $requestLoanNumber, $requestUserName, $requestApplicationDateFrom, $requestApplicationDateTo, $requestCreditScoreMin, $requestCreditScoreMax, $requestCreditScoresEeMini, $requestInterestMin, $requestInterestMax, $requestIncomeTotalMin, $requestIncomeTotalMax, $requestModelVersion, $requestExpectedLossMin, $requestExpectedLossMax, $requestListedOnUTCFrom, $requestListedOnUTCTo, $requestPageSize, $requestPageNr);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuctionApi->auctionGetActive: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestCountries** | [**string[]**](../Model/string.md)| Two letter iso code for country of origin: EE, ES, FI | [optional]
 **requestRatings** | [**string[]**](../Model/string.md)| Bondora&#39;s rating: AA, A, B, C, D, E, F, HR | [optional]
 **requestGender** | **int**| Borrower&#39;s gender: Male 0, Female 1, Unknown 2 | [optional]
 **requestSumMin** | **int**| Minimal loan amount | [optional]
 **requestSumMax** | **int**| Maximum loan amount | [optional]
 **requestTerms** | [**int[]**](../Model/int.md)| Loan length: 3, 9, 12, 18, 24, 36, 48, 60 months | [optional]
 **requestAgeMin** | **int**| Minimal age | [optional]
 **requestAgeMax** | **int**| Maximum age | [optional]
 **requestLoanNumber** | **int**| Loan number | [optional]
 **requestUserName** | **string**| Username | [optional]
 **requestApplicationDateFrom** | **\DateTime**| Loan application started date from | [optional]
 **requestApplicationDateTo** | **\DateTime**| Loan application started date to | [optional]
 **requestCreditScoreMin** | **int**| Minimum credit score | [optional]
 **requestCreditScoreMax** | **int**| Maximum credit score | [optional]
 **requestCreditScoresEeMini** | [**string[]**](../Model/string.md)| Credit score for EE loans | [optional]
 **requestInterestMin** | **double**| Minimum interest | [optional]
 **requestInterestMax** | **double**| Maximum interest | [optional]
 **requestIncomeTotalMin** | **double**| Minimal total income | [optional]
 **requestIncomeTotalMax** | **double**| Maximum total income | [optional]
 **requestModelVersion** | **int**| Model version | [optional]
 **requestExpectedLossMin** | **double**| Minimal expected loss | [optional]
 **requestExpectedLossMax** | **double**| Maximum expected loss | [optional]
 **requestListedOnUTCFrom** | **\DateTime**| Date when auction was published from | [optional]
 **requestListedOnUTCTo** | **\DateTime**| Date when auction was published to | [optional]
 **requestPageSize** | **int**| Max items in result, up to 20000 | [optional]
 **requestPageNr** | **int**| Result page nr | [optional]

### Return type

[**\CedricZiel\OpenAPI\BondoraPHP\Model\ApiResultAuctions**](../Model/ApiResultAuctions.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

