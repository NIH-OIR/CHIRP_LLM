<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Buckets values based on fixed size ranges. The
 * Bucketing transformation can provide all of this functionality,
 * but requires more configuration. This message is provided as a convenience to
 * the user for simple bucketing strategies.
 * The transformed value will be a hyphenated string of
 * {lower_bound}-{upper_bound}. For example, if lower_bound = 10 and upper_bound
 * = 20, all values that are within this bucket will be replaced with "10-20".
 * This can be used on data of type: double, long.
 * If the bound Value type differs from the type of data
 * being transformed, we will first attempt converting the type of the data to
 * be transformed to match the type of the bound before comparing.
 * See
 * https://cloud.google.com/sensitive-data-protection/docs/concepts-bucketing to
 * learn more.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.FixedSizeBucketingConfig</code>
 */
class FixedSizeBucketingConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Lower bound value of buckets. All values less than `lower_bound`
     * are grouped together into a single bucket; for example if `lower_bound` =
     * 10, then all values less than 10 are replaced with the value "-10".
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.Value lower_bound = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $lower_bound = null;
    /**
     * Required. Upper bound value of buckets. All values greater than upper_bound
     * are grouped together into a single bucket; for example if `upper_bound` =
     * 89, then all values greater than 89 are replaced with the value "89+".
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.Value upper_bound = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $upper_bound = null;
    /**
     * Required. Size of each bucket (except for minimum and maximum buckets). So
     * if `lower_bound` = 10, `upper_bound` = 89, and `bucket_size` = 10, then the
     * following buckets would be used: -10, 10-20, 20-30, 30-40, 40-50, 50-60,
     * 60-70, 70-80, 80-89, 89+. Precision up to 2 decimals works.
     *
     * Generated from protobuf field <code>double bucket_size = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $bucket_size = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dlp\V2\Value $lower_bound
     *           Required. Lower bound value of buckets. All values less than `lower_bound`
     *           are grouped together into a single bucket; for example if `lower_bound` =
     *           10, then all values less than 10 are replaced with the value "-10".
     *     @type \Google\Cloud\Dlp\V2\Value $upper_bound
     *           Required. Upper bound value of buckets. All values greater than upper_bound
     *           are grouped together into a single bucket; for example if `upper_bound` =
     *           89, then all values greater than 89 are replaced with the value "89+".
     *     @type float $bucket_size
     *           Required. Size of each bucket (except for minimum and maximum buckets). So
     *           if `lower_bound` = 10, `upper_bound` = 89, and `bucket_size` = 10, then the
     *           following buckets would be used: -10, 10-20, 20-30, 30-40, 40-50, 50-60,
     *           60-70, 70-80, 80-89, 89+. Precision up to 2 decimals works.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Lower bound value of buckets. All values less than `lower_bound`
     * are grouped together into a single bucket; for example if `lower_bound` =
     * 10, then all values less than 10 are replaced with the value "-10".
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.Value lower_bound = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dlp\V2\Value|null
     */
    public function getLowerBound()
    {
        return $this->lower_bound;
    }

    public function hasLowerBound()
    {
        return isset($this->lower_bound);
    }

    public function clearLowerBound()
    {
        unset($this->lower_bound);
    }

    /**
     * Required. Lower bound value of buckets. All values less than `lower_bound`
     * are grouped together into a single bucket; for example if `lower_bound` =
     * 10, then all values less than 10 are replaced with the value "-10".
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.Value lower_bound = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dlp\V2\Value $var
     * @return $this
     */
    public function setLowerBound($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\Value::class);
        $this->lower_bound = $var;

        return $this;
    }

    /**
     * Required. Upper bound value of buckets. All values greater than upper_bound
     * are grouped together into a single bucket; for example if `upper_bound` =
     * 89, then all values greater than 89 are replaced with the value "89+".
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.Value upper_bound = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dlp\V2\Value|null
     */
    public function getUpperBound()
    {
        return $this->upper_bound;
    }

    public function hasUpperBound()
    {
        return isset($this->upper_bound);
    }

    public function clearUpperBound()
    {
        unset($this->upper_bound);
    }

    /**
     * Required. Upper bound value of buckets. All values greater than upper_bound
     * are grouped together into a single bucket; for example if `upper_bound` =
     * 89, then all values greater than 89 are replaced with the value "89+".
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.Value upper_bound = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dlp\V2\Value $var
     * @return $this
     */
    public function setUpperBound($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\Value::class);
        $this->upper_bound = $var;

        return $this;
    }

    /**
     * Required. Size of each bucket (except for minimum and maximum buckets). So
     * if `lower_bound` = 10, `upper_bound` = 89, and `bucket_size` = 10, then the
     * following buckets would be used: -10, 10-20, 20-30, 30-40, 40-50, 50-60,
     * 60-70, 70-80, 80-89, 89+. Precision up to 2 decimals works.
     *
     * Generated from protobuf field <code>double bucket_size = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return float
     */
    public function getBucketSize()
    {
        return $this->bucket_size;
    }

    /**
     * Required. Size of each bucket (except for minimum and maximum buckets). So
     * if `lower_bound` = 10, `upper_bound` = 89, and `bucket_size` = 10, then the
     * following buckets would be used: -10, 10-20, 20-30, 30-40, 40-50, 50-60,
     * 60-70, 70-80, 80-89, 89+. Precision up to 2 decimals works.
     *
     * Generated from protobuf field <code>double bucket_size = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param float $var
     * @return $this
     */
    public function setBucketSize($var)
    {
        GPBUtil::checkDouble($var);
        $this->bucket_size = $var;

        return $this;
    }

}
