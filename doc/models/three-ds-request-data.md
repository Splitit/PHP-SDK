
# Three DS Request Data

## Structure

`ThreeDSRequestData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `execute` | `?bool` | Optional | - | getExecute(): ?bool | setExecute(?bool execute): void |
| `threeDSURLs` | [`?RedirectUrls`](../../doc/models/redirect-urls.md) | Optional | - | getThreeDSURLs(): ?RedirectUrls | setThreeDSURLs(?RedirectUrls threeDSURLs): void |
| `authenticationData` | [`?ThreeDSAuthenticationData`](../../doc/models/three-ds-authentication-data.md) | Optional | - | getAuthenticationData(): ?ThreeDSAuthenticationData | setAuthenticationData(?ThreeDSAuthenticationData authenticationData): void |

## Example (as JSON)

```json
{
  "Execute": false,
  "ThreeDSURLs": {
    "SuccessUrl": "SuccessUrl2",
    "FailureUrl": "FailureUrl2",
    "CancelUrl": "CancelUrl4"
  },
  "AuthenticationData": {
    "ECI": "ECI6",
    "CAVV": "CAVV4",
    "DirectoryServerTransactionId": "DirectoryServerTransactionId0",
    "Version": "Version8"
  }
}
```

