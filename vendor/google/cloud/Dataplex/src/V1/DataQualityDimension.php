<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/data_quality.proto

namespace Google\Cloud\Dataplex\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A dimension captures data quality intent about a defined subset of the rules
 * specified.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.DataQualityDimension</code>
 */
class DataQualityDimension extends \Google\Protobuf\Internal\Message
{
    /**
     * The dimension name a rule belongs to. Supported dimensions are
     * ["COMPLETENESS", "ACCURACY", "CONSISTENCY", "VALIDITY", "UNIQUENESS",
     * "INTEGRITY"]
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The dimension name a rule belongs to. Supported dimensions are
     *           ["COMPLETENESS", "ACCURACY", "CONSISTENCY", "VALIDITY", "UNIQUENESS",
     *           "INTEGRITY"]
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\DataQuality::initOnce();
        parent::__construct($data);
    }

    /**
     * The dimension name a rule belongs to. Supported dimensions are
     * ["COMPLETENESS", "ACCURACY", "CONSISTENCY", "VALIDITY", "UNIQUENESS",
     * "INTEGRITY"]
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The dimension name a rule belongs to. Supported dimensions are
     * ["COMPLETENESS", "ACCURACY", "CONSISTENCY", "VALIDITY", "UNIQUENESS",
     * "INTEGRITY"]
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}
