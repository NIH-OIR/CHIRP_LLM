<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/control.proto

namespace Google\Cloud\DiscoveryEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Defines a conditioned behavior to employ during serving.
 * Must be attached to a [ServingConfig][] to be considered at serving time.
 * Permitted actions dependent on `SolutionType`.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.Control</code>
 */
class Control extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. Fully qualified name
     * `projects/&#42;&#47;locations/global/dataStore/&#42;&#47;controls/&#42;`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $name = '';
    /**
     * Required. Human readable name. The identifier used in UI views.
     * Must be UTF-8 encoded string. Length limit is 128 characters.
     * Otherwise an INVALID ARGUMENT error is thrown.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $display_name = '';
    /**
     * Output only. List of all [ServingConfig][] ids this control is attached to.
     * May take up to 10 minutes to update after changes.
     *
     * Generated from protobuf field <code>repeated string associated_serving_config_ids = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $associated_serving_config_ids;
    /**
     * Required. Immutable. What solution the control belongs to.
     * Must be compatible with vertical of resource.
     * Otherwise an INVALID ARGUMENT error is thrown.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.SolutionType solution_type = 4 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $solution_type = 0;
    /**
     * Specifies the use case for the control.
     * Affects what condition fields can be set.
     * Only applies to
     * [SOLUTION_TYPE_SEARCH][google.cloud.discoveryengine.v1.SolutionType.SOLUTION_TYPE_SEARCH].
     * Currently only allow one use case per control.
     * Must be set when solution_type is
     * [SolutionType.SOLUTION_TYPE_SEARCH][google.cloud.discoveryengine.v1.SolutionType.SOLUTION_TYPE_SEARCH].
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.SearchUseCase use_cases = 8;</code>
     */
    private $use_cases;
    /**
     * Determines when the associated action will trigger.
     * Omit to always apply the action.
     * Currently only a single condition may be specified.
     * Otherwise an INVALID ARGUMENT error is thrown.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.Condition conditions = 5;</code>
     */
    private $conditions;
    protected $action;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DiscoveryEngine\V1\Control\BoostAction $boost_action
     *           Defines a boost-type control
     *     @type \Google\Cloud\DiscoveryEngine\V1\Control\FilterAction $filter_action
     *           Defines a filter-type control
     *           Currently not supported by Recommendation
     *     @type \Google\Cloud\DiscoveryEngine\V1\Control\RedirectAction $redirect_action
     *           Defines a redirect-type control.
     *     @type \Google\Cloud\DiscoveryEngine\V1\Control\SynonymsAction $synonyms_action
     *           Treats a group of terms as synonyms of one another.
     *     @type string $name
     *           Immutable. Fully qualified name
     *           `projects/&#42;&#47;locations/global/dataStore/&#42;&#47;controls/&#42;`
     *     @type string $display_name
     *           Required. Human readable name. The identifier used in UI views.
     *           Must be UTF-8 encoded string. Length limit is 128 characters.
     *           Otherwise an INVALID ARGUMENT error is thrown.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $associated_serving_config_ids
     *           Output only. List of all [ServingConfig][] ids this control is attached to.
     *           May take up to 10 minutes to update after changes.
     *     @type int $solution_type
     *           Required. Immutable. What solution the control belongs to.
     *           Must be compatible with vertical of resource.
     *           Otherwise an INVALID ARGUMENT error is thrown.
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $use_cases
     *           Specifies the use case for the control.
     *           Affects what condition fields can be set.
     *           Only applies to
     *           [SOLUTION_TYPE_SEARCH][google.cloud.discoveryengine.v1.SolutionType.SOLUTION_TYPE_SEARCH].
     *           Currently only allow one use case per control.
     *           Must be set when solution_type is
     *           [SolutionType.SOLUTION_TYPE_SEARCH][google.cloud.discoveryengine.v1.SolutionType.SOLUTION_TYPE_SEARCH].
     *     @type array<\Google\Cloud\DiscoveryEngine\V1\Condition>|\Google\Protobuf\Internal\RepeatedField $conditions
     *           Determines when the associated action will trigger.
     *           Omit to always apply the action.
     *           Currently only a single condition may be specified.
     *           Otherwise an INVALID ARGUMENT error is thrown.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\Control::initOnce();
        parent::__construct($data);
    }

    /**
     * Defines a boost-type control
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.Control.BoostAction boost_action = 6;</code>
     * @return \Google\Cloud\DiscoveryEngine\V1\Control\BoostAction|null
     */
    public function getBoostAction()
    {
        return $this->readOneof(6);
    }

    public function hasBoostAction()
    {
        return $this->hasOneof(6);
    }

    /**
     * Defines a boost-type control
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.Control.BoostAction boost_action = 6;</code>
     * @param \Google\Cloud\DiscoveryEngine\V1\Control\BoostAction $var
     * @return $this
     */
    public function setBoostAction($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1\Control\BoostAction::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Defines a filter-type control
     * Currently not supported by Recommendation
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.Control.FilterAction filter_action = 7;</code>
     * @return \Google\Cloud\DiscoveryEngine\V1\Control\FilterAction|null
     */
    public function getFilterAction()
    {
        return $this->readOneof(7);
    }

    public function hasFilterAction()
    {
        return $this->hasOneof(7);
    }

    /**
     * Defines a filter-type control
     * Currently not supported by Recommendation
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.Control.FilterAction filter_action = 7;</code>
     * @param \Google\Cloud\DiscoveryEngine\V1\Control\FilterAction $var
     * @return $this
     */
    public function setFilterAction($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1\Control\FilterAction::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Defines a redirect-type control.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.Control.RedirectAction redirect_action = 9;</code>
     * @return \Google\Cloud\DiscoveryEngine\V1\Control\RedirectAction|null
     */
    public function getRedirectAction()
    {
        return $this->readOneof(9);
    }

    public function hasRedirectAction()
    {
        return $this->hasOneof(9);
    }

    /**
     * Defines a redirect-type control.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.Control.RedirectAction redirect_action = 9;</code>
     * @param \Google\Cloud\DiscoveryEngine\V1\Control\RedirectAction $var
     * @return $this
     */
    public function setRedirectAction($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1\Control\RedirectAction::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * Treats a group of terms as synonyms of one another.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.Control.SynonymsAction synonyms_action = 10;</code>
     * @return \Google\Cloud\DiscoveryEngine\V1\Control\SynonymsAction|null
     */
    public function getSynonymsAction()
    {
        return $this->readOneof(10);
    }

    public function hasSynonymsAction()
    {
        return $this->hasOneof(10);
    }

    /**
     * Treats a group of terms as synonyms of one another.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.Control.SynonymsAction synonyms_action = 10;</code>
     * @param \Google\Cloud\DiscoveryEngine\V1\Control\SynonymsAction $var
     * @return $this
     */
    public function setSynonymsAction($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1\Control\SynonymsAction::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * Immutable. Fully qualified name
     * `projects/&#42;&#47;locations/global/dataStore/&#42;&#47;controls/&#42;`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Immutable. Fully qualified name
     * `projects/&#42;&#47;locations/global/dataStore/&#42;&#47;controls/&#42;`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
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
     * Required. Human readable name. The identifier used in UI views.
     * Must be UTF-8 encoded string. Length limit is 128 characters.
     * Otherwise an INVALID ARGUMENT error is thrown.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Required. Human readable name. The identifier used in UI views.
     * Must be UTF-8 encoded string. Length limit is 128 characters.
     * Otherwise an INVALID ARGUMENT error is thrown.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Output only. List of all [ServingConfig][] ids this control is attached to.
     * May take up to 10 minutes to update after changes.
     *
     * Generated from protobuf field <code>repeated string associated_serving_config_ids = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAssociatedServingConfigIds()
    {
        return $this->associated_serving_config_ids;
    }

    /**
     * Output only. List of all [ServingConfig][] ids this control is attached to.
     * May take up to 10 minutes to update after changes.
     *
     * Generated from protobuf field <code>repeated string associated_serving_config_ids = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAssociatedServingConfigIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->associated_serving_config_ids = $arr;

        return $this;
    }

    /**
     * Required. Immutable. What solution the control belongs to.
     * Must be compatible with vertical of resource.
     * Otherwise an INVALID ARGUMENT error is thrown.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.SolutionType solution_type = 4 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getSolutionType()
    {
        return $this->solution_type;
    }

    /**
     * Required. Immutable. What solution the control belongs to.
     * Must be compatible with vertical of resource.
     * Otherwise an INVALID ARGUMENT error is thrown.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.SolutionType solution_type = 4 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setSolutionType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\DiscoveryEngine\V1\SolutionType::class);
        $this->solution_type = $var;

        return $this;
    }

    /**
     * Specifies the use case for the control.
     * Affects what condition fields can be set.
     * Only applies to
     * [SOLUTION_TYPE_SEARCH][google.cloud.discoveryengine.v1.SolutionType.SOLUTION_TYPE_SEARCH].
     * Currently only allow one use case per control.
     * Must be set when solution_type is
     * [SolutionType.SOLUTION_TYPE_SEARCH][google.cloud.discoveryengine.v1.SolutionType.SOLUTION_TYPE_SEARCH].
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.SearchUseCase use_cases = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUseCases()
    {
        return $this->use_cases;
    }

    /**
     * Specifies the use case for the control.
     * Affects what condition fields can be set.
     * Only applies to
     * [SOLUTION_TYPE_SEARCH][google.cloud.discoveryengine.v1.SolutionType.SOLUTION_TYPE_SEARCH].
     * Currently only allow one use case per control.
     * Must be set when solution_type is
     * [SolutionType.SOLUTION_TYPE_SEARCH][google.cloud.discoveryengine.v1.SolutionType.SOLUTION_TYPE_SEARCH].
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.SearchUseCase use_cases = 8;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUseCases($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\DiscoveryEngine\V1\SearchUseCase::class);
        $this->use_cases = $arr;

        return $this;
    }

    /**
     * Determines when the associated action will trigger.
     * Omit to always apply the action.
     * Currently only a single condition may be specified.
     * Otherwise an INVALID ARGUMENT error is thrown.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.Condition conditions = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getConditions()
    {
        return $this->conditions;
    }

    /**
     * Determines when the associated action will trigger.
     * Omit to always apply the action.
     * Currently only a single condition may be specified.
     * Otherwise an INVALID ARGUMENT error is thrown.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.Condition conditions = 5;</code>
     * @param array<\Google\Cloud\DiscoveryEngine\V1\Condition>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConditions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DiscoveryEngine\V1\Condition::class);
        $this->conditions = $arr;

        return $this;
    }

    /**
     * @return string
     */
    public function getAction()
    {
        return $this->whichOneof("action");
    }

}
