<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/model_monitoring.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The alert config for model monitoring.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ModelMonitoringAlertConfig</code>
 */
class ModelMonitoringAlertConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Dump the anomalies to Cloud Logging. The anomalies will be put to json
     * payload encoded from proto
     * [google.cloud.aiplatform.logging.ModelMonitoringAnomaliesLogEntry][].
     * This can be further sinked to Pub/Sub or any other services supported
     * by Cloud Logging.
     *
     * Generated from protobuf field <code>bool enable_logging = 2;</code>
     */
    protected $enable_logging = false;
    /**
     * Resource names of the NotificationChannels to send alert.
     * Must be of the format
     * `projects/<project_id_or_number>/notificationChannels/<channel_id>`
     *
     * Generated from protobuf field <code>repeated string notification_channels = 3 [(.google.api.resource_reference) = {</code>
     */
    private $notification_channels;
    protected $alert;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AIPlatform\V1\ModelMonitoringAlertConfig\EmailAlertConfig $email_alert_config
     *           Email alert config.
     *     @type bool $enable_logging
     *           Dump the anomalies to Cloud Logging. The anomalies will be put to json
     *           payload encoded from proto
     *           [google.cloud.aiplatform.logging.ModelMonitoringAnomaliesLogEntry][].
     *           This can be further sinked to Pub/Sub or any other services supported
     *           by Cloud Logging.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $notification_channels
     *           Resource names of the NotificationChannels to send alert.
     *           Must be of the format
     *           `projects/<project_id_or_number>/notificationChannels/<channel_id>`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\ModelMonitoring::initOnce();
        parent::__construct($data);
    }

    /**
     * Email alert config.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ModelMonitoringAlertConfig.EmailAlertConfig email_alert_config = 1;</code>
     * @return \Google\Cloud\AIPlatform\V1\ModelMonitoringAlertConfig\EmailAlertConfig|null
     */
    public function getEmailAlertConfig()
    {
        return $this->readOneof(1);
    }

    public function hasEmailAlertConfig()
    {
        return $this->hasOneof(1);
    }

    /**
     * Email alert config.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ModelMonitoringAlertConfig.EmailAlertConfig email_alert_config = 1;</code>
     * @param \Google\Cloud\AIPlatform\V1\ModelMonitoringAlertConfig\EmailAlertConfig $var
     * @return $this
     */
    public function setEmailAlertConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\ModelMonitoringAlertConfig\EmailAlertConfig::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Dump the anomalies to Cloud Logging. The anomalies will be put to json
     * payload encoded from proto
     * [google.cloud.aiplatform.logging.ModelMonitoringAnomaliesLogEntry][].
     * This can be further sinked to Pub/Sub or any other services supported
     * by Cloud Logging.
     *
     * Generated from protobuf field <code>bool enable_logging = 2;</code>
     * @return bool
     */
    public function getEnableLogging()
    {
        return $this->enable_logging;
    }

    /**
     * Dump the anomalies to Cloud Logging. The anomalies will be put to json
     * payload encoded from proto
     * [google.cloud.aiplatform.logging.ModelMonitoringAnomaliesLogEntry][].
     * This can be further sinked to Pub/Sub or any other services supported
     * by Cloud Logging.
     *
     * Generated from protobuf field <code>bool enable_logging = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableLogging($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_logging = $var;

        return $this;
    }

    /**
     * Resource names of the NotificationChannels to send alert.
     * Must be of the format
     * `projects/<project_id_or_number>/notificationChannels/<channel_id>`
     *
     * Generated from protobuf field <code>repeated string notification_channels = 3 [(.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNotificationChannels()
    {
        return $this->notification_channels;
    }

    /**
     * Resource names of the NotificationChannels to send alert.
     * Must be of the format
     * `projects/<project_id_or_number>/notificationChannels/<channel_id>`
     *
     * Generated from protobuf field <code>repeated string notification_channels = 3 [(.google.api.resource_reference) = {</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNotificationChannels($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->notification_channels = $arr;

        return $this;
    }

    /**
     * @return string
     */
    public function getAlert()
    {
        return $this->whichOneof("alert");
    }

}
