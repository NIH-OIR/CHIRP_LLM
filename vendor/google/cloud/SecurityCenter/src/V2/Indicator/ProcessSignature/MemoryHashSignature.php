<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v2/indicator.proto

namespace Google\Cloud\SecurityCenter\V2\Indicator\ProcessSignature;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A signature corresponding to memory page hashes.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v2.Indicator.ProcessSignature.MemoryHashSignature</code>
 */
class MemoryHashSignature extends \Google\Protobuf\Internal\Message
{
    /**
     * The binary family.
     *
     * Generated from protobuf field <code>string binary_family = 1;</code>
     */
    private $binary_family = '';
    /**
     * The list of memory hash detections contributing to the binary family
     * match.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v2.Indicator.ProcessSignature.MemoryHashSignature.Detection detections = 4;</code>
     */
    private $detections;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $binary_family
     *           The binary family.
     *     @type array<\Google\Cloud\SecurityCenter\V2\Indicator\ProcessSignature\MemoryHashSignature\Detection>|\Google\Protobuf\Internal\RepeatedField $detections
     *           The list of memory hash detections contributing to the binary family
     *           match.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V2\Indicator::initOnce();
        parent::__construct($data);
    }

    /**
     * The binary family.
     *
     * Generated from protobuf field <code>string binary_family = 1;</code>
     * @return string
     */
    public function getBinaryFamily()
    {
        return $this->binary_family;
    }

    /**
     * The binary family.
     *
     * Generated from protobuf field <code>string binary_family = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setBinaryFamily($var)
    {
        GPBUtil::checkString($var, True);
        $this->binary_family = $var;

        return $this;
    }

    /**
     * The list of memory hash detections contributing to the binary family
     * match.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v2.Indicator.ProcessSignature.MemoryHashSignature.Detection detections = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDetections()
    {
        return $this->detections;
    }

    /**
     * The list of memory hash detections contributing to the binary family
     * match.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v2.Indicator.ProcessSignature.MemoryHashSignature.Detection detections = 4;</code>
     * @param array<\Google\Cloud\SecurityCenter\V2\Indicator\ProcessSignature\MemoryHashSignature\Detection>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDetections($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\SecurityCenter\V2\Indicator\ProcessSignature\MemoryHashSignature\Detection::class);
        $this->detections = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MemoryHashSignature::class, \Google\Cloud\SecurityCenter\V2\Indicator_ProcessSignature_MemoryHashSignature::class);
