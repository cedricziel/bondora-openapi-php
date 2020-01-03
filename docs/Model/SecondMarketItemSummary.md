# # SecondMarketItemSummary

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Item unique identifier | [optional] 
**number** | **int** | Number | [optional] 
**startDate** | [**\DateTime**](\DateTime.md) | Item start date | [optional] 
**plannedCloseDate** | [**\DateTime**](\DateTime.md) | Planned close date | [optional] 
**actualCloseDate** | [**\DateTime**](\DateTime.md) | Actual close date | [optional] 
**userCancelledOn** | [**\DateTime**](\DateTime.md) | User cancelled on | [optional] 
**loanPartId** | **string** | LoanPart being sold | [optional] 
**desiredDiscountRate** | **double** | Discount rate percent | [optional] [readonly] 
**desiredDiscountRateDecimalFraction** | **double** | Discount rate as fraction (0.0 - 1.0) | [optional] 
**statusCode** | **int** | Current status code              &lt;para&gt;0 Created&lt;/para&gt;&lt;para&gt;1 Open in marketplace&lt;/para&gt;&lt;para&gt;2 Successfully sold&lt;/para&gt;&lt;para&gt;3 Failed&lt;/para&gt; | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


