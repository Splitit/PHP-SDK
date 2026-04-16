
# Offers Shopper Details

## Structure

`OffersShopperDetails`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `firstName` | `?string` | Optional | - | getFirstName(): ?string | setFirstName(?string firstName): void |
| `lastName` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getLastName(): string | setLastName(string lastName): void |
| `email` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getEmail(): string | setEmail(string email): void |
| `phoneNumber` | `?string` | Optional | - | getPhoneNumber(): ?string | setPhoneNumber(?string phoneNumber): void |
| `shopperLocale` | `?string` | Optional | - | getShopperLocale(): ?string | setShopperLocale(?string shopperLocale): void |
| `billingAddress` | [`?OffersBillingAddress`](../../doc/models/offers-billing-address.md) | Optional | - | getBillingAddress(): ?OffersBillingAddress | setBillingAddress(?OffersBillingAddress billingAddress): void |

## Example (as JSON)

```json
{
  "FirstName": "FirstName8",
  "LastName": "LastName8",
  "Email": "Email8",
  "PhoneNumber": "PhoneNumber8",
  "ShopperLocale": "ShopperLocale6",
  "BillingAddress": {
    "Line1": "Line14",
    "Line2": "Line28",
    "City": "City4",
    "State": "State2",
    "PostalCode": "PostalCode8",
    "Country": "Country0"
  }
}
```

