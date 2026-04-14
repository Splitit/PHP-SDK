
# Offers Response

## Structure

`OffersResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `installmentPlanNumber` | `?string` | Optional | - | getInstallmentPlanNumber(): ?string | setInstallmentPlanNumber(?string installmentPlanNumber): void |
| `merchantOrderReference` | `?string` | Optional | - | getMerchantOrderReference(): ?string | setMerchantOrderReference(?string merchantOrderReference): void |
| `purchaseMethod` | [`string(PurchaseMethodEnum)`](../../doc/models/purchase-method-enum.md) | Required | - | getPurchaseMethod(): string | setPurchaseMethod(string purchaseMethod): void |
| `purchaseAmount` | `float` | Required | - | getPurchaseAmount(): float | setPurchaseAmount(float purchaseAmount): void |
| `currency` | `?string` | Optional | - | getCurrency(): ?string | setCurrency(?string currency): void |
| `paymentMethod` | [`?OffersPaymentMethodResponse`](../../doc/models/offers-payment-method-response.md) | Optional | - | getPaymentMethod(): ?OffersPaymentMethodResponse | setPaymentMethod(?OffersPaymentMethodResponse paymentMethod): void |
| `offers` | [`?(OfferItem[])`](../../doc/models/offer-item.md) | Optional | - | getOffers(): ?array | setOffers(?array offers): void |
| `validUntil` | `?DateTime` | Optional | - | getValidUntil(): ?\DateTime | setValidUntil(?\DateTime validUntil): void |

## Example (as JSON)

```json
{
  "InstallmentPlanNumber": "InstallmentPlanNumber4",
  "MerchantOrderReference": "MerchantOrderReference4",
  "PurchaseMethod": "ECommerce",
  "PurchaseAmount": 5.58,
  "Currency": "Currency8",
  "PaymentMethod": {
    "Last4Digits": "Last4Digits6",
    "BIN": "BIN0",
    "IssuerName": "IssuerName0",
    "Type": "Type4"
  },
  "Offers": [
    {
      "OfferId": "OfferId2",
      "Apr": {
        "Value": 24.74,
        "Symbol": "Symbol8"
      },
      "Currency": "Currency8",
      "TotalAmount": 35.88,
      "TotalFees": 210.64,
      "NumberOfInstallments": 194,
      "Frequency": "Frequency2",
      "InstallmentAmount": 52.64,
      "FirstInstallmentAmount": 121.96,
      "LastInstallmentAmount": {
        "Value": 181.16,
        "Symbol": "Symbol2"
      }
    }
  ]
}
```

