<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/tuning_job.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Hyperparameters for SFT.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.SupervisedHyperParameters</code>
 */
class SupervisedHyperParameters extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Number of complete passes the model makes over the entire
     * training dataset during training.
     *
     * Generated from protobuf field <code>int64 epoch_count = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $epoch_count = 0;
    /**
     * Optional. Multiplier for adjusting the default learning rate.
     *
     * Generated from protobuf field <code>double learning_rate_multiplier = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $learning_rate_multiplier = 0.0;
    /**
     * Optional. Adapter size for tuning.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.SupervisedHyperParameters.AdapterSize adapter_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $adapter_size = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $epoch_count
     *           Optional. Number of complete passes the model makes over the entire
     *           training dataset during training.
     *     @type float $learning_rate_multiplier
     *           Optional. Multiplier for adjusting the default learning rate.
     *     @type int $adapter_size
     *           Optional. Adapter size for tuning.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\TuningJob::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Number of complete passes the model makes over the entire
     * training dataset during training.
     *
     * Generated from protobuf field <code>int64 epoch_count = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int|string
     */
    public function getEpochCount()
    {
        return $this->epoch_count;
    }

    /**
     * Optional. Number of complete passes the model makes over the entire
     * training dataset during training.
     *
     * Generated from protobuf field <code>int64 epoch_count = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int|string $var
     * @return $this
     */
    public function setEpochCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->epoch_count = $var;

        return $this;
    }

    /**
     * Optional. Multiplier for adjusting the default learning rate.
     *
     * Generated from protobuf field <code>double learning_rate_multiplier = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return float
     */
    public function getLearningRateMultiplier()
    {
        return $this->learning_rate_multiplier;
    }

    /**
     * Optional. Multiplier for adjusting the default learning rate.
     *
     * Generated from protobuf field <code>double learning_rate_multiplier = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param float $var
     * @return $this
     */
    public function setLearningRateMultiplier($var)
    {
        GPBUtil::checkDouble($var);
        $this->learning_rate_multiplier = $var;

        return $this;
    }

    /**
     * Optional. Adapter size for tuning.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.SupervisedHyperParameters.AdapterSize adapter_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getAdapterSize()
    {
        return $this->adapter_size;
    }

    /**
     * Optional. Adapter size for tuning.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.SupervisedHyperParameters.AdapterSize adapter_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setAdapterSize($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AIPlatform\V1\SupervisedHyperParameters\AdapterSize::class);
        $this->adapter_size = $var;

        return $this;
    }

}
