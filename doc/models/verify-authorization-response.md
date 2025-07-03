
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
  "Authorization": null
}
```

