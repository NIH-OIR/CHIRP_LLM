<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/iot/v1/device_manager.proto

namespace Google\Cloud\Iot\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for `ListDeviceConfigVersions`.
 *
 * Generated from protobuf message <code>google.cloud.iot.v1.ListDeviceConfigVersionsRequest</code>
 */
class ListDeviceConfigVersionsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the device. For example,
     * `projects/p0/locations/us-central1/registries/registry0/devices/device0` or
     * `projects/p0/locations/us-central1/registries/registry0/devices/{num_id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * The number of versions to list. Versions are listed in decreasing order of
     * the version number. The maximum number of versions retained is 10. If this
     * value is zero, it will return all the versions available.
     *
     * Generated from protobuf field <code>int32 num_versions = 2;</code>
     */
    private $num_versions = 0;

    /**
     * @param string $name Required. The name of the device. For example,
     *                     `projects/p0/locations/us-central1/registries/registry0/devices/device0` or
     *                     `projects/p0/locations/us-central1/registries/registry0/devices/{num_id}`. Please see
     *                     {@see DeviceManagerClient::deviceName()} for help formatting this field.
     *
     * @return \Google\Cloud\Iot\V1\ListDeviceConfigVersionsRequest
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
     *           Required. The name of the device. For example,
     *           `projects/p0/locations/us-central1/registries/registry0/devices/device0` or
     *           `projects/p0/locations/us-central1/registries/registry0/devices/{num_id}`.
     *     @type int $num_versions
     *           The number of versions to list. Versions are listed in decreasing order of
     *           the version number. The maximum number of versions retained is 10. If this
     *           value is zero, it will return all the versions available.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Iot\V1\DeviceManager::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the device. For example,
     * `projects/p0/locations/us-central1/registries/registry0/devices/device0` or
     * `projects/p0/locations/us-central1/registries/registry0/devices/{num_id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the device. For example,
     * `projects/p0/locations/us-central1/registries/registry0/devices/device0` or
     * `projects/p0/locations/us-central1/registries/registry0/devices/{num_id}`.
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

    /**
     * The number of versions to list. Versions are listed in decreasing order of
     * the version number. The maximum number of versions retained is 10. If this
     * value is zero, it will return all the versions available.
     *
     * Generated from protobuf field <code>int32 num_versions = 2;</code>
     * @return int
     */
    public function getNumVersions()
    {
        return $this->num_versions;
    }

    /**
     * The number of versions to list. Versions are listed in decreasing order of
     * the version number. The maximum number of versions retained is 10. If this
     * value is zero, it will return all the versions available.
     *
     * Generated from protobuf field <code>int32 num_versions = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setNumVersions($var)
    {
        GPBUtil::checkInt32($var);
        $this->num_versions = $var;

        return $this;
    }

}
