
# Installment Plan Refund Request

## Structure

`InstallmentPlanRefundRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amount` | `string` | Required | - | getAmount(): string | setAmount(string amount): void |
| `refundStrategy` | [`?string(RefundStrategyEnum)`](../../doc/models/refund-strategy-enum.md) | Optional | - | getRefundStrategy(): ?string | setRefundStrategy(?string refundStrategy): void |
| `referenceId` | `?string` | Optional | - | getReferenceId(): ?string | setReferenceId(?string referenceId): void |

## Example (as JSON)

```json
{
  "Amount": "Amount4",
  "RefundStrategy": "FutureInstallmentsNotAllowed",
  "ReferenceId": "ReferenceId0"
}
```

