<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/catalog.proto

namespace Google\Cloud\Dataplex\V1\AspectType\MetadataTemplate;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Definition of the constraints of a field
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.AspectType.MetadataTemplate.Constraints</code>
 */
class Constraints extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Marks this as an optional/required field.
     *
     * Generated from protobuf field <code>bool required = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $required = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $required
     *           Optional. Marks this as an optional/required field.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Catalog::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Marks this as an optional/required field.
     *
     * Generated from protobuf field <code>bool required = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * Optional. Marks this as an optional/required field.
     *
     * Generated from protobuf field <code>bool required = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setRequired($var)
    {
        GPBUtil::checkBool($var);
        $this->required = $var;

        return $this;
    }

}

