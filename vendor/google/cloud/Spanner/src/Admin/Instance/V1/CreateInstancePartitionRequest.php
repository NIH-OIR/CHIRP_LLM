<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/admin/instance/v1/spanner_instance_admin.proto

namespace Google\Cloud\Spanner\Admin\Instance\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for
 * [CreateInstancePartition][google.spanner.admin.instance.v1.InstanceAdmin.CreateInstancePartition].
 *
 * Generated from protobuf message <code>google.spanner.admin.instance.v1.CreateInstancePartitionRequest</code>
 */
class CreateInstancePartitionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the instance in which to create the instance
     * partition. Values are of the form
     * `projects/<project>/instances/<instance>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The ID of the instance partition to create. Valid identifiers are
     * of the form `[a-z][-a-z0-9]*[a-z0-9]` and must be between 2 and 64
     * characters in length.
     *
     * Generated from protobuf field <code>string instance_partition_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $instance_partition_id = '';
    /**
     * Required. The instance partition to create. The instance_partition.name may
     * be omitted, but if specified must be
     * `<parent>/instancePartitions/<instance_partition_id>`.
     *
     * Generated from protobuf field <code>.google.spanner.admin.instance.v1.InstancePartition instance_partition = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $instance_partition = null;

    /**
     * @param string                                                    $parent              Required. The name of the instance in which to create the instance
     *                                                                                       partition. Values are of the form
     *                                                                                       `projects/<project>/instances/<instance>`. Please see
     *                                                                                       {@see InstanceAdminClient::instanceName()} for help formatting this field.
     * @param \Google\Cloud\Spanner\Admin\Instance\V1\InstancePartition $instancePartition   Required. The instance partition to create. The instance_partition.name may
     *                                                                                       be omitted, but if specified must be
     *                                                                                       `<parent>/instancePartitions/<instance_partition_id>`.
     * @param string                                                    $instancePartitionId Required. The ID of the instance partition to create. Valid identifiers are
     *                                                                                       of the form `[a-z][-a-z0-9]*[a-z0-9]` and must be between 2 and 64
     *                                                                                       characters in length.
     *
     * @return \Google\Cloud\Spanner\Admin\Instance\V1\CreateInstancePartitionRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\Spanner\Admin\Instance\V1\InstancePartition $instancePartition, string $instancePartitionId): self
    {
        return (new self())
            ->setParent($parent)
            ->setInstancePartition($instancePartition)
            ->setInstancePartitionId($instancePartitionId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The name of the instance in which to create the instance
     *           partition. Values are of the form
     *           `projects/<project>/instances/<instance>`.
     *     @type string $instance_partition_id
     *           Required. The ID of the instance partition to create. Valid identifiers are
     *           of the form `[a-z][-a-z0-9]*[a-z0-9]` and must be between 2 and 64
     *           characters in length.
     *     @type \Google\Cloud\Spanner\Admin\Instance\V1\InstancePartition $instance_partition
     *           Required. The instance partition to create. The instance_partition.name may
     *           be omitted, but if specified must be
     *           `<parent>/instancePartitions/<instance_partition_id>`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Spanner\Admin\Instance\V1\SpannerInstanceAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the instance in which to create the instance
     * partition. Values are of the form
     * `projects/<project>/instances/<instance>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The name of the instance in which to create the instance
     * partition. Values are of the form
     * `projects/<project>/instances/<instance>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The ID of the instance partition to create. Valid identifiers are
     * of the form `[a-z][-a-z0-9]*[a-z0-9]` and must be between 2 and 64
     * characters in length.
     *
     * Generated from protobuf field <code>string instance_partition_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getInstancePartitionId()
    {
        return $this->instance_partition_id;
    }

    /**
     * Required. The ID of the instance partition to create. Valid identifiers are
     * of the form `[a-z][-a-z0-9]*[a-z0-9]` and must be between 2 and 64
     * characters in length.
     *
     * Generated from protobuf field <code>string instance_partition_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setInstancePartitionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance_partition_id = $var;

        return $this;
    }

    /**
     * Required. The instance partition to create. The instance_partition.name may
     * be omitted, but if specified must be
     * `<parent>/instancePartitions/<instance_partition_id>`.
     *
     * Generated from protobuf field <code>.google.spanner.admin.instance.v1.InstancePartition instance_partition = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Spanner\Admin\Instance\V1\InstancePartition|null
     */
    public function getInstancePartition()
    {
        return $this->instance_partition;
    }

    public function hasInstancePartition()
    {
        return isset($this->instance_partition);
    }

    public function clearInstancePartition()
    {
        unset($this->instance_partition);
    }

    /**
     * Required. The instance partition to create. The instance_partition.name may
     * be omitted, but if specified must be
     * `<parent>/instancePartitions/<instance_partition_id>`.
     *
     * Generated from protobuf field <code>.google.spanner.admin.instance.v1.InstancePartition instance_partition = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Spanner\Admin\Instance\V1\InstancePartition $var
     * @return $this
     */
    public function setInstancePartition($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Spanner\Admin\Instance\V1\InstancePartition::class);
        $this->instance_partition = $var;

        return $this;
    }

}
