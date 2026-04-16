
# Refund Item

## Structure

`RefundItem`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `submitDate` | `?DateTime` | Optional | - | getSubmitDate(): ?\DateTime | setSubmitDate(?\DateTime submitDate): void |
| `requestedAmount` | `float` | Required | - | getRequestedAmount(): float | setRequestedAmount(float requestedAmount): void |
| `status` | `?string` | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `nonCreditRefundAmount` | `?float` | Optional | - | getNonCreditRefundAmount(): ?float | setNonCreditRefundAmount(?float nonCreditRefundAmount): void |
| `creditRefundAmount` | `?float` | Optional | - | getCreditRefundAmount(): ?float | setCreditRefundAmount(?float creditRefundAmount): void |
| `refundId` | `?string` | Optional | - | getRefundId(): ?string | setRefundId(?string refundId): void |
| `referenceId` | `?string` | Optional | - | getReferenceId(): ?string | setReferenceId(?string referenceId): void |

## Example (as JSON)

```json
{
  "SubmitDate": "2016-03-13T12:52:32.123Z",
  "RequestedAmount": 3.42,
  "Status": "Status0",
  "NonCreditRefundAmount": 229.56,
  "CreditRefundAmount": 154.1,
  "RefundId": "RefundId8"
}
```

