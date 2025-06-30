
# Refund Model

## Structure

`RefundModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `refundId` | `?string` | Optional | - | getRefundId(): ?string | setRefundId(?string refundId): void |
| `submitDate` | `DateTime` | Required | - | getSubmitDate(): \DateTime | setSubmitDate(\DateTime submitDate): void |
| `totalAmount` | `float` | Required | - | getTotalAmount(): float | setTotalAmount(float totalAmount): void |
| `status` | [`string(RefundStatusEnum)`](../../doc/models/refund-status-enum.md) | Required | - | getStatus(): string | setStatus(string status): void |
| `nonCreditRefundAmount` | `float` | Required | - | getNonCreditRefundAmount(): float | setNonCreditRefundAmount(float nonCreditRefundAmount): void |
| `creditRefundAmount` | `float` | Required | - | getCreditRefundAmount(): float | setCreditRefundAmount(float creditRefundAmount): void |
| `referenceId` | `?string` | Optional | - | getReferenceId(): ?string | setReferenceId(?string referenceId): void |

## Example (as JSON)

```json
{
  "RefundId": "RefundId0",
  "SubmitDate": "2016-03-13T12:52:32.123Z",
  "TotalAmount": 115.92,
  "Status": "Pending",
  "NonCreditRefundAmount": 172.08,
  "CreditRefundAmount": 159.38,
  "ReferenceId": "ReferenceId8"
}
```

