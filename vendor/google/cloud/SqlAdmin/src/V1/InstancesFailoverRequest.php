<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1/cloud_sql_instances.proto

namespace Google\Cloud\Sql\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Instance failover request.
 *
 * Generated from protobuf message <code>google.cloud.sql.v1.InstancesFailoverRequest</code>
 */
class InstancesFailoverRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Failover Context.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.FailoverContext failover_context = 1;</code>
     */
    protected $failover_context = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Sql\V1\FailoverContext $failover_context
     *           Failover Context.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1\CloudSqlInstances::initOnce();
        parent::__construct($data);
    }

    /**
     * Failover Context.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.FailoverContext failover_context = 1;</code>
     * @return \Google\Cloud\Sql\V1\FailoverContext|null
     */
    public function getFailoverContext()
    {
        return $this->failover_context;
    }

    public function hasFailoverContext()
    {
        return isset($this->failover_context);
    }

    public function clearFailoverContext()
    {
        unset($this->failover_context);
    }

    /**
     * Failover Context.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.FailoverContext failover_context = 1;</code>
     * @param \Google\Cloud\Sql\V1\FailoverContext $var
     * @return $this
     */
    public function setFailoverContext($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Sql\V1\FailoverContext::class);
        $this->failover_context = $var;

        return $this;
    }

}
