<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/notifications/v1beta/notificationsapi.proto

namespace Google\Shopping\Merchant\Notifications\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for the DeleteNotificationSubscription method.
 *
 * Generated from protobuf message <code>google.shopping.merchant.notifications.v1beta.DeleteNotificationSubscriptionRequest</code>
 */
class DeleteNotificationSubscriptionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the notification subscription to be deleted.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. The name of the notification subscription to be deleted. Please see
     *                     {@see NotificationsApiServiceClient::notificationSubscriptionName()} for help formatting this field.
     *
     * @return \Google\Shopping\Merchant\Notifications\V1beta\DeleteNotificationSubscriptionRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the notification subscription to be deleted.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Shopping\Merchant\Notifications\V1Beta\Notificationsapi::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the notification subscription to be deleted.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the notification subscription to be deleted.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}
