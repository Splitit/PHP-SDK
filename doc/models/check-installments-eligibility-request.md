
# Check Installments Eligibility Request

## Structure

`CheckInstallmentsEligibilityRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `planData` | [`?PlanData`](../../doc/models/plan-data.md) | Optional | - | getPlanData(): ?PlanData | setPlanData(?PlanData planData): void |
| `cardDetails` | [`?CardData`](../../doc/models/card-data.md) | Optional | - | getCardDetails(): ?CardData | setCardDetails(?CardData cardDetails): void |
| `billingAddress` | [`?AddressData`](../../doc/models/address-data.md) | Optional | - | getBillingAddress(): ?AddressData | setBillingAddress(?AddressData billingAddress): void |
| `shopperIdentifier` | `?string` | Optional | - | getShopperIdentifier(): ?string | setShopperIdentifier(?string shopperIdentifier): void |

## Example (as JSON)

```json
{
  "PlanData": null,
  "CardDetails": null,
  "BillingAddress": null,
  "ShopperIdentifier": "ShopperIdentifier6"
}
```

