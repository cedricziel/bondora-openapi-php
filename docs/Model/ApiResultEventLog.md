# # ApiResultEventLog

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pageSize** | **int** | Requested Max items in result | [optional] 
**pageNr** | **int** | Requested page nr | [optional] 
**totalCount** | **int** | Total number of items found | 
**count** | **int** | Number of items returned | 
**payload** | [**\CedricZiel\OpenAPI\BondoraPHP\Model\EventLogItem[]**](EventLogItem.md) | The payload of the response. Type depends on the API request. | [optional] 
**success** | **bool** | Indicates if the request was successfull or not.              true if the request was handled successfully, false otherwise. | 
**errors** | [**\CedricZiel\OpenAPI\BondoraPHP\Model\ApiError[]**](ApiError.md) | Error(s) accociated with the API request. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


