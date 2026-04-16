
# Offers Store Location

## Structure

`OffersStoreLocation`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `line1` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getLine1(): string | setLine1(string line1): void |
| `line2` | `?string` | Optional | - | getLine2(): ?string | setLine2(?string line2): void |
| `city` | `?string` | Optional | - | getCity(): ?string | setCity(?string city): void |
| `state` | `?string` | Optional | - | getState(): ?string | setState(?string state): void |
| `postalCode` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getPostalCode(): string | setPostalCode(string postalCode): void |
| `country` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getCountry(): string | setCountry(string country): void |

## Example (as JSON)

```json
{
  "Line1": "Line14",
  "Line2": "Line28",
  "City": "City6",
  "State": "State2",
  "PostalCode": "PostalCode2",
  "Country": "Country0"
}
```

