<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/translate/v3/adaptive_mt.proto

namespace Google\Cloud\Translate\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An AdaptiveMtTranslate response.
 *
 * Generated from protobuf message <code>google.cloud.translation.v3.AdaptiveMtTranslateResponse</code>
 */
class AdaptiveMtTranslateResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The translation.
     *
     * Generated from protobuf field <code>repeated .google.cloud.translation.v3.AdaptiveMtTranslation translations = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $translations;
    /**
     * Output only. The translation's language code.
     *
     * Generated from protobuf field <code>string language_code = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $language_code = '';
    /**
     * Text translation response if a glossary is provided in the request. This
     * could be the same as 'translation' above if no terms apply.
     *
     * Generated from protobuf field <code>repeated .google.cloud.translation.v3.AdaptiveMtTranslation glossary_translations = 4;</code>
     */
    private $glossary_translations;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Translate\V3\AdaptiveMtTranslation>|\Google\Protobuf\Internal\RepeatedField $translations
     *           Output only. The translation.
     *     @type string $language_code
     *           Output only. The translation's language code.
     *     @type array<\Google\Cloud\Translate\V3\AdaptiveMtTranslation>|\Google\Protobuf\Internal\RepeatedField $glossary_translations
     *           Text translation response if a glossary is provided in the request. This
     *           could be the same as 'translation' above if no terms apply.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Translate\V3\AdaptiveMt::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The translation.
     *
     * Generated from protobuf field <code>repeated .google.cloud.translation.v3.AdaptiveMtTranslation translations = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTranslations()
    {
        return $this->translations;
    }

    /**
     * Output only. The translation.
     *
     * Generated from protobuf field <code>repeated .google.cloud.translation.v3.AdaptiveMtTranslation translations = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Cloud\Translate\V3\AdaptiveMtTranslation>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTranslations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Translate\V3\AdaptiveMtTranslation::class);
        $this->translations = $arr;

        return $this;
    }

    /**
     * Output only. The translation's language code.
     *
     * Generated from protobuf field <code>string language_code = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * Output only. The translation's language code.
     *
     * Generated from protobuf field <code>string language_code = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->language_code = $var;

        return $this;
    }

    /**
     * Text translation response if a glossary is provided in the request. This
     * could be the same as 'translation' above if no terms apply.
     *
     * Generated from protobuf field <code>repeated .google.cloud.translation.v3.AdaptiveMtTranslation glossary_translations = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGlossaryTranslations()
    {
        return $this->glossary_translations;
    }

    /**
     * Text translation response if a glossary is provided in the request. This
     * could be the same as 'translation' above if no terms apply.
     *
     * Generated from protobuf field <code>repeated .google.cloud.translation.v3.AdaptiveMtTranslation glossary_translations = 4;</code>
     * @param array<\Google\Cloud\Translate\V3\AdaptiveMtTranslation>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGlossaryTranslations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Translate\V3\AdaptiveMtTranslation::class);
        $this->glossary_translations = $arr;

        return $this;
    }

}
