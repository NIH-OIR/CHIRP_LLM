<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/data_store_connection.proto

namespace Google\Cloud\Dialogflow\Cx\V3\DataStoreConnectionSignals;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Safety check results.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.DataStoreConnectionSignals.SafetySignals</code>
 */
class SafetySignals extends \Google\Protobuf\Internal\Message
{
    /**
     * Safety decision.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.DataStoreConnectionSignals.SafetySignals.SafetyDecision decision = 1;</code>
     */
    protected $decision = 0;
    /**
     * Specifies banned phrase match subject.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.DataStoreConnectionSignals.SafetySignals.BannedPhraseMatch banned_phrase_match = 2;</code>
     */
    protected $banned_phrase_match = 0;
    /**
     * The matched banned phrase if there was a match.
     *
     * Generated from protobuf field <code>string matched_banned_phrase = 3;</code>
     */
    protected $matched_banned_phrase = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $decision
     *           Safety decision.
     *     @type int $banned_phrase_match
     *           Specifies banned phrase match subject.
     *     @type string $matched_banned_phrase
     *           The matched banned phrase if there was a match.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\DataStoreConnection::initOnce();
        parent::__construct($data);
    }

    /**
     * Safety decision.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.DataStoreConnectionSignals.SafetySignals.SafetyDecision decision = 1;</code>
     * @return int
     */
    public function getDecision()
    {
        return $this->decision;
    }

    /**
     * Safety decision.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.DataStoreConnectionSignals.SafetySignals.SafetyDecision decision = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setDecision($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dialogflow\Cx\V3\DataStoreConnectionSignals\SafetySignals\SafetyDecision::class);
        $this->decision = $var;

        return $this;
    }

    /**
     * Specifies banned phrase match subject.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.DataStoreConnectionSignals.SafetySignals.BannedPhraseMatch banned_phrase_match = 2;</code>
     * @return int
     */
    public function getBannedPhraseMatch()
    {
        return $this->banned_phrase_match;
    }

    /**
     * Specifies banned phrase match subject.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.DataStoreConnectionSignals.SafetySignals.BannedPhraseMatch banned_phrase_match = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setBannedPhraseMatch($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dialogflow\Cx\V3\DataStoreConnectionSignals\SafetySignals\BannedPhraseMatch::class);
        $this->banned_phrase_match = $var;

        return $this;
    }

    /**
     * The matched banned phrase if there was a match.
     *
     * Generated from protobuf field <code>string matched_banned_phrase = 3;</code>
     * @return string
     */
    public function getMatchedBannedPhrase()
    {
        return $this->matched_banned_phrase;
    }

    /**
     * The matched banned phrase if there was a match.
     *
     * Generated from protobuf field <code>string matched_banned_phrase = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setMatchedBannedPhrase($var)
    {
        GPBUtil::checkString($var, True);
        $this->matched_banned_phrase = $var;

        return $this;
    }

}

