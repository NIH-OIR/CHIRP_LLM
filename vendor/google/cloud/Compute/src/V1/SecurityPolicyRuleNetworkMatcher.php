<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a match condition that incoming network traffic is evaluated against.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.SecurityPolicyRuleNetworkMatcher</code>
 */
class SecurityPolicyRuleNetworkMatcher extends \Google\Protobuf\Internal\Message
{
    /**
     * Destination IPv4/IPv6 addresses or CIDR prefixes, in standard text format.
     *
     * Generated from protobuf field <code>repeated string dest_ip_ranges = 337357713;</code>
     */
    private $dest_ip_ranges;
    /**
     * Destination port numbers for TCP/UDP/SCTP. Each element can be a 16-bit unsigned decimal number (e.g. "80") or range (e.g. "0-1023").
     *
     * Generated from protobuf field <code>repeated string dest_ports = 379902005;</code>
     */
    private $dest_ports;
    /**
     * IPv4 protocol / IPv6 next header (after extension headers). Each element can be an 8-bit unsigned decimal number (e.g. "6"), range (e.g. "253-254"), or one of the following protocol names: "tcp", "udp", "icmp", "esp", "ah", "ipip", or "sctp".
     *
     * Generated from protobuf field <code>repeated string ip_protocols = 259213251;</code>
     */
    private $ip_protocols;
    /**
     * BGP Autonomous System Number associated with the source IP address.
     *
     * Generated from protobuf field <code>repeated uint32 src_asns = 117825266;</code>
     */
    private $src_asns;
    /**
     * Source IPv4/IPv6 addresses or CIDR prefixes, in standard text format.
     *
     * Generated from protobuf field <code>repeated string src_ip_ranges = 432128083;</code>
     */
    private $src_ip_ranges;
    /**
     * Source port numbers for TCP/UDP/SCTP. Each element can be a 16-bit unsigned decimal number (e.g. "80") or range (e.g. "0-1023").
     *
     * Generated from protobuf field <code>repeated string src_ports = 445095415;</code>
     */
    private $src_ports;
    /**
     * Two-letter ISO 3166-1 alpha-2 country code associated with the source IP address.
     *
     * Generated from protobuf field <code>repeated string src_region_codes = 99086742;</code>
     */
    private $src_region_codes;
    /**
     * User-defined fields. Each element names a defined field and lists the matching values for that field.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.SecurityPolicyRuleNetworkMatcherUserDefinedFieldMatch user_defined_fields = 28312739;</code>
     */
    private $user_defined_fields;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $dest_ip_ranges
     *           Destination IPv4/IPv6 addresses or CIDR prefixes, in standard text format.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $dest_ports
     *           Destination port numbers for TCP/UDP/SCTP. Each element can be a 16-bit unsigned decimal number (e.g. "80") or range (e.g. "0-1023").
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $ip_protocols
     *           IPv4 protocol / IPv6 next header (after extension headers). Each element can be an 8-bit unsigned decimal number (e.g. "6"), range (e.g. "253-254"), or one of the following protocol names: "tcp", "udp", "icmp", "esp", "ah", "ipip", or "sctp".
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $src_asns
     *           BGP Autonomous System Number associated with the source IP address.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $src_ip_ranges
     *           Source IPv4/IPv6 addresses or CIDR prefixes, in standard text format.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $src_ports
     *           Source port numbers for TCP/UDP/SCTP. Each element can be a 16-bit unsigned decimal number (e.g. "80") or range (e.g. "0-1023").
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $src_region_codes
     *           Two-letter ISO 3166-1 alpha-2 country code associated with the source IP address.
     *     @type array<\Google\Cloud\Compute\V1\SecurityPolicyRuleNetworkMatcherUserDefinedFieldMatch>|\Google\Protobuf\Internal\RepeatedField $user_defined_fields
     *           User-defined fields. Each element names a defined field and lists the matching values for that field.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Destination IPv4/IPv6 addresses or CIDR prefixes, in standard text format.
     *
     * Generated from protobuf field <code>repeated string dest_ip_ranges = 337357713;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDestIpRanges()
    {
        return $this->dest_ip_ranges;
    }

    /**
     * Destination IPv4/IPv6 addresses or CIDR prefixes, in standard text format.
     *
     * Generated from protobuf field <code>repeated string dest_ip_ranges = 337357713;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDestIpRanges($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->dest_ip_ranges = $arr;

        return $this;
    }

    /**
     * Destination port numbers for TCP/UDP/SCTP. Each element can be a 16-bit unsigned decimal number (e.g. "80") or range (e.g. "0-1023").
     *
     * Generated from protobuf field <code>repeated string dest_ports = 379902005;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDestPorts()
    {
        return $this->dest_ports;
    }

    /**
     * Destination port numbers for TCP/UDP/SCTP. Each element can be a 16-bit unsigned decimal number (e.g. "80") or range (e.g. "0-1023").
     *
     * Generated from protobuf field <code>repeated string dest_ports = 379902005;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDestPorts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->dest_ports = $arr;

        return $this;
    }

    /**
     * IPv4 protocol / IPv6 next header (after extension headers). Each element can be an 8-bit unsigned decimal number (e.g. "6"), range (e.g. "253-254"), or one of the following protocol names: "tcp", "udp", "icmp", "esp", "ah", "ipip", or "sctp".
     *
     * Generated from protobuf field <code>repeated string ip_protocols = 259213251;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIpProtocols()
    {
        return $this->ip_protocols;
    }

    /**
     * IPv4 protocol / IPv6 next header (after extension headers). Each element can be an 8-bit unsigned decimal number (e.g. "6"), range (e.g. "253-254"), or one of the following protocol names: "tcp", "udp", "icmp", "esp", "ah", "ipip", or "sctp".
     *
     * Generated from protobuf field <code>repeated string ip_protocols = 259213251;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIpProtocols($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->ip_protocols = $arr;

        return $this;
    }

    /**
     * BGP Autonomous System Number associated with the source IP address.
     *
     * Generated from protobuf field <code>repeated uint32 src_asns = 117825266;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSrcAsns()
    {
        return $this->src_asns;
    }

    /**
     * BGP Autonomous System Number associated with the source IP address.
     *
     * Generated from protobuf field <code>repeated uint32 src_asns = 117825266;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSrcAsns($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->src_asns = $arr;

        return $this;
    }

    /**
     * Source IPv4/IPv6 addresses or CIDR prefixes, in standard text format.
     *
     * Generated from protobuf field <code>repeated string src_ip_ranges = 432128083;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSrcIpRanges()
    {
        return $this->src_ip_ranges;
    }

    /**
     * Source IPv4/IPv6 addresses or CIDR prefixes, in standard text format.
     *
     * Generated from protobuf field <code>repeated string src_ip_ranges = 432128083;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSrcIpRanges($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->src_ip_ranges = $arr;

        return $this;
    }

    /**
     * Source port numbers for TCP/UDP/SCTP. Each element can be a 16-bit unsigned decimal number (e.g. "80") or range (e.g. "0-1023").
     *
     * Generated from protobuf field <code>repeated string src_ports = 445095415;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSrcPorts()
    {
        return $this->src_ports;
    }

    /**
     * Source port numbers for TCP/UDP/SCTP. Each element can be a 16-bit unsigned decimal number (e.g. "80") or range (e.g. "0-1023").
     *
     * Generated from protobuf field <code>repeated string src_ports = 445095415;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSrcPorts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->src_ports = $arr;

        return $this;
    }

    /**
     * Two-letter ISO 3166-1 alpha-2 country code associated with the source IP address.
     *
     * Generated from protobuf field <code>repeated string src_region_codes = 99086742;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSrcRegionCodes()
    {
        return $this->src_region_codes;
    }

    /**
     * Two-letter ISO 3166-1 alpha-2 country code associated with the source IP address.
     *
     * Generated from protobuf field <code>repeated string src_region_codes = 99086742;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSrcRegionCodes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->src_region_codes = $arr;

        return $this;
    }

    /**
     * User-defined fields. Each element names a defined field and lists the matching values for that field.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.SecurityPolicyRuleNetworkMatcherUserDefinedFieldMatch user_defined_fields = 28312739;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUserDefinedFields()
    {
        return $this->user_defined_fields;
    }

    /**
     * User-defined fields. Each element names a defined field and lists the matching values for that field.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.SecurityPolicyRuleNetworkMatcherUserDefinedFieldMatch user_defined_fields = 28312739;</code>
     * @param array<\Google\Cloud\Compute\V1\SecurityPolicyRuleNetworkMatcherUserDefinedFieldMatch>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUserDefinedFields($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\SecurityPolicyRuleNetworkMatcherUserDefinedFieldMatch::class);
        $this->user_defined_fields = $arr;

        return $this;
    }

}
