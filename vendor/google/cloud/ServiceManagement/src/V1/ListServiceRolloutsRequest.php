<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/servicemanagement/v1/servicemanager.proto

namespace Google\Cloud\ServiceManagement\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for 'ListServiceRollouts'
 *
 * Generated from protobuf message <code>google.api.servicemanagement.v1.ListServiceRolloutsRequest</code>
 */
class ListServiceRolloutsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the service.  See the
     * [overview](https://cloud.google.com/service-management/overview) for naming
     * requirements.  For example: `example.googleapis.com`.
     *
     * Generated from protobuf field <code>string service_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $service_name = '';
    /**
     * The token of the page to retrieve.
     *
     * Generated from protobuf field <code>string page_token = 2;</code>
     */
    private $page_token = '';
    /**
     * The max number of items to include in the response list. Page size is 50
     * if not specified. Maximum value is 100.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     */
    private $page_size = 0;
    /**
     * Required. Use `filter` to return subset of rollouts.
     * The following filters are supported:
     *  -- By [status]
     *  [google.api.servicemanagement.v1.Rollout.RolloutStatus]. For example,
     *  `filter='status=SUCCESS'`
     *  -- By [strategy]
     *  [google.api.servicemanagement.v1.Rollout.strategy]. For example,
     *  `filter='strategy=TrafficPercentStrategy'`
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $filter = '';

    /**
     * @param string $serviceName Required. The name of the service.  See the
     *                            [overview](https://cloud.google.com/service-management/overview) for naming
     *                            requirements.  For example: `example.googleapis.com`.
     * @param string $filter      Required. Use `filter` to return subset of rollouts.
     *                            The following filters are supported:
     *
     *                            -- By [status]
     *                            [google.api.servicemanagement.v1.Rollout.RolloutStatus]. For example,
     *                            `filter='status=SUCCESS'`
     *
     *                            -- By [strategy]
     *                            [google.api.servicemanagement.v1.Rollout.strategy]. For example,
     *                            `filter='strategy=TrafficPercentStrategy'`
     *
     * @return \Google\Cloud\ServiceManagement\V1\ListServiceRolloutsRequest
     *
     * @experimental
     */
    public static function build(string $serviceName, string $filter): self
    {
        return (new self())
            ->setServiceName($serviceName)
            ->setFilter($filter);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $service_name
     *           Required. The name of the service.  See the
     *           [overview](https://cloud.google.com/service-management/overview) for naming
     *           requirements.  For example: `example.googleapis.com`.
     *     @type string $page_token
     *           The token of the page to retrieve.
     *     @type int $page_size
     *           The max number of items to include in the response list. Page size is 50
     *           if not specified. Maximum value is 100.
     *     @type string $filter
     *           Required. Use `filter` to return subset of rollouts.
     *           The following filters are supported:
     *            -- By [status]
     *            [google.api.servicemanagement.v1.Rollout.RolloutStatus]. For example,
     *            `filter='status=SUCCESS'`
     *            -- By [strategy]
     *            [google.api.servicemanagement.v1.Rollout.strategy]. For example,
     *            `filter='strategy=TrafficPercentStrategy'`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Servicemanagement\V1\Servicemanager::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the service.  See the
     * [overview](https://cloud.google.com/service-management/overview) for naming
     * requirements.  For example: `example.googleapis.com`.
     *
     * Generated from protobuf field <code>string service_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getServiceName()
    {
        return $this->service_name;
    }

    /**
     * Required. The name of the service.  See the
     * [overview](https://cloud.google.com/service-management/overview) for naming
     * requirements.  For example: `example.googleapis.com`.
     *
     * Generated from protobuf field <code>string service_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setServiceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_name = $var;

        return $this;
    }

    /**
     * The token of the page to retrieve.
     *
     * Generated from protobuf field <code>string page_token = 2;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * The token of the page to retrieve.
     *
     * Generated from protobuf field <code>string page_token = 2;</code>
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
     * The max number of items to include in the response list. Page size is 50
     * if not specified. Maximum value is 100.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The max number of items to include in the response list. Page size is 50
     * if not specified. Maximum value is 100.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
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
     * Required. Use `filter` to return subset of rollouts.
     * The following filters are supported:
     *  -- By [status]
     *  [google.api.servicemanagement.v1.Rollout.RolloutStatus]. For example,
     *  `filter='status=SUCCESS'`
     *  -- By [strategy]
     *  [google.api.servicemanagement.v1.Rollout.strategy]. For example,
     *  `filter='strategy=TrafficPercentStrategy'`
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Required. Use `filter` to return subset of rollouts.
     * The following filters are supported:
     *  -- By [status]
     *  [google.api.servicemanagement.v1.Rollout.RolloutStatus]. For example,
     *  `filter='status=SUCCESS'`
     *  -- By [strategy]
     *  [google.api.servicemanagement.v1.Rollout.strategy]. For example,
     *  `filter='strategy=TrafficPercentStrategy'`
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = REQUIRED];</code>
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
