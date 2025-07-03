
# Installment Plan Initiate Request

## Structure

`InstallmentPlanInitiateRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `autoCapture` | `?bool` | Optional | - | getAutoCapture(): ?bool | setAutoCapture(?bool autoCapture): void |
| `attempt3dSecure` | `?bool` | Optional | - | getAttempt3dSecure(): ?bool | setAttempt3dSecure(?bool attempt3dSecure): void |
| `shopper` | [`?ShopperData`](../../doc/models/shopper-data.md) | Optional | - | getShopper(): ?ShopperData | setShopper(?ShopperData shopper): void |
| `planData` | [`?PlanDataModel`](../../doc/models/plan-data-model.md) | Optional | - | getPlanData(): ?PlanDataModel | setPlanData(?PlanDataModel planData): void |
| `billingAddress` | [`?AddressDataModel`](../../doc/models/address-data-model.md) | Optional | - | getBillingAddress(): ?AddressDataModel | setBillingAddress(?AddressDataModel billingAddress): void |
| `redirectUrls` | [`?InitiateRedirectionEndpointsModel`](../../doc/models/initiate-redirection-endpoints-model.md) | Optional | - | getRedirectUrls(): ?InitiateRedirectionEndpointsModel | setRedirectUrls(?InitiateRedirectionEndpointsModel redirectUrls): void |
| `uxSettings` | [`?UxSettingsModel`](../../doc/models/ux-settings-model.md) | Optional | - | getUxSettings(): ?UxSettingsModel | setUxSettings(?UxSettingsModel uxSettings): void |
| `eventsEndpoints` | [`?EventsEndpointsModel`](../../doc/models/events-endpoints-model.md) | Optional | - | getEventsEndpoints(): ?EventsEndpointsModel | setEventsEndpoints(?EventsEndpointsModel eventsEndpoints): void |
| `processingData` | [`?ProcessingData`](../../doc/models/processing-data.md) | Optional | - | getProcessingData(): ?ProcessingData | setProcessingData(?ProcessingData processingData): void |

## Example (as JSON)

```json
{
  "AutoCapture": false,
  "Attempt3dSecure": false,
  "Shopper": null,
  "PlanData": null,
  "BillingAddress": null
}
```

