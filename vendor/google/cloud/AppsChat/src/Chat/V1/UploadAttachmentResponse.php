<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/chat/v1/attachment.proto

namespace Google\Apps\Chat\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response of uploading an attachment.
 *
 * Generated from protobuf message <code>google.chat.v1.UploadAttachmentResponse</code>
 */
class UploadAttachmentResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Reference to the uploaded attachment.
     *
     * Generated from protobuf field <code>.google.chat.v1.AttachmentDataRef attachment_data_ref = 1;</code>
     */
    protected $attachment_data_ref = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Apps\Chat\V1\AttachmentDataRef $attachment_data_ref
     *           Reference to the uploaded attachment.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Chat\V1\Attachment::initOnce();
        parent::__construct($data);
    }

    /**
     * Reference to the uploaded attachment.
     *
     * Generated from protobuf field <code>.google.chat.v1.AttachmentDataRef attachment_data_ref = 1;</code>
     * @return \Google\Apps\Chat\V1\AttachmentDataRef|null
     */
    public function getAttachmentDataRef()
    {
        return $this->attachment_data_ref;
    }

    public function hasAttachmentDataRef()
    {
        return isset($this->attachment_data_ref);
    }

    public function clearAttachmentDataRef()
    {
        unset($this->attachment_data_ref);
    }

    /**
     * Reference to the uploaded attachment.
     *
     * Generated from protobuf field <code>.google.chat.v1.AttachmentDataRef attachment_data_ref = 1;</code>
     * @param \Google\Apps\Chat\V1\AttachmentDataRef $var
     * @return $this
     */
    public function setAttachmentDataRef($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Chat\V1\AttachmentDataRef::class);
        $this->attachment_data_ref = $var;

        return $this;
    }

}
