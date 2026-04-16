
# Update Offers Payment Method

## Structure

`UpdateOffersPaymentMethod`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `string` | Required, Constant | **Value**: `'Card'` | getType(): string | setType(string type): void |
| `cardDetails` | [`CardDetails`](../../doc/models/card-details.md) | Required | - | getCardDetails(): CardDetails | setCardDetails(CardDetails cardDetails): void |

## Example (as JSON)

```json
{
  "Type": "Card",
  "CardDetails": {
    "FirstName": "FirstName6",
    "LastName": "LastName6",
    "CardNumber": "CardNumber2",
    "ExpYear": "ExpYear0",
    "ExpMonth": "ExpMonth2",
    "Cvv": "Cvv8"
  }
}
```

