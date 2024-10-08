<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/storagetransfer/v1/transfer_types.proto

namespace Google\Cloud\StorageTransfer\V1\MetadataOptions;

use UnexpectedValueException;

/**
 * Options for handling `timeCreated` metadata for Google Cloud Storage
 * objects.
 *
 * Protobuf type <code>google.storagetransfer.v1.MetadataOptions.TimeCreated</code>
 */
class TimeCreated
{
    /**
     * TimeCreated behavior is unspecified.
     *
     * Generated from protobuf enum <code>TIME_CREATED_UNSPECIFIED = 0;</code>
     */
    const TIME_CREATED_UNSPECIFIED = 0;
    /**
     * Do not preserve the `timeCreated` metadata from the source object.
     *
     * Generated from protobuf enum <code>TIME_CREATED_SKIP = 1;</code>
     */
    const TIME_CREATED_SKIP = 1;
    /**
     * Preserves the source object's `timeCreated` or `lastModified` metadata in
     * the `customTime` field in the destination object.  Note that any value
     * stored in the source object's `customTime` field will not be propagated
     * to the destination object.
     *
     * Generated from protobuf enum <code>TIME_CREATED_PRESERVE_AS_CUSTOM_TIME = 2;</code>
     */
    const TIME_CREATED_PRESERVE_AS_CUSTOM_TIME = 2;

    private static $valueToName = [
        self::TIME_CREATED_UNSPECIFIED => 'TIME_CREATED_UNSPECIFIED',
        self::TIME_CREATED_SKIP => 'TIME_CREATED_SKIP',
        self::TIME_CREATED_PRESERVE_AS_CUSTOM_TIME => 'TIME_CREATED_PRESERVE_AS_CUSTOM_TIME',
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


