<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1beta/analytics_admin.proto

namespace Google\Analytics\Admin\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for ListKeyEvents RPC.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1beta.ListKeyEventsResponse</code>
 */
class ListKeyEventsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The requested Key Events
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1beta.KeyEvent key_events = 1;</code>
     */
    private $key_events;
    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Analytics\Admin\V1beta\KeyEvent>|\Google\Protobuf\Internal\RepeatedField $key_events
     *           The requested Key Events
     *     @type string $next_page_token
     *           A token, which can be sent as `page_token` to retrieve the next page.
     *           If this field is omitted, there are no subsequent pages.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Beta\AnalyticsAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * The requested Key Events
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1beta.KeyEvent key_events = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getKeyEvents()
    {
        return $this->key_events;
    }

    /**
     * The requested Key Events
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1beta.KeyEvent key_events = 1;</code>
     * @param array<\Google\Analytics\Admin\V1beta\KeyEvent>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setKeyEvents($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Analytics\Admin\V1beta\KeyEvent::class);
        $this->key_events = $arr;

        return $this;
    }

    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}
