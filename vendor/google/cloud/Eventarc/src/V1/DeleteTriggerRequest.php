<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/eventarc/v1/eventarc.proto

namespace Google\Cloud\Eventarc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for the DeleteTrigger method.
 *
 * Generated from protobuf message <code>google.cloud.eventarc.v1.DeleteTriggerRequest</code>
 */
class DeleteTriggerRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the trigger to be deleted.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * If provided, the trigger will only be deleted if the etag matches the
     * current etag on the resource.
     *
     * Generated from protobuf field <code>string etag = 2;</code>
     */
    protected $etag = '';
    /**
     * If set to true, and the trigger is not found, the request will succeed
     * but no action will be taken on the server.
     *
     * Generated from protobuf field <code>bool allow_missing = 3;</code>
     */
    protected $allow_missing = false;
    /**
     * Required. If set, validate the request and preview the review, but do not
     * post it.
     *
     * Generated from protobuf field <code>bool validate_only = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $validate_only = false;

    /**
     * @param string $name         Required. The name of the trigger to be deleted. Please see
     *                             {@see EventarcClient::triggerName()} for help formatting this field.
     * @param bool   $allowMissing If set to true, and the trigger is not found, the request will succeed
     *                             but no action will be taken on the server.
     *
     * @return \Google\Cloud\Eventarc\V1\DeleteTriggerRequest
     *
     * @experimental
     */
    public static function build(string $name, bool $allowMissing): self
    {
        return (new self())
            ->setName($name)
            ->setAllowMissing($allowMissing);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the trigger to be deleted.
     *     @type string $etag
     *           If provided, the trigger will only be deleted if the etag matches the
     *           current etag on the resource.
     *     @type bool $allow_missing
     *           If set to true, and the trigger is not found, the request will succeed
     *           but no action will be taken on the server.
     *     @type bool $validate_only
     *           Required. If set, validate the request and preview the review, but do not
     *           post it.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Eventarc\V1\Eventarc::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the trigger to be deleted.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the trigger to be deleted.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * If provided, the trigger will only be deleted if the etag matches the
     * current etag on the resource.
     *
     * Generated from protobuf field <code>string etag = 2;</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * If provided, the trigger will only be deleted if the etag matches the
     * current etag on the resource.
     *
     * Generated from protobuf field <code>string etag = 2;</code>
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
     * If set to true, and the trigger is not found, the request will succeed
     * but no action will be taken on the server.
     *
     * Generated from protobuf field <code>bool allow_missing = 3;</code>
     * @return bool
     */
    public function getAllowMissing()
    {
        return $this->allow_missing;
    }

    /**
     * If set to true, and the trigger is not found, the request will succeed
     * but no action will be taken on the server.
     *
     * Generated from protobuf field <code>bool allow_missing = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setAllowMissing($var)
    {
        GPBUtil::checkBool($var);
        $this->allow_missing = $var;

        return $this;
    }

    /**
     * Required. If set, validate the request and preview the review, but do not
     * post it.
     *
     * Generated from protobuf field <code>bool validate_only = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * Required. If set, validate the request and preview the review, but do not
     * post it.
     *
     * Generated from protobuf field <code>bool validate_only = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

}
