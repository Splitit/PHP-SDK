
# Getting Started with splitit-web-api-v4

## Introduction

Splitit Orchestration API for managing installment plans.

## Install the Package

Run the following command to install the package and automatically add the dependency to your composer.json file:

```bash
composer require "splitit/splitit-php-sdk:2.0.11"
```

Or add it to the composer.json file manually as given below:

```json
"require": {
    "splitit/splitit-php-sdk": "2.0.11"
}
```

You can also view the package at:
https://packagist.org/packages/splitit/splitit-php-sdk#2.0.11

## Initialize the API Client

**_Note:_** Documentation for the client can be found [here.](https://www.github.com/Splitit/PHP-SDK/tree/2.0.11/doc/client.md)

The following parameters are configurable for the API Client:

| Parameter | Type | Description |
|  --- | --- | --- |
| environment | [`Environment`](https://www.github.com/Splitit/PHP-SDK/tree/2.0.11/README.md#environments) | The API environment. <br> **Default: `Environment.SANDBOX`** |
| timeout | `int` | Timeout for API calls in seconds.<br>*Default*: `0` |
| enableRetries | `bool` | Whether to enable retries and backoff feature.<br>*Default*: `false` |
| numberOfRetries | `int` | The number of retries to make.<br>*Default*: `0` |
| retryInterval | `float` | The retry time interval between the endpoint calls.<br>*Default*: `1` |
| backOffFactor | `float` | Exponential backoff factor to increase interval between retries.<br>*Default*: `2` |
| maximumRetryWaitTime | `int` | The maximum wait time in seconds for overall retrying requests.<br>*Default*: `0` |
| retryOnTimeout | `bool` | Whether to retry on request timeout.<br>*Default*: `true` |
| httpStatusCodesToRetry | `array` | Http status codes to retry against.<br>*Default*: `408, 413, 429, 500, 502, 503, 504, 521, 522, 524` |
| httpMethodsToRetry | `array` | Http methods to retry against.<br>*Default*: `'GET', 'PUT'` |
| proxyConfiguration | [`ProxyConfigurationBuilder`](https://www.github.com/Splitit/PHP-SDK/tree/2.0.11/doc/proxy-configuration-builder.md) | Represents the proxy configurations for API calls |
| oAuth2Credentials | [`OAuth2Credentials`](https://www.github.com/Splitit/PHP-SDK/tree/2.0.11/doc/auth/oauth-2-client-credentials-grant.md) | The Credentials Setter for OAuth 2 Client Credentials Grant |
| apiKeyCredentials | [`ApiKeyCredentials`](https://www.github.com/Splitit/PHP-SDK/tree/2.0.11/doc/auth/custom-header-signature.md) | The Credentials Setter for Custom Header Signature |

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

## Environments

The SDK can be configured to use a different environment for making API calls. Available environments are:

### Fields

| Name | Description |
|  --- | --- |
| SANDBOX | **Default** Sandbox Environment (Transactional API) |
| PRODUCTION | Production Environment (Transactional API) |

## Authorization

This API uses the following authentication schemes.

* [`OAuth2 (OAuth 2 Client Credentials Grant)`](https://www.github.com/Splitit/PHP-SDK/tree/2.0.11/doc/auth/oauth-2-client-credentials-grant.md)
* [`ApiKey (Custom Header Signature)`](https://www.github.com/Splitit/PHP-SDK/tree/2.0.11/doc/auth/custom-header-signature.md)

## List of APIs

* [Installment Plan](https://www.github.com/Splitit/PHP-SDK/tree/2.0.11/doc/controllers/installment-plan.md)

## SDK Infrastructure

### Configuration

* [ProxyConfigurationBuilder](https://www.github.com/Splitit/PHP-SDK/tree/2.0.11/doc/proxy-configuration-builder.md)

### HTTP

* [HttpRequest](https://www.github.com/Splitit/PHP-SDK/tree/2.0.11/doc/http-request.md)
* [HttpResponse](https://www.github.com/Splitit/PHP-SDK/tree/2.0.11/doc/http-response.md)

### Utilities

* [ApiException](https://www.github.com/Splitit/PHP-SDK/tree/2.0.11/doc/api-exception.md)

