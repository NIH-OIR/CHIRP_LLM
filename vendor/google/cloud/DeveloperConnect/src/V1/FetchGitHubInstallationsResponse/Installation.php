<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/developerconnect/v1/developer_connect.proto

namespace Google\Cloud\DeveloperConnect\V1\FetchGitHubInstallationsResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents an installation of the GitHub App.
 *
 * Generated from protobuf message <code>google.cloud.developerconnect.v1.FetchGitHubInstallationsResponse.Installation</code>
 */
class Installation extends \Google\Protobuf\Internal\Message
{
    /**
     * ID of the installation in GitHub.
     *
     * Generated from protobuf field <code>int64 id = 1;</code>
     */
    protected $id = 0;
    /**
     * Name of the GitHub user or organization that owns this installation.
     *
     * Generated from protobuf field <code>string name = 2;</code>
     */
    protected $name = '';
    /**
     * Either "user" or "organization".
     *
     * Generated from protobuf field <code>string type = 3;</code>
     */
    protected $type = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $id
     *           ID of the installation in GitHub.
     *     @type string $name
     *           Name of the GitHub user or organization that owns this installation.
     *     @type string $type
     *           Either "user" or "organization".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Developerconnect\V1\DeveloperConnect::initOnce();
        parent::__construct($data);
    }

    /**
     * ID of the installation in GitHub.
     *
     * Generated from protobuf field <code>int64 id = 1;</code>
     * @return int|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * ID of the installation in GitHub.
     *
     * Generated from protobuf field <code>int64 id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Name of the GitHub user or organization that owns this installation.
     *
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Name of the GitHub user or organization that owns this installation.
     *
     * Generated from protobuf field <code>string name = 2;</code>
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
     * Either "user" or "organization".
     *
     * Generated from protobuf field <code>string type = 3;</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Either "user" or "organization".
     *
     * Generated from protobuf field <code>string type = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

}

