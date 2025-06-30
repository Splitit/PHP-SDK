
# Authorization Model

## Structure

`AuthorizationModel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `status` | [`string(GwAuthorizationStatusEnum)`](../../doc/models/gw-authorization-status-enum.md) | Required | - | getStatus(): string | setStatus(string status): void |
| `date` | `?DateTime` | Optional | - | getDate(): ?\DateTime | setDate(?\DateTime date): void |
| `splititErrorResultCode` | `?string` | Optional | - | getSplititErrorResultCode(): ?string | setSplititErrorResultCode(?string splititErrorResultCode): void |
| `gatewayTransactionID` | `?string` | Optional | - | getGatewayTransactionID(): ?string | setGatewayTransactionID(?string gatewayTransactionID): void |
| `gatewayResultCode` | `?string` | Optional | - | getGatewayResultCode(): ?string | setGatewayResultCode(?string gatewayResultCode): void |
| `gatewayResultMessage` | `?string` | Optional | - | getGatewayResultMessage(): ?string | setGatewayResultMessage(?string gatewayResultMessage): void |
| `threeDSRedirect` | [`?ThreeDsRedirectDataV3`](../../doc/models/three-ds-redirect-data-v3.md) | Optional | - | getThreeDSRedirect(): ?ThreeDsRedirectDataV3 | setThreeDSRedirect(?ThreeDsRedirectDataV3 threeDSRedirect): void |
| `cAVV` | `?string` | Optional | - | getCAVV(): ?string | setCAVV(?string cAVV): void |
| `eCI` | `?string` | Optional | - | getECI(): ?string | setECI(?string eCI): void |
| `gatewaySourceResponse` | `?string` | Optional | - | getGatewaySourceResponse(): ?string | setGatewaySourceResponse(?string gatewaySourceResponse): void |

## Example (as JSON)

```json
{
  "Status": "Canceled",
  "Date": "2016-03-13T12:52:32.123Z",
  "SplititErrorResultCode": "SplititErrorResultCode6",
  "GatewayTransactionID": "GatewayTransactionID0",
  "GatewayResultCode": "GatewayResultCode2",
  "GatewayResultMessage": "GatewayResultMessage8"
}
```

