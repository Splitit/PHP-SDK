
# Card Data

## Structure

`CardData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `cardHolderFullName` | `?string` | Optional | - | getCardHolderFullName(): ?string | setCardHolderFullName(?string cardHolderFullName): void |
| `cardNumber` | `?string` | Optional | - | getCardNumber(): ?string | setCardNumber(?string cardNumber): void |
| `cardExpYear` | `?string` | Optional | - | getCardExpYear(): ?string | setCardExpYear(?string cardExpYear): void |
| `cardExpMonth` | `?string` | Optional | - | getCardExpMonth(): ?string | setCardExpMonth(?string cardExpMonth): void |
| `cardCvv` | `?string` | Optional | - | getCardCvv(): ?string | setCardCvv(?string cardCvv): void |
| `cardBrand` | [`?string(CardBrandEnum)`](../../doc/models/card-brand-enum.md) | Optional | - | getCardBrand(): ?string | setCardBrand(?string cardBrand): void |
| `cardType` | [`?string(CardTypeEnum)`](../../doc/models/card-type-enum.md) | Optional | - | getCardType(): ?string | setCardType(?string cardType): void |

## Example (as JSON)

```json
{
  "CardHolderFullName": "CardHolderFullName8",
  "CardNumber": "CardNumber2",
  "CardExpYear": "CardExpYear4",
  "CardExpMonth": "CardExpMonth0",
  "CardCvv": "CardCvv8"
}
```

