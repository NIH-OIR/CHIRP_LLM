<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2\DataProfileAction\PubSubNotification;

use UnexpectedValueException;

/**
 * The levels of detail that can be included in the Pub/Sub message.
 *
 * Protobuf type <code>google.privacy.dlp.v2.DataProfileAction.PubSubNotification.DetailLevel</code>
 */
class DetailLevel
{
    /**
     * Unused.
     *
     * Generated from protobuf enum <code>DETAIL_LEVEL_UNSPECIFIED = 0;</code>
     */
    const DETAIL_LEVEL_UNSPECIFIED = 0;
    /**
     * The full table data profile.
     *
     * Generated from protobuf enum <code>TABLE_PROFILE = 1;</code>
     */
    const TABLE_PROFILE = 1;
    /**
     * The name of the profiled resource.
     *
     * Generated from protobuf enum <code>RESOURCE_NAME = 2;</code>
     */
    const RESOURCE_NAME = 2;
    /**
     * The full file store data profile.
     *
     * Generated from protobuf enum <code>FILE_STORE_PROFILE = 3;</code>
     */
    const FILE_STORE_PROFILE = 3;

    private static $valueToName = [
        self::DETAIL_LEVEL_UNSPECIFIED => 'DETAIL_LEVEL_UNSPECIFIED',
        self::TABLE_PROFILE => 'TABLE_PROFILE',
        self::RESOURCE_NAME => 'RESOURCE_NAME',
        self::FILE_STORE_PROFILE => 'FILE_STORE_PROFILE',
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DetailLevel::class, \Google\Cloud\Dlp\V2\DataProfileAction_PubSubNotification_DetailLevel::class);
