<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/storagetransfer/v1/transfer_types.proto

namespace Google\Cloud\StorageTransfer\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents an agent pool.
 *
 * Generated from protobuf message <code>google.storagetransfer.v1.AgentPool</code>
 */
class AgentPool extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Specifies a unique string that identifies the agent pool.
     * Format: `projects/{project_id}/agentPools/{agent_pool_id}`
     *
     * Generated from protobuf field <code>string name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $name = '';
    /**
     * Specifies the client-specified AgentPool description.
     *
     * Generated from protobuf field <code>string display_name = 3;</code>
     */
    private $display_name = '';
    /**
     * Output only. Specifies the state of the AgentPool.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.AgentPool.State state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $state = 0;
    /**
     * Specifies the bandwidth limit details. If this field is unspecified, the
     * default value is set as 'No Limit'.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.AgentPool.BandwidthLimit bandwidth_limit = 5;</code>
     */
    private $bandwidth_limit = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Specifies a unique string that identifies the agent pool.
     *           Format: `projects/{project_id}/agentPools/{agent_pool_id}`
     *     @type string $display_name
     *           Specifies the client-specified AgentPool description.
     *     @type int $state
     *           Output only. Specifies the state of the AgentPool.
     *     @type \Google\Cloud\StorageTransfer\V1\AgentPool\BandwidthLimit $bandwidth_limit
     *           Specifies the bandwidth limit details. If this field is unspecified, the
     *           default value is set as 'No Limit'.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Storagetransfer\V1\TransferTypes::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Specifies a unique string that identifies the agent pool.
     * Format: `projects/{project_id}/agentPools/{agent_pool_id}`
     *
     * Generated from protobuf field <code>string name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Specifies a unique string that identifies the agent pool.
     * Format: `projects/{project_id}/agentPools/{agent_pool_id}`
     *
     * Generated from protobuf field <code>string name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Specifies the client-specified AgentPool description.
     *
     * Generated from protobuf field <code>string display_name = 3;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Specifies the client-specified AgentPool description.
     *
     * Generated from protobuf field <code>string display_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Output only. Specifies the state of the AgentPool.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.AgentPool.State state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. Specifies the state of the AgentPool.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.AgentPool.State state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\StorageTransfer\V1\AgentPool\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Specifies the bandwidth limit details. If this field is unspecified, the
     * default value is set as 'No Limit'.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.AgentPool.BandwidthLimit bandwidth_limit = 5;</code>
     * @return \Google\Cloud\StorageTransfer\V1\AgentPool\BandwidthLimit|null
     */
    public function getBandwidthLimit()
    {
        return $this->bandwidth_limit;
    }

    public function hasBandwidthLimit()
    {
        return isset($this->bandwidth_limit);
    }

    public function clearBandwidthLimit()
    {
        unset($this->bandwidth_limit);
    }

    /**
     * Specifies the bandwidth limit details. If this field is unspecified, the
     * default value is set as 'No Limit'.
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.AgentPool.BandwidthLimit bandwidth_limit = 5;</code>
     * @param \Google\Cloud\StorageTransfer\V1\AgentPool\BandwidthLimit $var
     * @return $this
     */
    public function setBandwidthLimit($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\StorageTransfer\V1\AgentPool\BandwidthLimit::class);
        $this->bandwidth_limit = $var;

        return $this;
    }

}
