<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/catalog.proto

namespace Google\Cloud\Retail\V2\CatalogAttribute\FacetConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * [Facet values][google.cloud.retail.v2.SearchResponse.Facet.values] to
 * ignore on [facets][google.cloud.retail.v2.SearchResponse.Facet] during
 * the specified time range for the given
 * [SearchResponse.Facet.key][google.cloud.retail.v2.SearchResponse.Facet.key]
 * attribute.
 *
 * Generated from protobuf message <code>google.cloud.retail.v2.CatalogAttribute.FacetConfig.IgnoredFacetValues</code>
 */
class IgnoredFacetValues extends \Google\Protobuf\Internal\Message
{
    /**
     * List of facet values to ignore for the following time range. The facet
     * values are the same as the attribute values. There is a limit of 10
     * values per instance of IgnoredFacetValues. Each value can have at most
     * 128 characters.
     *
     * Generated from protobuf field <code>repeated string values = 1;</code>
     */
    private $values;
    /**
     * Time range for the current list of facet values to ignore.
     * If multiple time ranges are specified for an facet value for the
     * current attribute, consider all of them. If both are empty, ignore
     * always. If start time and end time are set, then start time
     * must be before end time.
     * If start time is not empty and end time is empty, then will ignore
     * these facet values after the start time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 2;</code>
     */
    private $start_time = null;
    /**
     * If start time is empty and end time is not empty, then ignore these
     * facet values before end time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 3;</code>
     */
    private $end_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $values
     *           List of facet values to ignore for the following time range. The facet
     *           values are the same as the attribute values. There is a limit of 10
     *           values per instance of IgnoredFacetValues. Each value can have at most
     *           128 characters.
     *     @type \Google\Protobuf\Timestamp $start_time
     *           Time range for the current list of facet values to ignore.
     *           If multiple time ranges are specified for an facet value for the
     *           current attribute, consider all of them. If both are empty, ignore
     *           always. If start time and end time are set, then start time
     *           must be before end time.
     *           If start time is not empty and end time is empty, then will ignore
     *           these facet values after the start time.
     *     @type \Google\Protobuf\Timestamp $end_time
     *           If start time is empty and end time is not empty, then ignore these
     *           facet values before end time.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Retail\V2\Catalog::initOnce();
        parent::__construct($data);
    }

    /**
     * List of facet values to ignore for the following time range. The facet
     * values are the same as the attribute values. There is a limit of 10
     * values per instance of IgnoredFacetValues. Each value can have at most
     * 128 characters.
     *
     * Generated from protobuf field <code>repeated string values = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * List of facet values to ignore for the following time range. The facet
     * values are the same as the attribute values. There is a limit of 10
     * values per instance of IgnoredFacetValues. Each value can have at most
     * 128 characters.
     *
     * Generated from protobuf field <code>repeated string values = 1;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->values = $arr;

        return $this;
    }

    /**
     * Time range for the current list of facet values to ignore.
     * If multiple time ranges are specified for an facet value for the
     * current attribute, consider all of them. If both are empty, ignore
     * always. If start time and end time are set, then start time
     * must be before end time.
     * If start time is not empty and end time is empty, then will ignore
     * these facet values after the start time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 2;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    public function hasStartTime()
    {
        return isset($this->start_time);
    }

    public function clearStartTime()
    {
        unset($this->start_time);
    }

    /**
     * Time range for the current list of facet values to ignore.
     * If multiple time ranges are specified for an facet value for the
     * current attribute, consider all of them. If both are empty, ignore
     * always. If start time and end time are set, then start time
     * must be before end time.
     * If start time is not empty and end time is empty, then will ignore
     * these facet values after the start time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * If start time is empty and end time is not empty, then ignore these
     * facet values before end time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 3;</code>
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
     * If start time is empty and end time is not empty, then ignore these
     * facet values before end time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;

        return $this;
    }

}

