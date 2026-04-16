
# Installment Item

## Structure

`InstallmentItem`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `installmentNumber` | `int` | Required | - | getInstallmentNumber(): int | setInstallmentNumber(int installmentNumber): void |
| `amount` | [`?AmountData`](../../doc/models/amount-data.md) | Optional | - | getAmount(): ?AmountData | setAmount(?AmountData amount): void |
| `status` | [`string(InstallmentStatusEnum)`](../../doc/models/installment-status-enum.md) | Required | - | getStatus(): string | setStatus(string status): void |
| `processDateTime` | `?DateTime` | Optional | - | getProcessDateTime(): ?\DateTime | setProcessDateTime(?\DateTime processDateTime): void |

## Example (as JSON)

```json
{
  "InstallmentNumber": 156,
  "Amount": {
    "Value": 247.24,
    "Symbol": "Symbol0"
  },
  "Status": "AwaitingCapture",
  "ProcessDateTime": "2016-03-13T12:52:32.123Z"
}
```

