
# Payment Method Data

## Structure

`PaymentMethodData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `string` | Required, Constant | **Value**: `'Card'` | getType(): string | setType(string type): void |
| `cardDetails` | [`?MaskedCardDetails`](../../doc/models/masked-card-details.md) | Optional | - | getCardDetails(): ?MaskedCardDetails | setCardDetails(?MaskedCardDetails cardDetails): void |
| `par` | `?string` | Optional | - | getPar(): ?string | setPar(?string par): void |

## Example (as JSON)

```json
{
  "Type": "Card",
  "CardDetails": {
    "Last4Digits": "Last4Digits2",
    "BIN": "BIN6",
    "IssuerName": "IssuerName6"
  },
  "Par": "Par6"
}
```

