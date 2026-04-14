
# Three DS Authentication Data

## Structure

`ThreeDSAuthenticationData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `eCI` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getECI(): string | setECI(string eCI): void |
| `cAVV` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getCAVV(): string | setCAVV(string cAVV): void |
| `directoryServerTransactionId` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getDirectoryServerTransactionId(): string | setDirectoryServerTransactionId(string directoryServerTransactionId): void |
| `version` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getVersion(): string | setVersion(string version): void |

## Example (as JSON)

```json
{
  "ECI": "ECI6",
  "CAVV": "CAVV4",
  "DirectoryServerTransactionId": "DirectoryServerTransactionId0",
  "Version": "Version8"
}
```

