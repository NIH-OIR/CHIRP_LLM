<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/clouddms/v1/conversionworkspace_resources.proto

namespace Google\Cloud\CloudDms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Set to a specific value (value is converted to fit the target data type)
 *
 * Generated from protobuf message <code>google.cloud.clouddms.v1.AssignSpecificValue</code>
 */
class AssignSpecificValue extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Specific value to be assigned
     *
     * Generated from protobuf field <code>string value = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $value = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $value
     *           Required. Specific value to be assigned
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Clouddms\V1\ConversionworkspaceResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Specific value to be assigned
     *
     * Generated from protobuf field <code>string value = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Required. Specific value to be assigned
     *
     * Generated from protobuf field <code>string value = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->value = $var;

        return $this;
    }

}
