<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1/document.proto

namespace Google\Cloud\DocumentAI\V1\Document\DocumentLayout\DocumentLayoutBlock;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a row in a table.
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1.Document.DocumentLayout.DocumentLayoutBlock.LayoutTableRow</code>
 */
class LayoutTableRow extends \Google\Protobuf\Internal\Message
{
    /**
     * A table row is a list of table cells.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.DocumentLayout.DocumentLayoutBlock.LayoutTableCell cells = 1;</code>
     */
    private $cells;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\DocumentAI\V1\Document\DocumentLayout\DocumentLayoutBlock\LayoutTableCell>|\Google\Protobuf\Internal\RepeatedField $cells
     *           A table row is a list of table cells.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1\Document::initOnce();
        parent::__construct($data);
    }

    /**
     * A table row is a list of table cells.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.DocumentLayout.DocumentLayoutBlock.LayoutTableCell cells = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCells()
    {
        return $this->cells;
    }

    /**
     * A table row is a list of table cells.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.DocumentLayout.DocumentLayoutBlock.LayoutTableCell cells = 1;</code>
     * @param array<\Google\Cloud\DocumentAI\V1\Document\DocumentLayout\DocumentLayoutBlock\LayoutTableCell>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCells($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DocumentAI\V1\Document\DocumentLayout\DocumentLayoutBlock\LayoutTableCell::class);
        $this->cells = $arr;

        return $this;
    }

}

