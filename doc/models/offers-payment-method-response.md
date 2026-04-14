
# Offers Payment Method Response

## Structure

`OffersPaymentMethodResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `last4Digits` | `?string` | Optional | - | getLast4Digits(): ?string | setLast4Digits(?string last4Digits): void |
| `bIN` | `?string` | Optional | - | getBIN(): ?string | setBIN(?string bIN): void |
| `issuerName` | `?string` | Optional | - | getIssuerName(): ?string | setIssuerName(?string issuerName): void |
| `type` | `string` | Required, Constant | **Value**: `'Card'` | getType(): string | setType(string type): void |

## Example (as JSON)

```json
{
  "Type": "Card",
  "Last4Digits": "Last4Digits4",
  "BIN": "BIN8",
  "IssuerName": "IssuerName8"
}
```

