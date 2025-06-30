
# Three DS Data

## Structure

`ThreeDSData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `eCI` | `?string` | Optional | - | getECI(): ?string | setECI(?string eCI): void |
| `cAVV` | `?string` | Optional | - | getCAVV(): ?string | setCAVV(?string cAVV): void |
| `xID` | `?string` | Optional | - | getXID(): ?string | setXID(?string xID): void |
| `directoryServerTxnId` | `?string` | Optional | - | getDirectoryServerTxnId(): ?string | setDirectoryServerTxnId(?string directoryServerTxnId): void |
| `threeDSVersion` | `?string` | Optional | - | getThreeDSVersion(): ?string | setThreeDSVersion(?string threeDSVersion): void |
| `transactionId` | `?string` | Optional | - | getTransactionId(): ?string | setTransactionId(?string transactionId): void |

## Example (as JSON)

```json
{
  "ECI": "ECI6",
  "CAVV": "CAVV4",
  "XID": "XID8",
  "DirectoryServerTxnId": "DirectoryServerTxnId6",
  "ThreeDSVersion": "ThreeDSVersion2"
}
```

