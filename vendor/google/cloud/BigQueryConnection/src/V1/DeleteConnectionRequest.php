<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/connection/v1/connection.proto

namespace Google\Cloud\BigQuery\Connection\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for [ConnectionService.DeleteConnectionRequest][].
 *
 * Generated from protobuf message <code>google.cloud.bigquery.connection.v1.DeleteConnectionRequest</code>
 */
class DeleteConnectionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the deleted connection, for example:
     * `projects/{project_id}/locations/{location_id}/connections/{connection_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';

    /**
     * @param string $name Required. Name of the deleted connection, for example:
     *                     `projects/{project_id}/locations/{location_id}/connections/{connection_id}`
     *                     Please see {@see ConnectionServiceClient::connectionName()} for help formatting this field.
     *
     * @return \Google\Cloud\BigQuery\Connection\V1\DeleteConnectionRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Name of the deleted connection, for example:
     *           `projects/{project_id}/locations/{location_id}/connections/{connection_id}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Connection\V1\Connection::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the deleted connection, for example:
     * `projects/{project_id}/locations/{location_id}/connections/{connection_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Name of the deleted connection, for example:
     * `projects/{project_id}/locations/{location_id}/connections/{connection_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}
