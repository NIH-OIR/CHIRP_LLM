<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/apphub/v1/attributes.proto

namespace Google\Cloud\AppHub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Environment of the Application, Service, or Workload
 *
 * Generated from protobuf message <code>google.cloud.apphub.v1.Environment</code>
 */
class Environment extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Environment Type.
     *
     * Generated from protobuf field <code>.google.cloud.apphub.v1.Environment.Type type = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *           Required. Environment Type.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Apphub\V1\Attributes::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Environment Type.
     *
     * Generated from protobuf field <code>.google.cloud.apphub.v1.Environment.Type type = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Required. Environment Type.
     *
     * Generated from protobuf field <code>.google.cloud.apphub.v1.Environment.Type type = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AppHub\V1\Environment\Type::class);
        $this->type = $var;

        return $this;
    }

}
