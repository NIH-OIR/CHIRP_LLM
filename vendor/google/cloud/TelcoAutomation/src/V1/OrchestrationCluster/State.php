<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/telcoautomation/v1/telcoautomation.proto

namespace Google\Cloud\TelcoAutomation\V1\OrchestrationCluster;

use UnexpectedValueException;

/**
 * Possible states that the Orchestration Cluster can be in.
 *
 * Protobuf type <code>google.cloud.telcoautomation.v1.OrchestrationCluster.State</code>
 */
class State
{
    /**
     * Unspecified state.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * OrchestrationCluster is being created.
     *
     * Generated from protobuf enum <code>CREATING = 1;</code>
     */
    const CREATING = 1;
    /**
     * OrchestrationCluster has been created and is ready for use.
     *
     * Generated from protobuf enum <code>ACTIVE = 2;</code>
     */
    const ACTIVE = 2;
    /**
     * OrchestrationCluster is being deleted.
     *
     * Generated from protobuf enum <code>DELETING = 3;</code>
     */
    const DELETING = 3;
    /**
     * OrchestrationCluster encountered an error and is in an indeterministic
     * state. User can still initiate a delete operation on this state.
     *
     * Generated from protobuf enum <code>FAILED = 4;</code>
     */
    const FAILED = 4;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::CREATING => 'CREATING',
        self::ACTIVE => 'ACTIVE',
        self::DELETING => 'DELETING',
        self::FAILED => 'FAILED',
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

