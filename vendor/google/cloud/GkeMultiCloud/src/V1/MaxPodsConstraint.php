<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkemulticloud/v1/common_resources.proto

namespace Google\Cloud\GkeMultiCloud\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Constraints applied to pods.
 *
 * Generated from protobuf message <code>google.cloud.gkemulticloud.v1.MaxPodsConstraint</code>
 */
class MaxPodsConstraint extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The maximum number of pods to schedule on a single node.
     *
     * Generated from protobuf field <code>int64 max_pods_per_node = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $max_pods_per_node = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $max_pods_per_node
     *           Required. The maximum number of pods to schedule on a single node.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkemulticloud\V1\CommonResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The maximum number of pods to schedule on a single node.
     *
     * Generated from protobuf field <code>int64 max_pods_per_node = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int|string
     */
    public function getMaxPodsPerNode()
    {
        return $this->max_pods_per_node;
    }

    /**
     * Required. The maximum number of pods to schedule on a single node.
     *
     * Generated from protobuf field <code>int64 max_pods_per_node = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int|string $var
     * @return $this
     */
    public function setMaxPodsPerNode($var)
    {
        GPBUtil::checkInt64($var);
        $this->max_pods_per_node = $var;

        return $this;
    }

}
