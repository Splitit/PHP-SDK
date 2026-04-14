
# Payment Method

## Structure

`PaymentMethod`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `string` | Required, Constant | **Value**: `'Card'` | getType(): string | setType(string type): void |
| `value` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getValue(): string | setValue(string value): void |

## Example (as JSON)

```json
{
  "Type": "Card",
  "Value": "Value2"
}
```

