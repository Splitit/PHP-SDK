
# Authorize Request

## Structure

`AuthorizeRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `offerId` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getOfferId(): string | setOfferId(string offerId): void |
| `autoCapture` | `bool` | Required | - | getAutoCapture(): bool | setAutoCapture(bool autoCapture): void |
| `shopperAcceptedTerms` | `bool` | Required | - | getShopperAcceptedTerms(): bool | setShopperAcceptedTerms(bool shopperAcceptedTerms): void |
| `merchantOrderReference` | `?string` | Optional | - | getMerchantOrderReference(): ?string | setMerchantOrderReference(?string merchantOrderReference): void |
| `threeDS` | [`?ThreeDSRequestData`](../../doc/models/three-ds-request-data.md) | Optional | - | getThreeDS(): ?ThreeDSRequestData | setThreeDS(?ThreeDSRequestData threeDS): void |
| `processingData` | [`?ProcessingData`](../../doc/models/processing-data.md) | Optional | - | getProcessingData(): ?ProcessingData | setProcessingData(?ProcessingData processingData): void |

## Example (as JSON)

```json
{
  "OfferId": "OfferId2",
  "AutoCapture": false,
  "ShopperAcceptedTerms": false,
  "MerchantOrderReference": "MerchantOrderReference4",
  "ThreeDS": {
    "Execute": false,
    "ThreeDSURLs": {
      "SuccessUrl": "SuccessUrl2",
      "FailureUrl": "FailureUrl2",
      "CancelUrl": "CancelUrl4"
    },
    "AuthenticationData": {
      "ECI": "ECI6",
      "CAVV": "CAVV4",
      "DirectoryServerTransactionId": "DirectoryServerTransactionId0",
      "Version": "Version8"
    }
  },
  "ProcessingData": {
    "SoftDescriptor": "SoftDescriptor6"
  }
}
```

