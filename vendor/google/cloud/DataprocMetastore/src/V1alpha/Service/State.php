<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/metastore/v1alpha/metastore.proto

namespace Google\Cloud\Metastore\V1alpha\Service;

use UnexpectedValueException;

/**
 * The current state of the metastore service.
 *
 * Protobuf type <code>google.cloud.metastore.v1alpha.Service.State</code>
 */
class State
{
    /**
     * The state of the metastore service is unknown.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * The metastore service is in the process of being created.
     *
     * Generated from protobuf enum <code>CREATING = 1;</code>
     */
    const CREATING = 1;
    /**
     * The metastore service is running and ready to serve queries.
     *
     * Generated from protobuf enum <code>ACTIVE = 2;</code>
     */
    const ACTIVE = 2;
    /**
     * The metastore service is entering suspension. Its query-serving
     * availability may cease unexpectedly.
     *
     * Generated from protobuf enum <code>SUSPENDING = 3;</code>
     */
    const SUSPENDING = 3;
    /**
     * The metastore service is suspended and unable to serve queries.
     *
     * Generated from protobuf enum <code>SUSPENDED = 4;</code>
     */
    const SUSPENDED = 4;
    /**
     * The metastore service is being updated. It remains usable but cannot
     * accept additional update requests or be deleted at this time.
     *
     * Generated from protobuf enum <code>UPDATING = 5;</code>
     */
    const UPDATING = 5;
    /**
     * The metastore service is undergoing deletion. It cannot be used.
     *
     * Generated from protobuf enum <code>DELETING = 6;</code>
     */
    const DELETING = 6;
    /**
     * The metastore service has encountered an error and cannot be used. The
     * metastore service should be deleted.
     *
     * Generated from protobuf enum <code>ERROR = 7;</code>
     */
    const ERROR = 7;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::CREATING => 'CREATING',
        self::ACTIVE => 'ACTIVE',
        self::SUSPENDING => 'SUSPENDING',
        self::SUSPENDED => 'SUSPENDED',
        self::UPDATING => 'UPDATING',
        self::DELETING => 'DELETING',
        self::ERROR => 'ERROR',
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

