<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/notebooks/v1/runtime.proto

namespace Google\Cloud\Notebooks\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specifies the login configuration for Runtime
 *
 * Generated from protobuf message <code>google.cloud.notebooks.v1.RuntimeAccessConfig</code>
 */
class RuntimeAccessConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * The type of access mode this instance.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v1.RuntimeAccessConfig.RuntimeAccessType access_type = 1;</code>
     */
    protected $access_type = 0;
    /**
     * The owner of this runtime after creation. Format: `alias&#64;example.com`
     * Currently supports one owner only.
     *
     * Generated from protobuf field <code>string runtime_owner = 2;</code>
     */
    protected $runtime_owner = '';
    /**
     * Output only. The proxy endpoint that is used to access the runtime.
     *
     * Generated from protobuf field <code>string proxy_uri = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $proxy_uri = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $access_type
     *           The type of access mode this instance.
     *     @type string $runtime_owner
     *           The owner of this runtime after creation. Format: `alias&#64;example.com`
     *           Currently supports one owner only.
     *     @type string $proxy_uri
     *           Output only. The proxy endpoint that is used to access the runtime.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Notebooks\V1\Runtime::initOnce();
        parent::__construct($data);
    }

    /**
     * The type of access mode this instance.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v1.RuntimeAccessConfig.RuntimeAccessType access_type = 1;</code>
     * @return int
     */
    public function getAccessType()
    {
        return $this->access_type;
    }

    /**
     * The type of access mode this instance.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v1.RuntimeAccessConfig.RuntimeAccessType access_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setAccessType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Notebooks\V1\RuntimeAccessConfig\RuntimeAccessType::class);
        $this->access_type = $var;

        return $this;
    }

    /**
     * The owner of this runtime after creation. Format: `alias&#64;example.com`
     * Currently supports one owner only.
     *
     * Generated from protobuf field <code>string runtime_owner = 2;</code>
     * @return string
     */
    public function getRuntimeOwner()
    {
        return $this->runtime_owner;
    }

    /**
     * The owner of this runtime after creation. Format: `alias&#64;example.com`
     * Currently supports one owner only.
     *
     * Generated from protobuf field <code>string runtime_owner = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setRuntimeOwner($var)
    {
        GPBUtil::checkString($var, True);
        $this->runtime_owner = $var;

        return $this;
    }

    /**
     * Output only. The proxy endpoint that is used to access the runtime.
     *
     * Generated from protobuf field <code>string proxy_uri = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getProxyUri()
    {
        return $this->proxy_uri;
    }

    /**
     * Output only. The proxy endpoint that is used to access the runtime.
     *
     * Generated from protobuf field <code>string proxy_uri = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setProxyUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->proxy_uri = $var;

        return $this;
    }

}
