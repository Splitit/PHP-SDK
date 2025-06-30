
# Identifier Contract

## Structure

`IdentifierContract`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `refOrderNumber` | `?string` | Optional | - | getRefOrderNumber(): ?string | setRefOrderNumber(?string refOrderNumber): void |
| `installmentPlanNumber` | `?string` | Optional | - | getInstallmentPlanNumber(): ?string | setInstallmentPlanNumber(?string installmentPlanNumber): void |
| `extendedParams` | `?array<string,string>` | Optional | - | getExtendedParams(): ?array | setExtendedParams(?array extendedParams): void |

## Example (as JSON)

```json
{
  "RefOrderNumber": "RefOrderNumber6",
  "InstallmentPlanNumber": "InstallmentPlanNumber6",
  "ExtendedParams": {
    "key0": "ExtendedParams6",
    "key1": "ExtendedParams7"
  }
}
```

