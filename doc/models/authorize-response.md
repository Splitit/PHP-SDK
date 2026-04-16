
# Authorize Response

## Structure

`AuthorizeResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `dateCreated` | `DateTime` | Required | - | getDateCreated(): \DateTime | setDateCreated(\DateTime dateCreated): void |
| `planStatus` | [`string(InstallmentPlanStatusEnum)`](../../doc/models/installment-plan-status-enum.md) | Required | - | getPlanStatus(): string | setPlanStatus(string planStatus): void |
| `installmentPlanNumber` | `?string` | Optional | - | getInstallmentPlanNumber(): ?string | setInstallmentPlanNumber(?string installmentPlanNumber): void |
| `merchantOrderReference` | `?string` | Optional | - | getMerchantOrderReference(): ?string | setMerchantOrderReference(?string merchantOrderReference): void |
| `purchaseMethod` | [`string(PurchaseMethodEnum)`](../../doc/models/purchase-method-enum.md) | Required | - | getPurchaseMethod(): string | setPurchaseMethod(string purchaseMethod): void |
| `currency` | `?string` | Optional | - | getCurrency(): ?string | setCurrency(?string currency): void |
| `purchaseAmount` | `float` | Required | - | getPurchaseAmount(): float | setPurchaseAmount(float purchaseAmount): void |
| `totalFees` | `float` | Required | - | getTotalFees(): float | setTotalFees(float totalFees): void |
| `totalAmount` | `float` | Required | - | getTotalAmount(): float | setTotalAmount(float totalAmount): void |
| `apr` | [`?AprData`](../../doc/models/apr-data.md) | Optional | - | getApr(): ?AprData | setApr(?AprData apr): void |
| `authorization` | [`?AuthorizeAuthorizationData`](../../doc/models/authorize-authorization-data.md) | Optional | - | getAuthorization(): ?AuthorizeAuthorizationData | setAuthorization(?AuthorizeAuthorizationData authorization): void |
| `paymentMethod` | [`?PaymentMethodData`](../../doc/models/payment-method-data.md) | Optional | - | getPaymentMethod(): ?PaymentMethodData | setPaymentMethod(?PaymentMethodData paymentMethod): void |
| `installments` | [`?(InstallmentItem[])`](../../doc/models/installment-item.md) | Optional | - | getInstallments(): ?array | setInstallments(?array installments): void |
| `metadata` | [`?(MetadataItem[])`](../../doc/models/metadata-item.md) | Optional | - | getMetadata(): ?array | setMetadata(?array metadata): void |

## Example (as JSON)

```json
{
  "DateCreated": "2016-03-13T12:52:32.123Z",
  "PlanStatus": "PendingApproval",
  "InstallmentPlanNumber": "InstallmentPlanNumber8",
  "MerchantOrderReference": "MerchantOrderReference0",
  "PurchaseMethod": "ECommerce",
  "Currency": "Currency2",
  "PurchaseAmount": 98.46,
  "TotalFees": 242.28,
  "TotalAmount": 67.52,
  "Apr": {
    "Value": 24.74,
    "Symbol": "Symbol8"
  },
  "Authorization": {
    "Status": "Pending3DS",
    "SplititErrorResultCode": "SplititErrorResultCode4",
    "GatewayTransactionID": "GatewayTransactionID0",
    "GatewayResultCode": "GatewayResultCode2",
    "GatewayResultMessage": "GatewayResultMessage8",
    "ThreeDSRedirect": {
      "Url": "Url2",
      "Verb": "Verb2",
      "Params": {
        "key0": "Params6",
        "key1": "Params7"
      },
      "ClientRedirectUrl": "ClientRedirectUrl8"
    }
  }
}
```

