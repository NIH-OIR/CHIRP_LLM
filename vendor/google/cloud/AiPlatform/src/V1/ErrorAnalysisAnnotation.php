<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/evaluated_annotation.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Model error analysis for each annotation.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ErrorAnalysisAnnotation</code>
 */
class ErrorAnalysisAnnotation extends \Google\Protobuf\Internal\Message
{
    /**
     * Attributed items for a given annotation, typically representing neighbors
     * from the training sets constrained by the query type.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.ErrorAnalysisAnnotation.AttributedItem attributed_items = 1;</code>
     */
    private $attributed_items;
    /**
     * The query type used for finding the attributed items.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ErrorAnalysisAnnotation.QueryType query_type = 2;</code>
     */
    protected $query_type = 0;
    /**
     * The outlier score of this annotated item. Usually defined as the min of all
     * distances from attributed items.
     *
     * Generated from protobuf field <code>double outlier_score = 3;</code>
     */
    protected $outlier_score = 0.0;
    /**
     * The threshold used to determine if this annotation is an outlier or not.
     *
     * Generated from protobuf field <code>double outlier_threshold = 4;</code>
     */
    protected $outlier_threshold = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\AIPlatform\V1\ErrorAnalysisAnnotation\AttributedItem>|\Google\Protobuf\Internal\RepeatedField $attributed_items
     *           Attributed items for a given annotation, typically representing neighbors
     *           from the training sets constrained by the query type.
     *     @type int $query_type
     *           The query type used for finding the attributed items.
     *     @type float $outlier_score
     *           The outlier score of this annotated item. Usually defined as the min of all
     *           distances from attributed items.
     *     @type float $outlier_threshold
     *           The threshold used to determine if this annotation is an outlier or not.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\EvaluatedAnnotation::initOnce();
        parent::__construct($data);
    }

    /**
     * Attributed items for a given annotation, typically representing neighbors
     * from the training sets constrained by the query type.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.ErrorAnalysisAnnotation.AttributedItem attributed_items = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAttributedItems()
    {
        return $this->attributed_items;
    }

    /**
     * Attributed items for a given annotation, typically representing neighbors
     * from the training sets constrained by the query type.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.ErrorAnalysisAnnotation.AttributedItem attributed_items = 1;</code>
     * @param array<\Google\Cloud\AIPlatform\V1\ErrorAnalysisAnnotation\AttributedItem>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAttributedItems($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\ErrorAnalysisAnnotation\AttributedItem::class);
        $this->attributed_items = $arr;

        return $this;
    }

    /**
     * The query type used for finding the attributed items.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ErrorAnalysisAnnotation.QueryType query_type = 2;</code>
     * @return int
     */
    public function getQueryType()
    {
        return $this->query_type;
    }

    /**
     * The query type used for finding the attributed items.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ErrorAnalysisAnnotation.QueryType query_type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setQueryType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AIPlatform\V1\ErrorAnalysisAnnotation\QueryType::class);
        $this->query_type = $var;

        return $this;
    }

    /**
     * The outlier score of this annotated item. Usually defined as the min of all
     * distances from attributed items.
     *
     * Generated from protobuf field <code>double outlier_score = 3;</code>
     * @return float
     */
    public function getOutlierScore()
    {
        return $this->outlier_score;
    }

    /**
     * The outlier score of this annotated item. Usually defined as the min of all
     * distances from attributed items.
     *
     * Generated from protobuf field <code>double outlier_score = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setOutlierScore($var)
    {
        GPBUtil::checkDouble($var);
        $this->outlier_score = $var;

        return $this;
    }

    /**
     * The threshold used to determine if this annotation is an outlier or not.
     *
     * Generated from protobuf field <code>double outlier_threshold = 4;</code>
     * @return float
     */
    public function getOutlierThreshold()
    {
        return $this->outlier_threshold;
    }

    /**
     * The threshold used to determine if this annotation is an outlier or not.
     *
     * Generated from protobuf field <code>double outlier_threshold = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setOutlierThreshold($var)
    {
        GPBUtil::checkDouble($var);
        $this->outlier_threshold = $var;

        return $this;
    }

}
