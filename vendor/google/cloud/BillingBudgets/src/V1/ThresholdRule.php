<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/billing/budgets/v1/budget_model.proto

namespace Google\Cloud\Billing\Budgets\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ThresholdRule contains the definition of a threshold. Threshold rules define
 * the triggering events used to generate a budget notification email. When a
 * threshold is crossed (spend exceeds the specified percentages of the
 * budget), budget alert emails are sent to the email recipients you specify
 * in the
 * [NotificationsRule](#notificationsrule).
 * Threshold rules also affect the fields included in the
 * [JSON data
 * object](https://cloud.google.com/billing/docs/how-to/budgets-programmatic-notifications#notification_format)
 * sent to a Pub/Sub topic.
 * Threshold rules are _required_ if using email notifications.
 * Threshold rules are _optional_ if only setting a
 * [`pubsubTopic` NotificationsRule](#NotificationsRule),
 * unless you want your JSON data object to include data about the thresholds
 * you set.
 * For more information, see
 * [set budget threshold rules and
 * actions](https://cloud.google.com/billing/docs/how-to/budgets#budget-actions).
 *
 * Generated from protobuf message <code>google.cloud.billing.budgets.v1.ThresholdRule</code>
 */
class ThresholdRule extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Send an alert when this threshold is exceeded.
     * This is a 1.0-based percentage, so 0.5 = 50%.
     * Validation: non-negative number.
     *
     * Generated from protobuf field <code>double threshold_percent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $threshold_percent = 0.0;
    /**
     * Optional. The type of basis used to determine if spend has passed the
     * threshold. Behavior defaults to CURRENT_SPEND if not set.
     *
     * Generated from protobuf field <code>.google.cloud.billing.budgets.v1.ThresholdRule.Basis spend_basis = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $spend_basis = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $threshold_percent
     *           Required. Send an alert when this threshold is exceeded.
     *           This is a 1.0-based percentage, so 0.5 = 50%.
     *           Validation: non-negative number.
     *     @type int $spend_basis
     *           Optional. The type of basis used to determine if spend has passed the
     *           threshold. Behavior defaults to CURRENT_SPEND if not set.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Billing\Budgets\V1\BudgetModel::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Send an alert when this threshold is exceeded.
     * This is a 1.0-based percentage, so 0.5 = 50%.
     * Validation: non-negative number.
     *
     * Generated from protobuf field <code>double threshold_percent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return float
     */
    public function getThresholdPercent()
    {
        return $this->threshold_percent;
    }

    /**
     * Required. Send an alert when this threshold is exceeded.
     * This is a 1.0-based percentage, so 0.5 = 50%.
     * Validation: non-negative number.
     *
     * Generated from protobuf field <code>double threshold_percent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param float $var
     * @return $this
     */
    public function setThresholdPercent($var)
    {
        GPBUtil::checkDouble($var);
        $this->threshold_percent = $var;

        return $this;
    }

    /**
     * Optional. The type of basis used to determine if spend has passed the
     * threshold. Behavior defaults to CURRENT_SPEND if not set.
     *
     * Generated from protobuf field <code>.google.cloud.billing.budgets.v1.ThresholdRule.Basis spend_basis = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getSpendBasis()
    {
        return $this->spend_basis;
    }

    /**
     * Optional. The type of basis used to determine if spend has passed the
     * threshold. Behavior defaults to CURRENT_SPEND if not set.
     *
     * Generated from protobuf field <code>.google.cloud.billing.budgets.v1.ThresholdRule.Basis spend_basis = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setSpendBasis($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Billing\Budgets\V1\ThresholdRule\Basis::class);
        $this->spend_basis = $var;

        return $this;
    }

}
