
# Plan Authorization Data

## Structure

`PlanAuthorizationData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `status` | [`string(AuthorizationStatusEnum)`](../../doc/models/authorization-status-enum.md) | Required | - | getStatus(): string | setStatus(string status): void |
| `date` | `?DateTime` | Optional | - | getDate(): ?\DateTime | setDate(?\DateTime date): void |
| `splititErrorResultCode` | `?string` | Optional | - | getSplititErrorResultCode(): ?string | setSplititErrorResultCode(?string splititErrorResultCode): void |
| `gatewayTransactionID` | `?string` | Optional | - | getGatewayTransactionID(): ?string | setGatewayTransactionID(?string gatewayTransactionID): void |
| `gatewayResultCode` | `?string` | Optional | - | getGatewayResultCode(): ?string | setGatewayResultCode(?string gatewayResultCode): void |
| `gatewayResultMessage` | `?string` | Optional | - | getGatewayResultMessage(): ?string | setGatewayResultMessage(?string gatewayResultMessage): void |
| `threeDSRedirect` | [`?ThreeDSRedirectData`](../../doc/models/three-ds-redirect-data.md) | Optional | - | getThreeDSRedirect(): ?ThreeDSRedirectData | setThreeDSRedirect(?ThreeDSRedirectData threeDSRedirect): void |
| `cAVV` | `?string` | Optional | - | getCAVV(): ?string | setCAVV(?string cAVV): void |
| `eCI` | `?string` | Optional | - | getECI(): ?string | setECI(?string eCI): void |
| `gatewaySourceResponse` | `?string` | Optional | - | getGatewaySourceResponse(): ?string | setGatewaySourceResponse(?string gatewaySourceResponse): void |

## Example (as JSON)

```json
{
  "Status": "Failed",
  "Date": "2016-03-13T12:52:32.123Z",
  "SplititErrorResultCode": "SplititErrorResultCode0",
  "GatewayTransactionID": "GatewayTransactionID4",
  "GatewayResultCode": "GatewayResultCode6",
  "GatewayResultMessage": "GatewayResultMessage2"
}
```

