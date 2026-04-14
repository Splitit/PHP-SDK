
# Redirect Urls

## Structure

`RedirectUrls`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `successUrl` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getSuccessUrl(): string | setSuccessUrl(string successUrl): void |
| `failureUrl` | `?string` | Optional | - | getFailureUrl(): ?string | setFailureUrl(?string failureUrl): void |
| `cancelUrl` | `?string` | Optional | - | getCancelUrl(): ?string | setCancelUrl(?string cancelUrl): void |

## Example (as JSON)

```json
{
  "SuccessUrl": "SuccessUrl4",
  "FailureUrl": "FailureUrl4",
  "CancelUrl": "CancelUrl2"
}
```

