<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/service.proto

namespace Google\Cloud\Monitoring\V3\Service;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A well-known service type, defined by its service type and service labels.
 * Documentation and examples
 * [here](https://cloud.google.com/stackdriver/docs/solutions/slo-monitoring/api/api-structures#basic-svc-w-basic-sli).
 *
 * Generated from protobuf message <code>google.monitoring.v3.Service.BasicService</code>
 */
class BasicService extends \Google\Protobuf\Internal\Message
{
    /**
     * The type of service that this basic service defines, e.g.
     * APP_ENGINE service type.
     * Documentation and valid values
     * [here](https://cloud.google.com/stackdriver/docs/solutions/slo-monitoring/api/api-structures#basic-svc-w-basic-sli).
     *
     * Generated from protobuf field <code>string service_type = 1;</code>
     */
    private $service_type = '';
    /**
     * Labels that specify the resource that emits the monitoring data which
     * is used for SLO reporting of this `Service`.
     * Documentation and valid values for given service types
     * [here](https://cloud.google.com/stackdriver/docs/solutions/slo-monitoring/api/api-structures#basic-svc-w-basic-sli).
     *
     * Generated from protobuf field <code>map<string, string> service_labels = 2;</code>
     */
    private $service_labels;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $service_type
     *           The type of service that this basic service defines, e.g.
     *           APP_ENGINE service type.
     *           Documentation and valid values
     *           [here](https://cloud.google.com/stackdriver/docs/solutions/slo-monitoring/api/api-structures#basic-svc-w-basic-sli).
     *     @type array|\Google\Protobuf\Internal\MapField $service_labels
     *           Labels that specify the resource that emits the monitoring data which
     *           is used for SLO reporting of this `Service`.
     *           Documentation and valid values for given service types
     *           [here](https://cloud.google.com/stackdriver/docs/solutions/slo-monitoring/api/api-structures#basic-svc-w-basic-sli).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * The type of service that this basic service defines, e.g.
     * APP_ENGINE service type.
     * Documentation and valid values
     * [here](https://cloud.google.com/stackdriver/docs/solutions/slo-monitoring/api/api-structures#basic-svc-w-basic-sli).
     *
     * Generated from protobuf field <code>string service_type = 1;</code>
     * @return string
     */
    public function getServiceType()
    {
        return $this->service_type;
    }

    /**
     * The type of service that this basic service defines, e.g.
     * APP_ENGINE service type.
     * Documentation and valid values
     * [here](https://cloud.google.com/stackdriver/docs/solutions/slo-monitoring/api/api-structures#basic-svc-w-basic-sli).
     *
     * Generated from protobuf field <code>string service_type = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setServiceType($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_type = $var;

        return $this;
    }

    /**
     * Labels that specify the resource that emits the monitoring data which
     * is used for SLO reporting of this `Service`.
     * Documentation and valid values for given service types
     * [here](https://cloud.google.com/stackdriver/docs/solutions/slo-monitoring/api/api-structures#basic-svc-w-basic-sli).
     *
     * Generated from protobuf field <code>map<string, string> service_labels = 2;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getServiceLabels()
    {
        return $this->service_labels;
    }

    /**
     * Labels that specify the resource that emits the monitoring data which
     * is used for SLO reporting of this `Service`.
     * Documentation and valid values for given service types
     * [here](https://cloud.google.com/stackdriver/docs/solutions/slo-monitoring/api/api-structures#basic-svc-w-basic-sli).
     *
     * Generated from protobuf field <code>map<string, string> service_labels = 2;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setServiceLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->service_labels = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BasicService::class, \Google\Cloud\Monitoring\V3\Service_BasicService::class);
