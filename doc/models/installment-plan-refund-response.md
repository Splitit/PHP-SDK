
# Installment Plan Refund Response

## Structure

`InstallmentPlanRefundResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `refundId` | `?string` | Optional | - | getRefundId(): ?string | setRefundId(?string refundId): void |
| `installmentPlanNumber` | `?string` | Optional | - | getInstallmentPlanNumber(): ?string | setInstallmentPlanNumber(?string installmentPlanNumber): void |
| `currency` | `?string` | Optional | - | getCurrency(): ?string | setCurrency(?string currency): void |
| `nonCreditRefundAmount` | `?float` | Optional | - | getNonCreditRefundAmount(): ?float | setNonCreditRefundAmount(?float nonCreditRefundAmount): void |
| `creditRefundAmount` | `?float` | Optional | - | getCreditRefundAmount(): ?float | setCreditRefundAmount(?float creditRefundAmount): void |
| `summary` | [`?RefundSummary`](../../doc/models/refund-summary.md) | Optional | - | getSummary(): ?RefundSummary | setSummary(?RefundSummary summary): void |
| `referenceId` | `?string` | Optional | - | getReferenceId(): ?string | setReferenceId(?string referenceId): void |

## Example (as JSON)

```json
{
  "RefundId": "RefundId8",
  "InstallmentPlanNumber": "InstallmentPlanNumber6",
  "Currency": "Currency0",
  "NonCreditRefundAmount": 1.76,
  "CreditRefundAmount": 182.3
}
```

