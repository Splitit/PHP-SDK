
# Installment

## Structure

`Installment`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `installmentNumber` | `int` | Required | - | getInstallmentNumber(): int | setInstallmentNumber(int installmentNumber): void |
| `amount` | `float` | Required | - | getAmount(): float | setAmount(float amount): void |
| `processDateTime` | `?DateTime` | Optional | - | getProcessDateTime(): ?\DateTime | setProcessDateTime(?\DateTime processDateTime): void |
| `status` | [`string(InstallmentStatusEnum)`](../../doc/models/installment-status-enum.md) | Required | - | getStatus(): string | setStatus(string status): void |

## Example (as JSON)

```json
{
  "InstallmentNumber": 244,
  "Amount": 181.38,
  "ProcessDateTime": "2016-03-13T12:52:32.123Z",
  "Status": "Processed"
}
```

