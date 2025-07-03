
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
    null,
    {},
    {}
  ]
}
```

