<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/notebooks/v2/service.proto

namespace Google\Cloud\Notebooks\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for checking if a notebook instance is upgradeable.
 *
 * Generated from protobuf message <code>google.cloud.notebooks.v2.CheckInstanceUpgradabilityRequest</code>
 */
class CheckInstanceUpgradabilityRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Format:
     * `projects/{project_id}/locations/{location}/instances/{instance_id}`
     *
     * Generated from protobuf field <code>string notebook_instance = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $notebook_instance = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $notebook_instance
     *           Required. Format:
     *           `projects/{project_id}/locations/{location}/instances/{instance_id}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Notebooks\V2\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Format:
     * `projects/{project_id}/locations/{location}/instances/{instance_id}`
     *
     * Generated from protobuf field <code>string notebook_instance = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getNotebookInstance()
    {
        return $this->notebook_instance;
    }

    /**
     * Required. Format:
     * `projects/{project_id}/locations/{location}/instances/{instance_id}`
     *
     * Generated from protobuf field <code>string notebook_instance = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setNotebookInstance($var)
    {
        GPBUtil::checkString($var, True);
        $this->notebook_instance = $var;

        return $this;
    }

}
