<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/beyondcorp/appconnectors/v1/app_connectors_service.proto

namespace Google\Cloud\BeyondCorp\AppConnectors\V1\AppConnector\PrincipalInfo;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ServiceAccount represents a GCP service account.
 *
 * Generated from protobuf message <code>google.cloud.beyondcorp.appconnectors.v1.AppConnector.PrincipalInfo.ServiceAccount</code>
 */
class ServiceAccount extends \Google\Protobuf\Internal\Message
{
    /**
     * Email address of the service account.
     *
     * Generated from protobuf field <code>string email = 1;</code>
     */
    protected $email = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $email
     *           Email address of the service account.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Beyondcorp\Appconnectors\V1\AppConnectorsService::initOnce();
        parent::__construct($data);
    }

    /**
     * Email address of the service account.
     *
     * Generated from protobuf field <code>string email = 1;</code>
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Email address of the service account.
     *
     * Generated from protobuf field <code>string email = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->email = $var;

        return $this;
    }

}

