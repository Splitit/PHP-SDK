
# Installment Plan Create Response

## Structure

`InstallmentPlanCreateResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `installmentPlanNumber` | `?string` | Optional | - | getInstallmentPlanNumber(): ?string | setInstallmentPlanNumber(?string installmentPlanNumber): void |
| `dateCreated` | `DateTime` | Required | - | getDateCreated(): \DateTime | setDateCreated(\DateTime dateCreated): void |
| `refOrderNumber` | `?string` | Optional | - | getRefOrderNumber(): ?string | setRefOrderNumber(?string refOrderNumber): void |
| `purchaseMethod` | [`?string(PurchaseMethodEnum)`](../../doc/models/purchase-method-enum.md) | Optional | - | getPurchaseMethod(): ?string | setPurchaseMethod(?string purchaseMethod): void |
| `status` | [`string(PlanStatusEnum)`](../../doc/models/plan-status-enum.md) | Required | - | getStatus(): string | setStatus(string status): void |
| `currency` | `?string` | Optional | - | getCurrency(): ?string | setCurrency(?string currency): void |
| `originalAmount` | `?float` | Optional | - | getOriginalAmount(): ?float | setOriginalAmount(?float originalAmount): void |
| `amount` | `?float` | Optional | - | getAmount(): ?float | setAmount(?float amount): void |
| `extendedParams` | `?array<string,string>` | Optional | - | getExtendedParams(): ?array | setExtendedParams(?array extendedParams): void |
| `authorization` | [`?AuthorizationModel`](../../doc/models/authorization-model.md) | Optional | - | getAuthorization(): ?AuthorizationModel | setAuthorization(?AuthorizationModel authorization): void |
| `shopper` | [`?ShopperData`](../../doc/models/shopper-data.md) | Optional | - | getShopper(): ?ShopperData | setShopper(?ShopperData shopper): void |
| `billingAddress` | [`?AddressData`](../../doc/models/address-data.md) | Optional | - | getBillingAddress(): ?AddressData | setBillingAddress(?AddressData billingAddress): void |
| `paymentMethod` | [`?PaymentMethodModel`](../../doc/models/payment-method-model.md) | Optional | - | getPaymentMethod(): ?PaymentMethodModel | setPaymentMethod(?PaymentMethodModel paymentMethod): void |
| `installments` | [`?(Installment[])`](../../doc/models/installment.md) | Optional | - | getInstallments(): ?array | setInstallments(?array installments): void |
| `links` | [`?LinksData`](../../doc/models/links-data.md) | Optional | - | getLinks(): ?LinksData | setLinks(?LinksData links): void |

## Example (as JSON)

```json
{
  "InstallmentPlanNumber": "InstallmentPlanNumber4",
  "DateCreated": "2016-03-13T12:52:32.123Z",
  "RefOrderNumber": "RefOrderNumber4",
  "PurchaseMethod": "InStore",
  "Status": "Cleared",
  "Currency": "Currency8",
  "OriginalAmount": 3.8
}
```

