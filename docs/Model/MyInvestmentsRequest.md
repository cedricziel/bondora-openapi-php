# # MyInvestmentsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**loanIssuedDateFrom** | [**\DateTime**](\DateTime.md) | Loan issued start date from | [optional] 
**loanIssuedDateTo** | [**\DateTime**](\DateTime.md) | Loan issued start date to | [optional] 
**principalMin** | **double** | Remaining principal amount min | [optional] 
**principalMax** | **double** | Remaining principal amount max | [optional] 
**interestMin** | **double** | Interest rate min | [optional] 
**interestMax** | **double** | Interest rate max | [optional] 
**lengthMax** | **int** | Loan lenght min | [optional] 
**lengthMin** | **int** | Loan lenght max | [optional] 
**latePrincipalAmountMin** | **double** | Principal debt amount min | [optional] 
**latePrincipalAmountMax** | **double** | Principal debt amount max | [optional] 
**debtOccuredOnFrom** | [**\DateTime**](\DateTime.md) | Principal debt started date from | [optional] 
**debtOccuredOnTo** | [**\DateTime**](\DateTime.md) | Principal debt started date to | [optional] 
**debtOccuredOnForSecondaryFrom** | [**\DateTime**](\DateTime.md) | Interest debt started date from | [optional] 
**debtOccuredOnForSecondaryTo** | [**\DateTime**](\DateTime.md) | Interest debt started date to | [optional] 
**defaultedDateFrom** | [**\DateTime**](\DateTime.md) | Defaulted date from | [optional] 
**defaultedDateTo** | [**\DateTime**](\DateTime.md) | Defaulted date to | [optional] 
**rescheduledFrom** | [**\DateTime**](\DateTime.md) | Defaulted date from | [optional] 
**rescheduledTo** | [**\DateTime**](\DateTime.md) | Defaulted date to | [optional] 
**soldDateFrom** | [**\DateTime**](\DateTime.md) | When it was sold on Secondary market from | [optional] 
**soldDateTo** | [**\DateTime**](\DateTime.md) | When it was sold on Secondary market to | [optional] 
**purchaseDateFrom** | [**\DateTime**](\DateTime.md) | When you received the investment Auctions/Secondary market from | [optional] 
**purchaseDateTo** | [**\DateTime**](\DateTime.md) | When you received the investment Auctions/Secondary market to | [optional] 
**nextPaymentDateTo** | [**\DateTime**](\DateTime.md) | Next payment date to | [optional] 
**nextPaymentDateFrom** | [**\DateTime**](\DateTime.md) | Next payment date from | [optional] 
**lastPaymentDateFrom** | [**\DateTime**](\DateTime.md) | Last payment date from | [optional] 
**lastPaymentDateTo** | [**\DateTime**](\DateTime.md) | Last payment date to | [optional] 
**countries** | **string[]** | Two letter iso code for country of origin: EE, ES, FI | [optional] 
**ratings** | **string[]** | Bondora&#39;s rating: AA, A, B, C, D, E, F, HR | [optional] 
**creditScoreMin** | **int** | Minimum credit score | [optional] 
**creditScoreMax** | **int** | Maximum credit score | [optional] 
**userName** | **string** | Borrower&#39;s username | [optional] 
**loanStatusCode** | **int[]** | Loan status code              &lt;para&gt;0 Reserved&lt;/para&gt;&lt;para&gt;2 Current&lt;/para&gt;&lt;para&gt;3 Cancelled&lt;/para&gt;&lt;para&gt;100 Overdue&lt;/para&gt;&lt;para&gt;5 60+ days overdue&lt;/para&gt;&lt;para&gt;4 Repaid&lt;/para&gt;&lt;para&gt;8 Released&lt;/para&gt; | [optional] 
**incomeVerificationStatus** | **int** | Income verification type | [optional] 
**loanDebtManagementStage** | **int** | Latest debt management stage | [optional] 
**loanDebtManagementStageType** | **int** | Latest debt management stage type | [optional] 
**loanDebtManagementDateActiveFrom** | [**\DateTime**](\DateTime.md) | Latest debt management date active from | [optional] 
**loanDebtManagementDateActiveTo** | [**\DateTime**](\DateTime.md) | Latest debt management date active to | [optional] 
**auctionBidType** | **int** | Auction bid type | [optional] 
**salesStatus** | **int** | Second market sale status              &lt;para&gt;NULL All active&lt;/para&gt;&lt;para&gt;0 Bought investments&lt;/para&gt;&lt;para&gt;1 Sold investments&lt;/para&gt;&lt;para&gt;2 Investment is on sale&lt;/para&gt;&lt;para&gt;3 Investment is not on sale&lt;/para&gt; | [optional] 
**isInRepayment** | **bool** | Search only active in repayment loans, StatusCodes (2, 5, 100) | [optional] 
**pageSize** | **int** | Max items in result, up to 50000 | [optional] 
**pageNr** | **int** | Result page nr | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


