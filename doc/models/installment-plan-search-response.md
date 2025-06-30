
# Installment Plan Search Response

## Structure

`InstallmentPlanSearchResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `planList` | [`?(SearchInstallmentPlanResponseItem[])`](../../doc/models/search-installment-plan-response-item.md) | Optional | - | getPlanList(): ?array | setPlanList(?array planList): void |

## Example (as JSON)

```json
{
  "PlanList": [
    {
      "InstallmentPlanNumber": "InstallmentPlanNumber0",
      "DateCreated": "2016-03-13T12:52:32.123Z",
      "RefOrderNumber": "RefOrderNumber0",
      "PurchaseMethod": "ECommerce",
      "Status": "Canceled",
      "Currency": "Currency4",
      "OriginalAmount": 22.84
    }
  ]
}
```

