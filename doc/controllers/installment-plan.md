# Installment Plan

```php
$installmentPlanController = $client->getInstallmentPlanController();
```

## Class Name

`InstallmentPlanController`

## Methods

* [Installment Plan Check Card Validity](../../doc/controllers/installment-plan.md#installment-plan-check-card-validity)
* [Installment Plan Create Offers](../../doc/controllers/installment-plan.md#installment-plan-create-offers)
* [Installment Plan Generate Payment Link](../../doc/controllers/installment-plan.md#installment-plan-generate-payment-link)
* [Installment Plan Update Offers](../../doc/controllers/installment-plan.md#installment-plan-update-offers)
* [Installment Plan Authorize](../../doc/controllers/installment-plan.md#installment-plan-authorize)
* [Installment Plan Update Order](../../doc/controllers/installment-plan.md#installment-plan-update-order)
* [Installment Plan Get by Installment Plan Number](../../doc/controllers/installment-plan.md#installment-plan-get-by-installment-plan-number)
* [Installment Plan Search](../../doc/controllers/installment-plan.md#installment-plan-search)
* [Installment Plan Refund](../../doc/controllers/installment-plan.md#installment-plan-refund)


# Installment Plan Check Card Validity

```php
function installmentPlanCheckCardValidity(
    CardValidityRequest $body,
    ?string $xSplititTouchPoint = null,
    ?string $xSplititIdempotencyKey = null,
    ?string $xSplititTouchPointHeader = null,
    ?string $xSplititRequestID = null
): CardValidityResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`CardValidityRequest`](../../doc/models/card-validity-request.md) | Body, Required | - |
| `xSplititTouchPoint` | `?string` | Header, Optional | - |
| `xSplititIdempotencyKey` | `?string` | Header, Optional | - |
| `xSplititTouchPointHeader` | `?string` | Header, Optional | Touch point string |
| `xSplititRequestID` | `?string` | Header, Optional | - |

## Requires scope

### OAuth2

`api.v4`

## Response Type

[`CardValidityResponse`](../../doc/models/card-validity-response.md)

## Example Usage

```php
$body = CardValidityRequestBuilder::init()->build();

$installmentPlanController = $client->getInstallmentPlanController();

try {
    $result = $installmentPlanController->installmentPlanCheckCardValidity($body);
    echo 'CardValidityResponse:';
    var_dump($result);
} catch (ApiErrorResponseException $exp) {
    echo 'Caught ApiErrorResponseException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error | [`ApiErrorResponseException`](../../doc/models/api-error-response-exception.md) |


# Installment Plan Create Offers

```php
function installmentPlanCreateOffers(
    OffersRequest $body,
    ?string $xSplititTouchPoint = null,
    ?string $xSplititIdempotencyKey = null,
    ?string $xSplititRequestID = null
): OffersResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`OffersRequest`](../../doc/models/offers-request.md) | Body, Required | - |
| `xSplititTouchPoint` | `?string` | Header, Optional | Touch Point |
| `xSplititIdempotencyKey` | `?string` | Header, Optional | - |
| `xSplititRequestID` | `?string` | Header, Optional | - |

## Requires scope

### OAuth2

`api.v4`

## Response Type

[`OffersResponse`](../../doc/models/offers-response.md)

## Example Usage

```php
$body = OffersRequestBuilder::init(
    PurchaseMethodEnum::INSTORE,
    'PurchaseAmount2',
    'Currency4',
    OffersShopperDetailsBuilder::init(
        'LastName6',
        'Email6'
    )->build(),
    OffersPaymentMethodBuilder::init(
        OffersCardDetailsBuilder::init(
            'CardNumber2',
            90,
            228
        )->build()
    )->build()
)->build();

$installmentPlanController = $client->getInstallmentPlanController();

try {
    $result = $installmentPlanController->installmentPlanCreateOffers($body);
    echo 'OffersResponse:';
    var_dump($result);
} catch (ApiErrorResponseException $exp) {
    echo 'Caught ApiErrorResponseException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error | [`ApiErrorResponseException`](../../doc/models/api-error-response-exception.md) |


# Installment Plan Generate Payment Link

```php
function installmentPlanGeneratePaymentLink(
    PaymentLinkRequest $body,
    ?string $xSplititTouchPoint = null,
    ?string $xSplititIdempotencyKey = null,
    ?string $xSplititRequestID = null
): PaymentLinkResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`PaymentLinkRequest`](../../doc/models/payment-link-request.md) | Body, Required | - |
| `xSplititTouchPoint` | `?string` | Header, Optional | Touch point and  version |
| `xSplititIdempotencyKey` | `?string` | Header, Optional | - |
| `xSplititRequestID` | `?string` | Header, Optional | - |

## Requires scope

### OAuth2

`api.v4`

## Response Type

[`PaymentLinkResponse`](../../doc/models/payment-link-response.md)

## Example Usage

```php
$body = PaymentLinkRequestBuilder::init(
    'Amount8',
    'Currency4',
    PurchaseMethodEnum::INSTORE,
    OffersShopperDetailsBuilder::init(
        'LastName6',
        'Email6'
    )->build()
)->build();

$installmentPlanController = $client->getInstallmentPlanController();

try {
    $result = $installmentPlanController->installmentPlanGeneratePaymentLink($body);
    echo 'PaymentLinkResponse:';
    var_dump($result);
} catch (ApiErrorResponseException $exp) {
    echo 'Caught ApiErrorResponseException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error | [`ApiErrorResponseException`](../../doc/models/api-error-response-exception.md) |


# Installment Plan Update Offers

```php
function installmentPlanUpdateOffers(
    string $installmentPlanNumber,
    UpdateOffersRequest $body,
    ?string $xSplititTouchPoint = null,
    ?string $xSplititIdempotencyKey = null,
    ?string $xSplititRequestID = null
): OffersResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `installmentPlanNumber` | `string` | Template, Required | - |
| `body` | [`UpdateOffersRequest`](../../doc/models/update-offers-request.md) | Body, Required | - |
| `xSplititTouchPoint` | `?string` | Header, Optional | Touch point and version |
| `xSplititIdempotencyKey` | `?string` | Header, Optional | - |
| `xSplititRequestID` | `?string` | Header, Optional | - |

## Requires scope

### OAuth2

`api.v4`

## Response Type

[`OffersResponse`](../../doc/models/offers-response.md)

## Example Usage

```php
$installmentPlanNumber = 'installmentPlanNumber6';

$body = UpdateOffersRequestBuilder::init()->build();

$installmentPlanController = $client->getInstallmentPlanController();

try {
    $result = $installmentPlanController->installmentPlanUpdateOffers(
        $installmentPlanNumber,
        $body
    );
    echo 'OffersResponse:';
    var_dump($result);
} catch (ApiErrorResponseException $exp) {
    echo 'Caught ApiErrorResponseException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error | [`ApiErrorResponseException`](../../doc/models/api-error-response-exception.md) |


# Installment Plan Authorize

```php
function installmentPlanAuthorize(
    string $installmentPlanNumber,
    AuthorizeRequest $body,
    ?string $xSplititTouchPoint = null,
    ?string $xSplititIdempotencyKey = null,
    ?string $xSplititRequestID = null
): AuthorizeResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `installmentPlanNumber` | `string` | Template, Required | - |
| `body` | [`AuthorizeRequest`](../../doc/models/authorize-request.md) | Body, Required | - |
| `xSplititTouchPoint` | `?string` | Header, Optional | Touch point and version |
| `xSplititIdempotencyKey` | `?string` | Header, Optional | - |
| `xSplititRequestID` | `?string` | Header, Optional | - |

## Requires scope

### OAuth2

`api.v4`

## Response Type

[`AuthorizeResponse`](../../doc/models/authorize-response.md)

## Example Usage

```php
$installmentPlanNumber = 'installmentPlanNumber6';

$body = AuthorizeRequestBuilder::init(
    'OfferId8',
    false,
    false
)->build();

$installmentPlanController = $client->getInstallmentPlanController();

try {
    $result = $installmentPlanController->installmentPlanAuthorize(
        $installmentPlanNumber,
        $body
    );
    echo 'AuthorizeResponse:';
    var_dump($result);
} catch (ApiErrorResponseException $exp) {
    echo 'Caught ApiErrorResponseException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error | [`ApiErrorResponseException`](../../doc/models/api-error-response-exception.md) |


# Installment Plan Update Order

```php
function installmentPlanUpdateOrder(
    string $installmentPlanNumber,
    UpdateOrderRequest $body,
    ?string $xSplititTouchPoint = null,
    ?string $xSplititIdempotencyKey = null,
    ?string $xSplititRequestID = null
): UpdateOrderResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `installmentPlanNumber` | `string` | Template, Required | - |
| `body` | [`UpdateOrderRequest`](../../doc/models/update-order-request.md) | Body, Required | - |
| `xSplititTouchPoint` | `?string` | Header, Optional | Touch point and version |
| `xSplititIdempotencyKey` | `?string` | Header, Optional | - |
| `xSplititRequestID` | `?string` | Header, Optional | - |

## Requires scope

### OAuth2

`api.v4`

## Response Type

[`UpdateOrderResponse`](../../doc/models/update-order-response.md)

## Example Usage

```php
$installmentPlanNumber = 'installmentPlanNumber6';

$body = UpdateOrderRequestBuilder::init(
    ShippingStatusEnum::DELIVERED
)->build();

$installmentPlanController = $client->getInstallmentPlanController();

try {
    $result = $installmentPlanController->installmentPlanUpdateOrder(
        $installmentPlanNumber,
        $body
    );
    echo 'UpdateOrderResponse:';
    var_dump($result);
} catch (ApiErrorResponseException $exp) {
    echo 'Caught ApiErrorResponseException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error | [`ApiErrorResponseException`](../../doc/models/api-error-response-exception.md) |


# Installment Plan Get by Installment Plan Number

```php
function installmentPlanGetByInstallmentPlanNumber(
    string $installmentPlanNumber,
    ?string $xSplititTouchPoint = null,
    ?string $xSplititIdempotencyKey = null,
    ?string $xSplititRequestID = null
): InstallmentPlanDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `installmentPlanNumber` | `string` | Template, Required | - |
| `xSplititTouchPoint` | `?string` | Header, Optional | Touch point and version |
| `xSplititIdempotencyKey` | `?string` | Header, Optional | - |
| `xSplititRequestID` | `?string` | Header, Optional | - |

## Requires scope

### OAuth2

`api.v4`

## Response Type

[`InstallmentPlanDetailsResponse`](../../doc/models/installment-plan-details-response.md)

## Example Usage

```php
$installmentPlanNumber = 'installmentPlanNumber6';

$installmentPlanController = $client->getInstallmentPlanController();

try {
    $result = $installmentPlanController->installmentPlanGetByInstallmentPlanNumber($installmentPlanNumber);
    echo 'InstallmentPlanDetailsResponse:';
    var_dump($result);
} catch (ApiErrorResponseException $exp) {
    echo 'Caught ApiErrorResponseException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error | [`ApiErrorResponseException`](../../doc/models/api-error-response-exception.md) |


# Installment Plan Search

```php
function installmentPlanSearch(
    InstallmentPlanSearchRequest $body,
    ?string $xSplititTouchPoint = null,
    ?string $xSplititIdempotencyKey = null,
    ?string $xSplititRequestID = null
): InstallmentPlanSearchDetailsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`InstallmentPlanSearchRequest`](../../doc/models/installment-plan-search-request.md) | Body, Required | - |
| `xSplititTouchPoint` | `?string` | Header, Optional | Touch point and version |
| `xSplititIdempotencyKey` | `?string` | Header, Optional | - |
| `xSplititRequestID` | `?string` | Header, Optional | - |

## Requires scope

### OAuth2

`api.v4`

## Response Type

[`InstallmentPlanSearchDetailsResponse`](../../doc/models/installment-plan-search-details-response.md)

## Example Usage

```php
$body = InstallmentPlanSearchRequestBuilder::init()->build();

$installmentPlanController = $client->getInstallmentPlanController();

try {
    $result = $installmentPlanController->installmentPlanSearch($body);
    echo 'InstallmentPlanSearchDetailsResponse:';
    var_dump($result);
} catch (ApiErrorResponseException $exp) {
    echo 'Caught ApiErrorResponseException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error | [`ApiErrorResponseException`](../../doc/models/api-error-response-exception.md) |


# Installment Plan Refund

```php
function installmentPlanRefund(
    string $installmentPlanNumber,
    RefundRequest $body,
    ?string $xSplititTouchPoint = null,
    ?string $xSplititIdempotencyKey = null,
    ?string $xSplititRequestID = null
): RefundResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `installmentPlanNumber` | `string` | Template, Required | - |
| `body` | [`RefundRequest`](../../doc/models/refund-request.md) | Body, Required | - |
| `xSplititTouchPoint` | `?string` | Header, Optional | Touch point and version |
| `xSplititIdempotencyKey` | `?string` | Header, Optional | - |
| `xSplititRequestID` | `?string` | Header, Optional | - |

## Requires scope

### OAuth2

`api.v4`

## Response Type

[`RefundResponse`](../../doc/models/refund-response.md)

## Example Usage

```php
$installmentPlanNumber = 'installmentPlanNumber6';

$body = RefundRequestBuilder::init(
    'Amount8'
)->build();

$installmentPlanController = $client->getInstallmentPlanController();

try {
    $result = $installmentPlanController->installmentPlanRefund(
        $installmentPlanNumber,
        $body
    );
    echo 'RefundResponse:';
    var_dump($result);
} catch (ApiErrorResponseException $exp) {
    echo 'Caught ApiErrorResponseException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error | [`ApiErrorResponseException`](../../doc/models/api-error-response-exception.md) |

