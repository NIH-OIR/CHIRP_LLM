<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/migrationcenter/v1/migrationcenter.proto

namespace Google\Cloud\MigrationCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * NFS export.
 *
 * Generated from protobuf message <code>google.cloud.migrationcenter.v1.NfsExport</code>
 */
class NfsExport extends \Google\Protobuf\Internal\Message
{
    /**
     * The directory being exported.
     *
     * Generated from protobuf field <code>string export_directory = 1;</code>
     */
    protected $export_directory = '';
    /**
     * The hosts or networks to which the export is being shared.
     *
     * Generated from protobuf field <code>repeated string hosts = 2;</code>
     */
    private $hosts;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $export_directory
     *           The directory being exported.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $hosts
     *           The hosts or networks to which the export is being shared.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Migrationcenter\V1\Migrationcenter::initOnce();
        parent::__construct($data);
    }

    /**
     * The directory being exported.
     *
     * Generated from protobuf field <code>string export_directory = 1;</code>
     * @return string
     */
    public function getExportDirectory()
    {
        return $this->export_directory;
    }

    /**
     * The directory being exported.
     *
     * Generated from protobuf field <code>string export_directory = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setExportDirectory($var)
    {
        GPBUtil::checkString($var, True);
        $this->export_directory = $var;

        return $this;
    }

    /**
     * The hosts or networks to which the export is being shared.
     *
     * Generated from protobuf field <code>repeated string hosts = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHosts()
    {
        return $this->hosts;
    }

    /**
     * The hosts or networks to which the export is being shared.
     *
     * Generated from protobuf field <code>repeated string hosts = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHosts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->hosts = $arr;

        return $this;
    }

}
