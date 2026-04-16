
# Update Order Response

## Structure

`UpdateOrderResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `status` | [`string(PlanStatusEnum)`](../../doc/models/plan-status-enum.md) | Required | - | getStatus(): string | setStatus(string status): void |
| `merchantOrderReference` | `?string` | Optional | - | getMerchantOrderReference(): ?string | setMerchantOrderReference(?string merchantOrderReference): void |
| `trackingNumber` | `?string` | Optional | - | getTrackingNumber(): ?string | setTrackingNumber(?string trackingNumber): void |
| `shippingStatus` | [`?string(ShippingStatusEnum)`](../../doc/models/shipping-status-enum.md) | Optional | - | getShippingStatus(): ?string | setShippingStatus(?string shippingStatus): void |
| `metadata` | [`?(MetadataItem[])`](../../doc/models/metadata-item.md) | Optional | - | getMetadata(): ?array | setMetadata(?array metadata): void |
| `installmentPlanNumber` | `?string` | Optional | - | getInstallmentPlanNumber(): ?string | setInstallmentPlanNumber(?string installmentPlanNumber): void |

## Example (as JSON)

```json
{
  "Status": "PendingCapture",
  "MerchantOrderReference": "MerchantOrderReference6",
  "TrackingNumber": "TrackingNumber6",
  "ShippingStatus": "Pending",
  "Metadata": [
    {
      "Key": "Key2",
      "Value": "Value4"
    }
  ],
  "InstallmentPlanNumber": "InstallmentPlanNumber2"
}
```

