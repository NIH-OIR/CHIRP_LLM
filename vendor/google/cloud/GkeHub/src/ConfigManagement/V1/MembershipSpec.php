<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkehub/v1/configmanagement/configmanagement.proto

namespace Google\Cloud\GkeHub\ConfigManagement\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * **Anthos Config Management**: Configuration for a single cluster.
 * Intended to parallel the ConfigManagement CR.
 *
 * Generated from protobuf message <code>google.cloud.gkehub.configmanagement.v1.MembershipSpec</code>
 */
class MembershipSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * Config Sync configuration for the cluster.
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.configmanagement.v1.ConfigSync config_sync = 1;</code>
     */
    protected $config_sync = null;
    /**
     * Policy Controller configuration for the cluster.
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.configmanagement.v1.PolicyController policy_controller = 2;</code>
     */
    protected $policy_controller = null;
    /**
     * Hierarchy Controller configuration for the cluster.
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.configmanagement.v1.HierarchyControllerConfig hierarchy_controller = 4;</code>
     */
    protected $hierarchy_controller = null;
    /**
     * Version of ACM installed.
     *
     * Generated from protobuf field <code>string version = 10;</code>
     */
    protected $version = '';
    /**
     * The user-specified cluster name used by Config Sync cluster-name-selector
     * annotation or ClusterSelector, for applying configs to only a subset
     * of clusters.
     * Omit this field if the cluster's fleet membership name is used by Config
     * Sync cluster-name-selector annotation or ClusterSelector.
     * Set this field if a name different from the cluster's fleet membership name
     * is used by Config Sync cluster-name-selector annotation or ClusterSelector.
     *
     * Generated from protobuf field <code>string cluster = 11;</code>
     */
    protected $cluster = '';
    /**
     * Enables automatic Feature management.
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.configmanagement.v1.MembershipSpec.Management management = 12;</code>
     */
    protected $management = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\GkeHub\ConfigManagement\V1\ConfigSync $config_sync
     *           Config Sync configuration for the cluster.
     *     @type \Google\Cloud\GkeHub\ConfigManagement\V1\PolicyController $policy_controller
     *           Policy Controller configuration for the cluster.
     *     @type \Google\Cloud\GkeHub\ConfigManagement\V1\HierarchyControllerConfig $hierarchy_controller
     *           Hierarchy Controller configuration for the cluster.
     *     @type string $version
     *           Version of ACM installed.
     *     @type string $cluster
     *           The user-specified cluster name used by Config Sync cluster-name-selector
     *           annotation or ClusterSelector, for applying configs to only a subset
     *           of clusters.
     *           Omit this field if the cluster's fleet membership name is used by Config
     *           Sync cluster-name-selector annotation or ClusterSelector.
     *           Set this field if a name different from the cluster's fleet membership name
     *           is used by Config Sync cluster-name-selector annotation or ClusterSelector.
     *     @type int $management
     *           Enables automatic Feature management.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkehub\V1\Configmanagement\Configmanagement::initOnce();
        parent::__construct($data);
    }

    /**
     * Config Sync configuration for the cluster.
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.configmanagement.v1.ConfigSync config_sync = 1;</code>
     * @return \Google\Cloud\GkeHub\ConfigManagement\V1\ConfigSync|null
     */
    public function getConfigSync()
    {
        return $this->config_sync;
    }

    public function hasConfigSync()
    {
        return isset($this->config_sync);
    }

    public function clearConfigSync()
    {
        unset($this->config_sync);
    }

    /**
     * Config Sync configuration for the cluster.
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.configmanagement.v1.ConfigSync config_sync = 1;</code>
     * @param \Google\Cloud\GkeHub\ConfigManagement\V1\ConfigSync $var
     * @return $this
     */
    public function setConfigSync($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeHub\ConfigManagement\V1\ConfigSync::class);
        $this->config_sync = $var;

        return $this;
    }

    /**
     * Policy Controller configuration for the cluster.
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.configmanagement.v1.PolicyController policy_controller = 2;</code>
     * @return \Google\Cloud\GkeHub\ConfigManagement\V1\PolicyController|null
     */
    public function getPolicyController()
    {
        return $this->policy_controller;
    }

    public function hasPolicyController()
    {
        return isset($this->policy_controller);
    }

    public function clearPolicyController()
    {
        unset($this->policy_controller);
    }

    /**
     * Policy Controller configuration for the cluster.
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.configmanagement.v1.PolicyController policy_controller = 2;</code>
     * @param \Google\Cloud\GkeHub\ConfigManagement\V1\PolicyController $var
     * @return $this
     */
    public function setPolicyController($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeHub\ConfigManagement\V1\PolicyController::class);
        $this->policy_controller = $var;

        return $this;
    }

    /**
     * Hierarchy Controller configuration for the cluster.
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.configmanagement.v1.HierarchyControllerConfig hierarchy_controller = 4;</code>
     * @return \Google\Cloud\GkeHub\ConfigManagement\V1\HierarchyControllerConfig|null
     */
    public function getHierarchyController()
    {
        return $this->hierarchy_controller;
    }

    public function hasHierarchyController()
    {
        return isset($this->hierarchy_controller);
    }

    public function clearHierarchyController()
    {
        unset($this->hierarchy_controller);
    }

    /**
     * Hierarchy Controller configuration for the cluster.
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.configmanagement.v1.HierarchyControllerConfig hierarchy_controller = 4;</code>
     * @param \Google\Cloud\GkeHub\ConfigManagement\V1\HierarchyControllerConfig $var
     * @return $this
     */
    public function setHierarchyController($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeHub\ConfigManagement\V1\HierarchyControllerConfig::class);
        $this->hierarchy_controller = $var;

        return $this;
    }

    /**
     * Version of ACM installed.
     *
     * Generated from protobuf field <code>string version = 10;</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Version of ACM installed.
     *
     * Generated from protobuf field <code>string version = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->version = $var;

        return $this;
    }

    /**
     * The user-specified cluster name used by Config Sync cluster-name-selector
     * annotation or ClusterSelector, for applying configs to only a subset
     * of clusters.
     * Omit this field if the cluster's fleet membership name is used by Config
     * Sync cluster-name-selector annotation or ClusterSelector.
     * Set this field if a name different from the cluster's fleet membership name
     * is used by Config Sync cluster-name-selector annotation or ClusterSelector.
     *
     * Generated from protobuf field <code>string cluster = 11;</code>
     * @return string
     */
    public function getCluster()
    {
        return $this->cluster;
    }

    /**
     * The user-specified cluster name used by Config Sync cluster-name-selector
     * annotation or ClusterSelector, for applying configs to only a subset
     * of clusters.
     * Omit this field if the cluster's fleet membership name is used by Config
     * Sync cluster-name-selector annotation or ClusterSelector.
     * Set this field if a name different from the cluster's fleet membership name
     * is used by Config Sync cluster-name-selector annotation or ClusterSelector.
     *
     * Generated from protobuf field <code>string cluster = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setCluster($var)
    {
        GPBUtil::checkString($var, True);
        $this->cluster = $var;

        return $this;
    }

    /**
     * Enables automatic Feature management.
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.configmanagement.v1.MembershipSpec.Management management = 12;</code>
     * @return int
     */
    public function getManagement()
    {
        return $this->management;
    }

    /**
     * Enables automatic Feature management.
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.configmanagement.v1.MembershipSpec.Management management = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setManagement($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\GkeHub\ConfigManagement\V1\MembershipSpec\Management::class);
        $this->management = $var;

        return $this;
    }

}
