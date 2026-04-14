
# Offer Item

## Structure

`OfferItem`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `offerId` | `?string` | Optional | - | getOfferId(): ?string | setOfferId(?string offerId): void |
| `apr` | [`?AprData`](../../doc/models/apr-data.md) | Optional | - | getApr(): ?AprData | setApr(?AprData apr): void |
| `currency` | `?string` | Optional | - | getCurrency(): ?string | setCurrency(?string currency): void |
| `totalAmount` | `float` | Required | - | getTotalAmount(): float | setTotalAmount(float totalAmount): void |
| `totalFees` | `float` | Required | - | getTotalFees(): float | setTotalFees(float totalFees): void |
| `numberOfInstallments` | `int` | Required | - | getNumberOfInstallments(): int | setNumberOfInstallments(int numberOfInstallments): void |
| `frequency` | `?string` | Optional | - | getFrequency(): ?string | setFrequency(?string frequency): void |
| `installmentAmount` | `float` | Required | - | getInstallmentAmount(): float | setInstallmentAmount(float installmentAmount): void |
| `firstInstallmentAmount` | `float` | Required | - | getFirstInstallmentAmount(): float | setFirstInstallmentAmount(float firstInstallmentAmount): void |
| `lastInstallmentAmount` | [`?AmountData`](../../doc/models/amount-data.md) | Optional | - | getLastInstallmentAmount(): ?AmountData | setLastInstallmentAmount(?AmountData lastInstallmentAmount): void |
| `inlineContent` | [`?InlineContent`](../../doc/models/inline-content.md) | Optional | - | getInlineContent(): ?InlineContent | setInlineContent(?InlineContent inlineContent): void |

## Example (as JSON)

```json
{
  "OfferId": "OfferId8",
  "Apr": {
    "Value": 24.74,
    "Symbol": "Symbol8"
  },
  "Currency": "Currency4",
  "TotalAmount": 20.66,
  "TotalFees": 154.1,
  "NumberOfInstallments": 84,
  "Frequency": "Frequency8",
  "InstallmentAmount": 109.18,
  "FirstInstallmentAmount": 178.5,
  "LastInstallmentAmount": {
    "Value": 181.16,
    "Symbol": "Symbol2"
  }
}
```

