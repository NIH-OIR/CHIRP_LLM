<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/websecurityscanner/v1/scan_config.proto

namespace Google\Cloud\WebSecurityScanner\V1\ScanConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Scan schedule configuration.
 *
 * Generated from protobuf message <code>google.cloud.websecurityscanner.v1.ScanConfig.Schedule</code>
 */
class Schedule extends \Google\Protobuf\Internal\Message
{
    /**
     * A timestamp indicates when the next run will be scheduled. The value is
     * refreshed by the server after each run. If unspecified, it will default
     * to current server time, which means the scan will be scheduled to start
     * immediately.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp schedule_time = 1;</code>
     */
    protected $schedule_time = null;
    /**
     * Required. The duration of time between executions in days.
     *
     * Generated from protobuf field <code>int32 interval_duration_days = 2;</code>
     */
    protected $interval_duration_days = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $schedule_time
     *           A timestamp indicates when the next run will be scheduled. The value is
     *           refreshed by the server after each run. If unspecified, it will default
     *           to current server time, which means the scan will be scheduled to start
     *           immediately.
     *     @type int $interval_duration_days
     *           Required. The duration of time between executions in days.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Websecurityscanner\V1\ScanConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * A timestamp indicates when the next run will be scheduled. The value is
     * refreshed by the server after each run. If unspecified, it will default
     * to current server time, which means the scan will be scheduled to start
     * immediately.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp schedule_time = 1;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getScheduleTime()
    {
        return $this->schedule_time;
    }

    public function hasScheduleTime()
    {
        return isset($this->schedule_time);
    }

    public function clearScheduleTime()
    {
        unset($this->schedule_time);
    }

    /**
     * A timestamp indicates when the next run will be scheduled. The value is
     * refreshed by the server after each run. If unspecified, it will default
     * to current server time, which means the scan will be scheduled to start
     * immediately.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp schedule_time = 1;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setScheduleTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->schedule_time = $var;

        return $this;
    }

    /**
     * Required. The duration of time between executions in days.
     *
     * Generated from protobuf field <code>int32 interval_duration_days = 2;</code>
     * @return int
     */
    public function getIntervalDurationDays()
    {
        return $this->interval_duration_days;
    }

    /**
     * Required. The duration of time between executions in days.
     *
     * Generated from protobuf field <code>int32 interval_duration_days = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setIntervalDurationDays($var)
    {
        GPBUtil::checkInt32($var);
        $this->interval_duration_days = $var;

        return $this;
    }

}

