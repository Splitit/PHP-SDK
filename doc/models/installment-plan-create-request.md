
# Installment Plan Create Request

## Structure

`InstallmentPlanCreateRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `autoCapture` | `bool` | Required | - | getAutoCapture(): bool | setAutoCapture(bool autoCapture): void |
| `attempt3dSecure` | `?bool` | Optional | - | getAttempt3dSecure(): ?bool | setAttempt3dSecure(?bool attempt3dSecure): void |
| `termsAndConditionsAccepted` | `bool` | Required | - | getTermsAndConditionsAccepted(): bool | setTermsAndConditionsAccepted(bool termsAndConditionsAccepted): void |
| `shopper` | [`?ShopperData`](../../doc/models/shopper-data.md) | Optional | - | getShopper(): ?ShopperData | setShopper(?ShopperData shopper): void |
| `planData` | [`?PlanDataModel`](../../doc/models/plan-data-model.md) | Optional | - | getPlanData(): ?PlanDataModel | setPlanData(?PlanDataModel planData): void |
| `billingAddress` | [`?AddressDataModel`](../../doc/models/address-data-model.md) | Optional | - | getBillingAddress(): ?AddressDataModel | setBillingAddress(?AddressDataModel billingAddress): void |
| `paymentMethod` | [`?PaymentMethodModel`](../../doc/models/payment-method-model.md) | Optional | - | getPaymentMethod(): ?PaymentMethodModel | setPaymentMethod(?PaymentMethodModel paymentMethod): void |
| `redirectUrls` | [`?RedirectionEndpointsModel`](../../doc/models/redirection-endpoints-model.md) | Optional | - | getRedirectUrls(): ?RedirectionEndpointsModel | setRedirectUrls(?RedirectionEndpointsModel redirectUrls): void |
| `processingData` | [`?ProcessingData`](../../doc/models/processing-data.md) | Optional | - | getProcessingData(): ?ProcessingData | setProcessingData(?ProcessingData processingData): void |
| `eventsEndpoints` | [`?EventsEndpointsModel`](../../doc/models/events-endpoints-model.md) | Optional | - | getEventsEndpoints(): ?EventsEndpointsModel | setEventsEndpoints(?EventsEndpointsModel eventsEndpoints): void |

## Example (as JSON)

```json
{
  "AutoCapture": false,
  "Attempt3dSecure": false,
  "TermsAndConditionsAccepted": false,
  "Shopper": null,
  "PlanData": null,
  "BillingAddress": null,
  "PaymentMethod": null
}
```

