<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/orchestration/airflow/service/v1/environments.proto

namespace Google\Cloud\Orchestration\Airflow\Service\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * List environments in a project and location.
 *
 * Generated from protobuf message <code>google.cloud.orchestration.airflow.service.v1.ListEnvironmentsRequest</code>
 */
class ListEnvironmentsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * List environments in the given project and location, in the form:
     * "projects/{projectId}/locations/{locationId}"
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    protected $parent = '';
    /**
     * The maximum number of environments to return.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    protected $page_size = 0;
    /**
     * The next_page_token value returned from a previous List request, if any.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    protected $page_token = '';

    /**
     * @param string $parent List environments in the given project and location, in the form:
     *                       "projects/{projectId}/locations/{locationId}"
     *
     * @return \Google\Cloud\Orchestration\Airflow\Service\V1\ListEnvironmentsRequest
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
     *           List environments in the given project and location, in the form:
     *           "projects/{projectId}/locations/{locationId}"
     *     @type int $page_size
     *           The maximum number of environments to return.
     *     @type string $page_token
     *           The next_page_token value returned from a previous List request, if any.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Orchestration\Airflow\Service\V1\Environments::initOnce();
        parent::__construct($data);
    }

    /**
     * List environments in the given project and location, in the form:
     * "projects/{projectId}/locations/{locationId}"
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * List environments in the given project and location, in the form:
     * "projects/{projectId}/locations/{locationId}"
     *
     * Generated from protobuf field <code>string parent = 1;</code>
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
     * The maximum number of environments to return.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of environments to return.
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
     * The next_page_token value returned from a previous List request, if any.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * The next_page_token value returned from a previous List request, if any.
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

}
