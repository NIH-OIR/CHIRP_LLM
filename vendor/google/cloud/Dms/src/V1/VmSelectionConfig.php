<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/clouddms/v1/clouddms.proto

namespace Google\Cloud\CloudDms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * VM selection configuration message
 *
 * Generated from protobuf message <code>google.cloud.clouddms.v1.VmSelectionConfig</code>
 */
class VmSelectionConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The Google Cloud Platform zone the VM is located.
     *
     * Generated from protobuf field <code>string vm_zone = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $vm_zone = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $vm_zone
     *           Required. The Google Cloud Platform zone the VM is located.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Clouddms\V1\Clouddms::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The Google Cloud Platform zone the VM is located.
     *
     * Generated from protobuf field <code>string vm_zone = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getVmZone()
    {
        return $this->vm_zone;
    }

    /**
     * Required. The Google Cloud Platform zone the VM is located.
     *
     * Generated from protobuf field <code>string vm_zone = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setVmZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->vm_zone = $var;

        return $this;
    }

}
