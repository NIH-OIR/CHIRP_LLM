<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Cloud\PubSub\V1\BigQueryConfig;

use UnexpectedValueException;

/**
 * Possible states for a BigQuery subscription.
 *
 * Protobuf type <code>google.pubsub.v1.BigQueryConfig.State</code>
 */
class State
{
    /**
     * Default value. This value is unused.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * The subscription can actively send messages to BigQuery
     *
     * Generated from protobuf enum <code>ACTIVE = 1;</code>
     */
    const ACTIVE = 1;
    /**
     * Cannot write to the BigQuery table because of permission denied errors.
     * This can happen if
     * - Pub/Sub SA has not been granted the [appropriate BigQuery IAM
     * permissions](https://cloud.google.com/pubsub/docs/create-subscription#assign_bigquery_service_account)
     * - bigquery.googleapis.com API is not enabled for the project
     * ([instructions](https://cloud.google.com/service-usage/docs/enable-disable))
     *
     * Generated from protobuf enum <code>PERMISSION_DENIED = 2;</code>
     */
    const PERMISSION_DENIED = 2;
    /**
     * Cannot write to the BigQuery table because it does not exist.
     *
     * Generated from protobuf enum <code>NOT_FOUND = 3;</code>
     */
    const NOT_FOUND = 3;
    /**
     * Cannot write to the BigQuery table due to a schema mismatch.
     *
     * Generated from protobuf enum <code>SCHEMA_MISMATCH = 4;</code>
     */
    const SCHEMA_MISMATCH = 4;
    /**
     * Cannot write to the destination because enforce_in_transit is set to true
     * and the destination locations are not in the allowed regions.
     *
     * Generated from protobuf enum <code>IN_TRANSIT_LOCATION_RESTRICTION = 5;</code>
     */
    const IN_TRANSIT_LOCATION_RESTRICTION = 5;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::ACTIVE => 'ACTIVE',
        self::PERMISSION_DENIED => 'PERMISSION_DENIED',
        self::NOT_FOUND => 'NOT_FOUND',
        self::SCHEMA_MISMATCH => 'SCHEMA_MISMATCH',
        self::IN_TRANSIT_LOCATION_RESTRICTION => 'IN_TRANSIT_LOCATION_RESTRICTION',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

