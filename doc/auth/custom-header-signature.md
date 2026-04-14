
# Custom Header Signature



Documentation for accessing and setting credentials for ApiKey.

## Auth Credentials

| Name | Type | Description | Setter | Getter |
|  --- | --- | --- | --- | --- |
| X-Splitit-Api-Key | `string` | Terminal API Key | `xSplititApiKey` | `getXSplititApiKey()` |



**Note:** Auth credentials can be set using `ApiKeyCredentialsBuilder::init()` in `apiKeyCredentials` method in the client builder and accessed through `getApiKeyCredentials` method in the client instance.

## Usage Example

### Client Initialization

You must provide credentials in the client as shown in the following code snippet.

```php
use SplititWebApiV4Lib\Authentication\ApiKeyCredentialsBuilder;
use SplititWebApiV4Lib\SplititWebApiV4ClientBuilder;

$client = SplititWebApiV4ClientBuilder::init()
    ->apiKeyCredentials(
        ApiKeyCredentialsBuilder::init(
            'X-Splitit-Api-Key'
        )
    )
    ->build();
```


