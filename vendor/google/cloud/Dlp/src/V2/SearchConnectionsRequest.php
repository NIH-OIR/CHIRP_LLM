<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for SearchConnections.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.SearchConnectionsRequest</code>
 */
class SearchConnectionsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Resource name of the organization or project with a wildcard
     * location, for example, `organizations/433245324/locations/-` or
     * `projects/project-id/locations/-`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Optional. Number of results per page, max 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_size = 0;
    /**
     * Optional. Page token from a previous page to return the next set of
     * results. If set, all other request fields must match the original request.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_token = '';
    /**
     * Optional. Supported field/value: - `state` - MISSING|AVAILABLE|ERROR
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $filter = '';

    /**
     * @param string $parent Required. Resource name of the organization or project with a wildcard
     *                       location, for example, `organizations/433245324/locations/-` or
     *                       `projects/project-id/locations/-`. Please see
     *                       {@see DlpServiceClient::organizationLocationName()} for help formatting this field.
     *
     * @return \Google\Cloud\Dlp\V2\SearchConnectionsRequest
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
     *           Required. Resource name of the organization or project with a wildcard
     *           location, for example, `organizations/433245324/locations/-` or
     *           `projects/project-id/locations/-`.
     *     @type int $page_size
     *           Optional. Number of results per page, max 1000.
     *     @type string $page_token
     *           Optional. Page token from a previous page to return the next set of
     *           results. If set, all other request fields must match the original request.
     *     @type string $filter
     *           Optional. Supported field/value: - `state` - MISSING|AVAILABLE|ERROR
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Resource name of the organization or project with a wildcard
     * location, for example, `organizations/433245324/locations/-` or
     * `projects/project-id/locations/-`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Resource name of the organization or project with a wildcard
     * location, for example, `organizations/433245324/locations/-` or
     * `projects/project-id/locations/-`.
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
     * Optional. Number of results per page, max 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. Number of results per page, max 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. Page token from a previous page to return the next set of
     * results. If set, all other request fields must match the original request.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. Page token from a previous page to return the next set of
     * results. If set, all other request fields must match the original request.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. Supported field/value: - `state` - MISSING|AVAILABLE|ERROR
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Optional. Supported field/value: - `state` - MISSING|AVAILABLE|ERROR
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

}
