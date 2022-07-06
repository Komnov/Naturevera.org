<?php
/*
 * Copyright 2021 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * Generated by gapic-generator-php from the file
 * https://github.com/google/googleapis/blob/master/google/ads/googleads/v8/services/campaign_draft_service.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Ads\GoogleAds\V8\Services\Gapic;

use Google\Ads\GoogleAds\V8\Resources\CampaignDraft;
use Google\Ads\GoogleAds\V8\Services\CampaignDraftOperation;
use Google\Ads\GoogleAds\V8\Services\GetCampaignDraftRequest;

use Google\Ads\GoogleAds\V8\Services\ListCampaignDraftAsyncErrorsRequest;

use Google\Ads\GoogleAds\V8\Services\ListCampaignDraftAsyncErrorsResponse;
use Google\Ads\GoogleAds\V8\Services\MutateCampaignDraftsRequest;
use Google\Ads\GoogleAds\V8\Services\MutateCampaignDraftsResponse;
use Google\Ads\GoogleAds\V8\Services\PromoteCampaignDraftRequest;
use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\LongRunning\OperationsClient;
use Google\ApiCore\OperationResponse;
use Google\ApiCore\PathTemplate;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\LongRunning\Operation;



/**
 * Service Description: Service to manage campaign drafts.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $campaignDraftServiceClient = new CampaignDraftServiceClient();
 * try {
 *     $formattedResourceName = $campaignDraftServiceClient->campaignDraftName('[CUSTOMER_ID]', '[BASE_CAMPAIGN_ID]', '[DRAFT_ID]');
 *     $response = $campaignDraftServiceClient->getCampaignDraft($formattedResourceName);
 * } finally {
 *     $campaignDraftServiceClient->close();
 * }
 * ```
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 */
class CampaignDraftServiceGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.ads.googleads.v8.services.CampaignDraftService';

    /**
     * The default address of the service.
     */
    const SERVICE_ADDRESS = 'googleads.googleapis.com';

    /**
     * The default port of the service.
     */
    const DEFAULT_SERVICE_PORT = 443;

    /**
     * The name of the code generator, to be included in the agent header.
     */
    const CODEGEN_NAME = 'gapic';

    /**
     * The default scopes required by the service.
     */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/adwords',
    ];

    private static $campaignDraftNameTemplate;

    private static $pathTemplateMap;

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'serviceAddress' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/campaign_draft_service_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/campaign_draft_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/campaign_draft_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/campaign_draft_service_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getCampaignDraftNameTemplate()
    {
        if (self::$campaignDraftNameTemplate == null) {
            self::$campaignDraftNameTemplate = new PathTemplate('customers/{customer_id}/campaignDrafts/{base_campaign_id}~{draft_id}');
        }

        return self::$campaignDraftNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (self::$pathTemplateMap == null) {
            self::$pathTemplateMap = [
                'campaignDraft' => self::getCampaignDraftNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * campaign_draft resource.
     *
     * @param string $customerId
     * @param string $baseCampaignId
     * @param string $draftId
     *
     * @return string The formatted campaign_draft resource.
     */
    public static function campaignDraftName($customerId, $baseCampaignId, $draftId)
    {
        return self::getCampaignDraftNameTemplate()->render([
            'customer_id' => $customerId,
            'base_campaign_id' => $baseCampaignId,
            'draft_id' => $draftId,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - campaignDraft: customers/{customer_id}/campaignDrafts/{base_campaign_id}~{draft_id}
     *
     * The optional $template argument can be supplied to specify a particular pattern,
     * and must match one of the templates listed above. If no $template argument is
     * provided, or if the $template argument does not match one of the templates
     * listed, then parseName will check each of the supported templates, and return
     * the first match.
     *
     * @param string $formattedName The formatted name string
     * @param string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     */
    public static function parseName($formattedName, $template = null)
    {
        $templateMap = self::getPathTemplateMap();
        if ($template) {
            if (!isset($templateMap[$template])) {
                throw new ValidationException("Template name $template does not exist");
            }

            return $templateMap[$template]->match($formattedName);
        }

        foreach ($templateMap as $templateName => $pathTemplate) {
            try {
                return $pathTemplate->match($formattedName);
            } catch (ValidationException $ex) {
                // Swallow the exception to continue trying other path templates
            }
        }

        throw new ValidationException("Input did not match any known format. Input: $formattedName");
    }

    /**
     * Return an OperationsClient object with the same endpoint as $this.
     *
     * @return OperationsClient
     */
    public function getOperationsClient()
    {
        return $this->operationsClient;
    }

    /**
     * Resume an existing long running operation that was previously started by a long
     * running API method. If $methodName is not provided, or does not match a long
     * running API method, then the operation can still be resumed, but the
     * OperationResponse object will not deserialize the final response.
     *
     * @param string $operationName The name of the long running operation
     * @param string $methodName    The name of the method used to start the operation
     *
     * @return OperationResponse
     */
    public function resumeOperation($operationName, $methodName = null)
    {
        $options = isset($this->descriptors[$methodName]['longRunning']) ? $this->descriptors[$methodName]['longRunning'] : [];
        $operation = new OperationResponse($operationName, $this->getOperationsClient(), $options);
        $operation->reload();
        return $operation;
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $serviceAddress
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'googleads.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string
     *           `rest` or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $serviceAddress setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
        $this->operationsClient = $this->createOperationsClient($clientOptions);
    }

    /**
     * Returns the requested campaign draft in full detail.
     *
     * List of thrown errors:
     * [AuthenticationError]()
     * [AuthorizationError]()
     * [HeaderError]()
     * [InternalError]()
     * [QuotaError]()
     * [RequestError]()
     *
     * Sample code:
     * ```
     * $campaignDraftServiceClient = new CampaignDraftServiceClient();
     * try {
     *     $formattedResourceName = $campaignDraftServiceClient->campaignDraftName('[CUSTOMER_ID]', '[BASE_CAMPAIGN_ID]', '[DRAFT_ID]');
     *     $response = $campaignDraftServiceClient->getCampaignDraft($formattedResourceName);
     * } finally {
     *     $campaignDraftServiceClient->close();
     * }
     * ```
     *
     * @param string $resourceName Required. The resource name of the campaign draft to fetch.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Ads\GoogleAds\V8\Resources\CampaignDraft
     *
     * @throws ApiException if the remote call fails
     */
    public function getCampaignDraft($resourceName, array $optionalArgs = [])
    {
        $request = new GetCampaignDraftRequest();
        $requestParamHeaders = [];
        $request->setResourceName($resourceName);
        $requestParamHeaders['resource_name'] = $resourceName;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('GetCampaignDraft', CampaignDraft::class, $optionalArgs, $request)->wait();
    }

    /**
     * Returns all errors that occurred during CampaignDraft promote. Throws an
     * error if called before campaign draft is promoted.
     * Supports standard list paging.
     *
     * List of thrown errors:
     * [AuthenticationError]()
     * [AuthorizationError]()
     * [HeaderError]()
     * [InternalError]()
     * [QuotaError]()
     * [RequestError]()
     *
     * Sample code:
     * ```
     * $campaignDraftServiceClient = new CampaignDraftServiceClient();
     * try {
     *     $formattedResourceName = $campaignDraftServiceClient->campaignDraftName('[CUSTOMER_ID]', '[BASE_CAMPAIGN_ID]', '[DRAFT_ID]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $campaignDraftServiceClient->listCampaignDraftAsyncErrors($formattedResourceName);
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *     // Alternatively:
     *     // Iterate through all elements
     *     $pagedResponse = $campaignDraftServiceClient->listCampaignDraftAsyncErrors($formattedResourceName);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $campaignDraftServiceClient->close();
     * }
     * ```
     *
     * @param string $resourceName Required. The name of the campaign draft from which to retrieve the async errors.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type string $pageToken
     *           A page token is used to specify a page of values to be returned.
     *           If no page token is specified (the default), the first page
     *           of values will be returned. Any page token used here must have
     *           been generated by a previous call to the API.
     *     @type int $pageSize
     *           The maximum number of resources contained in the underlying API
     *           response. The API may return fewer values in a page, even if
     *           there are additional values to be retrieved.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\PagedListResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function listCampaignDraftAsyncErrors($resourceName, array $optionalArgs = [])
    {
        $request = new ListCampaignDraftAsyncErrorsRequest();
        $requestParamHeaders = [];
        $request->setResourceName($resourceName);
        $requestParamHeaders['resource_name'] = $resourceName;
        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->getPagedListResponse('ListCampaignDraftAsyncErrors', $optionalArgs, ListCampaignDraftAsyncErrorsResponse::class, $request);
    }

    /**
     * Creates, updates, or removes campaign drafts. Operation statuses are
     * returned.
     *
     * List of thrown errors:
     * [AuthenticationError]()
     * [AuthorizationError]()
     * [CampaignDraftError]()
     * [DatabaseError]()
     * [FieldError]()
     * [HeaderError]()
     * [InternalError]()
     * [MutateError]()
     * [QuotaError]()
     * [RequestError]()
     *
     * Sample code:
     * ```
     * $campaignDraftServiceClient = new CampaignDraftServiceClient();
     * try {
     *     $customerId = 'customer_id';
     *     $operations = [];
     *     $response = $campaignDraftServiceClient->mutateCampaignDrafts($customerId, $operations);
     * } finally {
     *     $campaignDraftServiceClient->close();
     * }
     * ```
     *
     * @param string                   $customerId   Required. The ID of the customer whose campaign drafts are being modified.
     * @param CampaignDraftOperation[] $operations   Required. The list of operations to perform on individual campaign drafts.
     * @param array                    $optionalArgs {
     *     Optional.
     *
     *     @type bool $partialFailure
     *           If true, successful operations will be carried out and invalid
     *           operations will return errors. If false, all operations will be carried
     *           out in one transaction if and only if they are all valid.
     *           Default is false.
     *     @type bool $validateOnly
     *           If true, the request is validated but not executed. Only errors are
     *           returned, not results.
     *     @type int $responseContentType
     *           The response content type setting. Determines whether the mutable resource
     *           or just the resource name should be returned post mutation.
     *           For allowed values, use constants defined on {@see \Google\Ads\GoogleAds\V8\Enums\ResponseContentTypeEnum\ResponseContentType}
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Ads\GoogleAds\V8\Services\MutateCampaignDraftsResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function mutateCampaignDrafts($customerId, $operations, array $optionalArgs = [])
    {
        $request = new MutateCampaignDraftsRequest();
        $requestParamHeaders = [];
        $request->setCustomerId($customerId);
        $request->setOperations($operations);
        $requestParamHeaders['customer_id'] = $customerId;
        if (isset($optionalArgs['partialFailure'])) {
            $request->setPartialFailure($optionalArgs['partialFailure']);
        }

        if (isset($optionalArgs['validateOnly'])) {
            $request->setValidateOnly($optionalArgs['validateOnly']);
        }

        if (isset($optionalArgs['responseContentType'])) {
            $request->setResponseContentType($optionalArgs['responseContentType']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('MutateCampaignDrafts', MutateCampaignDraftsResponse::class, $optionalArgs, $request)->wait();
    }

    /**
     * Promotes the changes in a draft back to the base campaign.
     *
     * This method returns a Long Running Operation (LRO) indicating if the
     * Promote is done. Use [Operations.GetOperation] to poll the LRO until it
     * is done. Only a done status is returned in the response. See the status
     * in the Campaign Draft resource to determine if the promotion was
     * successful. If the LRO failed, use
     * [CampaignDraftService.ListCampaignDraftAsyncErrors][google.ads.googleads.v8.services.CampaignDraftService.ListCampaignDraftAsyncErrors] to view the list of
     * error reasons.
     *
     * List of thrown errors:
     * [AuthenticationError]()
     * [AuthorizationError]()
     * [CampaignDraftError]()
     * [HeaderError]()
     * [InternalError]()
     * [QuotaError]()
     * [RequestError]()
     *
     * Sample code:
     * ```
     * $campaignDraftServiceClient = new CampaignDraftServiceClient();
     * try {
     *     $campaignDraft = 'campaign_draft';
     *     $operationResponse = $campaignDraftServiceClient->promoteCampaignDraft($campaignDraft);
     *     $operationResponse->pollUntilComplete();
     *     if ($operationResponse->operationSucceeded()) {
     *         // operation succeeded and returns no value
     *     } else {
     *         $error = $operationResponse->getError();
     *         // handleError($error)
     *     }
     *     // Alternatively:
     *     // start the operation, keep the operation name, and resume later
     *     $operationResponse = $campaignDraftServiceClient->promoteCampaignDraft($campaignDraft);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $campaignDraftServiceClient->resumeOperation($operationName, 'promoteCampaignDraft');
     *     while (!$newOperationResponse->isDone()) {
     *         // ... do other work
     *         $newOperationResponse->reload();
     *     }
     *     if ($newOperationResponse->operationSucceeded()) {
     *         // operation succeeded and returns no value
     *     } else {
     *         $error = $newOperationResponse->getError();
     *         // handleError($error)
     *     }
     * } finally {
     *     $campaignDraftServiceClient->close();
     * }
     * ```
     *
     * @param string $campaignDraft Required. The resource name of the campaign draft to promote.
     * @param array  $optionalArgs  {
     *     Optional.
     *
     *     @type bool $validateOnly
     *           If true, the request is validated but no Long Running Operation is created.
     *           Only errors are returned.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\OperationResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function promoteCampaignDraft($campaignDraft, array $optionalArgs = [])
    {
        $request = new PromoteCampaignDraftRequest();
        $requestParamHeaders = [];
        $request->setCampaignDraft($campaignDraft);
        $requestParamHeaders['campaign_draft'] = $campaignDraft;
        if (isset($optionalArgs['validateOnly'])) {
            $request->setValidateOnly($optionalArgs['validateOnly']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startOperationsCall('PromoteCampaignDraft', $optionalArgs, $request, $this->getOperationsClient())->wait();
    }
}
