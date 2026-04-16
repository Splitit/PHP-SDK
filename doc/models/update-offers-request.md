
# Update Offers Request

## Structure

`UpdateOffersRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `merchantOrderReference` | `?string` | Optional | - | getMerchantOrderReference(): ?string | setMerchantOrderReference(?string merchantOrderReference): void |
| `shopperDetails` | [`?OffersShopperDetails`](../../doc/models/offers-shopper-details.md) | Optional | - | getShopperDetails(): ?OffersShopperDetails | setShopperDetails(?OffersShopperDetails shopperDetails): void |
| `paymentMethod` | [`?UpdateOffersPaymentMethod`](../../doc/models/update-offers-payment-method.md) | Optional | - | getPaymentMethod(): ?UpdateOffersPaymentMethod | setPaymentMethod(?UpdateOffersPaymentMethod paymentMethod): void |
| `metadata` | [`?(MetadataItem[])`](../../doc/models/metadata-item.md) | Optional | - | getMetadata(): ?array | setMetadata(?array metadata): void |

## Example (as JSON)

```json
{
  "MerchantOrderReference": "MerchantOrderReference8",
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
    "Type": "Type4",
    "CardDetails": {
      "FirstName": "FirstName6",
      "LastName": "LastName6",
      "CardNumber": "CardNumber2",
      "ExpYear": "ExpYear0",
      "ExpMonth": "ExpMonth2",
      "Cvv": "Cvv8"
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

