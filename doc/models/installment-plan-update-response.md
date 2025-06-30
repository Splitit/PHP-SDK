
# Installment Plan Update Response

## Structure

`InstallmentPlanUpdateResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `refOrderNumber` | `?string` | Optional | - | getRefOrderNumber(): ?string | setRefOrderNumber(?string refOrderNumber): void |
| `installmentPlanNumber` | `?string` | Optional | - | getInstallmentPlanNumber(): ?string | setInstallmentPlanNumber(?string installmentPlanNumber): void |
| `status` | [`string(PlanStatusEnum)`](../../doc/models/plan-status-enum.md) | Required | - | getStatus(): string | setStatus(string status): void |
| `shippingStatus` | [`string(ShippingStatusEnum)`](../../doc/models/shipping-status-enum.md) | Required | - | getShippingStatus(): string | setShippingStatus(string shippingStatus): void |
| `newAmount` | `?float` | Optional | - | getNewAmount(): ?float | setNewAmount(?float newAmount): void |

## Example (as JSON)

```json
{
  "RefOrderNumber": "RefOrderNumber2",
  "InstallmentPlanNumber": "InstallmentPlanNumber2",
  "Status": "PendingCapture",
  "ShippingStatus": "Delivered",
  "NewAmount": 233.54
}
```

