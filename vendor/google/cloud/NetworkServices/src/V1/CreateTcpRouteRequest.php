<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkservices/v1/tcp_route.proto

namespace Google\Cloud\NetworkServices\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request used by the TcpRoute method.
 *
 * Generated from protobuf message <code>google.cloud.networkservices.v1.CreateTcpRouteRequest</code>
 */
class CreateTcpRouteRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent resource of the TcpRoute. Must be in the
     * format `projects/&#42;&#47;locations/global`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. Short name of the TcpRoute resource to be created.
     *
     * Generated from protobuf field <code>string tcp_route_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $tcp_route_id = '';
    /**
     * Required. TcpRoute resource to be created.
     *
     * Generated from protobuf field <code>.google.cloud.networkservices.v1.TcpRoute tcp_route = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $tcp_route = null;

    /**
     * @param string                                    $parent     Required. The parent resource of the TcpRoute. Must be in the
     *                                                              format `projects/&#42;/locations/global`. Please see
     *                                                              {@see NetworkServicesClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\NetworkServices\V1\TcpRoute $tcpRoute   Required. TcpRoute resource to be created.
     * @param string                                    $tcpRouteId Required. Short name of the TcpRoute resource to be created.
     *
     * @return \Google\Cloud\NetworkServices\V1\CreateTcpRouteRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\NetworkServices\V1\TcpRoute $tcpRoute, string $tcpRouteId): self
    {
        return (new self())
            ->setParent($parent)
            ->setTcpRoute($tcpRoute)
            ->setTcpRouteId($tcpRouteId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent resource of the TcpRoute. Must be in the
     *           format `projects/&#42;&#47;locations/global`.
     *     @type string $tcp_route_id
     *           Required. Short name of the TcpRoute resource to be created.
     *     @type \Google\Cloud\NetworkServices\V1\TcpRoute $tcp_route
     *           Required. TcpRoute resource to be created.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networkservices\V1\TcpRoute::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent resource of the TcpRoute. Must be in the
     * format `projects/&#42;&#47;locations/global`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent resource of the TcpRoute. Must be in the
     * format `projects/&#42;&#47;locations/global`.
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
     * Required. Short name of the TcpRoute resource to be created.
     *
     * Generated from protobuf field <code>string tcp_route_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getTcpRouteId()
    {
        return $this->tcp_route_id;
    }

    /**
     * Required. Short name of the TcpRoute resource to be created.
     *
     * Generated from protobuf field <code>string tcp_route_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setTcpRouteId($var)
    {
        GPBUtil::checkString($var, True);
        $this->tcp_route_id = $var;

        return $this;
    }

    /**
     * Required. TcpRoute resource to be created.
     *
     * Generated from protobuf field <code>.google.cloud.networkservices.v1.TcpRoute tcp_route = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\NetworkServices\V1\TcpRoute|null
     */
    public function getTcpRoute()
    {
        return $this->tcp_route;
    }

    public function hasTcpRoute()
    {
        return isset($this->tcp_route);
    }

    public function clearTcpRoute()
    {
        unset($this->tcp_route);
    }

    /**
     * Required. TcpRoute resource to be created.
     *
     * Generated from protobuf field <code>.google.cloud.networkservices.v1.TcpRoute tcp_route = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\NetworkServices\V1\TcpRoute $var
     * @return $this
     */
    public function setTcpRoute($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkServices\V1\TcpRoute::class);
        $this->tcp_route = $var;

        return $this;
    }

}
