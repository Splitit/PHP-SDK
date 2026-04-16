
# Validation Error

## Structure

`ValidationError`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `code` | [`?string(PisErrorCodesEnum)`](../../doc/models/pis-error-codes-enum.md) | Optional | - | getCode(): ?string | setCode(?string code): void |
| `message` | `?string` | Optional | - | getMessage(): ?string | setMessage(?string message): void |

## Example (as JSON)

```json
{
  "Code": "CantChargeInstallmentWhilePlanChargesAreOnHold",
  "Message": "Message4"
}
```

