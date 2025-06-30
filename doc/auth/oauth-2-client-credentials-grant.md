
# OAuth 2 Client Credentials Grant



Documentation for accessing and setting credentials for OAuth2-sandbox.

## Auth Credentials

| Name | Type | Description | Setter | Getter |
|  --- | --- | --- | --- | --- |
| OAuthClientId | `string` | OAuth 2 Client ID | `oAuthClientId` | `getOAuthClientId()` |
| OAuthClientSecret | `string` | OAuth 2 Client Secret | `oAuthClientSecret` | `getOAuthClientSecret()` |
| OAuthToken | `OAuthToken\|null` | Object for storing information about the OAuth token | `oAuthToken` | `getOAuthToken()` |
| OAuthScopes | `string[]\|null` | List of scopes that apply to the OAuth token | `oAuthScopes` | `getOAuthScopes()` |
| OAuthClockSkew | `int` | Clock skew time in seconds applied while checking the OAuth Token expiry. | `oAuthClockSkew` | - |
| OAuthTokenProvider | `callable(OAuthToken, OAuth2SandboxManager): OAuthToken` | Registers a callback for oAuth Token Provider used for automatic token fetching/refreshing. | `oAuthTokenProvider` | - |
| OAuthOnTokenUpdate | `callable(OAuthToken): void` | Registers a callback for token update event. | `oAuthOnTokenUpdate` | - |



**Note:** Auth credentials can be set using `OAuth2SandboxCredentialsBuilder::init()` in `oAuth2SandboxCredentials` method in the client builder and accessed through `getOAuth2SandboxCredentials` method in the client instance.

## Usage Example

### Client Initialization

You must initialize the client with *OAuth 2.0 Client Credentials Grant* credentials as shown in the following code snippet. This will fetch the OAuth token automatically when any of the endpoints, requiring *OAuth 2.0 Client Credentials Grant* authentication, are called.

```php
$client = SplititWebApiV3ClientBuilder::init()
    ->oAuth2SandboxCredentials(
        OAuth2SandboxCredentialsBuilder::init(
            'OAuthClientId',
            'OAuthClientSecret'
        )
            ->oAuthScopes(
                [
                    OAuthScopeOAuth2SandboxEnum::API_V3
                ]
            )
    )
    ->build();
```



Your application can also manually provide an OAuthToken using the setter `oAuthToken` in `OAuth2SandboxCredentialsBuilder` object. This function takes in an instance of OAuthToken containing information for authorizing client requests and refreshing the token itself.

You must have initialized the client with scopes for which you need permission to access.

### Scopes

Scopes enable your application to only request access to the resources it needs while enabling users to control the amount of access they grant to your application. Available scopes are defined in the [`OAuthScopeOAuth2SandboxEnum`](../../doc/models/o-auth-scope-o-auth-2-sandbox-enum.md) enumeration.

| Scope Name | Description |
|  --- | --- |
| `API_V3` | Access to WebAPI version 3 |

### Adding OAuth Token Update Callback

Whenever the OAuth Token gets updated, the provided callback implementation will be executed. For instance, you may use it to store your access token whenever it gets updated.

```php
$client = SplititWebApiV3ClientBuilder::init()
    ->oAuth2SandboxCredentials(
        OAuth2SandboxCredentialsBuilder::init(
            'OAuthClientId',
            'OAuthClientSecret'
        )
            ->oAuthScopes(
                [
                    OAuthScopeOAuth2SandboxEnum::API_V3
                ]
            )
            ->oAuthOnTokenUpdate(
                function (OAuthToken $oAuthToken): void {
                    // Add the callback handler to perform operations like save to DB or file etc.
                    // It will be triggered whenever the token gets updated.
                    $this->saveTokenToDatabase($oAuthToken);
                }
            )
    )
    ->build();
```

### Adding Custom OAuth Token Provider

To authorize a client using a stored access token, set up the `oAuthTokenProvider` in `OAuth2SandboxCredentialsBuilder` along with the other auth parameters before creating the client:

```php
$client = SplititWebApiV3ClientBuilder::init()
    ->oAuth2SandboxCredentials(
        OAuth2SandboxCredentialsBuilder::init(
            'OAuthClientId',
            'OAuthClientSecret'
        )
            ->oAuthScopes(
                [
                    OAuthScopeOAuth2SandboxEnum::API_V3
                ]
            )
            ->oAuthTokenProvider(
                function (?OAuthToken $lastOAuthToken, OAuth2SandboxManager $authManager): OAuthToken {
                    // Add the callback handler to provide a new OAuth token.
                    // It will be triggered whenever the lastOAuthToken is null or expired.
                    return $this->loadTokenFromDatabase() ?? $authManager->fetchToken();
                }
            )
    )
    ->build();
```


