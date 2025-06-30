
# Plan Data

## Structure

`PlanData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `terminalId` | `?string` | Optional | - | getTerminalId(): ?string | setTerminalId(?string terminalId): void |
| `totalAmount` | `string` | Required | - | getTotalAmount(): string | setTotalAmount(string totalAmount): void |
| `firstInstallmentAmount` | `?float` | Optional | - | getFirstInstallmentAmount(): ?float | setFirstInstallmentAmount(?float firstInstallmentAmount): void |
| `currency` | `?string` | Optional | - | getCurrency(): ?string | setCurrency(?string currency): void |
| `numberOfInstallments` | `int` | Required | - | getNumberOfInstallments(): int | setNumberOfInstallments(int numberOfInstallments): void |
| `purchaseMethod` | [`string(PurchaseMethodEnum)`](../../doc/models/purchase-method-enum.md) | Required | - | getPurchaseMethod(): string | setPurchaseMethod(string purchaseMethod): void |
| `refOrderNumber` | `?string` | Optional | - | getRefOrderNumber(): ?string | setRefOrderNumber(?string refOrderNumber): void |
| `allowedInstallmentOptions` | `?(int[])` | Optional | - | getAllowedInstallmentOptions(): ?array | setAllowedInstallmentOptions(?array allowedInstallmentOptions): void |
| `tags` | `?array<string,string>` | Optional | - | getTags(): ?array | setTags(?array tags): void |
| `processingData` | [`?ProcessingData`](../../doc/models/processing-data.md) | Optional | - | getProcessingData(): ?ProcessingData | setProcessingData(?ProcessingData processingData): void |
| `firstInstallmentDate` | `?DateTime` | Optional | - | getFirstInstallmentDate(): ?\DateTime | setFirstInstallmentDate(?\DateTime firstInstallmentDate): void |

## Example (as JSON)

```json
{
  "TerminalId": "TerminalId8",
  "TotalAmount": "TotalAmount4",
  "FirstInstallmentAmount": 11.28,
  "Currency": "Currency6",
  "NumberOfInstallments": 2,
  "PurchaseMethod": "PhoneOrder",
  "RefOrderNumber": "RefOrderNumber2",
  "AllowedInstallmentOptions": [
    46,
    47
  ]
}
```

