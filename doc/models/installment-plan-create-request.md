
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
  "Shopper": {
    "FullName": "FullName2",
    "Email": "Email4",
    "PhoneNumber": "PhoneNumber2",
    "Culture": "Culture6",
    "ExternalId": "ExternalId8"
  },
  "PlanData": {
    "TotalAmount": "TotalAmount4",
    "Currency": "Currency6",
    "NumberOfInstallments": 2,
    "TerminalId": "TerminalId8",
    "PurchaseMethod": "PhoneOrder",
    "RefOrderNumber": "RefOrderNumber2",
    "ExtendedParams": {
      "key0": "ExtendedParams4",
      "key1": "ExtendedParams5"
    }
  },
  "BillingAddress": {
    "AddressLine1": "AddressLine12",
    "AddressLine2": "AddressLine26",
    "City": "City4",
    "Country": "Country0",
    "State": "State2"
  },
  "PaymentMethod": {
    "Type": "SpreedlyToken",
    "Card": {
      "CardHolderFullName": "CardHolderFullName8",
      "CardNumber": "CardNumber2",
      "CardExpYear": "CardExpYear4",
      "CardExpMonth": "CardExpMonth0",
      "CardCvv": "CardCvv8"
    },
    "Token": "Token8",
    "BluesnapVaultedShopperToken": {
      "Token": "Token4",
      "Last4Digit": "Last4Digit6"
    },
    "MockerShopperToken": {
      "Token": "Token0",
      "Last4Digit": "Last4Digit8"
    },
    "SpreedlyToken": {
      "Token": "Token0",
      "Last4Digit": "Last4Digit8"
    }
  }
}
```

