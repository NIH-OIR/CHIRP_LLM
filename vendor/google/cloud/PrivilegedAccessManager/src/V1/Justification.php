<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/privilegedaccessmanager/v1/privilegedaccessmanager.proto

namespace Google\Cloud\PrivilegedAccessManager\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Justification represents a justification for requesting access.
 *
 * Generated from protobuf message <code>google.cloud.privilegedaccessmanager.v1.Justification</code>
 */
class Justification extends \Google\Protobuf\Internal\Message
{
    protected $justification;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $unstructured_justification
     *           A free form textual justification. The system only ensures that this
     *           is not empty. No other kind of validation is performed on the string.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Privilegedaccessmanager\V1\Privilegedaccessmanager::initOnce();
        parent::__construct($data);
    }

    /**
     * A free form textual justification. The system only ensures that this
     * is not empty. No other kind of validation is performed on the string.
     *
     * Generated from protobuf field <code>string unstructured_justification = 1;</code>
     * @return string
     */
    public function getUnstructuredJustification()
    {
        return $this->readOneof(1);
    }

    public function hasUnstructuredJustification()
    {
        return $this->hasOneof(1);
    }

    /**
     * A free form textual justification. The system only ensures that this
     * is not empty. No other kind of validation is performed on the string.
     *
     * Generated from protobuf field <code>string unstructured_justification = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUnstructuredJustification($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getJustification()
    {
        return $this->whichOneof("justification");
    }

}
