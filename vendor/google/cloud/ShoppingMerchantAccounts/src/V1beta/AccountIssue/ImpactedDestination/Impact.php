<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/accounts/v1beta/accountissue.proto

namespace Google\Shopping\Merchant\Accounts\V1beta\AccountIssue\ImpactedDestination;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The impact of the issue on a region.
 *
 * Generated from protobuf message <code>google.shopping.merchant.accounts.v1beta.AccountIssue.ImpactedDestination.Impact</code>
 */
class Impact extends \Google\Protobuf\Internal\Message
{
    /**
     * The [CLDR region code](https://cldr.unicode.org/) where this issue
     * applies.
     *
     * Generated from protobuf field <code>string region_code = 1;</code>
     */
    protected $region_code = '';
    /**
     * The severity of the issue on the destination and region.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.accounts.v1beta.AccountIssue.Severity severity = 2;</code>
     */
    protected $severity = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $region_code
     *           The [CLDR region code](https://cldr.unicode.org/) where this issue
     *           applies.
     *     @type int $severity
     *           The severity of the issue on the destination and region.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Shopping\Merchant\Accounts\V1Beta\Accountissue::initOnce();
        parent::__construct($data);
    }

    /**
     * The [CLDR region code](https://cldr.unicode.org/) where this issue
     * applies.
     *
     * Generated from protobuf field <code>string region_code = 1;</code>
     * @return string
     */
    public function getRegionCode()
    {
        return $this->region_code;
    }

    /**
     * The [CLDR region code](https://cldr.unicode.org/) where this issue
     * applies.
     *
     * Generated from protobuf field <code>string region_code = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setRegionCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->region_code = $var;

        return $this;
    }

    /**
     * The severity of the issue on the destination and region.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.accounts.v1beta.AccountIssue.Severity severity = 2;</code>
     * @return int
     */
    public function getSeverity()
    {
        return $this->severity;
    }

    /**
     * The severity of the issue on the destination and region.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.accounts.v1beta.AccountIssue.Severity severity = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setSeverity($var)
    {
        GPBUtil::checkEnum($var, \Google\Shopping\Merchant\Accounts\V1beta\AccountIssue\Severity::class);
        $this->severity = $var;

        return $this;
    }

}

