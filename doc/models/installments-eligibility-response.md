
# Installments Eligibility Response

## Structure

`InstallmentsEligibilityResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `installmentProvider` | `?string` | Optional | - | getInstallmentProvider(): ?string | setInstallmentProvider(?string installmentProvider): void |
| `paymentPlanOptions` | [`?(PaymentPlanOptionModel[])`](../../doc/models/payment-plan-option-model.md) | Optional | - | getPaymentPlanOptions(): ?array | setPaymentPlanOptions(?array paymentPlanOptions): void |

## Example (as JSON)

```json
{
  "InstallmentProvider": "InstallmentProvider2",
  "PaymentPlanOptions": [
    {
      "NumberOfInstallments": 64,
      "FirstInstallmentAmount": 177.02,
      "InstallmentAmount": 107.7,
      "LastInstallmentAmount": 56.5,
      "Links": {
        "PrivacyPolicyUrl": "PrivacyPolicyUrl8",
        "TermsAndConditionsUrl": "TermsAndConditionsUrl4",
        "LearnMoreUrl": "LearnMoreUrl8"
      },
      "TermsAndConditionsBrief": "TermsAndConditionsBrief6",
      "InstallmentFrequency": "InstallmentFrequency2"
    },
    {
      "NumberOfInstallments": 64,
      "FirstInstallmentAmount": 177.02,
      "InstallmentAmount": 107.7,
      "LastInstallmentAmount": 56.5,
      "Links": {
        "PrivacyPolicyUrl": "PrivacyPolicyUrl8",
        "TermsAndConditionsUrl": "TermsAndConditionsUrl4",
        "LearnMoreUrl": "LearnMoreUrl8"
      },
      "TermsAndConditionsBrief": "TermsAndConditionsBrief6",
      "InstallmentFrequency": "InstallmentFrequency2"
    },
    {
      "NumberOfInstallments": 64,
      "FirstInstallmentAmount": 177.02,
      "InstallmentAmount": 107.7,
      "LastInstallmentAmount": 56.5,
      "Links": {
        "PrivacyPolicyUrl": "PrivacyPolicyUrl8",
        "TermsAndConditionsUrl": "TermsAndConditionsUrl4",
        "LearnMoreUrl": "LearnMoreUrl8"
      },
      "TermsAndConditionsBrief": "TermsAndConditionsBrief6",
      "InstallmentFrequency": "InstallmentFrequency2"
    }
  ]
}
```

