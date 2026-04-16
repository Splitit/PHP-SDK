
# Offers Card Details

## Structure

`OffersCardDetails`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `firstName` | `?string` | Optional | - | getFirstName(): ?string | setFirstName(?string firstName): void |
| `lastName` | `?string` | Optional | - | getLastName(): ?string | setLastName(?string lastName): void |
| `cardNumber` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getCardNumber(): string | setCardNumber(string cardNumber): void |
| `expMonth` | `int` | Required | - | getExpMonth(): int | setExpMonth(int expMonth): void |
| `expYear` | `int` | Required | - | getExpYear(): int | setExpYear(int expYear): void |
| `cvv` | `?string` | Optional | - | getCvv(): ?string | setCvv(?string cvv): void |

## Example (as JSON)

```json
{
  "FirstName": "FirstName8",
  "LastName": "LastName8",
  "CardNumber": "CardNumber8",
  "ExpMonth": 240,
  "ExpYear": 122,
  "Cvv": "Cvv6"
}
```

