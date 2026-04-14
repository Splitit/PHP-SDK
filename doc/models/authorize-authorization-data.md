
# Authorize Authorization Data

## Structure

`AuthorizeAuthorizationData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `status` | [`string(AuthorizationStatusEnum)`](../../doc/models/authorization-status-enum.md) | Required | - | getStatus(): string | setStatus(string status): void |
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
  "Status": "Pending3DS",
  "SplititErrorResultCode": "SplititErrorResultCode4",
  "GatewayTransactionID": "GatewayTransactionID8",
  "GatewayResultCode": "GatewayResultCode0",
  "GatewayResultMessage": "GatewayResultMessage6",
  "ThreeDSRedirect": {
    "Url": "Url2",
    "Verb": "Verb2",
    "Params": {
      "key0": "Params6",
      "key1": "Params7"
    },
    "ClientRedirectUrl": "ClientRedirectUrl8"
  }
}
```

