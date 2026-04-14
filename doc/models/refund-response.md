
# Refund Response

## Structure

`RefundResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `refundId` | `?string` | Optional | - | getRefundId(): ?string | setRefundId(?string refundId): void |
| `installmentPlanNumber` | `?string` | Optional | - | getInstallmentPlanNumber(): ?string | setInstallmentPlanNumber(?string installmentPlanNumber): void |
| `currency` | `?string` | Optional | - | getCurrency(): ?string | setCurrency(?string currency): void |
| `requestedAmount` | `float` | Required | - | getRequestedAmount(): float | setRequestedAmount(float requestedAmount): void |
| `referenceId` | `?string` | Optional | - | getReferenceId(): ?string | setReferenceId(?string referenceId): void |

## Example (as JSON)

```json
{
  "RefundId": "RefundId8",
  "InstallmentPlanNumber": "InstallmentPlanNumber6",
  "Currency": "Currency0",
  "RequestedAmount": 226.62,
  "ReferenceId": "ReferenceId0"
}
```

