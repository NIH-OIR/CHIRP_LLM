<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/apps/card/v1/card.proto

namespace Google\Apps\Card\V1\Columns\Column;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The supported widgets that you can include in a column.
 * [Google Workspace Add-ons and Chat
 * apps](https://developers.google.com/workspace/extend):
 * Columns for Google Workspace Add-ons are in
 * Developer Preview.
 *
 * Generated from protobuf message <code>google.apps.card.v1.Columns.Column.Widgets</code>
 */
class Widgets extends \Google\Protobuf\Internal\Message
{
    protected $data;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Apps\Card\V1\TextParagraph $text_paragraph
     *           [TextParagraph][google.apps.card.v1.TextParagraph] widget.
     *     @type \Google\Apps\Card\V1\Image $image
     *           [Image][google.apps.card.v1.Image] widget.
     *     @type \Google\Apps\Card\V1\DecoratedText $decorated_text
     *           [DecoratedText][google.apps.card.v1.DecoratedText] widget.
     *     @type \Google\Apps\Card\V1\ButtonList $button_list
     *           [ButtonList][google.apps.card.v1.ButtonList] widget.
     *     @type \Google\Apps\Card\V1\TextInput $text_input
     *           [TextInput][google.apps.card.v1.TextInput] widget.
     *     @type \Google\Apps\Card\V1\SelectionInput $selection_input
     *           [SelectionInput][google.apps.card.v1.SelectionInput] widget.
     *     @type \Google\Apps\Card\V1\DateTimePicker $date_time_picker
     *           [DateTimePicker][google.apps.card.v1.DateTimePicker] widget.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Apps\Card\V1\Card::initOnce();
        parent::__construct($data);
    }

    /**
     * [TextParagraph][google.apps.card.v1.TextParagraph] widget.
     *
     * Generated from protobuf field <code>.google.apps.card.v1.TextParagraph text_paragraph = 1;</code>
     * @return \Google\Apps\Card\V1\TextParagraph|null
     */
    public function getTextParagraph()
    {
        return $this->readOneof(1);
    }

    public function hasTextParagraph()
    {
        return $this->hasOneof(1);
    }

    /**
     * [TextParagraph][google.apps.card.v1.TextParagraph] widget.
     *
     * Generated from protobuf field <code>.google.apps.card.v1.TextParagraph text_paragraph = 1;</code>
     * @param \Google\Apps\Card\V1\TextParagraph $var
     * @return $this
     */
    public function setTextParagraph($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Card\V1\TextParagraph::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * [Image][google.apps.card.v1.Image] widget.
     *
     * Generated from protobuf field <code>.google.apps.card.v1.Image image = 2;</code>
     * @return \Google\Apps\Card\V1\Image|null
     */
    public function getImage()
    {
        return $this->readOneof(2);
    }

    public function hasImage()
    {
        return $this->hasOneof(2);
    }

    /**
     * [Image][google.apps.card.v1.Image] widget.
     *
     * Generated from protobuf field <code>.google.apps.card.v1.Image image = 2;</code>
     * @param \Google\Apps\Card\V1\Image $var
     * @return $this
     */
    public function setImage($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Card\V1\Image::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * [DecoratedText][google.apps.card.v1.DecoratedText] widget.
     *
     * Generated from protobuf field <code>.google.apps.card.v1.DecoratedText decorated_text = 3;</code>
     * @return \Google\Apps\Card\V1\DecoratedText|null
     */
    public function getDecoratedText()
    {
        return $this->readOneof(3);
    }

    public function hasDecoratedText()
    {
        return $this->hasOneof(3);
    }

    /**
     * [DecoratedText][google.apps.card.v1.DecoratedText] widget.
     *
     * Generated from protobuf field <code>.google.apps.card.v1.DecoratedText decorated_text = 3;</code>
     * @param \Google\Apps\Card\V1\DecoratedText $var
     * @return $this
     */
    public function setDecoratedText($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Card\V1\DecoratedText::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * [ButtonList][google.apps.card.v1.ButtonList] widget.
     *
     * Generated from protobuf field <code>.google.apps.card.v1.ButtonList button_list = 4;</code>
     * @return \Google\Apps\Card\V1\ButtonList|null
     */
    public function getButtonList()
    {
        return $this->readOneof(4);
    }

    public function hasButtonList()
    {
        return $this->hasOneof(4);
    }

    /**
     * [ButtonList][google.apps.card.v1.ButtonList] widget.
     *
     * Generated from protobuf field <code>.google.apps.card.v1.ButtonList button_list = 4;</code>
     * @param \Google\Apps\Card\V1\ButtonList $var
     * @return $this
     */
    public function setButtonList($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Card\V1\ButtonList::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * [TextInput][google.apps.card.v1.TextInput] widget.
     *
     * Generated from protobuf field <code>.google.apps.card.v1.TextInput text_input = 5;</code>
     * @return \Google\Apps\Card\V1\TextInput|null
     */
    public function getTextInput()
    {
        return $this->readOneof(5);
    }

    public function hasTextInput()
    {
        return $this->hasOneof(5);
    }

    /**
     * [TextInput][google.apps.card.v1.TextInput] widget.
     *
     * Generated from protobuf field <code>.google.apps.card.v1.TextInput text_input = 5;</code>
     * @param \Google\Apps\Card\V1\TextInput $var
     * @return $this
     */
    public function setTextInput($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Card\V1\TextInput::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * [SelectionInput][google.apps.card.v1.SelectionInput] widget.
     *
     * Generated from protobuf field <code>.google.apps.card.v1.SelectionInput selection_input = 6;</code>
     * @return \Google\Apps\Card\V1\SelectionInput|null
     */
    public function getSelectionInput()
    {
        return $this->readOneof(6);
    }

    public function hasSelectionInput()
    {
        return $this->hasOneof(6);
    }

    /**
     * [SelectionInput][google.apps.card.v1.SelectionInput] widget.
     *
     * Generated from protobuf field <code>.google.apps.card.v1.SelectionInput selection_input = 6;</code>
     * @param \Google\Apps\Card\V1\SelectionInput $var
     * @return $this
     */
    public function setSelectionInput($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Card\V1\SelectionInput::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * [DateTimePicker][google.apps.card.v1.DateTimePicker] widget.
     *
     * Generated from protobuf field <code>.google.apps.card.v1.DateTimePicker date_time_picker = 7;</code>
     * @return \Google\Apps\Card\V1\DateTimePicker|null
     */
    public function getDateTimePicker()
    {
        return $this->readOneof(7);
    }

    public function hasDateTimePicker()
    {
        return $this->hasOneof(7);
    }

    /**
     * [DateTimePicker][google.apps.card.v1.DateTimePicker] widget.
     *
     * Generated from protobuf field <code>.google.apps.card.v1.DateTimePicker date_time_picker = 7;</code>
     * @param \Google\Apps\Card\V1\DateTimePicker $var
     * @return $this
     */
    public function setDateTimePicker($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Card\V1\DateTimePicker::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getData()
    {
        return $this->whichOneof("data");
    }

}

