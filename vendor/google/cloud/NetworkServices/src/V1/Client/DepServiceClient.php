<?php
/*
 * Copyright 2024 Google LLC
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
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/networkservices/v1/dep.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\NetworkServices\V1\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\OperationResponse;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Iam\V1\GetIamPolicyRequest;
use Google\Cloud\Iam\V1\Policy;
use Google\Cloud\Iam\V1\SetIamPolicyRequest;
use Google\Cloud\Iam\V1\TestIamPermissionsRequest;
use Google\Cloud\Iam\V1\TestIamPermissionsResponse;
use Google\Cloud\Location\GetLocationRequest;
use Google\Cloud\Location\ListLocationsRequest;
use Google\Cloud\Location\Location;
use Google\Cloud\NetworkServices\V1\CreateLbRouteExtensionRequest;
use Google\Cloud\NetworkServices\V1\CreateLbTrafficExtensionRequest;
use Google\Cloud\NetworkServices\V1\DeleteLbRouteExtensionRequest;
use Google\Cloud\NetworkServices\V1\DeleteLbTrafficExtensionRequest;
use Google\Cloud\NetworkServices\V1\GetLbRouteExtensionRequest;
use Google\Cloud\NetworkServices\V1\GetLbTrafficExtensionRequest;
use Google\Cloud\NetworkServices\V1\LbRouteExtension;
use Google\Cloud\NetworkServices\V1\LbTrafficExtension;
use Google\Cloud\NetworkServices\V1\ListLbRouteExtensionsRequest;
use Google\Cloud\NetworkServices\V1\ListLbTrafficExtensionsRequest;
use Google\Cloud\NetworkServices\V1\UpdateLbRouteExtensionRequest;
use Google\Cloud\NetworkServices\V1\UpdateLbTrafficExtensionRequest;
use Google\LongRunning\Client\OperationsClient;
use Google\LongRunning\Operation;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: Service describing handlers for resources.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @method PromiseInterface createLbRouteExtensionAsync(CreateLbRouteExtensionRequest $request, array $optionalArgs = [])
 * @method PromiseInterface createLbTrafficExtensionAsync(CreateLbTrafficExtensionRequest $request, array $optionalArgs = [])
 * @method PromiseInterface deleteLbRouteExtensionAsync(DeleteLbRouteExtensionRequest $request, array $optionalArgs = [])
 * @method PromiseInterface deleteLbTrafficExtensionAsync(DeleteLbTrafficExtensionRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getLbRouteExtensionAsync(GetLbRouteExtensionRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getLbTrafficExtensionAsync(GetLbTrafficExtensionRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listLbRouteExtensionsAsync(ListLbRouteExtensionsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listLbTrafficExtensionsAsync(ListLbTrafficExtensionsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface updateLbRouteExtensionAsync(UpdateLbRouteExtensionRequest $request, array $optionalArgs = [])
 * @method PromiseInterface updateLbTrafficExtensionAsync(UpdateLbTrafficExtensionRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getLocationAsync(GetLocationRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listLocationsAsync(ListLocationsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getIamPolicyAsync(GetIamPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface setIamPolicyAsync(SetIamPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface testIamPermissionsAsync(TestIamPermissionsRequest $request, array $optionalArgs = [])
 */
final class DepServiceClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.networkservices.v1.DepService';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'networkservices.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'networkservices.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = ['https://www.googleapis.com/auth/cloud-platform'];

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/dep_service_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/dep_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/dep_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/dep_service_rest_client_config.php',
                ],
            ],
        ];
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
        $options = isset($this->descriptors[$methodName]['longRunning'])
            ? $this->descriptors[$methodName]['longRunning']
            : [];
        $operation = new OperationResponse($operationName, $this->getOperationsClient(), $options);
        $operation->reload();
        return $operation;
    }

    /**
     * Create the default operation client for the service.
     *
     * @param array $options ClientOptions for the client.
     *
     * @return OperationsClient
     */
    private function createOperationsClient(array $options)
    {
        // Unset client-specific configuration options
        unset($options['serviceName'], $options['clientConfig'], $options['descriptorsConfigPath']);

        if (isset($options['operationsClient'])) {
            return $options['operationsClient'];
        }

        return new OperationsClient($options);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * lb_route_extension resource.
     *
     * @param string $project
     * @param string $location
     * @param string $lbRouteExtension
     *
     * @return string The formatted lb_route_extension resource.
     */
    public static function lbRouteExtensionName(string $project, string $location, string $lbRouteExtension): string
    {
        return self::getPathTemplate('lbRouteExtension')->render([
            'project' => $project,
            'location' => $location,
            'lb_route_extension' => $lbRouteExtension,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * lb_traffic_extension resource.
     *
     * @param string $project
     * @param string $location
     * @param string $lbTrafficExtension
     *
     * @return string The formatted lb_traffic_extension resource.
     */
    public static function lbTrafficExtensionName(string $project, string $location, string $lbTrafficExtension): string
    {
        return self::getPathTemplate('lbTrafficExtension')->render([
            'project' => $project,
            'location' => $location,
            'lb_traffic_extension' => $lbTrafficExtension,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a location
     * resource.
     *
     * @param string $project
     * @param string $location
     *
     * @return string The formatted location resource.
     */
    public static function locationName(string $project, string $location): string
    {
        return self::getPathTemplate('location')->render([
            'project' => $project,
            'location' => $location,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - lbRouteExtension: projects/{project}/locations/{location}/lbRouteExtensions/{lb_route_extension}
     * - lbTrafficExtension: projects/{project}/locations/{location}/lbTrafficExtensions/{lb_traffic_extension}
     * - location: projects/{project}/locations/{location}
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
    public static function parseName(string $formattedName, string $template = null): array
    {
        return self::parseFormattedName($formattedName, $template);
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'networkservices.googleapis.com:443'.
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
     *           $apiEndpoint setting, will be ignored.
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
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string. This can be used to
     *           provide a certificate and private key to the transport layer for mTLS.
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

    /** Handles execution of the async variants for each documented method. */
    public function __call($method, $args)
    {
        if (substr($method, -5) !== 'Async') {
            trigger_error('Call to undefined method ' . __CLASS__ . "::$method()", E_USER_ERROR);
        }

        array_unshift($args, substr($method, 0, -5));
        return call_user_func_array([$this, 'startAsyncCall'], $args);
    }

    /**
     * Creates a new `LbRouteExtension` resource in a given project and location.
     *
     * The async variant is {@see DepServiceClient::createLbRouteExtensionAsync()} .
     *
     * @example samples/V1/DepServiceClient/create_lb_route_extension.php
     *
     * @param CreateLbRouteExtensionRequest $request     A request to house fields associated with the call.
     * @param array                         $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createLbRouteExtension(
        CreateLbRouteExtensionRequest $request,
        array $callOptions = []
    ): OperationResponse {
        return $this->startApiCall('CreateLbRouteExtension', $request, $callOptions)->wait();
    }

    /**
     * Creates a new `LbTrafficExtension` resource in a given project and
     * location.
     *
     * The async variant is {@see DepServiceClient::createLbTrafficExtensionAsync()} .
     *
     * @example samples/V1/DepServiceClient/create_lb_traffic_extension.php
     *
     * @param CreateLbTrafficExtensionRequest $request     A request to house fields associated with the call.
     * @param array                           $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createLbTrafficExtension(
        CreateLbTrafficExtensionRequest $request,
        array $callOptions = []
    ): OperationResponse {
        return $this->startApiCall('CreateLbTrafficExtension', $request, $callOptions)->wait();
    }

    /**
     * Deletes the specified `LbRouteExtension` resource.
     *
     * The async variant is {@see DepServiceClient::deleteLbRouteExtensionAsync()} .
     *
     * @example samples/V1/DepServiceClient/delete_lb_route_extension.php
     *
     * @param DeleteLbRouteExtensionRequest $request     A request to house fields associated with the call.
     * @param array                         $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function deleteLbRouteExtension(
        DeleteLbRouteExtensionRequest $request,
        array $callOptions = []
    ): OperationResponse {
        return $this->startApiCall('DeleteLbRouteExtension', $request, $callOptions)->wait();
    }

    /**
     * Deletes the specified `LbTrafficExtension` resource.
     *
     * The async variant is {@see DepServiceClient::deleteLbTrafficExtensionAsync()} .
     *
     * @example samples/V1/DepServiceClient/delete_lb_traffic_extension.php
     *
     * @param DeleteLbTrafficExtensionRequest $request     A request to house fields associated with the call.
     * @param array                           $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function deleteLbTrafficExtension(
        DeleteLbTrafficExtensionRequest $request,
        array $callOptions = []
    ): OperationResponse {
        return $this->startApiCall('DeleteLbTrafficExtension', $request, $callOptions)->wait();
    }

    /**
     * Gets details of the specified `LbRouteExtension` resource.
     *
     * The async variant is {@see DepServiceClient::getLbRouteExtensionAsync()} .
     *
     * @example samples/V1/DepServiceClient/get_lb_route_extension.php
     *
     * @param GetLbRouteExtensionRequest $request     A request to house fields associated with the call.
     * @param array                      $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return LbRouteExtension
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getLbRouteExtension(GetLbRouteExtensionRequest $request, array $callOptions = []): LbRouteExtension
    {
        return $this->startApiCall('GetLbRouteExtension', $request, $callOptions)->wait();
    }

    /**
     * Gets details of the specified `LbTrafficExtension` resource.
     *
     * The async variant is {@see DepServiceClient::getLbTrafficExtensionAsync()} .
     *
     * @example samples/V1/DepServiceClient/get_lb_traffic_extension.php
     *
     * @param GetLbTrafficExtensionRequest $request     A request to house fields associated with the call.
     * @param array                        $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return LbTrafficExtension
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getLbTrafficExtension(
        GetLbTrafficExtensionRequest $request,
        array $callOptions = []
    ): LbTrafficExtension {
        return $this->startApiCall('GetLbTrafficExtension', $request, $callOptions)->wait();
    }

    /**
     * Lists `LbRouteExtension` resources in a given project and location.
     *
     * The async variant is {@see DepServiceClient::listLbRouteExtensionsAsync()} .
     *
     * @example samples/V1/DepServiceClient/list_lb_route_extensions.php
     *
     * @param ListLbRouteExtensionsRequest $request     A request to house fields associated with the call.
     * @param array                        $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listLbRouteExtensions(
        ListLbRouteExtensionsRequest $request,
        array $callOptions = []
    ): PagedListResponse {
        return $this->startApiCall('ListLbRouteExtensions', $request, $callOptions);
    }

    /**
     * Lists `LbTrafficExtension` resources in a given project and location.
     *
     * The async variant is {@see DepServiceClient::listLbTrafficExtensionsAsync()} .
     *
     * @example samples/V1/DepServiceClient/list_lb_traffic_extensions.php
     *
     * @param ListLbTrafficExtensionsRequest $request     A request to house fields associated with the call.
     * @param array                          $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listLbTrafficExtensions(
        ListLbTrafficExtensionsRequest $request,
        array $callOptions = []
    ): PagedListResponse {
        return $this->startApiCall('ListLbTrafficExtensions', $request, $callOptions);
    }

    /**
     * Updates the parameters of the specified `LbRouteExtension` resource.
     *
     * The async variant is {@see DepServiceClient::updateLbRouteExtensionAsync()} .
     *
     * @example samples/V1/DepServiceClient/update_lb_route_extension.php
     *
     * @param UpdateLbRouteExtensionRequest $request     A request to house fields associated with the call.
     * @param array                         $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function updateLbRouteExtension(
        UpdateLbRouteExtensionRequest $request,
        array $callOptions = []
    ): OperationResponse {
        return $this->startApiCall('UpdateLbRouteExtension', $request, $callOptions)->wait();
    }

    /**
     * Updates the parameters of the specified `LbTrafficExtension` resource.
     *
     * The async variant is {@see DepServiceClient::updateLbTrafficExtensionAsync()} .
     *
     * @example samples/V1/DepServiceClient/update_lb_traffic_extension.php
     *
     * @param UpdateLbTrafficExtensionRequest $request     A request to house fields associated with the call.
     * @param array                           $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function updateLbTrafficExtension(
        UpdateLbTrafficExtensionRequest $request,
        array $callOptions = []
    ): OperationResponse {
        return $this->startApiCall('UpdateLbTrafficExtension', $request, $callOptions)->wait();
    }

    /**
     * Gets information about a location.
     *
     * The async variant is {@see DepServiceClient::getLocationAsync()} .
     *
     * @example samples/V1/DepServiceClient/get_location.php
     *
     * @param GetLocationRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Location
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getLocation(GetLocationRequest $request, array $callOptions = []): Location
    {
        return $this->startApiCall('GetLocation', $request, $callOptions)->wait();
    }

    /**
     * Lists information about the supported locations for this service.
     *
     * The async variant is {@see DepServiceClient::listLocationsAsync()} .
     *
     * @example samples/V1/DepServiceClient/list_locations.php
     *
     * @param ListLocationsRequest $request     A request to house fields associated with the call.
     * @param array                $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listLocations(ListLocationsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListLocations', $request, $callOptions);
    }

    /**
     * Gets the access control policy for a resource. Returns an empty policy
    if the resource exists and does not have a policy set.
     *
     * The async variant is {@see DepServiceClient::getIamPolicyAsync()} .
     *
     * @example samples/V1/DepServiceClient/get_iam_policy.php
     *
     * @param GetIamPolicyRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Policy
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getIamPolicy(GetIamPolicyRequest $request, array $callOptions = []): Policy
    {
        return $this->startApiCall('GetIamPolicy', $request, $callOptions)->wait();
    }

    /**
     * Sets the access control policy on the specified resource. Replaces
    any existing policy.

    Can return `NOT_FOUND`, `INVALID_ARGUMENT`, and `PERMISSION_DENIED`
    errors.
     *
     * The async variant is {@see DepServiceClient::setIamPolicyAsync()} .
     *
     * @example samples/V1/DepServiceClient/set_iam_policy.php
     *
     * @param SetIamPolicyRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Policy
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function setIamPolicy(SetIamPolicyRequest $request, array $callOptions = []): Policy
    {
        return $this->startApiCall('SetIamPolicy', $request, $callOptions)->wait();
    }

    /**
     * Returns permissions that a caller has on the specified resource. If the
    resource does not exist, this will return an empty set of
    permissions, not a `NOT_FOUND` error.

    Note: This operation is designed to be used for building
    permission-aware UIs and command-line tools, not for authorization
    checking. This operation may "fail open" without warning.
     *
     * The async variant is {@see DepServiceClient::testIamPermissionsAsync()} .
     *
     * @example samples/V1/DepServiceClient/test_iam_permissions.php
     *
     * @param TestIamPermissionsRequest $request     A request to house fields associated with the call.
     * @param array                     $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return TestIamPermissionsResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function testIamPermissions(
        TestIamPermissionsRequest $request,
        array $callOptions = []
    ): TestIamPermissionsResponse {
        return $this->startApiCall('TestIamPermissions', $request, $callOptions)->wait();
    }
}