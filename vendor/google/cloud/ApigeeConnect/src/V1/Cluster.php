<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/apigeeconnect/v1/connection.proto

namespace Google\Cloud\ApigeeConnect\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.apigeeconnect.v1.Cluster</code>
 */
class Cluster extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the cluster.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * The region of the cluster.
     *
     * Generated from protobuf field <code>string region = 2;</code>
     */
    protected $region = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The name of the cluster.
     *     @type string $region
     *           The region of the cluster.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Apigeeconnect\V1\Connection::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the cluster.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the cluster.
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * The region of the cluster.
     *
     * Generated from protobuf field <code>string region = 2;</code>
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * The region of the cluster.
     *
     * Generated from protobuf field <code>string region = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

}
