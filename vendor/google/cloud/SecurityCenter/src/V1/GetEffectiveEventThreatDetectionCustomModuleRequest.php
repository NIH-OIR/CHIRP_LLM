<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/securitycenter_service.proto

namespace Google\Cloud\SecurityCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to get an EffectiveEventThreatDetectionCustomModule.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1.GetEffectiveEventThreatDetectionCustomModuleRequest</code>
 */
class GetEffectiveEventThreatDetectionCustomModuleRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the effective Event Threat Detection custom
     * module.
     * Its format is:
     *   * `organizations/{organization}/eventThreatDetectionSettings/effectiveCustomModules/{module}`.
     *   * `folders/{folder}/eventThreatDetectionSettings/effectiveCustomModules/{module}`.
     *   * `projects/{project}/eventThreatDetectionSettings/effectiveCustomModules/{module}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';

    /**
     * @param string $name Required. The resource name of the effective Event Threat Detection custom
     *                     module.
     *
     *                     Its format is:
     *
     *                     * `organizations/{organization}/eventThreatDetectionSettings/effectiveCustomModules/{module}`.
     *                     * `folders/{folder}/eventThreatDetectionSettings/effectiveCustomModules/{module}`.
     *                     * `projects/{project}/eventThreatDetectionSettings/effectiveCustomModules/{module}`. Please see
     *                     {@see SecurityCenterClient::effectiveEventThreatDetectionCustomModuleName()} for help formatting this field.
     *
     * @return \Google\Cloud\SecurityCenter\V1\GetEffectiveEventThreatDetectionCustomModuleRequest
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
     *           Required. The resource name of the effective Event Threat Detection custom
     *           module.
     *           Its format is:
     *             * `organizations/{organization}/eventThreatDetectionSettings/effectiveCustomModules/{module}`.
     *             * `folders/{folder}/eventThreatDetectionSettings/effectiveCustomModules/{module}`.
     *             * `projects/{project}/eventThreatDetectionSettings/effectiveCustomModules/{module}`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1\SecuritycenterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the effective Event Threat Detection custom
     * module.
     * Its format is:
     *   * `organizations/{organization}/eventThreatDetectionSettings/effectiveCustomModules/{module}`.
     *   * `folders/{folder}/eventThreatDetectionSettings/effectiveCustomModules/{module}`.
     *   * `projects/{project}/eventThreatDetectionSettings/effectiveCustomModules/{module}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the effective Event Threat Detection custom
     * module.
     * Its format is:
     *   * `organizations/{organization}/eventThreatDetectionSettings/effectiveCustomModules/{module}`.
     *   * `folders/{folder}/eventThreatDetectionSettings/effectiveCustomModules/{module}`.
     *   * `projects/{project}/eventThreatDetectionSettings/effectiveCustomModules/{module}`.
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

}
