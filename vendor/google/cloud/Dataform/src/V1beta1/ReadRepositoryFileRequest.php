<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataform/v1beta1/dataform.proto

namespace Google\Cloud\Dataform\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * `ReadRepositoryFile` request message.
 *
 * Generated from protobuf message <code>google.cloud.dataform.v1beta1.ReadRepositoryFileRequest</code>
 */
class ReadRepositoryFileRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The repository's name.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * Optional. The commit SHA for the commit to read from. If unset, the file
     * will be read from HEAD.
     *
     * Generated from protobuf field <code>string commit_sha = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $commit_sha = '';
    /**
     * Required. Full file path to read including filename, from repository root.
     *
     * Generated from protobuf field <code>string path = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $path = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The repository's name.
     *     @type string $commit_sha
     *           Optional. The commit SHA for the commit to read from. If unset, the file
     *           will be read from HEAD.
     *     @type string $path
     *           Required. Full file path to read including filename, from repository root.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataform\V1Beta1\Dataform::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The repository's name.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The repository's name.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Optional. The commit SHA for the commit to read from. If unset, the file
     * will be read from HEAD.
     *
     * Generated from protobuf field <code>string commit_sha = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getCommitSha()
    {
        return $this->commit_sha;
    }

    /**
     * Optional. The commit SHA for the commit to read from. If unset, the file
     * will be read from HEAD.
     *
     * Generated from protobuf field <code>string commit_sha = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setCommitSha($var)
    {
        GPBUtil::checkString($var, True);
        $this->commit_sha = $var;

        return $this;
    }

    /**
     * Required. Full file path to read including filename, from repository root.
     *
     * Generated from protobuf field <code>string path = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Required. Full file path to read including filename, from repository root.
     *
     * Generated from protobuf field <code>string path = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->path = $var;

        return $this;
    }

}
