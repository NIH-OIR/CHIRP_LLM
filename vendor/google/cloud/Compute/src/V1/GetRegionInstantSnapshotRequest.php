<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for RegionInstantSnapshots.Get. See the method description for details.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.GetRegionInstantSnapshotRequest</code>
 */
class GetRegionInstantSnapshotRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the InstantSnapshot resource to return.
     *
     * Generated from protobuf field <code>string instant_snapshot = 391638626 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $instant_snapshot = '';
    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $project = '';
    /**
     * The name of the region for this request.
     *
     * Generated from protobuf field <code>string region = 138946292 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $region = '';

    /**
     * @param string $project         Project ID for this request.
     * @param string $region          The name of the region for this request.
     * @param string $instantSnapshot Name of the InstantSnapshot resource to return.
     *
     * @return \Google\Cloud\Compute\V1\GetRegionInstantSnapshotRequest
     *
     * @experimental
     */
    public static function build(string $project, string $region, string $instantSnapshot): self
    {
        return (new self())
            ->setProject($project)
            ->setRegion($region)
            ->setInstantSnapshot($instantSnapshot);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $instant_snapshot
     *           Name of the InstantSnapshot resource to return.
     *     @type string $project
     *           Project ID for this request.
     *     @type string $region
     *           The name of the region for this request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the InstantSnapshot resource to return.
     *
     * Generated from protobuf field <code>string instant_snapshot = 391638626 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getInstantSnapshot()
    {
        return $this->instant_snapshot;
    }

    /**
     * Name of the InstantSnapshot resource to return.
     *
     * Generated from protobuf field <code>string instant_snapshot = 391638626 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setInstantSnapshot($var)
    {
        GPBUtil::checkString($var, True);
        $this->instant_snapshot = $var;

        return $this;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;

        return $this;
    }

    /**
     * The name of the region for this request.
     *
     * Generated from protobuf field <code>string region = 138946292 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * The name of the region for this request.
     *
     * Generated from protobuf field <code>string region = 138946292 [(.google.api.field_behavior) = REQUIRED];</code>
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
