
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
  "PlanData": {
    "TerminalId": "TerminalId8",
    "TotalAmount": "TotalAmount4",
    "FirstInstallmentAmount": 11.28,
    "Currency": "Currency6",
    "NumberOfInstallments": 2,
    "PurchaseMethod": "PhoneOrder",
    "RefOrderNumber": "RefOrderNumber2",
    "AllowedInstallmentOptions": [
      46,
      47
    ]
  },
  "CardDetails": {
    "CardHolderFullName": "CardHolderFullName8",
    "CardNumber": "CardNumber2",
    "CardExpYear": "CardExpYear4",
    "CardExpMonth": "CardExpMonth0",
    "CardCvv": "CardCvv8"
  },
  "BillingAddress": {
    "AddressLine": "AddressLine0",
    "AddressLine2": "AddressLine26",
    "City": "City4",
    "Country": "Country0",
    "State": "State2"
  },
  "ShopperIdentifier": "ShopperIdentifier6"
}
```

