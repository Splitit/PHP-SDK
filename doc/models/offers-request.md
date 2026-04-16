
# Offers Request

## Structure

`OffersRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `merchantOrderReference` | `?string` | Optional | - | getMerchantOrderReference(): ?string | setMerchantOrderReference(?string merchantOrderReference): void |
| `purchaseMethod` | [`string(PurchaseMethodEnum)`](../../doc/models/purchase-method-enum.md) | Required | - | getPurchaseMethod(): string | setPurchaseMethod(string purchaseMethod): void |
| `purchaseAmount` | `string` | Required | - | getPurchaseAmount(): string | setPurchaseAmount(string purchaseAmount): void |
| `currency` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getCurrency(): string | setCurrency(string currency): void |
| `shopperDetails` | [`OffersShopperDetails`](../../doc/models/offers-shopper-details.md) | Required | - | getShopperDetails(): OffersShopperDetails | setShopperDetails(OffersShopperDetails shopperDetails): void |
| `paymentMethod` | [`OffersPaymentMethod`](../../doc/models/offers-payment-method.md) | Required | - | getPaymentMethod(): OffersPaymentMethod | setPaymentMethod(OffersPaymentMethod paymentMethod): void |
| `merchantDetails` | [`?OffersMerchantDetails`](../../doc/models/offers-merchant-details.md) | Optional | - | getMerchantDetails(): ?OffersMerchantDetails | setMerchantDetails(?OffersMerchantDetails merchantDetails): void |
| `metadata` | [`?(MetadataItem[])`](../../doc/models/metadata-item.md) | Optional | - | getMetadata(): ?array | setMetadata(?array metadata): void |

## Example (as JSON)

```json
{
  "PurchaseMethod": "InStore",
  "PurchaseAmount": "PurchaseAmount8",
  "Currency": "Currency8",
  "ShopperDetails": {
    "FirstName": "FirstName6",
    "LastName": "LastName6",
    "Email": "Email6",
    "PhoneNumber": "PhoneNumber2",
    "ShopperLocale": "ShopperLocale8",
    "BillingAddress": {
      "Line1": "Line14",
      "Line2": "Line28",
      "City": "City4",
      "State": "State2",
      "PostalCode": "PostalCode8",
      "Country": "Country0"
    }
  },
  "PaymentMethod": {
    "Type": "Card",
    "CardDetails": {
      "FirstName": "FirstName6",
      "LastName": "LastName6",
      "CardNumber": "CardNumber2",
      "ExpMonth": 90,
      "ExpYear": 228,
      "Cvv": "Cvv8"
    }
  },
  "MerchantOrderReference": "MerchantOrderReference6",
  "MerchantDetails": {
    "StoreName": "StoreName8",
    "StoreId": "StoreId2",
    "StoreLocation": {
      "Line1": "Line14",
      "Line2": "Line28",
      "City": "City6",
      "State": "State2",
      "PostalCode": "PostalCode2",
      "Country": "Country0"
    }
  },
  "Metadata": [
    {
      "Key": "Key2",
      "Value": "Value4"
    },
    {
      "Key": "Key2",
      "Value": "Value4"
    },
    {
      "Key": "Key2",
      "Value": "Value4"
    }
  ]
}
```

