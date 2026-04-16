
# Three DS Redirect Data

## Structure

`ThreeDSRedirectData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `url` | `?string` | Optional | - | getUrl(): ?string | setUrl(?string url): void |
| `verb` | `?string` | Optional | - | getVerb(): ?string | setVerb(?string verb): void |
| `params` | `?array<string,string>` | Optional | - | getParams(): ?array | setParams(?array params): void |
| `clientRedirectUrl` | `?string` | Optional | - | getClientRedirectUrl(): ?string | setClientRedirectUrl(?string clientRedirectUrl): void |

## Example (as JSON)

```json
{
  "Url": "Url0",
  "Verb": "Verb4",
  "Params": {
    "key0": "Params8",
    "key1": "Params9",
    "key2": "Params0"
  },
  "ClientRedirectUrl": "ClientRedirectUrl0"
}
```

