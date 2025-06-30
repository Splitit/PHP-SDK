
# Plan Data Model

## Structure

`PlanDataModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `totalAmount` | `string` | Required | - | getTotalAmount(): string | setTotalAmount(string totalAmount): void |
| `currency` | `?string` | Optional | - | getCurrency(): ?string | setCurrency(?string currency): void |
| `numberOfInstallments` | `?int` | Optional | - | getNumberOfInstallments(): ?int | setNumberOfInstallments(?int numberOfInstallments): void |
| `terminalId` | `?string` | Optional | - | getTerminalId(): ?string | setTerminalId(?string terminalId): void |
| `purchaseMethod` | [`string(PurchaseMethodEnum)`](../../doc/models/purchase-method-enum.md) | Required | - | getPurchaseMethod(): string | setPurchaseMethod(string purchaseMethod): void |
| `refOrderNumber` | `?string` | Optional | - | getRefOrderNumber(): ?string | setRefOrderNumber(?string refOrderNumber): void |
| `extendedParams` | `?array<string,string>` | Optional | - | getExtendedParams(): ?array | setExtendedParams(?array extendedParams): void |
| `firstInstallmentAmount` | `?string` | Optional | - | getFirstInstallmentAmount(): ?string | setFirstInstallmentAmount(?string firstInstallmentAmount): void |
| `firstInstallmentDate` | `?DateTime` | Optional | - | getFirstInstallmentDate(): ?\DateTime | setFirstInstallmentDate(?\DateTime firstInstallmentDate): void |

## Example (as JSON)

```json
{
  "TotalAmount": "TotalAmount4",
  "Currency": "Currency6",
  "NumberOfInstallments": 154,
  "TerminalId": "TerminalId8",
  "PurchaseMethod": "ECommerce",
  "RefOrderNumber": "RefOrderNumber2",
  "ExtendedParams": {
    "key0": "ExtendedParams6",
    "key1": "ExtendedParams5",
    "key2": "ExtendedParams4"
  }
}
```

