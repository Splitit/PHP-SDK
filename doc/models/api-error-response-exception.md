
# Api Error Response Exception

## Structure

`ApiErrorResponseException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `traceId` | `?string` | Optional | - | getTraceId(): ?string | setTraceId(?string traceId): void |
| `error` | [`?ApiErrorModel`](../../doc/models/api-error-model.md) | Optional | - | getError(): ?ApiErrorModel | setError(?ApiErrorModel error): void |

## Example (as JSON)

```json
{
  "TraceId": "TraceId4",
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

