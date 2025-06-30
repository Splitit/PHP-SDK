# Installment Plan

```php
$installmentPlanController = $client->getInstallmentPlanController();
```

## Class Name

`InstallmentPlanController`

## Methods

* [Installment Plan Get](../../doc/controllers/installment-plan.md#installment-plan-get)
* [Installment Plan Post 2](../../doc/controllers/installment-plan.md#installment-plan-post-2)
* [Installment Plan Search](../../doc/controllers/installment-plan.md#installment-plan-search)
* [Installment Plan Post](../../doc/controllers/installment-plan.md#installment-plan-post)
* [Installment Plan Update Order 2](../../doc/controllers/installment-plan.md#installment-plan-update-order-2)
* [Installment Plan Verify Authorization](../../doc/controllers/installment-plan.md#installment-plan-verify-authorization)
* [Installment Plan Refund](../../doc/controllers/installment-plan.md#installment-plan-refund)
* [Installment Plan Check Eligibility](../../doc/controllers/installment-plan.md#installment-plan-check-eligibility)
* [Installment Plan Update Order](../../doc/controllers/installment-plan.md#installment-plan-update-order)
* [Installment Plan Get Eligibility Terms and Condition](../../doc/controllers/installment-plan.md#installment-plan-get-eligibility-terms-and-condition)


# Installment Plan Get

```php
function installmentPlanGet(
    string $installmentPlanNumber,
    ?string $xSplititTouchPoint = null
): InstallmentPlanGetResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `installmentPlanNumber` | `string` | Template, Required | - |
| `xSplititTouchPoint` | `?string` | Header, Optional | TouchPoint |

## Requires scope

### OAuth2-sandbox

`api.v3`

### OAuth2-production

`api.v3`

## Response Type

[`InstallmentPlanGetResponse`](../../doc/models/installment-plan-get-response.md)

## Example Usage

```php
$installmentPlanNumber = 'installmentPlanNumber6';

$result = $installmentPlanController->installmentPlanGet($installmentPlanNumber);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | - | [`FailedResponseException`](../../doc/models/failed-response-exception.md) |
| 403 | - | [`FailedResponseException`](../../doc/models/failed-response-exception.md) |
| 404 | - | [`FailedResponseException`](../../doc/models/failed-response-exception.md) |
| 500 | - | [`FailedResponseException`](../../doc/models/failed-response-exception.md) |


# Installment Plan Post 2

```php
function installmentPlanPost2(
    string $xSplititIdempotencyKey,
    InstallmentPlanCreateRequest $body,
    ?string $xSplititTestMode = null,
    ?string $xSplititTouchPoint = null
): InstallmentPlanCreateResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `xSplititIdempotencyKey` | `string` | Header, Required | - |
| `body` | [`InstallmentPlanCreateRequest`](../../doc/models/installment-plan-create-request.md) | Body, Required | - |
| `xSplititTestMode` | [`?string(TestModesEnum)`](../../doc/models/test-modes-enum.md) | Header, Optional | - |
| `xSplititTouchPoint` | `?string` | Header, Optional | TouchPoint |

## Requires scope

### OAuth2-sandbox

`api.v3`

### OAuth2-production

`api.v3`

## Response Type

[`InstallmentPlanCreateResponse`](../../doc/models/installment-plan-create-response.md)

## Example Usage

```php
$xSplititIdempotencyKey = 'X-Splitit-IdempotencyKey2';

$body = InstallmentPlanCreateRequestBuilder::init(
    false,
    false
)->build();

$result = $installmentPlanController->installmentPlanPost2(
    $xSplititIdempotencyKey,
    $body
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | - | [`PlanErrorResponseException`](../../doc/models/plan-error-response-exception.md) |
| 401 | - | [`FailedResponseException`](../../doc/models/failed-response-exception.md) |
| 403 | - | [`FailedResponseException`](../../doc/models/failed-response-exception.md) |
| 404 | - | [`FailedResponseException`](../../doc/models/failed-response-exception.md) |
| 500 | - | [`FailedResponseException`](../../doc/models/failed-response-exception.md) |


# Installment Plan Search

```php
function installmentPlanSearch(
    ?string $installmentPlanNumber = null,
    ?string $refOrderNumber = null,
    ?array $extendedParams = null,
    ?string $xSplititTouchPoint = null
): InstallmentPlanSearchResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `installmentPlanNumber` | `?string` | Query, Optional | - |
| `refOrderNumber` | `?string` | Query, Optional | - |
| `extendedParams` | `?array` | Query, Optional | - |
| `xSplititTouchPoint` | `?string` | Header, Optional | TouchPoint |

## Requires scope

### OAuth2-sandbox

`api.v3`

### OAuth2-production

`api.v3`

## Response Type

[`InstallmentPlanSearchResponse`](../../doc/models/installment-plan-search-response.md)

## Example Usage

```php
$result = $installmentPlanController->installmentPlanSearch();
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | - | [`FailedResponseException`](../../doc/models/failed-response-exception.md) |
| 403 | - | [`FailedResponseException`](../../doc/models/failed-response-exception.md) |
| 404 | - | [`FailedResponseException`](../../doc/models/failed-response-exception.md) |
| 500 | - | [`FailedResponseException`](../../doc/models/failed-response-exception.md) |


# Installment Plan Post

```php
function installmentPlanPost(
    string $xSplititIdempotencyKey,
    InstallmentPlanInitiateRequest $body,
    ?string $xSplititTestMode = null,
    ?string $xSplititTouchPoint = null
): InitiatePlanResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `xSplititIdempotencyKey` | `string` | Header, Required | - |
| `body` | [`InstallmentPlanInitiateRequest`](../../doc/models/installment-plan-initiate-request.md) | Body, Required | - |
| `xSplititTestMode` | [`?string(TestModesEnum)`](../../doc/models/test-modes-enum.md) | Header, Optional | - |
| `xSplititTouchPoint` | `?string` | Header, Optional | TouchPoint |

## Requires scope

### OAuth2-sandbox

`api.v3`

### OAuth2-production

`api.v3`

## Response Type

[`InitiatePlanResponse`](../../doc/models/initiate-plan-response.md)

## Example Usage

```php
$xSplititIdempotencyKey = 'X-Splitit-IdempotencyKey2';

$body = InstallmentPlanInitiateRequestBuilder::init()->build();

$result = $installmentPlanController->installmentPlanPost(
    $xSplititIdempotencyKey,
    $body
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | - | [`PlanErrorResponseException`](../../doc/models/plan-error-response-exception.md) |
| 401 | - | [`FailedResponseException`](../../doc/models/failed-response-exception.md) |
| 403 | - | [`FailedResponseException`](../../doc/models/failed-response-exception.md) |
| 404 | - | [`FailedResponseException`](../../doc/models/failed-response-exception.md) |
| 500 | - | [`FailedResponseException`](../../doc/models/failed-response-exception.md) |


# Installment Plan Update Order 2

```php
function installmentPlanUpdateOrder2(
    string $xSplititIdempotencyKey,
    InstallmentPlanUpdateRequestByIdentifier $body,
    ?string $xSplititTouchPoint = null
): InstallmentPlanUpdateResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `xSplititIdempotencyKey` | `string` | Header, Required | - |
| `body` | [`InstallmentPlanUpdateRequestByIdentifier`](../../doc/models/installment-plan-update-request-by-identifier.md) | Body, Required | - |
| `xSplititTouchPoint` | `?string` | Header, Optional | TouchPoint |

## Requires scope

### OAuth2-sandbox

`api.v3`

### OAuth2-production

`api.v3`

## Response Type

[`InstallmentPlanUpdateResponse`](../../doc/models/installment-plan-update-response.md)

## Example Usage

```php
$xSplititIdempotencyKey = 'X-Splitit-IdempotencyKey2';

$body = InstallmentPlanUpdateRequestByIdentifierBuilder::init()->build();

$result = $installmentPlanController->installmentPlanUpdateOrder2(
    $xSplititIdempotencyKey,
    $body
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | - | [`FailedResponseException`](../../doc/models/failed-response-exception.md) |
| 403 | - | [`FailedResponseException`](../../doc/models/failed-response-exception.md) |
| 404 | - | [`FailedResponseException`](../../doc/models/failed-response-exception.md) |
| 500 | - | [`FailedResponseException`](../../doc/models/failed-response-exception.md) |


# Installment Plan Verify Authorization

```php
function installmentPlanVerifyAuthorization(
    string $installmentPlanNumber,
    ?string $xSplititTouchPoint = null
): VerifyAuthorizationResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `installmentPlanNumber` | `string` | Template, Required | - |
| `xSplititTouchPoint` | `?string` | Header, Optional | TouchPoint |

## Requires scope

### OAuth2-sandbox

`api.v3`

### OAuth2-production

`api.v3`

## Response Type

[`VerifyAuthorizationResponse`](../../doc/models/verify-authorization-response.md)

## Example Usage

```php
$installmentPlanNumber = 'installmentPlanNumber6';

$result = $installmentPlanController->installmentPlanVerifyAuthorization($installmentPlanNumber);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | - | [`FailedResponseException`](../../doc/models/failed-response-exception.md) |
| 403 | - | [`FailedResponseException`](../../doc/models/failed-response-exception.md) |
| 404 | - | [`FailedResponseException`](../../doc/models/failed-response-exception.md) |
| 500 | - | [`FailedResponseException`](../../doc/models/failed-response-exception.md) |


# Installment Plan Refund

```php
function installmentPlanRefund(
    string $installmentPlanNumber,
    string $xSplititIdempotencyKey,
    InstallmentPlanRefundRequest $body,
    ?string $xSplititTouchPoint = null
): InstallmentPlanRefundResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `installmentPlanNumber` | `string` | Template, Required | - |
| `xSplititIdempotencyKey` | `string` | Header, Required | - |
| `body` | [`InstallmentPlanRefundRequest`](../../doc/models/installment-plan-refund-request.md) | Body, Required | - |
| `xSplititTouchPoint` | `?string` | Header, Optional | TouchPoint |

## Requires scope

### OAuth2-sandbox

`api.v3`

### OAuth2-production

`api.v3`

## Response Type

[`InstallmentPlanRefundResponse`](../../doc/models/installment-plan-refund-response.md)

## Example Usage

```php
$installmentPlanNumber = 'installmentPlanNumber6';

$xSplititIdempotencyKey = 'X-Splitit-IdempotencyKey2';

$body = InstallmentPlanRefundRequestBuilder::init(
    'Amount8'
)->build();

$result = $installmentPlanController->installmentPlanRefund(
    $installmentPlanNumber,
    $xSplititIdempotencyKey,
    $body
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | - | [`FailedResponseException`](../../doc/models/failed-response-exception.md) |
| 403 | - | [`FailedResponseException`](../../doc/models/failed-response-exception.md) |
| 404 | - | [`FailedResponseException`](../../doc/models/failed-response-exception.md) |
| 500 | - | [`FailedResponseException`](../../doc/models/failed-response-exception.md) |


# Installment Plan Check Eligibility

```php
function installmentPlanCheckEligibility(
    string $xSplititIdempotencyKey,
    CheckInstallmentsEligibilityRequest $body,
    ?string $xSplititTouchPoint = null
): InstallmentsEligibilityResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `xSplititIdempotencyKey` | `string` | Header, Required | - |
| `body` | [`CheckInstallmentsEligibilityRequest`](../../doc/models/check-installments-eligibility-request.md) | Body, Required | - |
| `xSplititTouchPoint` | `?string` | Header, Optional | TouchPoint |

## Requires scope

### OAuth2-sandbox

`api.v3`

### OAuth2-production

`api.v3`

## Response Type

[`InstallmentsEligibilityResponse`](../../doc/models/installments-eligibility-response.md)

## Example Usage

```php
$xSplititIdempotencyKey = 'X-Splitit-IdempotencyKey2';

$body = CheckInstallmentsEligibilityRequestBuilder::init()->build();

$result = $installmentPlanController->installmentPlanCheckEligibility(
    $xSplititIdempotencyKey,
    $body
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | - | [`FailedResponseException`](../../doc/models/failed-response-exception.md) |
| 403 | - | [`FailedResponseException`](../../doc/models/failed-response-exception.md) |
| 404 | - | [`FailedResponseException`](../../doc/models/failed-response-exception.md) |
| 500 | - | [`FailedResponseException`](../../doc/models/failed-response-exception.md) |


# Installment Plan Update Order

```php
function installmentPlanUpdateOrder(
    string $installmentPlanNumber,
    string $xSplititIdempotencyKey,
    InstallmentPlanUpdateRequest $body,
    ?string $xSplititTouchPoint = null
): InstallmentPlanUpdateResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `installmentPlanNumber` | `string` | Template, Required | - |
| `xSplititIdempotencyKey` | `string` | Header, Required | - |
| `body` | [`InstallmentPlanUpdateRequest`](../../doc/models/installment-plan-update-request.md) | Body, Required | - |
| `xSplititTouchPoint` | `?string` | Header, Optional | TouchPoint |

## Requires scope

### OAuth2-sandbox

`api.v3`

### OAuth2-production

`api.v3`

## Response Type

[`InstallmentPlanUpdateResponse`](../../doc/models/installment-plan-update-response.md)

## Example Usage

```php
$installmentPlanNumber = 'installmentPlanNumber6';

$xSplititIdempotencyKey = 'X-Splitit-IdempotencyKey2';

$body = InstallmentPlanUpdateRequestBuilder::init()->build();

$result = $installmentPlanController->installmentPlanUpdateOrder(
    $installmentPlanNumber,
    $xSplititIdempotencyKey,
    $body
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | - | [`FailedResponseException`](../../doc/models/failed-response-exception.md) |
| 403 | - | [`FailedResponseException`](../../doc/models/failed-response-exception.md) |
| 404 | - | [`FailedResponseException`](../../doc/models/failed-response-exception.md) |
| 500 | - | [`FailedResponseException`](../../doc/models/failed-response-exception.md) |


# Installment Plan Get Eligibility Terms and Condition

```php
function installmentPlanGetEligibilityTermsAndCondition(
    string $ipn,
    ?string $xSplititTouchPoint = null
): EligibilityTermsAndConditionResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `ipn` | `string` | Template, Required | - |
| `xSplititTouchPoint` | `?string` | Header, Optional | TouchPoint |

## Requires scope

### OAuth2-sandbox

`api.v3`

### OAuth2-production

`api.v3`

## Response Type

[`EligibilityTermsAndConditionResponse`](../../doc/models/eligibility-terms-and-condition-response.md)

## Example Usage

```php
$ipn = 'ipn4';

$result = $installmentPlanController->installmentPlanGetEligibilityTermsAndCondition($ipn);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | - | [`FailedResponseException`](../../doc/models/failed-response-exception.md) |
| 403 | - | [`FailedResponseException`](../../doc/models/failed-response-exception.md) |
| 404 | - | [`FailedResponseException`](../../doc/models/failed-response-exception.md) |
| 500 | - | [`FailedResponseException`](../../doc/models/failed-response-exception.md) |

