
# Error Extended

## Structure

`ErrorExtended`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `code` | `?string` | Optional | - | getCode(): ?string | setCode(?string code): void |
| `message` | `?string` | Optional | - | getMessage(): ?string | setMessage(?string message): void |
| `additionalInfo` | `?string` | Optional | - | getAdditionalInfo(): ?string | setAdditionalInfo(?string additionalInfo): void |
| `extraData` | `?array<string,string>` | Optional | - | getExtraData(): ?array | setExtraData(?array extraData): void |

## Example (as JSON)

```json
{
  "Code": "Code0",
  "Message": "Message6",
  "AdditionalInfo": "AdditionalInfo8",
  "ExtraData": {
    "key0": "ExtraData0"
  }
}
```

