
# Client Class Documentation

The following parameters are configurable for the API Client:

| Parameter | Type | Description |
|  --- | --- | --- |
| environment | [`Environment`](../README.md#environments) | The API environment. <br> **Default: `Environment.SANDBOX`** |
| timeout | `int` | Timeout for API calls in seconds.<br>*Default*: `0` |
| enableRetries | `bool` | Whether to enable retries and backoff feature.<br>*Default*: `false` |
| numberOfRetries | `int` | The number of retries to make.<br>*Default*: `0` |
| retryInterval | `float` | The retry time interval between the endpoint calls.<br>*Default*: `1` |
| backOffFactor | `float` | Exponential backoff factor to increase interval between retries.<br>*Default*: `2` |
| maximumRetryWaitTime | `int` | The maximum wait time in seconds for overall retrying requests.<br>*Default*: `0` |
| retryOnTimeout | `bool` | Whether to retry on request timeout.<br>*Default*: `true` |
| httpStatusCodesToRetry | `array` | Http status codes to retry against.<br>*Default*: `408, 413, 429, 500, 502, 503, 504, 521, 522, 524` |
| httpMethodsToRetry | `array` | Http methods to retry against.<br>*Default*: `'GET', 'PUT'` |
| proxyConfiguration | [`ProxyConfigurationBuilder`](../doc/proxy-configuration-builder.md) | Represents the proxy configurations for API calls |
| oAuth2Credentials | [`OAuth2Credentials`](auth/oauth-2-client-credentials-grant.md) | The Credentials Setter for OAuth 2 Client Credentials Grant |
| apiKeyCredentials | [`ApiKeyCredentials`](auth/custom-header-signature.md) | The Credentials Setter for Custom Header Signature |

The API client can be initialized as follows:

```php
use SplititWebApiV4Lib\Environment;
use SplititWebApiV4Lib\Authentication\OAuth2CredentialsBuilder;
use SplititWebApiV4Lib\Models\OAuthScopeOAuth2Enum;
use SplititWebApiV4Lib\Authentication\ApiKeyCredentialsBuilder;
use SplititWebApiV4Lib\SplititWebApiV4ClientBuilder;

$client = SplititWebApiV4ClientBuilder::init()
    ->oAuth2Credentials(
        OAuth2CredentialsBuilder::init(
            'OAuthClientId',
            'OAuthClientSecret'
        )
            ->oAuthScopes(
                [
                    OAuthScopeOAuth2Enum::API_V4
                ]
            )
    )
    ->apiKeyCredentials(
        ApiKeyCredentialsBuilder::init(
            'X-Splitit-Api-Key'
        )
    )
    ->environment(Environment::SANDBOX)
    ->build();
```

## splitit-web-api-v4 Client

The gateway for the SDK. This class acts as a factory for the Controllers and also holds the configuration of the SDK.

## Controllers

| Name | Description |
|  --- | --- |
| getInstallmentPlanController() | Gets InstallmentPlanController |
| getOAuthAuthorizationController() | Gets OAuthAuthorizationController |

