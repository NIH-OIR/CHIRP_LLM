<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/toxic_combination.proto

namespace Google\Cloud\SecurityCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Contains details about a group of security issues that, when the issues
 * occur together, represent a greater risk than when the issues occur
 * independently. A group of such issues is referred to as a toxic combination.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1.ToxicCombination</code>
 */
class ToxicCombination extends \Google\Protobuf\Internal\Message
{
    /**
     * The
     * [Attack exposure
     * score](https://cloud.google.com/security-command-center/docs/attack-exposure-learn#attack_exposure_scores)
     * of this toxic combination. The score is a measure of how much this toxic
     * combination exposes one or more high-value resources to potential attack.
     *
     * Generated from protobuf field <code>double attack_exposure_score = 1;</code>
     */
    private $attack_exposure_score = 0.0;
    /**
     * List of resource names of findings associated with this toxic combination.
     * For example, `organizations/123/sources/456/findings/789`.
     *
     * Generated from protobuf field <code>repeated string related_findings = 2;</code>
     */
    private $related_findings;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $attack_exposure_score
     *           The
     *           [Attack exposure
     *           score](https://cloud.google.com/security-command-center/docs/attack-exposure-learn#attack_exposure_scores)
     *           of this toxic combination. The score is a measure of how much this toxic
     *           combination exposes one or more high-value resources to potential attack.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $related_findings
     *           List of resource names of findings associated with this toxic combination.
     *           For example, `organizations/123/sources/456/findings/789`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1\ToxicCombination::initOnce();
        parent::__construct($data);
    }

    /**
     * The
     * [Attack exposure
     * score](https://cloud.google.com/security-command-center/docs/attack-exposure-learn#attack_exposure_scores)
     * of this toxic combination. The score is a measure of how much this toxic
     * combination exposes one or more high-value resources to potential attack.
     *
     * Generated from protobuf field <code>double attack_exposure_score = 1;</code>
     * @return float
     */
    public function getAttackExposureScore()
    {
        return $this->attack_exposure_score;
    }

    /**
     * The
     * [Attack exposure
     * score](https://cloud.google.com/security-command-center/docs/attack-exposure-learn#attack_exposure_scores)
     * of this toxic combination. The score is a measure of how much this toxic
     * combination exposes one or more high-value resources to potential attack.
     *
     * Generated from protobuf field <code>double attack_exposure_score = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setAttackExposureScore($var)
    {
        GPBUtil::checkDouble($var);
        $this->attack_exposure_score = $var;

        return $this;
    }

    /**
     * List of resource names of findings associated with this toxic combination.
     * For example, `organizations/123/sources/456/findings/789`.
     *
     * Generated from protobuf field <code>repeated string related_findings = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRelatedFindings()
    {
        return $this->related_findings;
    }

    /**
     * List of resource names of findings associated with this toxic combination.
     * For example, `organizations/123/sources/456/findings/789`.
     *
     * Generated from protobuf field <code>repeated string related_findings = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRelatedFindings($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->related_findings = $arr;

        return $this;
    }

}
