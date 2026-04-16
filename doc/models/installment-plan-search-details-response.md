
# Installment Plan Search Details Response

## Structure

`InstallmentPlanSearchDetailsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `planList` | [`?(InstallmentPlanDetailsResponse[])`](../../doc/models/installment-plan-details-response.md) | Optional | - | getPlanList(): ?array | setPlanList(?array planList): void |

## Example (as JSON)

```json
{
  "PlanList": [
    {
      "DateCreated": "2016-03-13T12:52:32.123Z",
      "Status": "InProgress",
      "InstallmentPlanNumber": "InstallmentPlanNumber0",
      "MerchantOrderReference": "MerchantOrderReference8",
      "InstallmentProvider": "Mastercard",
      "PurchaseMethod": "ECommerce",
      "Currency": "Currency4",
      "PurchaseAmount": 85.72,
      "TotalAmount": 116.66,
      "TotalFees": 58.1,
      "Apr": {
        "Value": 24.74,
        "Symbol": "Symbol8"
      },
      "Authorization": {
        "Status": "Pending3DS",
        "Date": "2016-03-13T12:52:32.123Z",
        "SplititErrorResultCode": "SplititErrorResultCode4",
        "GatewayTransactionID": "GatewayTransactionID0",
        "GatewayResultCode": "GatewayResultCode2",
        "GatewayResultMessage": "GatewayResultMessage8"
      }
    },
    {
      "DateCreated": "2016-03-13T12:52:32.123Z",
      "Status": "InProgress",
      "InstallmentPlanNumber": "InstallmentPlanNumber0",
      "MerchantOrderReference": "MerchantOrderReference8",
      "InstallmentProvider": "Mastercard",
      "PurchaseMethod": "ECommerce",
      "Currency": "Currency4",
      "PurchaseAmount": 85.72,
      "TotalAmount": 116.66,
      "TotalFees": 58.1,
      "Apr": {
        "Value": 24.74,
        "Symbol": "Symbol8"
      },
      "Authorization": {
        "Status": "Pending3DS",
        "Date": "2016-03-13T12:52:32.123Z",
        "SplititErrorResultCode": "SplititErrorResultCode4",
        "GatewayTransactionID": "GatewayTransactionID0",
        "GatewayResultCode": "GatewayResultCode2",
        "GatewayResultMessage": "GatewayResultMessage8"
      }
    }
  ]
}
```

