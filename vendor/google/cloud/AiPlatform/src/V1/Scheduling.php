<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/custom_job.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * All parameters related to queuing and scheduling of custom jobs.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.Scheduling</code>
 */
class Scheduling extends \Google\Protobuf\Internal\Message
{
    /**
     * The maximum job running time. The default is 7 days.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration timeout = 1;</code>
     */
    protected $timeout = null;
    /**
     * Restarts the entire CustomJob if a worker gets restarted.
     * This feature can be used by distributed training jobs that are not
     * resilient to workers leaving and joining a job.
     *
     * Generated from protobuf field <code>bool restart_job_on_worker_restart = 3;</code>
     */
    protected $restart_job_on_worker_restart = false;
    /**
     * Optional. This determines which type of scheduling strategy to use.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Scheduling.Strategy strategy = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $strategy = 0;
    /**
     * Optional. Indicates if the job should retry for internal errors after the
     * job starts running. If true, overrides
     * `Scheduling.restart_job_on_worker_restart` to false.
     *
     * Generated from protobuf field <code>bool disable_retries = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $disable_retries = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Duration $timeout
     *           The maximum job running time. The default is 7 days.
     *     @type bool $restart_job_on_worker_restart
     *           Restarts the entire CustomJob if a worker gets restarted.
     *           This feature can be used by distributed training jobs that are not
     *           resilient to workers leaving and joining a job.
     *     @type int $strategy
     *           Optional. This determines which type of scheduling strategy to use.
     *     @type bool $disable_retries
     *           Optional. Indicates if the job should retry for internal errors after the
     *           job starts running. If true, overrides
     *           `Scheduling.restart_job_on_worker_restart` to false.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\CustomJob::initOnce();
        parent::__construct($data);
    }

    /**
     * The maximum job running time. The default is 7 days.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration timeout = 1;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getTimeout()
    {
        return $this->timeout;
    }

    public function hasTimeout()
    {
        return isset($this->timeout);
    }

    public function clearTimeout()
    {
        unset($this->timeout);
    }

    /**
     * The maximum job running time. The default is 7 days.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration timeout = 1;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setTimeout($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->timeout = $var;

        return $this;
    }

    /**
     * Restarts the entire CustomJob if a worker gets restarted.
     * This feature can be used by distributed training jobs that are not
     * resilient to workers leaving and joining a job.
     *
     * Generated from protobuf field <code>bool restart_job_on_worker_restart = 3;</code>
     * @return bool
     */
    public function getRestartJobOnWorkerRestart()
    {
        return $this->restart_job_on_worker_restart;
    }

    /**
     * Restarts the entire CustomJob if a worker gets restarted.
     * This feature can be used by distributed training jobs that are not
     * resilient to workers leaving and joining a job.
     *
     * Generated from protobuf field <code>bool restart_job_on_worker_restart = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setRestartJobOnWorkerRestart($var)
    {
        GPBUtil::checkBool($var);
        $this->restart_job_on_worker_restart = $var;

        return $this;
    }

    /**
     * Optional. This determines which type of scheduling strategy to use.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Scheduling.Strategy strategy = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getStrategy()
    {
        return $this->strategy;
    }

    /**
     * Optional. This determines which type of scheduling strategy to use.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Scheduling.Strategy strategy = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setStrategy($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AIPlatform\V1\Scheduling\Strategy::class);
        $this->strategy = $var;

        return $this;
    }

    /**
     * Optional. Indicates if the job should retry for internal errors after the
     * job starts running. If true, overrides
     * `Scheduling.restart_job_on_worker_restart` to false.
     *
     * Generated from protobuf field <code>bool disable_retries = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getDisableRetries()
    {
        return $this->disable_retries;
    }

    /**
     * Optional. Indicates if the job should retry for internal errors after the
     * job starts running. If true, overrides
     * `Scheduling.restart_job_on_worker_restart` to false.
     *
     * Generated from protobuf field <code>bool disable_retries = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setDisableRetries($var)
    {
        GPBUtil::checkBool($var);
        $this->disable_retries = $var;

        return $this;
    }

}
