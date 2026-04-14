
# Offers Payment Method

## Structure

`OffersPaymentMethod`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `string` | Required, Constant | **Value**: `'Card'` | getType(): string | setType(string type): void |
| `cardDetails` | [`OffersCardDetails`](../../doc/models/offers-card-details.md) | Required | - | getCardDetails(): OffersCardDetails | setCardDetails(OffersCardDetails cardDetails): void |

## Example (as JSON)

```json
{
  "Type": "Card",
  "CardDetails": {
    "FirstName": "FirstName6",
    "LastName": "LastName6",
    "CardNumber": "CardNumber2",
    "ExpMonth": 90,
    "ExpYear": 228,
    "Cvv": "Cvv8"
  }
}
```

