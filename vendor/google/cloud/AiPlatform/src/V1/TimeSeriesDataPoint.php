<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/tensorboard_data.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A TensorboardTimeSeries data point.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.TimeSeriesDataPoint</code>
 */
class TimeSeriesDataPoint extends \Google\Protobuf\Internal\Message
{
    /**
     * Wall clock timestamp when this data point is generated by the end user.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp wall_time = 1;</code>
     */
    protected $wall_time = null;
    /**
     * Step index of this data point within the run.
     *
     * Generated from protobuf field <code>int64 step = 2;</code>
     */
    protected $step = 0;
    protected $value;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AIPlatform\V1\Scalar $scalar
     *           A scalar value.
     *     @type \Google\Cloud\AIPlatform\V1\TensorboardTensor $tensor
     *           A tensor value.
     *     @type \Google\Cloud\AIPlatform\V1\TensorboardBlobSequence $blobs
     *           A blob sequence value.
     *     @type \Google\Protobuf\Timestamp $wall_time
     *           Wall clock timestamp when this data point is generated by the end user.
     *     @type int|string $step
     *           Step index of this data point within the run.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\TensorboardData::initOnce();
        parent::__construct($data);
    }

    /**
     * A scalar value.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Scalar scalar = 3;</code>
     * @return \Google\Cloud\AIPlatform\V1\Scalar|null
     */
    public function getScalar()
    {
        return $this->readOneof(3);
    }

    public function hasScalar()
    {
        return $this->hasOneof(3);
    }

    /**
     * A scalar value.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Scalar scalar = 3;</code>
     * @param \Google\Cloud\AIPlatform\V1\Scalar $var
     * @return $this
     */
    public function setScalar($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\Scalar::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * A tensor value.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.TensorboardTensor tensor = 4;</code>
     * @return \Google\Cloud\AIPlatform\V1\TensorboardTensor|null
     */
    public function getTensor()
    {
        return $this->readOneof(4);
    }

    public function hasTensor()
    {
        return $this->hasOneof(4);
    }

    /**
     * A tensor value.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.TensorboardTensor tensor = 4;</code>
     * @param \Google\Cloud\AIPlatform\V1\TensorboardTensor $var
     * @return $this
     */
    public function setTensor($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\TensorboardTensor::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * A blob sequence value.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.TensorboardBlobSequence blobs = 5;</code>
     * @return \Google\Cloud\AIPlatform\V1\TensorboardBlobSequence|null
     */
    public function getBlobs()
    {
        return $this->readOneof(5);
    }

    public function hasBlobs()
    {
        return $this->hasOneof(5);
    }

    /**
     * A blob sequence value.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.TensorboardBlobSequence blobs = 5;</code>
     * @param \Google\Cloud\AIPlatform\V1\TensorboardBlobSequence $var
     * @return $this
     */
    public function setBlobs($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\TensorboardBlobSequence::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Wall clock timestamp when this data point is generated by the end user.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp wall_time = 1;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getWallTime()
    {
        return $this->wall_time;
    }

    public function hasWallTime()
    {
        return isset($this->wall_time);
    }

    public function clearWallTime()
    {
        unset($this->wall_time);
    }

    /**
     * Wall clock timestamp when this data point is generated by the end user.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp wall_time = 1;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setWallTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->wall_time = $var;

        return $this;
    }

    /**
     * Step index of this data point within the run.
     *
     * Generated from protobuf field <code>int64 step = 2;</code>
     * @return int|string
     */
    public function getStep()
    {
        return $this->step;
    }

    /**
     * Step index of this data point within the run.
     *
     * Generated from protobuf field <code>int64 step = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStep($var)
    {
        GPBUtil::checkInt64($var);
        $this->step = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->whichOneof("value");
    }

}
