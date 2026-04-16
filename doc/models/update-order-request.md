
# Update Order Request

## Structure

`UpdateOrderRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `trackingNumber` | `?string` | Optional | - | getTrackingNumber(): ?string | setTrackingNumber(?string trackingNumber): void |
| `shippingStatus` | [`string(ShippingStatusEnum)`](../../doc/models/shipping-status-enum.md) | Required | - | getShippingStatus(): string | setShippingStatus(string shippingStatus): void |
| `metadata` | [`?(MetadataItem[])`](../../doc/models/metadata-item.md) | Optional | - | getMetadata(): ?array | setMetadata(?array metadata): void |
| `merchantOrderReference` | `?string` | Optional | - | getMerchantOrderReference(): ?string | setMerchantOrderReference(?string merchantOrderReference): void |

## Example (as JSON)

```json
{
  "TrackingNumber": "TrackingNumber2",
  "ShippingStatus": "Pending",
  "Metadata": [
    {
      "Key": "Key2",
      "Value": "Value4"
    }
  ],
  "MerchantOrderReference": "MerchantOrderReference2"
}
```

