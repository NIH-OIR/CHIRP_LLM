<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkmanagement/v1/connectivity_test.proto

namespace Google\Cloud\NetworkManagement\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Results of active probing from the last run of the test.
 *
 * Generated from protobuf message <code>google.cloud.networkmanagement.v1.ProbingDetails</code>
 */
class ProbingDetails extends \Google\Protobuf\Internal\Message
{
    /**
     * The overall result of active probing.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.ProbingDetails.ProbingResult result = 1;</code>
     */
    protected $result = 0;
    /**
     * The time that reachability was assessed through active probing.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp verify_time = 2;</code>
     */
    protected $verify_time = null;
    /**
     * Details about an internal failure or the cancellation of active probing.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 3;</code>
     */
    protected $error = null;
    /**
     * The reason probing was aborted.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.ProbingDetails.ProbingAbortCause abort_cause = 4;</code>
     */
    protected $abort_cause = 0;
    /**
     * Number of probes sent.
     *
     * Generated from protobuf field <code>int32 sent_probe_count = 5;</code>
     */
    protected $sent_probe_count = 0;
    /**
     * Number of probes that reached the destination.
     *
     * Generated from protobuf field <code>int32 successful_probe_count = 6;</code>
     */
    protected $successful_probe_count = 0;
    /**
     * The source and destination endpoints derived from the test input and used
     * for active probing.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.EndpointInfo endpoint_info = 7;</code>
     */
    protected $endpoint_info = null;
    /**
     * Latency as measured by active probing in one direction:
     * from the source to the destination endpoint.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.LatencyDistribution probing_latency = 8;</code>
     */
    protected $probing_latency = null;
    /**
     * The EdgeLocation from which a packet destined for/originating from the
     * internet will egress/ingress the Google network.
     * This will only be populated for a connectivity test which has an internet
     * destination/source address.
     * The absence of this field *must not* be used as an indication that the
     * destination/source is part of the Google network.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.ProbingDetails.EdgeLocation destination_egress_location = 9;</code>
     */
    protected $destination_egress_location = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $result
     *           The overall result of active probing.
     *     @type \Google\Protobuf\Timestamp $verify_time
     *           The time that reachability was assessed through active probing.
     *     @type \Google\Rpc\Status $error
     *           Details about an internal failure or the cancellation of active probing.
     *     @type int $abort_cause
     *           The reason probing was aborted.
     *     @type int $sent_probe_count
     *           Number of probes sent.
     *     @type int $successful_probe_count
     *           Number of probes that reached the destination.
     *     @type \Google\Cloud\NetworkManagement\V1\EndpointInfo $endpoint_info
     *           The source and destination endpoints derived from the test input and used
     *           for active probing.
     *     @type \Google\Cloud\NetworkManagement\V1\LatencyDistribution $probing_latency
     *           Latency as measured by active probing in one direction:
     *           from the source to the destination endpoint.
     *     @type \Google\Cloud\NetworkManagement\V1\ProbingDetails\EdgeLocation $destination_egress_location
     *           The EdgeLocation from which a packet destined for/originating from the
     *           internet will egress/ingress the Google network.
     *           This will only be populated for a connectivity test which has an internet
     *           destination/source address.
     *           The absence of this field *must not* be used as an indication that the
     *           destination/source is part of the Google network.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networkmanagement\V1\ConnectivityTest::initOnce();
        parent::__construct($data);
    }

    /**
     * The overall result of active probing.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.ProbingDetails.ProbingResult result = 1;</code>
     * @return int
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * The overall result of active probing.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.ProbingDetails.ProbingResult result = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\NetworkManagement\V1\ProbingDetails\ProbingResult::class);
        $this->result = $var;

        return $this;
    }

    /**
     * The time that reachability was assessed through active probing.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp verify_time = 2;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getVerifyTime()
    {
        return $this->verify_time;
    }

    public function hasVerifyTime()
    {
        return isset($this->verify_time);
    }

    public function clearVerifyTime()
    {
        unset($this->verify_time);
    }

    /**
     * The time that reachability was assessed through active probing.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp verify_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setVerifyTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->verify_time = $var;

        return $this;
    }

    /**
     * Details about an internal failure or the cancellation of active probing.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 3;</code>
     * @return \Google\Rpc\Status|null
     */
    public function getError()
    {
        return $this->error;
    }

    public function hasError()
    {
        return isset($this->error);
    }

    public function clearError()
    {
        unset($this->error);
    }

    /**
     * Details about an internal failure or the cancellation of active probing.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 3;</code>
     * @param \Google\Rpc\Status $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->error = $var;

        return $this;
    }

    /**
     * The reason probing was aborted.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.ProbingDetails.ProbingAbortCause abort_cause = 4;</code>
     * @return int
     */
    public function getAbortCause()
    {
        return $this->abort_cause;
    }

    /**
     * The reason probing was aborted.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.ProbingDetails.ProbingAbortCause abort_cause = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setAbortCause($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\NetworkManagement\V1\ProbingDetails\ProbingAbortCause::class);
        $this->abort_cause = $var;

        return $this;
    }

    /**
     * Number of probes sent.
     *
     * Generated from protobuf field <code>int32 sent_probe_count = 5;</code>
     * @return int
     */
    public function getSentProbeCount()
    {
        return $this->sent_probe_count;
    }

    /**
     * Number of probes sent.
     *
     * Generated from protobuf field <code>int32 sent_probe_count = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setSentProbeCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->sent_probe_count = $var;

        return $this;
    }

    /**
     * Number of probes that reached the destination.
     *
     * Generated from protobuf field <code>int32 successful_probe_count = 6;</code>
     * @return int
     */
    public function getSuccessfulProbeCount()
    {
        return $this->successful_probe_count;
    }

    /**
     * Number of probes that reached the destination.
     *
     * Generated from protobuf field <code>int32 successful_probe_count = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setSuccessfulProbeCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->successful_probe_count = $var;

        return $this;
    }

    /**
     * The source and destination endpoints derived from the test input and used
     * for active probing.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.EndpointInfo endpoint_info = 7;</code>
     * @return \Google\Cloud\NetworkManagement\V1\EndpointInfo|null
     */
    public function getEndpointInfo()
    {
        return $this->endpoint_info;
    }

    public function hasEndpointInfo()
    {
        return isset($this->endpoint_info);
    }

    public function clearEndpointInfo()
    {
        unset($this->endpoint_info);
    }

    /**
     * The source and destination endpoints derived from the test input and used
     * for active probing.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.EndpointInfo endpoint_info = 7;</code>
     * @param \Google\Cloud\NetworkManagement\V1\EndpointInfo $var
     * @return $this
     */
    public function setEndpointInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkManagement\V1\EndpointInfo::class);
        $this->endpoint_info = $var;

        return $this;
    }

    /**
     * Latency as measured by active probing in one direction:
     * from the source to the destination endpoint.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.LatencyDistribution probing_latency = 8;</code>
     * @return \Google\Cloud\NetworkManagement\V1\LatencyDistribution|null
     */
    public function getProbingLatency()
    {
        return $this->probing_latency;
    }

    public function hasProbingLatency()
    {
        return isset($this->probing_latency);
    }

    public function clearProbingLatency()
    {
        unset($this->probing_latency);
    }

    /**
     * Latency as measured by active probing in one direction:
     * from the source to the destination endpoint.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.LatencyDistribution probing_latency = 8;</code>
     * @param \Google\Cloud\NetworkManagement\V1\LatencyDistribution $var
     * @return $this
     */
    public function setProbingLatency($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkManagement\V1\LatencyDistribution::class);
        $this->probing_latency = $var;

        return $this;
    }

    /**
     * The EdgeLocation from which a packet destined for/originating from the
     * internet will egress/ingress the Google network.
     * This will only be populated for a connectivity test which has an internet
     * destination/source address.
     * The absence of this field *must not* be used as an indication that the
     * destination/source is part of the Google network.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.ProbingDetails.EdgeLocation destination_egress_location = 9;</code>
     * @return \Google\Cloud\NetworkManagement\V1\ProbingDetails\EdgeLocation|null
     */
    public function getDestinationEgressLocation()
    {
        return $this->destination_egress_location;
    }

    public function hasDestinationEgressLocation()
    {
        return isset($this->destination_egress_location);
    }

    public function clearDestinationEgressLocation()
    {
        unset($this->destination_egress_location);
    }

    /**
     * The EdgeLocation from which a packet destined for/originating from the
     * internet will egress/ingress the Google network.
     * This will only be populated for a connectivity test which has an internet
     * destination/source address.
     * The absence of this field *must not* be used as an indication that the
     * destination/source is part of the Google network.
     *
     * Generated from protobuf field <code>.google.cloud.networkmanagement.v1.ProbingDetails.EdgeLocation destination_egress_location = 9;</code>
     * @param \Google\Cloud\NetworkManagement\V1\ProbingDetails\EdgeLocation $var
     * @return $this
     */
    public function setDestinationEgressLocation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkManagement\V1\ProbingDetails\EdgeLocation::class);
        $this->destination_egress_location = $var;

        return $this;
    }

}
