
# Card Details

## Structure

`CardDetails`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `firstName` | `?string` | Optional | - | getFirstName(): ?string | setFirstName(?string firstName): void |
| `lastName` | `?string` | Optional | - | getLastName(): ?string | setLastName(?string lastName): void |
| `cardNumber` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getCardNumber(): string | setCardNumber(string cardNumber): void |
| `expYear` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getExpYear(): string | setExpYear(string expYear): void |
| `expMonth` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getExpMonth(): string | setExpMonth(string expMonth): void |
| `cvv` | `?string` | Optional | - | getCvv(): ?string | setCvv(?string cvv): void |

## Example (as JSON)

```json
{
  "FirstName": "FirstName6",
  "LastName": "LastName6",
  "CardNumber": "CardNumber2",
  "ExpYear": "ExpYear0",
  "ExpMonth": "ExpMonth2",
  "Cvv": "Cvv8"
}
```

