<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/clouddms/v1/conversionworkspace_resources.proto

namespace Google\Cloud\CloudDms\V1;

use UnexpectedValueException;

/**
 * Entity Name Transformation Types
 *
 * Protobuf type <code>google.cloud.clouddms.v1.EntityNameTransformation</code>
 */
class EntityNameTransformation
{
    /**
     * Entity name transformation unspecified.
     *
     * Generated from protobuf enum <code>ENTITY_NAME_TRANSFORMATION_UNSPECIFIED = 0;</code>
     */
    const ENTITY_NAME_TRANSFORMATION_UNSPECIFIED = 0;
    /**
     * No transformation.
     *
     * Generated from protobuf enum <code>ENTITY_NAME_TRANSFORMATION_NO_TRANSFORMATION = 1;</code>
     */
    const ENTITY_NAME_TRANSFORMATION_NO_TRANSFORMATION = 1;
    /**
     * Transform to lower case.
     *
     * Generated from protobuf enum <code>ENTITY_NAME_TRANSFORMATION_LOWER_CASE = 2;</code>
     */
    const ENTITY_NAME_TRANSFORMATION_LOWER_CASE = 2;
    /**
     * Transform to upper case.
     *
     * Generated from protobuf enum <code>ENTITY_NAME_TRANSFORMATION_UPPER_CASE = 3;</code>
     */
    const ENTITY_NAME_TRANSFORMATION_UPPER_CASE = 3;
    /**
     * Transform to capitalized case.
     *
     * Generated from protobuf enum <code>ENTITY_NAME_TRANSFORMATION_CAPITALIZED_CASE = 4;</code>
     */
    const ENTITY_NAME_TRANSFORMATION_CAPITALIZED_CASE = 4;

    private static $valueToName = [
        self::ENTITY_NAME_TRANSFORMATION_UNSPECIFIED => 'ENTITY_NAME_TRANSFORMATION_UNSPECIFIED',
        self::ENTITY_NAME_TRANSFORMATION_NO_TRANSFORMATION => 'ENTITY_NAME_TRANSFORMATION_NO_TRANSFORMATION',
        self::ENTITY_NAME_TRANSFORMATION_LOWER_CASE => 'ENTITY_NAME_TRANSFORMATION_LOWER_CASE',
        self::ENTITY_NAME_TRANSFORMATION_UPPER_CASE => 'ENTITY_NAME_TRANSFORMATION_UPPER_CASE',
        self::ENTITY_NAME_TRANSFORMATION_CAPITALIZED_CASE => 'ENTITY_NAME_TRANSFORMATION_CAPITALIZED_CASE',
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
