<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Use IAM authentication to connect. This requires the Cloud SQL IAM feature
 * to be enabled on the instance, which is not the default for Cloud SQL.
 * See https://cloud.google.com/sql/docs/postgres/authentication and
 * https://cloud.google.com/sql/docs/mysql/authentication.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.CloudSqlIamCredential</code>
 */
class CloudSqlIamCredential extends \Google\Protobuf\Internal\Message
{

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

}
