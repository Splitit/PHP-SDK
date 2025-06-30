
# Getting Started with splitit-web-api-v3

## Install the Package

Run the following command to install the package and automatically add the dependency to your composer.json file:

```bash
composer require "splitit/splitit-sdk:0.0.4"
```

Or add it to the composer.json file manually as given below:

```json
"require": {
    "splitit/splitit-sdk": "0.0.4"
}
```

You can also view the package at:
https://packagist.org/packages/splitit/splitit-sdk#0.0.4

## Test the SDK

Unit tests in this SDK can be run using PHPUnit.

1. First install the dependencies using composer including the `require-dev` dependencies.
2. Run `vendor\bin\phpunit --verbose` from commandline to execute tests. If you have installed PHPUnit globally, run tests using `phpunit --verbose` instead.

You can change the PHPUnit test configuration in the `phpunit.xml` file.

## Initialize the API Client

**_Note:_** Documentation for the client can be found [here.](https://www.github.com/Splitit/PHP-SDK/tree/0.0.4/doc/client.md)

The following parameters are configurable for the API Client:

| Parameter | Type | Description |
|  --- | --- | --- |
| environment | `Environment` | The API environment. <br> **Default: `Environment.PRODUCTION`** |
| timeout | `int` | Timeout for API calls in seconds.<br>*Default*: `0` |
| enableRetries | `bool` | Whether to enable retries and backoff feature.<br>*Default*: `false` |
| numberOfRetries | `int` | The number of retries to make.<br>*Default*: `0` |
| retryInterval | `float` | The retry time interval between the endpoint calls.<br>*Default*: `1` |
| backOffFactor | `float` | Exponential backoff factor to increase interval between retries.<br>*Default*: `2` |
| maximumRetryWaitTime | `int` | The maximum wait time in seconds for overall retrying requests.<br>*Default*: `0` |
| retryOnTimeout | `bool` | Whether to retry on request timeout.<br>*Default*: `true` |
| httpStatusCodesToRetry | `array` | Http status codes to retry against.<br>*Default*: `408, 413, 429, 500, 502, 503, 504, 521, 522, 524` |
| httpMethodsToRetry | `array` | Http methods to retry against.<br>*Default*: `'GET', 'PUT'` |
| proxyConfiguration | [`ProxyConfigurationBuilder`](https://www.github.com/Splitit/PHP-SDK/tree/0.0.4/doc/proxy-configuration-builder.md) | Represents the proxy configurations for API calls |
| oAuth2SandboxCredentials | [`OAuth2SandboxCredentials`](https://www.github.com/Splitit/PHP-SDK/tree/0.0.4/doc/auth/oauth-2-client-credentials-grant.md) | The Credentials Setter for OAuth 2 Client Credentials Grant |
| oAuth2ProductionCredentials | [`OAuth2ProductionCredentials`](https://www.github.com/Splitit/PHP-SDK/tree/0.0.4/doc/auth/oauth-2-client-credentials-grant-1.md) | The Credentials Setter for OAuth 2 Client Credentials Grant |

The API client can be initialized as follows:

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
    ->oAuth2ProductionCredentials(
        OAuth2ProductionCredentialsBuilder::init(
            'OAuthClientId',
            'OAuthClientSecret'
        )
            ->oAuthScopes(
                [
                    OAuthScopeOAuth2ProductionEnum::API_V3
                ]
            )
    )
    ->environment(Environment::PRODUCTION)
    ->build();
```

## Environments

The SDK can be configured to use a different environment for making API calls. Available environments are:

### Fields

| Name | Description |
|  --- | --- |
| production | **Default** Sandbox |
| environment2 | Production |

## Authorization

This API uses the following authentication schemes.

* [`OAuth2-sandbox (OAuth 2 Client Credentials Grant)`](https://www.github.com/Splitit/PHP-SDK/tree/0.0.4/doc/auth/oauth-2-client-credentials-grant.md)
* [`OAuth2-production (OAuth 2 Client Credentials Grant)`](https://www.github.com/Splitit/PHP-SDK/tree/0.0.4/doc/auth/oauth-2-client-credentials-grant-1.md)

## List of APIs

* [Installment Plan](https://www.github.com/Splitit/PHP-SDK/tree/0.0.4/doc/controllers/installment-plan.md)

## SDK Infrastructure

### Configuration

* [ProxyConfigurationBuilder](https://www.github.com/Splitit/PHP-SDK/tree/0.0.4/doc/proxy-configuration-builder.md)

### HTTP

* [HttpRequest](https://www.github.com/Splitit/PHP-SDK/tree/0.0.4/doc/http-request.md)
* [HttpResponse](https://www.github.com/Splitit/PHP-SDK/tree/0.0.4/doc/http-response.md)

### Utilities

* [ApiException](https://www.github.com/Splitit/PHP-SDK/tree/0.0.4/doc/api-exception.md)

