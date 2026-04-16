
# Offers Merchant Details

## Structure

`OffersMerchantDetails`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `storeName` | `?string` | Optional | - | getStoreName(): ?string | setStoreName(?string storeName): void |
| `storeId` | `?string` | Optional | - | getStoreId(): ?string | setStoreId(?string storeId): void |
| `storeLocation` | [`OffersStoreLocation`](../../doc/models/offers-store-location.md) | Required | - | getStoreLocation(): OffersStoreLocation | setStoreLocation(OffersStoreLocation storeLocation): void |

## Example (as JSON)

```json
{
  "StoreName": "StoreName6",
  "StoreId": "StoreId0",
  "StoreLocation": {
    "Line1": "Line14",
    "Line2": "Line28",
    "City": "City6",
    "State": "State2",
    "PostalCode": "PostalCode2",
    "Country": "Country0"
  }
}
```

