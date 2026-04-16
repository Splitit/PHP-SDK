
# Card Validity Request

## Structure

`CardValidityRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `paymentMethod` | [`?PaymentMethod`](../../doc/models/payment-method.md) | Optional | - | getPaymentMethod(): ?PaymentMethod | setPaymentMethod(?PaymentMethod paymentMethod): void |

## Example (as JSON)

```json
{
  "PaymentMethod": {
    "Type": "Type4",
    "Value": "Value2"
  }
}
```

