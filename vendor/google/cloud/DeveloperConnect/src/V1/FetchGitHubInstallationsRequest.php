<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/developerconnect/v1/developer_connect.proto

namespace Google\Cloud\DeveloperConnect\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for fetching github installations.
 *
 * Generated from protobuf message <code>google.cloud.developerconnect.v1.FetchGitHubInstallationsRequest</code>
 */
class FetchGitHubInstallationsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the connection in the format
     * `projects/&#42;&#47;locations/&#42;&#47;connections/&#42;`.
     *
     * Generated from protobuf field <code>string connection = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $connection = '';

    /**
     * @param string $connection Required. The resource name of the connection in the format
     *                           `projects/&#42;/locations/&#42;/connections/*`. Please see
     *                           {@see DeveloperConnectClient::connectionName()} for help formatting this field.
     *
     * @return \Google\Cloud\DeveloperConnect\V1\FetchGitHubInstallationsRequest
     *
     * @experimental
     */
    public static function build(string $connection): self
    {
        return (new self())
            ->setConnection($connection);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $connection
     *           Required. The resource name of the connection in the format
     *           `projects/&#42;&#47;locations/&#42;&#47;connections/&#42;`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Developerconnect\V1\DeveloperConnect::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the connection in the format
     * `projects/&#42;&#47;locations/&#42;&#47;connections/&#42;`.
     *
     * Generated from protobuf field <code>string connection = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getConnection()
    {
        return $this->connection;
    }

    /**
     * Required. The resource name of the connection in the format
     * `projects/&#42;&#47;locations/&#42;&#47;connections/&#42;`.
     *
     * Generated from protobuf field <code>string connection = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setConnection($var)
    {
        GPBUtil::checkString($var, True);
        $this->connection = $var;

        return $this;
    }

}
