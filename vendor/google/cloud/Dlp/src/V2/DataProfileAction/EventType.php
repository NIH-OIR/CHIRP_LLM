<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2\DataProfileAction;

use UnexpectedValueException;

/**
 * Types of event that can trigger an action.
 *
 * Protobuf type <code>google.privacy.dlp.v2.DataProfileAction.EventType</code>
 */
class EventType
{
    /**
     * Unused.
     *
     * Generated from protobuf enum <code>EVENT_TYPE_UNSPECIFIED = 0;</code>
     */
    const EVENT_TYPE_UNSPECIFIED = 0;
    /**
     * New profile (not a re-profile).
     *
     * Generated from protobuf enum <code>NEW_PROFILE = 1;</code>
     */
    const NEW_PROFILE = 1;
    /**
     * One of the following profile metrics changed: Data risk score,
     * Sensitivity score, Resource visibility, Encryption type, Predicted
     * infoTypes, Other infoTypes
     *
     * Generated from protobuf enum <code>CHANGED_PROFILE = 2;</code>
     */
    const CHANGED_PROFILE = 2;
    /**
     * Table data risk score or sensitivity score increased.
     *
     * Generated from protobuf enum <code>SCORE_INCREASED = 3;</code>
     */
    const SCORE_INCREASED = 3;
    /**
     * A user (non-internal) error occurred.
     *
     * Generated from protobuf enum <code>ERROR_CHANGED = 4;</code>
     */
    const ERROR_CHANGED = 4;

    private static $valueToName = [
        self::EVENT_TYPE_UNSPECIFIED => 'EVENT_TYPE_UNSPECIFIED',
        self::NEW_PROFILE => 'NEW_PROFILE',
        self::CHANGED_PROFILE => 'CHANGED_PROFILE',
        self::SCORE_INCREASED => 'SCORE_INCREASED',
        self::ERROR_CHANGED => 'ERROR_CHANGED',
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
class_alias(EventType::class, \Google\Cloud\Dlp\V2\DataProfileAction_EventType::class);
