# CedricZiel\OpenAPI\BondoraPHP\AccountApi

All URIs are relative to *http://api.bondora.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountGetActive**](AccountApi.md#accountGetActive) | **GET** /api/v1/account/investments | Gets list of your investments
[**accountGetBalance**](AccountApi.md#accountGetBalance) | **GET** /api/v1/account/balance | Gets your account balance information
[**accountGetEventLog**](AccountApi.md#accountGetEventLog) | **GET** /api/v1/eventlog | Gets events that have been made with this application (related to current access token)



## accountGetActive

> \CedricZiel\OpenAPI\BondoraPHP\Model\ApiResultMyInvestments accountGetActive($requestLoanIssuedDateFrom, $requestLoanIssuedDateTo, $requestPrincipalMin, $requestPrincipalMax, $requestInterestMin, $requestInterestMax, $requestLengthMax, $requestLengthMin, $requestLatePrincipalAmountMin, $requestLatePrincipalAmountMax, $requestDebtOccuredOnFrom, $requestDebtOccuredOnTo, $requestDebtOccuredOnForSecondaryFrom, $requestDebtOccuredOnForSecondaryTo, $requestDefaultedDateFrom, $requestDefaultedDateTo, $requestRescheduledFrom, $requestRescheduledTo, $requestSoldDateFrom, $requestSoldDateTo, $requestPurchaseDateFrom, $requestPurchaseDateTo, $requestNextPaymentDateTo, $requestNextPaymentDateFrom, $requestLastPaymentDateFrom, $requestLastPaymentDateTo, $requestCountries, $requestRatings, $requestCreditScoreMin, $requestCreditScoreMax, $requestUserName, $requestLoanStatusCode, $requestIncomeVerificationStatus, $requestLoanDebtManagementStage, $requestLoanDebtManagementStageType, $requestLoanDebtManagementDateActiveFrom, $requestLoanDebtManagementDateActiveTo, $requestAuctionBidType, $requestSalesStatus, $requestIsInRepayment, $requestPageSize, $requestPageNr)

Gets list of your investments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = CedricZiel\OpenAPI\BondoraPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CedricZiel\OpenAPI\BondoraPHP\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$requestLoanIssuedDateFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Loan issued start date from
$requestLoanIssuedDateTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Loan issued start date to
$requestPrincipalMin = 3.4; // double | Remaining principal amount min
$requestPrincipalMax = 3.4; // double | Remaining principal amount max
$requestInterestMin = 3.4; // double | Interest rate min
$requestInterestMax = 3.4; // double | Interest rate max
$requestLengthMax = 56; // int | Loan lenght min
$requestLengthMin = 56; // int | Loan lenght max
$requestLatePrincipalAmountMin = 3.4; // double | Principal debt amount min
$requestLatePrincipalAmountMax = 3.4; // double | Principal debt amount max
$requestDebtOccuredOnFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Principal debt started date from
$requestDebtOccuredOnTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Principal debt started date to
$requestDebtOccuredOnForSecondaryFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Interest debt started date from
$requestDebtOccuredOnForSecondaryTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Interest debt started date to
$requestDefaultedDateFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Defaulted date from
$requestDefaultedDateTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Defaulted date to
$requestRescheduledFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Defaulted date from
$requestRescheduledTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Defaulted date to
$requestSoldDateFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | When it was sold on Secondary market from
$requestSoldDateTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | When it was sold on Secondary market to
$requestPurchaseDateFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | When you received the investment Auctions/Secondary market from
$requestPurchaseDateTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | When you received the investment Auctions/Secondary market to
$requestNextPaymentDateTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Next payment date to
$requestNextPaymentDateFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Next payment date from
$requestLastPaymentDateFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Last payment date from
$requestLastPaymentDateTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Last payment date to
$requestCountries = array('requestCountries_example'); // string[] | Two letter iso code for country of origin: EE, ES, FI
$requestRatings = array('requestRatings_example'); // string[] | Bondora's rating: AA, A, B, C, D, E, F, HR
$requestCreditScoreMin = 56; // int | Minimum credit score
$requestCreditScoreMax = 56; // int | Maximum credit score
$requestUserName = 'requestUserName_example'; // string | Borrower's username
$requestLoanStatusCode = array(56); // int[] | Loan status code              <para>0 Reserved</para><para>2 Current</para><para>3 Cancelled</para><para>100 Overdue</para><para>5 60+ days overdue</para><para>4 Repaid</para><para>8 Released</para>
$requestIncomeVerificationStatus = 56; // int | Income verification type
$requestLoanDebtManagementStage = 56; // int | Latest debt management stage
$requestLoanDebtManagementStageType = 56; // int | Latest debt management stage type
$requestLoanDebtManagementDateActiveFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Latest debt management date active from
$requestLoanDebtManagementDateActiveTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Latest debt management date active to
$requestAuctionBidType = 56; // int | Auction bid type
$requestSalesStatus = 56; // int | Second market sale status              <para>NULL All active</para><para>0 Bought investments</para><para>1 Sold investments</para><para>2 Investment is on sale</para><para>3 Investment is not on sale</para>
$requestIsInRepayment = True; // bool | Search only active in repayment loans, StatusCodes (2, 5, 100)
$requestPageSize = 56; // int | Max items in result, up to 50000
$requestPageNr = 56; // int | Result page nr

try {
    $result = $apiInstance->accountGetActive($requestLoanIssuedDateFrom, $requestLoanIssuedDateTo, $requestPrincipalMin, $requestPrincipalMax, $requestInterestMin, $requestInterestMax, $requestLengthMax, $requestLengthMin, $requestLatePrincipalAmountMin, $requestLatePrincipalAmountMax, $requestDebtOccuredOnFrom, $requestDebtOccuredOnTo, $requestDebtOccuredOnForSecondaryFrom, $requestDebtOccuredOnForSecondaryTo, $requestDefaultedDateFrom, $requestDefaultedDateTo, $requestRescheduledFrom, $requestRescheduledTo, $requestSoldDateFrom, $requestSoldDateTo, $requestPurchaseDateFrom, $requestPurchaseDateTo, $requestNextPaymentDateTo, $requestNextPaymentDateFrom, $requestLastPaymentDateFrom, $requestLastPaymentDateTo, $requestCountries, $requestRatings, $requestCreditScoreMin, $requestCreditScoreMax, $requestUserName, $requestLoanStatusCode, $requestIncomeVerificationStatus, $requestLoanDebtManagementStage, $requestLoanDebtManagementStageType, $requestLoanDebtManagementDateActiveFrom, $requestLoanDebtManagementDateActiveTo, $requestAuctionBidType, $requestSalesStatus, $requestIsInRepayment, $requestPageSize, $requestPageNr);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountGetActive: ', $e->getMessage(), PHP_EOL;
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
 **requestLatePrincipalAmountMin** | **double**| Principal debt amount min | [optional]
 **requestLatePrincipalAmountMax** | **double**| Principal debt amount max | [optional]
 **requestDebtOccuredOnFrom** | **\DateTime**| Principal debt started date from | [optional]
 **requestDebtOccuredOnTo** | **\DateTime**| Principal debt started date to | [optional]
 **requestDebtOccuredOnForSecondaryFrom** | **\DateTime**| Interest debt started date from | [optional]
 **requestDebtOccuredOnForSecondaryTo** | **\DateTime**| Interest debt started date to | [optional]
 **requestDefaultedDateFrom** | **\DateTime**| Defaulted date from | [optional]
 **requestDefaultedDateTo** | **\DateTime**| Defaulted date to | [optional]
 **requestRescheduledFrom** | **\DateTime**| Defaulted date from | [optional]
 **requestRescheduledTo** | **\DateTime**| Defaulted date to | [optional]
 **requestSoldDateFrom** | **\DateTime**| When it was sold on Secondary market from | [optional]
 **requestSoldDateTo** | **\DateTime**| When it was sold on Secondary market to | [optional]
 **requestPurchaseDateFrom** | **\DateTime**| When you received the investment Auctions/Secondary market from | [optional]
 **requestPurchaseDateTo** | **\DateTime**| When you received the investment Auctions/Secondary market to | [optional]
 **requestNextPaymentDateTo** | **\DateTime**| Next payment date to | [optional]
 **requestNextPaymentDateFrom** | **\DateTime**| Next payment date from | [optional]
 **requestLastPaymentDateFrom** | **\DateTime**| Last payment date from | [optional]
 **requestLastPaymentDateTo** | **\DateTime**| Last payment date to | [optional]
 **requestCountries** | [**string[]**](../Model/string.md)| Two letter iso code for country of origin: EE, ES, FI | [optional]
 **requestRatings** | [**string[]**](../Model/string.md)| Bondora&#39;s rating: AA, A, B, C, D, E, F, HR | [optional]
 **requestCreditScoreMin** | **int**| Minimum credit score | [optional]
 **requestCreditScoreMax** | **int**| Maximum credit score | [optional]
 **requestUserName** | **string**| Borrower&#39;s username | [optional]
 **requestLoanStatusCode** | [**int[]**](../Model/int.md)| Loan status code              &lt;para&gt;0 Reserved&lt;/para&gt;&lt;para&gt;2 Current&lt;/para&gt;&lt;para&gt;3 Cancelled&lt;/para&gt;&lt;para&gt;100 Overdue&lt;/para&gt;&lt;para&gt;5 60+ days overdue&lt;/para&gt;&lt;para&gt;4 Repaid&lt;/para&gt;&lt;para&gt;8 Released&lt;/para&gt; | [optional]
 **requestIncomeVerificationStatus** | **int**| Income verification type | [optional]
 **requestLoanDebtManagementStage** | **int**| Latest debt management stage | [optional]
 **requestLoanDebtManagementStageType** | **int**| Latest debt management stage type | [optional]
 **requestLoanDebtManagementDateActiveFrom** | **\DateTime**| Latest debt management date active from | [optional]
 **requestLoanDebtManagementDateActiveTo** | **\DateTime**| Latest debt management date active to | [optional]
 **requestAuctionBidType** | **int**| Auction bid type | [optional]
 **requestSalesStatus** | **int**| Second market sale status              &lt;para&gt;NULL All active&lt;/para&gt;&lt;para&gt;0 Bought investments&lt;/para&gt;&lt;para&gt;1 Sold investments&lt;/para&gt;&lt;para&gt;2 Investment is on sale&lt;/para&gt;&lt;para&gt;3 Investment is not on sale&lt;/para&gt; | [optional]
 **requestIsInRepayment** | **bool**| Search only active in repayment loans, StatusCodes (2, 5, 100) | [optional]
 **requestPageSize** | **int**| Max items in result, up to 50000 | [optional]
 **requestPageNr** | **int**| Result page nr | [optional]

### Return type

[**\CedricZiel\OpenAPI\BondoraPHP\Model\ApiResultMyInvestments**](../Model/ApiResultMyInvestments.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## accountGetBalance

> \CedricZiel\OpenAPI\BondoraPHP\Model\ApiResultMyAccountBalance accountGetBalance()

Gets your account balance information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = CedricZiel\OpenAPI\BondoraPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CedricZiel\OpenAPI\BondoraPHP\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->accountGetBalance();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountGetBalance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\CedricZiel\OpenAPI\BondoraPHP\Model\ApiResultMyAccountBalance**](../Model/ApiResultMyAccountBalance.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## accountGetEventLog

> \CedricZiel\OpenAPI\BondoraPHP\Model\ApiResultEventLog accountGetEventLog($requestEventDateFrom, $requestEventDateTo, $requestEventType, $requestIpAddress, $requestPageSize, $requestPageNr)

Gets events that have been made with this application (related to current access token)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = CedricZiel\OpenAPI\BondoraPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CedricZiel\OpenAPI\BondoraPHP\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$requestEventDateFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start datetime
$requestEventDateTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | end datetime
$requestEventType = 56; // int | Event type
$requestIpAddress = 'requestIpAddress_example'; // string | IP address
$requestPageSize = 56; // int | Max items in result, up to 20000
$requestPageNr = 56; // int | Result page nr

try {
    $result = $apiInstance->accountGetEventLog($requestEventDateFrom, $requestEventDateTo, $requestEventType, $requestIpAddress, $requestPageSize, $requestPageNr);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountGetEventLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestEventDateFrom** | **\DateTime**| Start datetime | [optional]
 **requestEventDateTo** | **\DateTime**| end datetime | [optional]
 **requestEventType** | **int**| Event type | [optional]
 **requestIpAddress** | **string**| IP address | [optional]
 **requestPageSize** | **int**| Max items in result, up to 20000 | [optional]
 **requestPageNr** | **int**| Result page nr | [optional]

### Return type

[**\CedricZiel\OpenAPI\BondoraPHP\Model\ApiResultEventLog**](../Model/ApiResultEventLog.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

