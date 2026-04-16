
# Card Validity Response

## Structure

`CardValidityResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `result` | `bool` | Required | - | getResult(): bool | setResult(bool result): void |
| `validationErrors` | [`?(ValidationError[])`](../../doc/models/validation-error.md) | Optional | - | getValidationErrors(): ?array | setValidationErrors(?array validationErrors): void |

## Example (as JSON)

```json
{
  "Result": false,
  "ValidationErrors": [
    {
      "Code": "PlanHasMoreOpenAuthorizations",
      "Message": "Message8"
    },
    {
      "Code": "PlanHasMoreOpenAuthorizations",
      "Message": "Message8"
    },
    {
      "Code": "PlanHasMoreOpenAuthorizations",
      "Message": "Message8"
    }
  ]
}
```

