# # Report

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**result** | [**\CedricZiel\OpenAPI\BondoraPHP\Model\Interface[]**](Interface.md) | &lt;para&gt;List of Report items. Item type depends on {Bondora.Core.Enums.ReportType} value:&lt;/para&gt;  &lt;list type&#x3D;\&quot;bullet\&quot;&gt;    &lt;item&gt;      &lt;term&gt;SecondMarketArchive&lt;/term&gt;      &lt;description&gt;the type is {Sobralaen.Api.Models.SecondMarketArchiveReportLine}&lt;/description&gt;    &lt;/item&gt;    &lt;item&gt;      &lt;term&gt;AccountStatement&lt;/term&gt;      &lt;description&gt;the type is {Sobralaen.Api.Models.AccountStatementReportLine}&lt;/description&gt;    &lt;/item&gt;    &lt;item&gt;      &lt;term&gt;Repayments&lt;/term&gt;      &lt;description&gt;the type is {Sobralaen.Api.Models.RepaymentsReportLine}&lt;/description&gt;    &lt;/item&gt;    &lt;item&gt;      &lt;term&gt;Investments&lt;/term&gt;      &lt;description&gt;the type is {Sobralaen.Api.Models.InvestmentsListReportLine}&lt;/description&gt;    &lt;/item&gt;    &lt;item&gt;      &lt;term&gt;PlannedFutureCashflows&lt;/term&gt;      &lt;description&gt;the type is {Sobralaen.Api.Models.FutureCashflowsReportLine}&lt;/description&gt;    &lt;/item&gt;    &lt;item&gt;      &lt;term&gt;InvestmentsV2&lt;/term&gt;      &lt;description&gt;the type is {Sobralaen.Api.Models.InvestmentsListReportLineV2}&lt;/description&gt;    &lt;/item&gt;  &lt;/list&gt; | [optional] 
**reportId** | **string** | Reports unique identifier | [optional] 
**createdOn** | [**\DateTime**](\DateTime.md) | Report created date | [optional] 
**generatedOn** | [**\DateTime**](\DateTime.md) | Report generated date | [optional] 
**periodStart** | [**\DateTime**](\DateTime.md) | Report period end date | [optional] 
**periodEnd** | [**\DateTime**](\DateTime.md) | Report period start date | [optional] 
**reportType** | **int** | Report&#39;s type | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


