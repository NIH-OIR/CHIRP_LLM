<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/servicehealth/v1/event_resources.proto

namespace Google\Cloud\ServiceHealth\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents impact to assets at organizational level. It is a read-only view
 * and does not allow any modifications.
 *
 * Generated from protobuf message <code>google.cloud.servicehealth.v1.OrganizationImpact</code>
 */
class OrganizationImpact extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Identifier. Unique name of the organization impact in this
     * scope including organization and location using the form
     * `organizations/{organization_id}/locations/{location}/organizationImpacts/{organization_impact_id}`.
     * `organization_id` - ID (number) of the organization that contains the
     * event. To get your `organization_id`, see
     * [Getting your organization resource
     * ID](https://cloud.google.com/resource-manager/docs/creating-managing-organization#retrieving_your_organization_id).<br>
     * `organization_impact_id` - ID of the [OrganizationImpact
     * resource](/service-health/docs/reference/rest/v1beta/organizations.locations.organizationImpacts#OrganizationImpact).
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.field_behavior) = IDENTIFIER];</code>
     */
    protected $name = '';
    /**
     * Output only. A list of event names impacting the asset.
     *
     * Generated from protobuf field <code>repeated string events = 2 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    private $events;
    /**
     * Output only. Google Cloud asset possibly impacted by the specified events.
     *
     * Generated from protobuf field <code>.google.cloud.servicehealth.v1.Asset asset = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $asset = null;
    /**
     * Output only. The time when the affected project was last modified.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Identifier. Unique name of the organization impact in this
     *           scope including organization and location using the form
     *           `organizations/{organization_id}/locations/{location}/organizationImpacts/{organization_impact_id}`.
     *           `organization_id` - ID (number) of the organization that contains the
     *           event. To get your `organization_id`, see
     *           [Getting your organization resource
     *           ID](https://cloud.google.com/resource-manager/docs/creating-managing-organization#retrieving_your_organization_id).<br>
     *           `organization_impact_id` - ID of the [OrganizationImpact
     *           resource](/service-health/docs/reference/rest/v1beta/organizations.locations.organizationImpacts#OrganizationImpact).
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $events
     *           Output only. A list of event names impacting the asset.
     *     @type \Google\Cloud\ServiceHealth\V1\Asset $asset
     *           Output only. Google Cloud asset possibly impacted by the specified events.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The time when the affected project was last modified.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Servicehealth\V1\EventResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Identifier. Unique name of the organization impact in this
     * scope including organization and location using the form
     * `organizations/{organization_id}/locations/{location}/organizationImpacts/{organization_impact_id}`.
     * `organization_id` - ID (number) of the organization that contains the
     * event. To get your `organization_id`, see
     * [Getting your organization resource
     * ID](https://cloud.google.com/resource-manager/docs/creating-managing-organization#retrieving_your_organization_id).<br>
     * `organization_impact_id` - ID of the [OrganizationImpact
     * resource](/service-health/docs/reference/rest/v1beta/organizations.locations.organizationImpacts#OrganizationImpact).
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.field_behavior) = IDENTIFIER];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Identifier. Unique name of the organization impact in this
     * scope including organization and location using the form
     * `organizations/{organization_id}/locations/{location}/organizationImpacts/{organization_impact_id}`.
     * `organization_id` - ID (number) of the organization that contains the
     * event. To get your `organization_id`, see
     * [Getting your organization resource
     * ID](https://cloud.google.com/resource-manager/docs/creating-managing-organization#retrieving_your_organization_id).<br>
     * `organization_impact_id` - ID of the [OrganizationImpact
     * resource](/service-health/docs/reference/rest/v1beta/organizations.locations.organizationImpacts#OrganizationImpact).
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.field_behavior) = IDENTIFIER];</code>
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
     * Output only. A list of event names impacting the asset.
     *
     * Generated from protobuf field <code>repeated string events = 2 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * Output only. A list of event names impacting the asset.
     *
     * Generated from protobuf field <code>repeated string events = 2 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEvents($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->events = $arr;

        return $this;
    }

    /**
     * Output only. Google Cloud asset possibly impacted by the specified events.
     *
     * Generated from protobuf field <code>.google.cloud.servicehealth.v1.Asset asset = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\ServiceHealth\V1\Asset|null
     */
    public function getAsset()
    {
        return $this->asset;
    }

    public function hasAsset()
    {
        return isset($this->asset);
    }

    public function clearAsset()
    {
        unset($this->asset);
    }

    /**
     * Output only. Google Cloud asset possibly impacted by the specified events.
     *
     * Generated from protobuf field <code>.google.cloud.servicehealth.v1.Asset asset = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\ServiceHealth\V1\Asset $var
     * @return $this
     */
    public function setAsset($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ServiceHealth\V1\Asset::class);
        $this->asset = $var;

        return $this;
    }

    /**
     * Output only. The time when the affected project was last modified.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The time when the affected project was last modified.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

}
