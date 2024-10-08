<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/data_item.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A piece of data in a Dataset. Could be an image, a video, a document or plain
 * text.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.DataItem</code>
 */
class DataItem extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the DataItem.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * Output only. Timestamp when this DataItem was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. Timestamp when this DataItem was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * Optional. The labels with user-defined metadata to organize your DataItems.
     * Label keys and values can be no longer than 64 characters
     * (Unicode codepoints), can only contain lowercase letters, numeric
     * characters, underscores and dashes. International characters are allowed.
     * No more than 64 user labels can be associated with one DataItem(System
     * labels are excluded).
     * See https://goo.gl/xmQnxf for more information and examples of labels.
     * System reserved label keys are prefixed with "aiplatform.googleapis.com/"
     * and are immutable.
     *
     * Generated from protobuf field <code>map<string, string> labels = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $labels;
    /**
     * Required. The data that the DataItem represents (for example, an image or a
     * text snippet). The schema of the payload is stored in the parent Dataset's
     * [metadata schema's][google.cloud.aiplatform.v1.Dataset.metadata_schema_uri]
     * dataItemSchemaUri field.
     *
     * Generated from protobuf field <code>.google.protobuf.Value payload = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $payload = null;
    /**
     * Optional. Used to perform consistent read-modify-write updates. If not set,
     * a blind "overwrite" update happens.
     *
     * Generated from protobuf field <code>string etag = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $etag = '';
    /**
     * Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>bool satisfies_pzs = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $satisfies_pzs = false;
    /**
     * Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>bool satisfies_pzi = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $satisfies_pzi = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The resource name of the DataItem.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Timestamp when this DataItem was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. Timestamp when this DataItem was last updated.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. The labels with user-defined metadata to organize your DataItems.
     *           Label keys and values can be no longer than 64 characters
     *           (Unicode codepoints), can only contain lowercase letters, numeric
     *           characters, underscores and dashes. International characters are allowed.
     *           No more than 64 user labels can be associated with one DataItem(System
     *           labels are excluded).
     *           See https://goo.gl/xmQnxf for more information and examples of labels.
     *           System reserved label keys are prefixed with "aiplatform.googleapis.com/"
     *           and are immutable.
     *     @type \Google\Protobuf\Value $payload
     *           Required. The data that the DataItem represents (for example, an image or a
     *           text snippet). The schema of the payload is stored in the parent Dataset's
     *           [metadata schema's][google.cloud.aiplatform.v1.Dataset.metadata_schema_uri]
     *           dataItemSchemaUri field.
     *     @type string $etag
     *           Optional. Used to perform consistent read-modify-write updates. If not set,
     *           a blind "overwrite" update happens.
     *     @type bool $satisfies_pzs
     *           Output only. Reserved for future use.
     *     @type bool $satisfies_pzi
     *           Output only. Reserved for future use.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\DataItem::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the DataItem.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The resource name of the DataItem.
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
     * Output only. Timestamp when this DataItem was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Timestamp when this DataItem was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Timestamp when this DataItem was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. Timestamp when this DataItem was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Optional. The labels with user-defined metadata to organize your DataItems.
     * Label keys and values can be no longer than 64 characters
     * (Unicode codepoints), can only contain lowercase letters, numeric
     * characters, underscores and dashes. International characters are allowed.
     * No more than 64 user labels can be associated with one DataItem(System
     * labels are excluded).
     * See https://goo.gl/xmQnxf for more information and examples of labels.
     * System reserved label keys are prefixed with "aiplatform.googleapis.com/"
     * and are immutable.
     *
     * Generated from protobuf field <code>map<string, string> labels = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. The labels with user-defined metadata to organize your DataItems.
     * Label keys and values can be no longer than 64 characters
     * (Unicode codepoints), can only contain lowercase letters, numeric
     * characters, underscores and dashes. International characters are allowed.
     * No more than 64 user labels can be associated with one DataItem(System
     * labels are excluded).
     * See https://goo.gl/xmQnxf for more information and examples of labels.
     * System reserved label keys are prefixed with "aiplatform.googleapis.com/"
     * and are immutable.
     *
     * Generated from protobuf field <code>map<string, string> labels = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Required. The data that the DataItem represents (for example, an image or a
     * text snippet). The schema of the payload is stored in the parent Dataset's
     * [metadata schema's][google.cloud.aiplatform.v1.Dataset.metadata_schema_uri]
     * dataItemSchemaUri field.
     *
     * Generated from protobuf field <code>.google.protobuf.Value payload = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Value|null
     */
    public function getPayload()
    {
        return $this->payload;
    }

    public function hasPayload()
    {
        return isset($this->payload);
    }

    public function clearPayload()
    {
        unset($this->payload);
    }

    /**
     * Required. The data that the DataItem represents (for example, an image or a
     * text snippet). The schema of the payload is stored in the parent Dataset's
     * [metadata schema's][google.cloud.aiplatform.v1.Dataset.metadata_schema_uri]
     * dataItemSchemaUri field.
     *
     * Generated from protobuf field <code>.google.protobuf.Value payload = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\Value $var
     * @return $this
     */
    public function setPayload($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Value::class);
        $this->payload = $var;

        return $this;
    }

    /**
     * Optional. Used to perform consistent read-modify-write updates. If not set,
     * a blind "overwrite" update happens.
     *
     * Generated from protobuf field <code>string etag = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Optional. Used to perform consistent read-modify-write updates. If not set,
     * a blind "overwrite" update happens.
     *
     * Generated from protobuf field <code>string etag = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

    /**
     * Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>bool satisfies_pzs = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getSatisfiesPzs()
    {
        return $this->satisfies_pzs;
    }

    /**
     * Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>bool satisfies_pzs = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setSatisfiesPzs($var)
    {
        GPBUtil::checkBool($var);
        $this->satisfies_pzs = $var;

        return $this;
    }

    /**
     * Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>bool satisfies_pzi = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getSatisfiesPzi()
    {
        return $this->satisfies_pzi;
    }

    /**
     * Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>bool satisfies_pzi = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setSatisfiesPzi($var)
    {
        GPBUtil::checkBool($var);
        $this->satisfies_pzi = $var;

        return $this;
    }

}

