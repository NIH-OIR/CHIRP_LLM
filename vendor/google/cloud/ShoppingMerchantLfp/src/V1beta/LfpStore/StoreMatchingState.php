<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/lfp/v1beta/lfpstore.proto

namespace Google\Shopping\Merchant\Lfp\V1beta\LfpStore;

use UnexpectedValueException;

/**
 * The state of matching `LfpStore` to a Google Business Profile.
 *
 * Protobuf type <code>google.shopping.merchant.lfp.v1beta.LfpStore.StoreMatchingState</code>
 */
class StoreMatchingState
{
    /**
     * Store matching state unspecified.
     *
     * Generated from protobuf enum <code>STORE_MATCHING_STATE_UNSPECIFIED = 0;</code>
     */
    const STORE_MATCHING_STATE_UNSPECIFIED = 0;
    /**
     * The `LfpStore` is successfully matched with a Google Business Profile
     * store.
     *
     * Generated from protobuf enum <code>STORE_MATCHING_STATE_MATCHED = 1;</code>
     */
    const STORE_MATCHING_STATE_MATCHED = 1;
    /**
     * The `LfpStore` is not matched with a Google Business Profile store.
     *
     * Generated from protobuf enum <code>STORE_MATCHING_STATE_FAILED = 2;</code>
     */
    const STORE_MATCHING_STATE_FAILED = 2;

    private static $valueToName = [
        self::STORE_MATCHING_STATE_UNSPECIFIED => 'STORE_MATCHING_STATE_UNSPECIFIED',
        self::STORE_MATCHING_STATE_MATCHED => 'STORE_MATCHING_STATE_MATCHED',
        self::STORE_MATCHING_STATE_FAILED => 'STORE_MATCHING_STATE_FAILED',
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

