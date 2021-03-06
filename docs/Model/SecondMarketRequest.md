# # SecondMarketRequest

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
**hasDebt** | **bool** | Is overdue | [optional] 
**loanStatusCode** | **int[]** | Loan status code              &lt;para&gt;2 Current&lt;/para&gt;&lt;para&gt;100 Overdue&lt;/para&gt;&lt;para&gt;5 60+ days overdue&lt;/para&gt; | [optional] 
**loanDebtManagementStageType** | **int** | Latest debt management stage type | [optional] 
**loanDebtManagementDateActiveFrom** | [**\DateTime**](\DateTime.md) | Latest debt management date active from | [optional] 
**loanDebtManagementDateActiveTo** | [**\DateTime**](\DateTime.md) | Latest debt management date active to | [optional] 
**latePrincipalAmountMin** | **double** | Principal debt amount min | [optional] 
**latePrincipalAmountMax** | **double** | Principal debt amount max | [optional] 
**priceMin** | **double** | Price amount min | [optional] 
**priceMax** | **double** | Price amount max | [optional] 
**useOfLoan** | **int** | Use of loan | [optional] 
**hasNewSchedule** | **bool** | Has been rescheduled | [optional] 
**countries** | **string[]** | Two letter iso code for country of origin: EE, ES, FI | [optional] 
**ratings** | **string[]** | Bondora&#39;s rating: AA, A, B, C, D, E, F, HR | [optional] 
**creditScoreMin** | **int** | Minimum credit score | [optional] 
**creditScoreMax** | **int** | Maximum credit score | [optional] 
**userName** | **string** | Borrower&#39;s username | [optional] 
**gender** | **int** | Borrower&#39;s gender: Male 0, Female 1, Unknown 2 | [optional] 
**ageMin** | **int** | Minimal age | [optional] 
**ageMax** | **int** | Maximum age | [optional] 
**incomeVerificationStatus** | **int** | Income verification type | [optional] 
**showMyItems** | **bool** | Can find your own items from market: Value Null &#x3D; ALL, True &#x3D; only your items, False &#x3D; other user items | [optional] 
**auctionId** | **string** | Can find specific auction from market | [optional] 
**listedOnDateFrom** | [**\DateTime**](\DateTime.md) | Date when item was published from | [optional] 
**listedOnDateTo** | [**\DateTime**](\DateTime.md) | Date when item was published to | [optional] 
**debtOccuredOnFrom** | [**\DateTime**](\DateTime.md) | Principal debt started date from | [optional] 
**debtOccuredOnTo** | [**\DateTime**](\DateTime.md) | Principal debt started date to | [optional] 
**debtOccuredOnForSecondaryFrom** | [**\DateTime**](\DateTime.md) | Interest debt started date from | [optional] 
**debtOccuredOnForSecondaryTo** | [**\DateTime**](\DateTime.md) | Interest debt started date to | [optional] 
**defaultedDateFrom** | [**\DateTime**](\DateTime.md) | Defaulted date from | [optional] 
**defaultedDateTo** | [**\DateTime**](\DateTime.md) | Defaulted date to | [optional] 
**rescheduledFrom** | [**\DateTime**](\DateTime.md) | Rescheduled date from | [optional] 
**rescheduledTo** | [**\DateTime**](\DateTime.md) | Rescheduled date to | [optional] 
**lastPaymentDateFrom** | [**\DateTime**](\DateTime.md) | Last payment date from | [optional] 
**lastPaymentDateTo** | [**\DateTime**](\DateTime.md) | Last payment date to | [optional] 
**nextPaymentDateFrom** | [**\DateTime**](\DateTime.md) | Next payment date from | [optional] 
**nextPaymentDateTo** | [**\DateTime**](\DateTime.md) | Next payment date to | [optional] 
**desiredDiscountRateMin** | **double** | Minimal DesiredDiscountRate | [optional] 
**desiredDiscountRateMax** | **double** | Maximal DesiredDiscountRate | [optional] 
**xirrMin** | **double** | Minimal Xirr | [optional] 
**xirrMax** | **double** | Maximal Xirr | [optional] 
**pageSize** | **int** | Max items in result, up to 100000 | [optional] 
**pageNr** | **int** | Result page nr | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


