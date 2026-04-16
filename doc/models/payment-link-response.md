
# Payment Link Response

## Structure

`PaymentLinkResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `checkoutUrl` | [`?CheckoutUrlData`](../../doc/models/checkout-url-data.md) | Optional | - | getCheckoutUrl(): ?CheckoutUrlData | setCheckoutUrl(?CheckoutUrlData checkoutUrl): void |
| `installmentPlanNumber` | `?string` | Optional | - | getInstallmentPlanNumber(): ?string | setInstallmentPlanNumber(?string installmentPlanNumber): void |
| `merchantOrderReference` | `?string` | Optional | - | getMerchantOrderReference(): ?string | setMerchantOrderReference(?string merchantOrderReference): void |
| `purchaseAmount` | `float` | Required | - | getPurchaseAmount(): float | setPurchaseAmount(float purchaseAmount): void |
| `currency` | `?string` | Optional | - | getCurrency(): ?string | setCurrency(?string currency): void |

## Example (as JSON)

```json
{
  "CheckoutUrl": {
    "Url": "Url8",
    "ValidUntil": "2016-03-13T12:52:32.123Z"
  },
  "InstallmentPlanNumber": "InstallmentPlanNumber0",
  "MerchantOrderReference": "MerchantOrderReference2",
  "PurchaseAmount": 131.88,
  "Currency": "Currency4"
}
```

