<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/resource_value_config.proto

namespace Google\Cloud\SecurityCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A resource value configuration (RVC) is a mapping configuration of user's
 * resources to resource values. Used in Attack path simulations.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1.ResourceValueConfig</code>
 */
class ResourceValueConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Name for the resource value configuration
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Required. Resource value level this expression represents
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.ResourceValue resource_value = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $resource_value = 0;
    /**
     * Required. Tag values combined with `AND` to check against.
     * Values in the form "tagValues/123"
     * Example: `[ "tagValues/123", "tagValues/456", "tagValues/789" ]`
     * https://cloud.google.com/resource-manager/docs/tags/tags-creating-and-managing
     *
     * Generated from protobuf field <code>repeated string tag_values = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $tag_values;
    /**
     * Apply resource_value only to resources that match resource_type.
     * resource_type will be checked with `AND` of other resources.
     * For example, "storage.googleapis.com/Bucket" with resource_value "HIGH"
     * will apply "HIGH" value only to "storage.googleapis.com/Bucket" resources.
     *
     * Generated from protobuf field <code>string resource_type = 4;</code>
     */
    private $resource_type = '';
    /**
     * Project or folder to scope this configuration to.
     * For example, "project/456" would apply this configuration only to resources
     * in "project/456" scope will be checked with `AND` of other
     * resources.
     *
     * Generated from protobuf field <code>string scope = 5;</code>
     */
    private $scope = '';
    /**
     * List of resource labels to search for, evaluated with `AND`.
     * For example, `"resource_labels_selector": {"key": "value", "env": "prod"}`
     * will match resources with labels "key": "value" `AND` "env":
     * "prod"
     * https://cloud.google.com/resource-manager/docs/creating-managing-labels
     *
     * Generated from protobuf field <code>map<string, string> resource_labels_selector = 6;</code>
     */
    private $resource_labels_selector;
    /**
     * Description of the resource value configuration.
     *
     * Generated from protobuf field <code>string description = 7;</code>
     */
    private $description = '';
    /**
     * Output only. Timestamp this resource value configuration was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. Timestamp this resource value configuration was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $update_time = null;
    /**
     * Cloud provider this configuration applies to
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.CloudProvider cloud_provider = 10;</code>
     */
    private $cloud_provider = 0;
    /**
     * A mapping of the sensitivity on Sensitive Data Protection finding to
     * resource values. This mapping can only be used in combination with a
     * resource_type that is related to BigQuery, e.g.
     * "bigquery.googleapis.com/Dataset".
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.ResourceValueConfig.SensitiveDataProtectionMapping sensitive_data_protection_mapping = 11;</code>
     */
    private $sensitive_data_protection_mapping = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Name for the resource value configuration
     *     @type int $resource_value
     *           Required. Resource value level this expression represents
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $tag_values
     *           Required. Tag values combined with `AND` to check against.
     *           Values in the form "tagValues/123"
     *           Example: `[ "tagValues/123", "tagValues/456", "tagValues/789" ]`
     *           https://cloud.google.com/resource-manager/docs/tags/tags-creating-and-managing
     *     @type string $resource_type
     *           Apply resource_value only to resources that match resource_type.
     *           resource_type will be checked with `AND` of other resources.
     *           For example, "storage.googleapis.com/Bucket" with resource_value "HIGH"
     *           will apply "HIGH" value only to "storage.googleapis.com/Bucket" resources.
     *     @type string $scope
     *           Project or folder to scope this configuration to.
     *           For example, "project/456" would apply this configuration only to resources
     *           in "project/456" scope will be checked with `AND` of other
     *           resources.
     *     @type array|\Google\Protobuf\Internal\MapField $resource_labels_selector
     *           List of resource labels to search for, evaluated with `AND`.
     *           For example, `"resource_labels_selector": {"key": "value", "env": "prod"}`
     *           will match resources with labels "key": "value" `AND` "env":
     *           "prod"
     *           https://cloud.google.com/resource-manager/docs/creating-managing-labels
     *     @type string $description
     *           Description of the resource value configuration.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Timestamp this resource value configuration was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. Timestamp this resource value configuration was last updated.
     *     @type int $cloud_provider
     *           Cloud provider this configuration applies to
     *     @type \Google\Cloud\SecurityCenter\V1\ResourceValueConfig\SensitiveDataProtectionMapping $sensitive_data_protection_mapping
     *           A mapping of the sensitivity on Sensitive Data Protection finding to
     *           resource values. This mapping can only be used in combination with a
     *           resource_type that is related to BigQuery, e.g.
     *           "bigquery.googleapis.com/Dataset".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1\ResourceValueConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * Name for the resource value configuration
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Name for the resource value configuration
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * Required. Resource value level this expression represents
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.ResourceValue resource_value = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getResourceValue()
    {
        return $this->resource_value;
    }

    /**
     * Required. Resource value level this expression represents
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.ResourceValue resource_value = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setResourceValue($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\SecurityCenter\V1\ResourceValue::class);
        $this->resource_value = $var;

        return $this;
    }

    /**
     * Required. Tag values combined with `AND` to check against.
     * Values in the form "tagValues/123"
     * Example: `[ "tagValues/123", "tagValues/456", "tagValues/789" ]`
     * https://cloud.google.com/resource-manager/docs/tags/tags-creating-and-managing
     *
     * Generated from protobuf field <code>repeated string tag_values = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTagValues()
    {
        return $this->tag_values;
    }

    /**
     * Required. Tag values combined with `AND` to check against.
     * Values in the form "tagValues/123"
     * Example: `[ "tagValues/123", "tagValues/456", "tagValues/789" ]`
     * https://cloud.google.com/resource-manager/docs/tags/tags-creating-and-managing
     *
     * Generated from protobuf field <code>repeated string tag_values = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTagValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->tag_values = $arr;

        return $this;
    }

    /**
     * Apply resource_value only to resources that match resource_type.
     * resource_type will be checked with `AND` of other resources.
     * For example, "storage.googleapis.com/Bucket" with resource_value "HIGH"
     * will apply "HIGH" value only to "storage.googleapis.com/Bucket" resources.
     *
     * Generated from protobuf field <code>string resource_type = 4;</code>
     * @return string
     */
    public function getResourceType()
    {
        return $this->resource_type;
    }

    /**
     * Apply resource_value only to resources that match resource_type.
     * resource_type will be checked with `AND` of other resources.
     * For example, "storage.googleapis.com/Bucket" with resource_value "HIGH"
     * will apply "HIGH" value only to "storage.googleapis.com/Bucket" resources.
     *
     * Generated from protobuf field <code>string resource_type = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceType($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_type = $var;

        return $this;
    }

    /**
     * Project or folder to scope this configuration to.
     * For example, "project/456" would apply this configuration only to resources
     * in "project/456" scope will be checked with `AND` of other
     * resources.
     *
     * Generated from protobuf field <code>string scope = 5;</code>
     * @return string
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * Project or folder to scope this configuration to.
     * For example, "project/456" would apply this configuration only to resources
     * in "project/456" scope will be checked with `AND` of other
     * resources.
     *
     * Generated from protobuf field <code>string scope = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setScope($var)
    {
        GPBUtil::checkString($var, True);
        $this->scope = $var;

        return $this;
    }

    /**
     * List of resource labels to search for, evaluated with `AND`.
     * For example, `"resource_labels_selector": {"key": "value", "env": "prod"}`
     * will match resources with labels "key": "value" `AND` "env":
     * "prod"
     * https://cloud.google.com/resource-manager/docs/creating-managing-labels
     *
     * Generated from protobuf field <code>map<string, string> resource_labels_selector = 6;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getResourceLabelsSelector()
    {
        return $this->resource_labels_selector;
    }

    /**
     * List of resource labels to search for, evaluated with `AND`.
     * For example, `"resource_labels_selector": {"key": "value", "env": "prod"}`
     * will match resources with labels "key": "value" `AND` "env":
     * "prod"
     * https://cloud.google.com/resource-manager/docs/creating-managing-labels
     *
     * Generated from protobuf field <code>map<string, string> resource_labels_selector = 6;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setResourceLabelsSelector($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->resource_labels_selector = $arr;

        return $this;
    }

    /**
     * Description of the resource value configuration.
     *
     * Generated from protobuf field <code>string description = 7;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Description of the resource value configuration.
     *
     * Generated from protobuf field <code>string description = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Output only. Timestamp this resource value configuration was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. Timestamp this resource value configuration was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. Timestamp this resource value configuration was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. Timestamp this resource value configuration was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Cloud provider this configuration applies to
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.CloudProvider cloud_provider = 10;</code>
     * @return int
     */
    public function getCloudProvider()
    {
        return $this->cloud_provider;
    }

    /**
     * Cloud provider this configuration applies to
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.CloudProvider cloud_provider = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setCloudProvider($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\SecurityCenter\V1\CloudProvider::class);
        $this->cloud_provider = $var;

        return $this;
    }

    /**
     * A mapping of the sensitivity on Sensitive Data Protection finding to
     * resource values. This mapping can only be used in combination with a
     * resource_type that is related to BigQuery, e.g.
     * "bigquery.googleapis.com/Dataset".
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.ResourceValueConfig.SensitiveDataProtectionMapping sensitive_data_protection_mapping = 11;</code>
     * @return \Google\Cloud\SecurityCenter\V1\ResourceValueConfig\SensitiveDataProtectionMapping|null
     */
    public function getSensitiveDataProtectionMapping()
    {
        return $this->sensitive_data_protection_mapping;
    }

    public function hasSensitiveDataProtectionMapping()
    {
        return isset($this->sensitive_data_protection_mapping);
    }

    public function clearSensitiveDataProtectionMapping()
    {
        unset($this->sensitive_data_protection_mapping);
    }

    /**
     * A mapping of the sensitivity on Sensitive Data Protection finding to
     * resource values. This mapping can only be used in combination with a
     * resource_type that is related to BigQuery, e.g.
     * "bigquery.googleapis.com/Dataset".
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.ResourceValueConfig.SensitiveDataProtectionMapping sensitive_data_protection_mapping = 11;</code>
     * @param \Google\Cloud\SecurityCenter\V1\ResourceValueConfig\SensitiveDataProtectionMapping $var
     * @return $this
     */
    public function setSensitiveDataProtectionMapping($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\SecurityCenter\V1\ResourceValueConfig\SensitiveDataProtectionMapping::class);
        $this->sensitive_data_protection_mapping = $var;

        return $this;
    }

}
