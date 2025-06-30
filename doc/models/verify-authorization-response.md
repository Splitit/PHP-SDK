
# Verify Authorization Response

## Structure

`VerifyAuthorizationResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `isAuthorized` | `bool` | Required | - | getIsAuthorized(): bool | setIsAuthorized(bool isAuthorized): void |
| `authorizationAmount` | `?float` | Optional | - | getAuthorizationAmount(): ?float | setAuthorizationAmount(?float authorizationAmount): void |
| `authorization` | [`?AuthorizationModel`](../../doc/models/authorization-model.md) | Optional | - | getAuthorization(): ?AuthorizationModel | setAuthorization(?AuthorizationModel authorization): void |

## Example (as JSON)

```json
{
  "IsAuthorized": false,
  "AuthorizationAmount": 186.44,
  "Authorization": {
    "Status": "Canceled",
    "Date": "2016-03-13T12:52:32.123Z",
    "SplititErrorResultCode": "SplititErrorResultCode4",
    "GatewayTransactionID": "GatewayTransactionID0",
    "GatewayResultCode": "GatewayResultCode2",
    "GatewayResultMessage": "GatewayResultMessage8"
  }
}
```

