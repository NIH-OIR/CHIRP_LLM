<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/iam/v2/policy.proto

namespace Google\Cloud\Iam\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A single rule in a `Policy`.
 *
 * Generated from protobuf message <code>google.iam.v2.PolicyRule</code>
 */
class PolicyRule extends \Google\Protobuf\Internal\Message
{
    /**
     * A user-specified description of the rule. This value can be up to 256
     * characters.
     *
     * Generated from protobuf field <code>string description = 1;</code>
     */
    protected $description = '';
    protected $kind;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Iam\V2\DenyRule $deny_rule
     *           A rule for a deny policy.
     *     @type string $description
     *           A user-specified description of the rule. This value can be up to 256
     *           characters.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Iam\V2\Policy::initOnce();
        parent::__construct($data);
    }

    /**
     * A rule for a deny policy.
     *
     * Generated from protobuf field <code>.google.iam.v2.DenyRule deny_rule = 2;</code>
     * @return \Google\Cloud\Iam\V2\DenyRule|null
     */
    public function getDenyRule()
    {
        return $this->readOneof(2);
    }

    public function hasDenyRule()
    {
        return $this->hasOneof(2);
    }

    /**
     * A rule for a deny policy.
     *
     * Generated from protobuf field <code>.google.iam.v2.DenyRule deny_rule = 2;</code>
     * @param \Google\Cloud\Iam\V2\DenyRule $var
     * @return $this
     */
    public function setDenyRule($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Iam\V2\DenyRule::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * A user-specified description of the rule. This value can be up to 256
     * characters.
     *
     * Generated from protobuf field <code>string description = 1;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A user-specified description of the rule. This value can be up to 256
     * characters.
     *
     * Generated from protobuf field <code>string description = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getKind()
    {
        return $this->whichOneof("kind");
    }

}
