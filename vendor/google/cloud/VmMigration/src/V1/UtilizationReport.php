<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vmmigration/v1/vmmigration.proto

namespace Google\Cloud\VMMigration\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Utilization report details the utilization (CPU, memory, etc.) of selected
 * source VMs.
 *
 * Generated from protobuf message <code>google.cloud.vmmigration.v1.UtilizationReport</code>
 */
class UtilizationReport extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The report unique name.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * The report display name, as assigned by the user.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     */
    protected $display_name = '';
    /**
     * Output only. Current state of the report.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.UtilizationReport.State state = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;
    /**
     * Output only. The time the state was last set.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp state_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state_time = null;
    /**
     * Output only. Provides details on the state of the report in case of an
     * error.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $error = null;
    /**
     * Output only. The time the report was created (this refers to the time of
     * the request, not the time the report creation completed).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Time frame of the report.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.UtilizationReport.TimeFrame time_frame = 7;</code>
     */
    protected $time_frame = 0;
    /**
     * Output only. The point in time when the time frame ends. Notice that the
     * time frame is counted backwards. For instance if the "frame_end_time" value
     * is 2021/01/20 and the time frame is WEEK then the report covers the week
     * between 2021/01/20 and 2021/01/14.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp frame_end_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $frame_end_time = null;
    /**
     * Output only. Total number of VMs included in the report.
     *
     * Generated from protobuf field <code>int32 vm_count = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $vm_count = 0;
    /**
     * List of utilization information per VM.
     * When sent as part of the request, the "vm_id" field is used in order to
     * specify which VMs to include in the report. In that case all other fields
     * are ignored.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vmmigration.v1.VmUtilizationInfo vms = 10;</code>
     */
    private $vms;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The report unique name.
     *     @type string $display_name
     *           The report display name, as assigned by the user.
     *     @type int $state
     *           Output only. Current state of the report.
     *     @type \Google\Protobuf\Timestamp $state_time
     *           Output only. The time the state was last set.
     *     @type \Google\Rpc\Status $error
     *           Output only. Provides details on the state of the report in case of an
     *           error.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time the report was created (this refers to the time of
     *           the request, not the time the report creation completed).
     *     @type int $time_frame
     *           Time frame of the report.
     *     @type \Google\Protobuf\Timestamp $frame_end_time
     *           Output only. The point in time when the time frame ends. Notice that the
     *           time frame is counted backwards. For instance if the "frame_end_time" value
     *           is 2021/01/20 and the time frame is WEEK then the report covers the week
     *           between 2021/01/20 and 2021/01/14.
     *     @type int $vm_count
     *           Output only. Total number of VMs included in the report.
     *     @type array<\Google\Cloud\VMMigration\V1\VmUtilizationInfo>|\Google\Protobuf\Internal\RepeatedField $vms
     *           List of utilization information per VM.
     *           When sent as part of the request, the "vm_id" field is used in order to
     *           specify which VMs to include in the report. In that case all other fields
     *           are ignored.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vmmigration\V1\Vmmigration::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The report unique name.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The report unique name.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * The report display name, as assigned by the user.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * The report display name, as assigned by the user.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
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
     * Output only. Current state of the report.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.UtilizationReport.State state = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. Current state of the report.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.UtilizationReport.State state = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\VMMigration\V1\UtilizationReport\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. The time the state was last set.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp state_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStateTime()
    {
        return $this->state_time;
    }

    public function hasStateTime()
    {
        return isset($this->state_time);
    }

    public function clearStateTime()
    {
        unset($this->state_time);
    }

    /**
     * Output only. The time the state was last set.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp state_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->state_time = $var;

        return $this;
    }

    /**
     * Output only. Provides details on the state of the report in case of an
     * error.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Provides details on the state of the report in case of an
     * error.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The time the report was created (this refers to the time of
     * the request, not the time the report creation completed).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The time the report was created (this refers to the time of
     * the request, not the time the report creation completed).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Time frame of the report.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.UtilizationReport.TimeFrame time_frame = 7;</code>
     * @return int
     */
    public function getTimeFrame()
    {
        return $this->time_frame;
    }

    /**
     * Time frame of the report.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.UtilizationReport.TimeFrame time_frame = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setTimeFrame($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\VMMigration\V1\UtilizationReport\TimeFrame::class);
        $this->time_frame = $var;

        return $this;
    }

    /**
     * Output only. The point in time when the time frame ends. Notice that the
     * time frame is counted backwards. For instance if the "frame_end_time" value
     * is 2021/01/20 and the time frame is WEEK then the report covers the week
     * between 2021/01/20 and 2021/01/14.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp frame_end_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getFrameEndTime()
    {
        return $this->frame_end_time;
    }

    public function hasFrameEndTime()
    {
        return isset($this->frame_end_time);
    }

    public function clearFrameEndTime()
    {
        unset($this->frame_end_time);
    }

    /**
     * Output only. The point in time when the time frame ends. Notice that the
     * time frame is counted backwards. For instance if the "frame_end_time" value
     * is 2021/01/20 and the time frame is WEEK then the report covers the week
     * between 2021/01/20 and 2021/01/14.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp frame_end_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setFrameEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->frame_end_time = $var;

        return $this;
    }

    /**
     * Output only. Total number of VMs included in the report.
     *
     * Generated from protobuf field <code>int32 vm_count = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getVmCount()
    {
        return $this->vm_count;
    }

    /**
     * Output only. Total number of VMs included in the report.
     *
     * Generated from protobuf field <code>int32 vm_count = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setVmCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->vm_count = $var;

        return $this;
    }

    /**
     * List of utilization information per VM.
     * When sent as part of the request, the "vm_id" field is used in order to
     * specify which VMs to include in the report. In that case all other fields
     * are ignored.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vmmigration.v1.VmUtilizationInfo vms = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getVms()
    {
        return $this->vms;
    }

    /**
     * List of utilization information per VM.
     * When sent as part of the request, the "vm_id" field is used in order to
     * specify which VMs to include in the report. In that case all other fields
     * are ignored.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vmmigration.v1.VmUtilizationInfo vms = 10;</code>
     * @param array<\Google\Cloud\VMMigration\V1\VmUtilizationInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setVms($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\VMMigration\V1\VmUtilizationInfo::class);
        $this->vms = $arr;

        return $this;
    }

}
