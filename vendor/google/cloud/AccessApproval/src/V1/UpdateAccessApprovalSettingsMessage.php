<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/accessapproval/v1/accessapproval.proto

namespace Google\Cloud\AccessApproval\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to update access approval settings.
 *
 * Generated from protobuf message <code>google.cloud.accessapproval.v1.UpdateAccessApprovalSettingsMessage</code>
 */
class UpdateAccessApprovalSettingsMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * The new AccessApprovalSettings.
     *
     * Generated from protobuf field <code>.google.cloud.accessapproval.v1.AccessApprovalSettings settings = 1;</code>
     */
    protected $settings = null;
    /**
     * The update mask applies to the settings. Only the top level fields of
     * AccessApprovalSettings (notification_emails & enrolled_services) are
     * supported. For each field, if it is included, the currently stored value
     * will be entirely overwritten with the value of the field passed in this
     * request.
     * For the `FieldMask` definition, see
     * https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#fieldmask
     * If this field is left unset, only the notification_emails field will be
     * updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    protected $update_mask = null;

    /**
     * @param \Google\Cloud\AccessApproval\V1\AccessApprovalSettings $settings   The new AccessApprovalSettings.
     * @param \Google\Protobuf\FieldMask                             $updateMask The update mask applies to the settings. Only the top level fields of
     *                                                                           AccessApprovalSettings (notification_emails & enrolled_services) are
     *                                                                           supported. For each field, if it is included, the currently stored value
     *                                                                           will be entirely overwritten with the value of the field passed in this
     *                                                                           request.
     *
     *                                                                           For the `FieldMask` definition, see
     *                                                                           https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#fieldmask
     *                                                                           If this field is left unset, only the notification_emails field will be
     *                                                                           updated.
     *
     * @return \Google\Cloud\AccessApproval\V1\UpdateAccessApprovalSettingsMessage
     *
     * @experimental
     */
    public static function build(\Google\Cloud\AccessApproval\V1\AccessApprovalSettings $settings, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setSettings($settings)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AccessApproval\V1\AccessApprovalSettings $settings
     *           The new AccessApprovalSettings.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           The update mask applies to the settings. Only the top level fields of
     *           AccessApprovalSettings (notification_emails & enrolled_services) are
     *           supported. For each field, if it is included, the currently stored value
     *           will be entirely overwritten with the value of the field passed in this
     *           request.
     *           For the `FieldMask` definition, see
     *           https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#fieldmask
     *           If this field is left unset, only the notification_emails field will be
     *           updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Accessapproval\V1\Accessapproval::initOnce();
        parent::__construct($data);
    }

    /**
     * The new AccessApprovalSettings.
     *
     * Generated from protobuf field <code>.google.cloud.accessapproval.v1.AccessApprovalSettings settings = 1;</code>
     * @return \Google\Cloud\AccessApproval\V1\AccessApprovalSettings|null
     */
    public function getSettings()
    {
        return $this->settings;
    }

    public function hasSettings()
    {
        return isset($this->settings);
    }

    public function clearSettings()
    {
        unset($this->settings);
    }

    /**
     * The new AccessApprovalSettings.
     *
     * Generated from protobuf field <code>.google.cloud.accessapproval.v1.AccessApprovalSettings settings = 1;</code>
     * @param \Google\Cloud\AccessApproval\V1\AccessApprovalSettings $var
     * @return $this
     */
    public function setSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AccessApproval\V1\AccessApprovalSettings::class);
        $this->settings = $var;

        return $this;
    }

    /**
     * The update mask applies to the settings. Only the top level fields of
     * AccessApprovalSettings (notification_emails & enrolled_services) are
     * supported. For each field, if it is included, the currently stored value
     * will be entirely overwritten with the value of the field passed in this
     * request.
     * For the `FieldMask` definition, see
     * https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#fieldmask
     * If this field is left unset, only the notification_emails field will be
     * updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * The update mask applies to the settings. Only the top level fields of
     * AccessApprovalSettings (notification_emails & enrolled_services) are
     * supported. For each field, if it is included, the currently stored value
     * will be entirely overwritten with the value of the field passed in this
     * request.
     * For the `FieldMask` definition, see
     * https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#fieldmask
     * If this field is left unset, only the notification_emails field will be
     * updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}
