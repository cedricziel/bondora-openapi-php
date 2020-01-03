# # AuctionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**countries** | **string[]** | Two letter iso code for country of origin: EE, ES, FI | [optional] 
**ratings** | **string[]** | Bondora&#39;s rating: AA, A, B, C, D, E, F, HR | [optional] 
**gender** | **int** | Borrower&#39;s gender: Male 0, Female 1, Unknown 2 | [optional] 
**sumMin** | **int** | Minimal loan amount | [optional] 
**sumMax** | **int** | Maximum loan amount | [optional] 
**terms** | **int[]** | Loan length: 3, 9, 12, 18, 24, 36, 48, 60 months | [optional] 
**ageMin** | **int** | Minimal age | [optional] 
**ageMax** | **int** | Maximum age | [optional] 
**loanNumber** | **int** | Loan number | [optional] 
**userName** | **string** | Username | [optional] 
**applicationDateFrom** | [**\DateTime**](\DateTime.md) | Loan application started date from | [optional] 
**applicationDateTo** | [**\DateTime**](\DateTime.md) | Loan application started date to | [optional] 
**creditScoreMin** | **int** | Minimum credit score | [optional] 
**creditScoreMax** | **int** | Maximum credit score | [optional] 
**creditScoresEeMini** | **string[]** | Credit score for EE loans | [optional] 
**interestMin** | **double** | Minimum interest | [optional] 
**interestMax** | **double** | Maximum interest | [optional] 
**incomeTotalMin** | **double** | Minimal total income | [optional] 
**incomeTotalMax** | **double** | Maximum total income | [optional] 
**modelVersion** | **int** | Model version | [optional] 
**expectedLossMin** | **double** | Minimal expected loss | [optional] 
**expectedLossMax** | **double** | Maximum expected loss | [optional] 
**listedOnUTCFrom** | [**\DateTime**](\DateTime.md) | Date when auction was published from | [optional] 
**listedOnUTCTo** | [**\DateTime**](\DateTime.md) | Date when auction was published to | [optional] 
**pageSize** | **int** | Max items in result, up to 20000 | [optional] 
**pageNr** | **int** | Result page nr | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


