<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * InfoType description.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.InfoTypeDescription</code>
 */
class InfoTypeDescription extends \Google\Protobuf\Internal\Message
{
    /**
     * Internal name of the infoType.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Human readable form of the infoType name.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     */
    private $display_name = '';
    /**
     * Which parts of the API supports this InfoType.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.InfoTypeSupportedBy supported_by = 3;</code>
     */
    private $supported_by;
    /**
     * Description of the infotype. Translated when language is provided in the
     * request.
     *
     * Generated from protobuf field <code>string description = 4;</code>
     */
    private $description = '';
    /**
     * A list of available versions for the infotype.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.VersionDescription versions = 9;</code>
     */
    private $versions;
    /**
     * The category of the infoType.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.InfoTypeCategory categories = 10;</code>
     */
    private $categories;
    /**
     * The default sensitivity of the infoType.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.SensitivityScore sensitivity_score = 11;</code>
     */
    private $sensitivity_score = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Internal name of the infoType.
     *     @type string $display_name
     *           Human readable form of the infoType name.
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $supported_by
     *           Which parts of the API supports this InfoType.
     *     @type string $description
     *           Description of the infotype. Translated when language is provided in the
     *           request.
     *     @type array<\Google\Cloud\Dlp\V2\VersionDescription>|\Google\Protobuf\Internal\RepeatedField $versions
     *           A list of available versions for the infotype.
     *     @type array<\Google\Cloud\Dlp\V2\InfoTypeCategory>|\Google\Protobuf\Internal\RepeatedField $categories
     *           The category of the infoType.
     *     @type \Google\Cloud\Dlp\V2\SensitivityScore $sensitivity_score
     *           The default sensitivity of the infoType.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Internal name of the infoType.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Internal name of the infoType.
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
     * Human readable form of the infoType name.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Human readable form of the infoType name.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
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
     * Which parts of the API supports this InfoType.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.InfoTypeSupportedBy supported_by = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSupportedBy()
    {
        return $this->supported_by;
    }

    /**
     * Which parts of the API supports this InfoType.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.InfoTypeSupportedBy supported_by = 3;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSupportedBy($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\Dlp\V2\InfoTypeSupportedBy::class);
        $this->supported_by = $arr;

        return $this;
    }

    /**
     * Description of the infotype. Translated when language is provided in the
     * request.
     *
     * Generated from protobuf field <code>string description = 4;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Description of the infotype. Translated when language is provided in the
     * request.
     *
     * Generated from protobuf field <code>string description = 4;</code>
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
     * A list of available versions for the infotype.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.VersionDescription versions = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getVersions()
    {
        return $this->versions;
    }

    /**
     * A list of available versions for the infotype.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.VersionDescription versions = 9;</code>
     * @param array<\Google\Cloud\Dlp\V2\VersionDescription>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setVersions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dlp\V2\VersionDescription::class);
        $this->versions = $arr;

        return $this;
    }

    /**
     * The category of the infoType.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.InfoTypeCategory categories = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * The category of the infoType.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.InfoTypeCategory categories = 10;</code>
     * @param array<\Google\Cloud\Dlp\V2\InfoTypeCategory>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCategories($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dlp\V2\InfoTypeCategory::class);
        $this->categories = $arr;

        return $this;
    }

    /**
     * The default sensitivity of the infoType.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.SensitivityScore sensitivity_score = 11;</code>
     * @return \Google\Cloud\Dlp\V2\SensitivityScore|null
     */
    public function getSensitivityScore()
    {
        return $this->sensitivity_score;
    }

    public function hasSensitivityScore()
    {
        return isset($this->sensitivity_score);
    }

    public function clearSensitivityScore()
    {
        unset($this->sensitivity_score);
    }

    /**
     * The default sensitivity of the infoType.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.SensitivityScore sensitivity_score = 11;</code>
     * @param \Google\Cloud\Dlp\V2\SensitivityScore $var
     * @return $this
     */
    public function setSensitivityScore($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\SensitivityScore::class);
        $this->sensitivity_score = $var;

        return $this;
    }

}
