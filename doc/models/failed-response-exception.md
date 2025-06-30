
# Failed Response Exception

## Structure

`FailedResponseException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `traceId` | `?string` | Optional | - | getTraceId(): ?string | setTraceId(?string traceId): void |
| `error` | [`?ErrorExtended`](../../doc/models/error-extended.md) | Optional | - | getError(): ?ErrorExtended | setError(?ErrorExtended error): void |

## Example (as JSON)

```json
{
  "TraceId": "TraceId0",
  "Error": {
    "Code": "Code4",
    "Message": "Message0",
    "AdditionalInfo": "AdditionalInfo4",
    "ExtraData": {
      "key0": "ExtraData4",
      "key1": "ExtraData5",
      "key2": "ExtraData6"
    }
  }
}
```

