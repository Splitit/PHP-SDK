
# Refund Summary

## Structure

`RefundSummary`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `totalAmount` | `?float` | Optional | - | getTotalAmount(): ?float | setTotalAmount(?float totalAmount): void |
| `failedAmount` | `?float` | Optional | - | getFailedAmount(): ?float | setFailedAmount(?float failedAmount): void |
| `succeededAmount` | `?float` | Optional | - | getSucceededAmount(): ?float | setSucceededAmount(?float succeededAmount): void |
| `pendingAmount` | `?float` | Optional | - | getPendingAmount(): ?float | setPendingAmount(?float pendingAmount): void |

## Example (as JSON)

```json
{
  "TotalAmount": 115.98,
  "FailedAmount": 192.04,
  "SucceededAmount": 243.84,
  "PendingAmount": 20.8
}
```

