
# Installment Plan Update Request

## Structure

`InstallmentPlanUpdateRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `refOrderNumber` | `?string` | Optional | - | getRefOrderNumber(): ?string | setRefOrderNumber(?string refOrderNumber): void |
| `trackingNumber` | `?string` | Optional | - | getTrackingNumber(): ?string | setTrackingNumber(?string trackingNumber): void |
| `capture` | `?bool` | Optional | - | getCapture(): ?bool | setCapture(?bool capture): void |
| `shippingStatus` | [`?string(ShippingStatusEnum)`](../../doc/models/shipping-status-enum.md) | Optional | - | getShippingStatus(): ?string | setShippingStatus(?string shippingStatus): void |
| `newAmount` | `?string` | Optional | - | getNewAmount(): ?string | setNewAmount(?string newAmount): void |

## Example (as JSON)

```json
{
  "RefOrderNumber": "RefOrderNumber2",
  "TrackingNumber": "TrackingNumber6",
  "Capture": false,
  "ShippingStatus": "Shipped",
  "NewAmount": "NewAmount4"
}
```

