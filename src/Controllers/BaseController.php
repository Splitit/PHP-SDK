<?php

declare(strict_types=1);

/*
 * SplititWebApiV3Lib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SplititWebApiV3Lib\Controllers;

use Core\ApiCall;
use Core\Client;
use Core\Request\RequestBuilder;
use Core\Response\ResponseHandler;
use SplititWebApiV3Lib\Exceptions\ApiException;

/**
 * Base controller
 */
class BaseController
{
    /**
     * Client instance
     *
     * @var Client
     */
    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @throws ApiException Thrown if API call fails
     */
    protected function execute(RequestBuilder $requestBuilder, ?ResponseHandler $responseHandler = null)
    {
        return (new ApiCall($this->client))
            ->requestBuilder($requestBuilder)
            ->responseHandler($responseHandler ?? $this->responseHandler())
            ->execute();
    }

    protected function requestBuilder(string $requestMethod, string $path): RequestBuilder
    {
        return new RequestBuilder($requestMethod, $path);
    }

    protected function responseHandler(): ResponseHandler
    {
        return $this->client->getGlobalResponseHandler();
    }
}
