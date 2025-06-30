
# Payment Plan Option Model

## Structure

`PaymentPlanOptionModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `numberOfInstallments` | `int` | Required | - | getNumberOfInstallments(): int | setNumberOfInstallments(int numberOfInstallments): void |
| `firstInstallmentAmount` | `float` | Required | - | getFirstInstallmentAmount(): float | setFirstInstallmentAmount(float firstInstallmentAmount): void |
| `installmentAmount` | `float` | Required | - | getInstallmentAmount(): float | setInstallmentAmount(float installmentAmount): void |
| `lastInstallmentAmount` | `float` | Required | - | getLastInstallmentAmount(): float | setLastInstallmentAmount(float lastInstallmentAmount): void |
| `links` | [`?LinksModel`](../../doc/models/links-model.md) | Optional | - | getLinks(): ?LinksModel | setLinks(?LinksModel links): void |
| `termsAndConditionsBrief` | `?string` | Optional | - | getTermsAndConditionsBrief(): ?string | setTermsAndConditionsBrief(?string termsAndConditionsBrief): void |
| `installmentFrequency` | `?string` | Optional | - | getInstallmentFrequency(): ?string | setInstallmentFrequency(?string installmentFrequency): void |

## Example (as JSON)

```json
{
  "NumberOfInstallments": 148,
  "FirstInstallmentAmount": 45.62,
  "InstallmentAmount": 232.3,
  "LastInstallmentAmount": 187.9,
  "Links": {
    "PrivacyPolicyUrl": "PrivacyPolicyUrl8",
    "TermsAndConditionsUrl": "TermsAndConditionsUrl4",
    "LearnMoreUrl": "LearnMoreUrl8"
  },
  "TermsAndConditionsBrief": "TermsAndConditionsBrief6",
  "InstallmentFrequency": "InstallmentFrequency2"
}
```

