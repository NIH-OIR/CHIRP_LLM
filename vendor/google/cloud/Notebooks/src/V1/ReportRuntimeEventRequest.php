<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/notebooks/v1/managed_service.proto

namespace Google\Cloud\Notebooks\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for reporting a Managed Notebook Event.
 *
 * Generated from protobuf message <code>google.cloud.notebooks.v1.ReportRuntimeEventRequest</code>
 */
class ReportRuntimeEventRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Format:
     * `projects/{project_id}/locations/{location}/runtimes/{runtime_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Required. The VM hardware token for authenticating the VM.
     * https://cloud.google.com/compute/docs/instances/verifying-instance-identity
     *
     * Generated from protobuf field <code>string vm_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $vm_id = '';
    /**
     * Required. The Event to be reported.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v1.Event event = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $event = null;

    /**
     * @param string $name Required. Format:
     *                     `projects/{project_id}/locations/{location}/runtimes/{runtime_id}`
     *                     Please see {@see ManagedNotebookServiceClient::runtimeName()} for help formatting this field.
     *
     * @return \Google\Cloud\Notebooks\V1\ReportRuntimeEventRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Format:
     *           `projects/{project_id}/locations/{location}/runtimes/{runtime_id}`
     *     @type string $vm_id
     *           Required. The VM hardware token for authenticating the VM.
     *           https://cloud.google.com/compute/docs/instances/verifying-instance-identity
     *     @type \Google\Cloud\Notebooks\V1\Event $event
     *           Required. The Event to be reported.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Notebooks\V1\ManagedService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Format:
     * `projects/{project_id}/locations/{location}/runtimes/{runtime_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Format:
     * `projects/{project_id}/locations/{location}/runtimes/{runtime_id}`
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
     * Required. The VM hardware token for authenticating the VM.
     * https://cloud.google.com/compute/docs/instances/verifying-instance-identity
     *
     * Generated from protobuf field <code>string vm_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getVmId()
    {
        return $this->vm_id;
    }

    /**
     * Required. The VM hardware token for authenticating the VM.
     * https://cloud.google.com/compute/docs/instances/verifying-instance-identity
     *
     * Generated from protobuf field <code>string vm_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setVmId($var)
    {
        GPBUtil::checkString($var, True);
        $this->vm_id = $var;

        return $this;
    }

    /**
     * Required. The Event to be reported.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v1.Event event = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Notebooks\V1\Event|null
     */
    public function getEvent()
    {
        return $this->event;
    }

    public function hasEvent()
    {
        return isset($this->event);
    }

    public function clearEvent()
    {
        unset($this->event);
    }

    /**
     * Required. The Event to be reported.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v1.Event event = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Notebooks\V1\Event $var
     * @return $this
     */
    public function setEvent($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Notebooks\V1\Event::class);
        $this->event = $var;

        return $this;
    }

}
