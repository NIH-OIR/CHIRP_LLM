<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/functions/v2/functions.proto

namespace Google\Cloud\Functions\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents the metadata of the long-running operation.
 *
 * Generated from protobuf message <code>google.cloud.functions.v2.OperationMetadata</code>
 */
class OperationMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * The time the operation was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 1;</code>
     */
    private $create_time = null;
    /**
     * The time the operation finished running.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2;</code>
     */
    private $end_time = null;
    /**
     * Server-defined resource path for the target of the operation.
     *
     * Generated from protobuf field <code>string target = 3;</code>
     */
    private $target = '';
    /**
     * Name of the verb executed by the operation.
     *
     * Generated from protobuf field <code>string verb = 4;</code>
     */
    private $verb = '';
    /**
     * Human-readable status of the operation, if any.
     *
     * Generated from protobuf field <code>string status_detail = 5;</code>
     */
    private $status_detail = '';
    /**
     * Identifies whether the user has requested cancellation
     * of the operation. Operations that have successfully been cancelled
     * have
     * [google.longrunning.Operation.error][google.longrunning.Operation.error]
     * value with a [google.rpc.Status.code][google.rpc.Status.code] of 1,
     * corresponding to `Code.CANCELLED`.
     *
     * Generated from protobuf field <code>bool cancel_requested = 6;</code>
     */
    private $cancel_requested = false;
    /**
     * API version used to start the operation.
     *
     * Generated from protobuf field <code>string api_version = 7;</code>
     */
    private $api_version = '';
    /**
     * The original request that started the operation.
     *
     * Generated from protobuf field <code>.google.protobuf.Any request_resource = 8;</code>
     */
    private $request_resource = null;
    /**
     * Mechanism for reporting in-progress stages
     *
     * Generated from protobuf field <code>repeated .google.cloud.functions.v2.Stage stages = 9;</code>
     */
    private $stages;
    /**
     * An identifier for Firebase function sources. Disclaimer: This field is only
     * supported for Firebase function deployments.
     *
     * Generated from protobuf field <code>string source_token = 10;</code>
     */
    private $source_token = '';
    /**
     * The build name of the function for create and update operations.
     *
     * Generated from protobuf field <code>string build_name = 13;</code>
     */
    private $build_name = '';
    /**
     * The operation type.
     *
     * Generated from protobuf field <code>.google.cloud.functions.v2.OperationType operation_type = 11;</code>
     */
    private $operation_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $create_time
     *           The time the operation was created.
     *     @type \Google\Protobuf\Timestamp $end_time
     *           The time the operation finished running.
     *     @type string $target
     *           Server-defined resource path for the target of the operation.
     *     @type string $verb
     *           Name of the verb executed by the operation.
     *     @type string $status_detail
     *           Human-readable status of the operation, if any.
     *     @type bool $cancel_requested
     *           Identifies whether the user has requested cancellation
     *           of the operation. Operations that have successfully been cancelled
     *           have
     *           [google.longrunning.Operation.error][google.longrunning.Operation.error]
     *           value with a [google.rpc.Status.code][google.rpc.Status.code] of 1,
     *           corresponding to `Code.CANCELLED`.
     *     @type string $api_version
     *           API version used to start the operation.
     *     @type \Google\Protobuf\Any $request_resource
     *           The original request that started the operation.
     *     @type array<\Google\Cloud\Functions\V2\Stage>|\Google\Protobuf\Internal\RepeatedField $stages
     *           Mechanism for reporting in-progress stages
     *     @type string $source_token
     *           An identifier for Firebase function sources. Disclaimer: This field is only
     *           supported for Firebase function deployments.
     *     @type string $build_name
     *           The build name of the function for create and update operations.
     *     @type int $operation_type
     *           The operation type.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Functions\V2\Functions::initOnce();
        parent::__construct($data);
    }

    /**
     * The time the operation was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 1;</code>
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
     * The time the operation was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 1;</code>
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
     * The time the operation finished running.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    public function hasEndTime()
    {
        return isset($this->end_time);
    }

    public function clearEndTime()
    {
        unset($this->end_time);
    }

    /**
     * The time the operation finished running.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;

        return $this;
    }

    /**
     * Server-defined resource path for the target of the operation.
     *
     * Generated from protobuf field <code>string target = 3;</code>
     * @return string
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Server-defined resource path for the target of the operation.
     *
     * Generated from protobuf field <code>string target = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTarget($var)
    {
        GPBUtil::checkString($var, True);
        $this->target = $var;

        return $this;
    }

    /**
     * Name of the verb executed by the operation.
     *
     * Generated from protobuf field <code>string verb = 4;</code>
     * @return string
     */
    public function getVerb()
    {
        return $this->verb;
    }

    /**
     * Name of the verb executed by the operation.
     *
     * Generated from protobuf field <code>string verb = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setVerb($var)
    {
        GPBUtil::checkString($var, True);
        $this->verb = $var;

        return $this;
    }

    /**
     * Human-readable status of the operation, if any.
     *
     * Generated from protobuf field <code>string status_detail = 5;</code>
     * @return string
     */
    public function getStatusDetail()
    {
        return $this->status_detail;
    }

    /**
     * Human-readable status of the operation, if any.
     *
     * Generated from protobuf field <code>string status_detail = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setStatusDetail($var)
    {
        GPBUtil::checkString($var, True);
        $this->status_detail = $var;

        return $this;
    }

    /**
     * Identifies whether the user has requested cancellation
     * of the operation. Operations that have successfully been cancelled
     * have
     * [google.longrunning.Operation.error][google.longrunning.Operation.error]
     * value with a [google.rpc.Status.code][google.rpc.Status.code] of 1,
     * corresponding to `Code.CANCELLED`.
     *
     * Generated from protobuf field <code>bool cancel_requested = 6;</code>
     * @return bool
     */
    public function getCancelRequested()
    {
        return $this->cancel_requested;
    }

    /**
     * Identifies whether the user has requested cancellation
     * of the operation. Operations that have successfully been cancelled
     * have
     * [google.longrunning.Operation.error][google.longrunning.Operation.error]
     * value with a [google.rpc.Status.code][google.rpc.Status.code] of 1,
     * corresponding to `Code.CANCELLED`.
     *
     * Generated from protobuf field <code>bool cancel_requested = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setCancelRequested($var)
    {
        GPBUtil::checkBool($var);
        $this->cancel_requested = $var;

        return $this;
    }

    /**
     * API version used to start the operation.
     *
     * Generated from protobuf field <code>string api_version = 7;</code>
     * @return string
     */
    public function getApiVersion()
    {
        return $this->api_version;
    }

    /**
     * API version used to start the operation.
     *
     * Generated from protobuf field <code>string api_version = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setApiVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->api_version = $var;

        return $this;
    }

    /**
     * The original request that started the operation.
     *
     * Generated from protobuf field <code>.google.protobuf.Any request_resource = 8;</code>
     * @return \Google\Protobuf\Any|null
     */
    public function getRequestResource()
    {
        return $this->request_resource;
    }

    public function hasRequestResource()
    {
        return isset($this->request_resource);
    }

    public function clearRequestResource()
    {
        unset($this->request_resource);
    }

    /**
     * The original request that started the operation.
     *
     * Generated from protobuf field <code>.google.protobuf.Any request_resource = 8;</code>
     * @param \Google\Protobuf\Any $var
     * @return $this
     */
    public function setRequestResource($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Any::class);
        $this->request_resource = $var;

        return $this;
    }

    /**
     * Mechanism for reporting in-progress stages
     *
     * Generated from protobuf field <code>repeated .google.cloud.functions.v2.Stage stages = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStages()
    {
        return $this->stages;
    }

    /**
     * Mechanism for reporting in-progress stages
     *
     * Generated from protobuf field <code>repeated .google.cloud.functions.v2.Stage stages = 9;</code>
     * @param array<\Google\Cloud\Functions\V2\Stage>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Functions\V2\Stage::class);
        $this->stages = $arr;

        return $this;
    }

    /**
     * An identifier for Firebase function sources. Disclaimer: This field is only
     * supported for Firebase function deployments.
     *
     * Generated from protobuf field <code>string source_token = 10;</code>
     * @return string
     */
    public function getSourceToken()
    {
        return $this->source_token;
    }

    /**
     * An identifier for Firebase function sources. Disclaimer: This field is only
     * supported for Firebase function deployments.
     *
     * Generated from protobuf field <code>string source_token = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setSourceToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_token = $var;

        return $this;
    }

    /**
     * The build name of the function for create and update operations.
     *
     * Generated from protobuf field <code>string build_name = 13;</code>
     * @return string
     */
    public function getBuildName()
    {
        return $this->build_name;
    }

    /**
     * The build name of the function for create and update operations.
     *
     * Generated from protobuf field <code>string build_name = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setBuildName($var)
    {
        GPBUtil::checkString($var, True);
        $this->build_name = $var;

        return $this;
    }

    /**
     * The operation type.
     *
     * Generated from protobuf field <code>.google.cloud.functions.v2.OperationType operation_type = 11;</code>
     * @return int
     */
    public function getOperationType()
    {
        return $this->operation_type;
    }

    /**
     * The operation type.
     *
     * Generated from protobuf field <code>.google.cloud.functions.v2.OperationType operation_type = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setOperationType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Functions\V2\OperationType::class);
        $this->operation_type = $var;

        return $this;
    }

}
