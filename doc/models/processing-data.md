
# Processing Data

## Structure

`ProcessingData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `attemptThreeDSecured` | `?bool` | Optional | - | getAttemptThreeDSecured(): ?bool | setAttemptThreeDSecured(?bool attemptThreeDSecured): void |
| `softDescriptor` | `?string` | Optional | - | getSoftDescriptor(): ?string | setSoftDescriptor(?string softDescriptor): void |
| `threeDSData` | [`?ThreeDSData`](../../doc/models/three-ds-data.md) | Optional | - | getThreeDSData(): ?ThreeDSData | setThreeDSData(?ThreeDSData threeDSData): void |

## Example (as JSON)

```json
{
  "AttemptThreeDSecured": false,
  "SoftDescriptor": "SoftDescriptor6",
  "ThreeDSData": {
    "ECI": "ECI6",
    "CAVV": "CAVV4",
    "XID": "XID8",
    "DirectoryServerTxnId": "DirectoryServerTxnId6",
    "ThreeDSVersion": "ThreeDSVersion2"
  }
}
```

