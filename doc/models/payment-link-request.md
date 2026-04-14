
# Payment Link Request

## Structure

`PaymentLinkRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amount` | `string` | Required | - | getAmount(): string | setAmount(string amount): void |
| `currency` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getCurrency(): string | setCurrency(string currency): void |
| `autoCapture` | `?bool` | Optional | - | getAutoCapture(): ?bool | setAutoCapture(?bool autoCapture): void |
| `merchantOrderReference` | `?string` | Optional | - | getMerchantOrderReference(): ?string | setMerchantOrderReference(?string merchantOrderReference): void |
| `purchaseMethod` | [`string(PurchaseMethodEnum)`](../../doc/models/purchase-method-enum.md) | Required | - | getPurchaseMethod(): string | setPurchaseMethod(string purchaseMethod): void |
| `shopperDetails` | [`OffersShopperDetails`](../../doc/models/offers-shopper-details.md) | Required | - | getShopperDetails(): OffersShopperDetails | setShopperDetails(OffersShopperDetails shopperDetails): void |
| `merchantDetails` | [`?OffersMerchantDetails`](../../doc/models/offers-merchant-details.md) | Optional | - | getMerchantDetails(): ?OffersMerchantDetails | setMerchantDetails(?OffersMerchantDetails merchantDetails): void |
| `checkoutUrlValidity` | `?DateTime` | Optional | - | getCheckoutUrlValidity(): ?\DateTime | setCheckoutUrlValidity(?\DateTime checkoutUrlValidity): void |
| `metadata` | [`?(MetadataItem[])`](../../doc/models/metadata-item.md) | Optional | - | getMetadata(): ?array | setMetadata(?array metadata): void |
| `redirectUrls` | [`?RedirectUrls`](../../doc/models/redirect-urls.md) | Optional | - | getRedirectUrls(): ?RedirectUrls | setRedirectUrls(?RedirectUrls redirectUrls): void |
| `processingData` | [`?ProcessingData`](../../doc/models/processing-data.md) | Optional | - | getProcessingData(): ?ProcessingData | setProcessingData(?ProcessingData processingData): void |
| `threeDS` | [`?ThreeDSExecute`](../../doc/models/three-ds-execute.md) | Optional | - | getThreeDS(): ?ThreeDSExecute | setThreeDS(?ThreeDSExecute threeDS): void |

## Example (as JSON)

```json
{
  "Amount": "Amount0",
  "Currency": "Currency6",
  "AutoCapture": false,
  "MerchantOrderReference": "MerchantOrderReference4",
  "PurchaseMethod": "InStoreVcc",
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
  "CheckoutUrlValidity": "2016-03-13T12:52:32.123Z",
  "Metadata": [
    {
      "Key": "Key2",
      "Value": "Value4"
    }
  ]
}
```

