<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/run/v2/revision.proto

namespace Google\Cloud\Run\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for retrieving a list of Revisions.
 *
 * Generated from protobuf message <code>google.cloud.run.v2.ListRevisionsRequest</code>
 */
class ListRevisionsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The Service from which the Revisions should be listed.
     * To list all Revisions across Services, use "-" instead of Service name.
     * Format:
     * projects/{project}/locations/{location}/services/{service}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Maximum number of revisions to return in this call.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    protected $page_size = 0;
    /**
     * A page token received from a previous call to ListRevisions.
     * All other parameters must match.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    protected $page_token = '';
    /**
     * If true, returns deleted (but unexpired) resources along with active ones.
     *
     * Generated from protobuf field <code>bool show_deleted = 4;</code>
     */
    protected $show_deleted = false;

    /**
     * @param string $parent Required. The Service from which the Revisions should be listed.
     *                       To list all Revisions across Services, use "-" instead of Service name.
     *                       Format:
     *                       projects/{project}/locations/{location}/services/{service}
     *                       Please see {@see RevisionsClient::serviceName()} for help formatting this field.
     *
     * @return \Google\Cloud\Run\V2\ListRevisionsRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The Service from which the Revisions should be listed.
     *           To list all Revisions across Services, use "-" instead of Service name.
     *           Format:
     *           projects/{project}/locations/{location}/services/{service}
     *     @type int $page_size
     *           Maximum number of revisions to return in this call.
     *     @type string $page_token
     *           A page token received from a previous call to ListRevisions.
     *           All other parameters must match.
     *     @type bool $show_deleted
     *           If true, returns deleted (but unexpired) resources along with active ones.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Run\V2\Revision::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The Service from which the Revisions should be listed.
     * To list all Revisions across Services, use "-" instead of Service name.
     * Format:
     * projects/{project}/locations/{location}/services/{service}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The Service from which the Revisions should be listed.
     * To list all Revisions across Services, use "-" instead of Service name.
     * Format:
     * projects/{project}/locations/{location}/services/{service}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Maximum number of revisions to return in this call.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Maximum number of revisions to return in this call.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * A page token received from a previous call to ListRevisions.
     * All other parameters must match.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * A page token received from a previous call to ListRevisions.
     * All other parameters must match.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * If true, returns deleted (but unexpired) resources along with active ones.
     *
     * Generated from protobuf field <code>bool show_deleted = 4;</code>
     * @return bool
     */
    public function getShowDeleted()
    {
        return $this->show_deleted;
    }

    /**
     * If true, returns deleted (but unexpired) resources along with active ones.
     *
     * Generated from protobuf field <code>bool show_deleted = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setShowDeleted($var)
    {
        GPBUtil::checkBool($var);
        $this->show_deleted = $var;

        return $this;
    }

}
