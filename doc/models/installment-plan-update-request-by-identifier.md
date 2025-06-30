
# Installment Plan Update Request by Identifier

## Structure

`InstallmentPlanUpdateRequestByIdentifier`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `refOrderNumber` | `?string` | Optional | - | getRefOrderNumber(): ?string | setRefOrderNumber(?string refOrderNumber): void |
| `trackingNumber` | `?string` | Optional | - | getTrackingNumber(): ?string | setTrackingNumber(?string trackingNumber): void |
| `capture` | `?bool` | Optional | - | getCapture(): ?bool | setCapture(?bool capture): void |
| `shippingStatus` | [`?string(ShippingStatusEnum)`](../../doc/models/shipping-status-enum.md) | Optional | - | getShippingStatus(): ?string | setShippingStatus(?string shippingStatus): void |
| `newAmount` | `?float` | Optional | - | getNewAmount(): ?float | setNewAmount(?float newAmount): void |
| `identifier` | [`?IdentifierContract`](../../doc/models/identifier-contract.md) | Optional | - | getIdentifier(): ?IdentifierContract | setIdentifier(?IdentifierContract identifier): void |

## Example (as JSON)

```json
{
  "RefOrderNumber": "RefOrderNumber2",
  "TrackingNumber": "TrackingNumber6",
  "Capture": false,
  "ShippingStatus": "Pending",
  "NewAmount": 233.74
}
```

