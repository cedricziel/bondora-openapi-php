# # BidSummary

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Bid unique identifier | [optional] 
**auctionId** | **string** | Id of auction to bid into | [optional] 
**requestedBidAmount** | **double** | Amount that was requested to bid | [optional] 
**actualBidAmount** | **double** | Amount that is bidded | [optional] 
**requestedBidMinimumLimit** | **double** | Minimum amount that was specified for auction | [optional] 
**bidRequestedDate** | [**\DateTime**](\DateTime.md) | When bid was requested | [optional] 
**bidProcessedDate** | [**\DateTime**](\DateTime.md) | When bid was processed | [optional] 
**isRequestBeingProcessed** | **bool** | Is request currently processed | [optional] 
**statusCode** | **int** | Status of bid              &lt;para&gt;0 Pending&lt;/para&gt;&lt;para&gt;1 Open&lt;/para&gt;&lt;para&gt;2 Successful&lt;/para&gt;&lt;para&gt;3 Failed&lt;/para&gt;&lt;para&gt;4 Cancelled&lt;/para&gt;&lt;para&gt;5 Accepted&lt;/para&gt; | [optional] 
**failureReason** | **int** | Why bid failed | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


