
# Initiate Plan Response

## Structure

`InitiatePlanResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `installmentPlanNumber` | `?string` | Optional | - | getInstallmentPlanNumber(): ?string | setInstallmentPlanNumber(?string installmentPlanNumber): void |
| `refOrderNumber` | `?string` | Optional | - | getRefOrderNumber(): ?string | setRefOrderNumber(?string refOrderNumber): void |
| `purchaseMethod` | [`?string(PurchaseMethodEnum)`](../../doc/models/purchase-method-enum.md) | Optional | - | getPurchaseMethod(): ?string | setPurchaseMethod(?string purchaseMethod): void |
| `status` | [`string(PlanStatusEnum)`](../../doc/models/plan-status-enum.md) | Required | - | getStatus(): string | setStatus(string status): void |
| `currency` | `?string` | Optional | - | getCurrency(): ?string | setCurrency(?string currency): void |
| `amount` | `?float` | Optional | - | getAmount(): ?float | setAmount(?float amount): void |
| `extendedParams` | `?array<string,string>` | Optional | - | getExtendedParams(): ?array | setExtendedParams(?array extendedParams): void |
| `shopper` | [`?ShopperData`](../../doc/models/shopper-data.md) | Optional | - | getShopper(): ?ShopperData | setShopper(?ShopperData shopper): void |
| `billingAddress` | [`?AddressData`](../../doc/models/address-data.md) | Optional | - | getBillingAddress(): ?AddressData | setBillingAddress(?AddressData billingAddress): void |
| `checkoutUrl` | `?string` | Optional | - | getCheckoutUrl(): ?string | setCheckoutUrl(?string checkoutUrl): void |
| `principalAmount` | `?float` | Optional | - | getPrincipalAmount(): ?float | setPrincipalAmount(?float principalAmount): void |

## Example (as JSON)

```json
{
  "InstallmentPlanNumber": "InstallmentPlanNumber6",
  "RefOrderNumber": "RefOrderNumber6",
  "PurchaseMethod": "InStore",
  "Status": "Initialized",
  "Currency": "Currency0",
  "Amount": 69.84
}
```

