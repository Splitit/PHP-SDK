
# Installment Plan Details Response

## Structure

`InstallmentPlanDetailsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `dateCreated` | `DateTime` | Required | - | getDateCreated(): \DateTime | setDateCreated(\DateTime dateCreated): void |
| `status` | [`string(InstallmentPlanStatusEnum)`](../../doc/models/installment-plan-status-enum.md) | Required | - | getStatus(): string | setStatus(string status): void |
| `installmentPlanNumber` | `?string` | Optional | - | getInstallmentPlanNumber(): ?string | setInstallmentPlanNumber(?string installmentPlanNumber): void |
| `merchantOrderReference` | `?string` | Optional | - | getMerchantOrderReference(): ?string | setMerchantOrderReference(?string merchantOrderReference): void |
| `installmentProvider` | [`string(ExternalProviderTypesEnum)`](../../doc/models/external-provider-types-enum.md) | Required | - | getInstallmentProvider(): string | setInstallmentProvider(string installmentProvider): void |
| `purchaseMethod` | [`string(PurchaseMethodEnum)`](../../doc/models/purchase-method-enum.md) | Required | - | getPurchaseMethod(): string | setPurchaseMethod(string purchaseMethod): void |
| `currency` | `?string` | Optional | - | getCurrency(): ?string | setCurrency(?string currency): void |
| `purchaseAmount` | `float` | Required | - | getPurchaseAmount(): float | setPurchaseAmount(float purchaseAmount): void |
| `totalAmount` | `float` | Required | - | getTotalAmount(): float | setTotalAmount(float totalAmount): void |
| `totalFees` | `float` | Required | - | getTotalFees(): float | setTotalFees(float totalFees): void |
| `apr` | [`?AprData`](../../doc/models/apr-data.md) | Optional | - | getApr(): ?AprData | setApr(?AprData apr): void |
| `authorization` | [`?PlanAuthorizationData`](../../doc/models/plan-authorization-data.md) | Optional | - | getAuthorization(): ?PlanAuthorizationData | setAuthorization(?PlanAuthorizationData authorization): void |
| `shopperDetails` | [`?ShopperDetailsData`](../../doc/models/shopper-details-data.md) | Optional | - | getShopperDetails(): ?ShopperDetailsData | setShopperDetails(?ShopperDetailsData shopperDetails): void |
| `paymentMethod` | [`?PaymentMethodData`](../../doc/models/payment-method-data.md) | Optional | - | getPaymentMethod(): ?PaymentMethodData | setPaymentMethod(?PaymentMethodData paymentMethod): void |
| `installments` | [`?(InstallmentItem[])`](../../doc/models/installment-item.md) | Optional | - | getInstallments(): ?array | setInstallments(?array installments): void |
| `refunds` | [`?(RefundItem[])`](../../doc/models/refund-item.md) | Optional | - | getRefunds(): ?array | setRefunds(?array refunds): void |
| `links` | [`?(PlanLinksData[])`](../../doc/models/plan-links-data.md) | Optional | - | getLinks(): ?array | setLinks(?array links): void |
| `metadata` | [`?(MetadataItem[])`](../../doc/models/metadata-item.md) | Optional | - | getMetadata(): ?array | setMetadata(?array metadata): void |

## Example (as JSON)

```json
{
  "DateCreated": "2016-03-13T12:52:32.123Z",
  "Status": "Canceled",
  "InstallmentPlanNumber": "InstallmentPlanNumber6",
  "MerchantOrderReference": "MerchantOrderReference2",
  "InstallmentProvider": "WorldPay",
  "PurchaseMethod": "InStoreVcc",
  "Currency": "Currency0",
  "PurchaseAmount": 90.96,
  "TotalAmount": 121.9,
  "TotalFees": 52.86,
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
```

