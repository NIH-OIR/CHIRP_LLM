<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1/asset_service.proto

namespace Google\Cloud\Asset\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for
 * [AssetService.AnalyzeOrgPolicyGovernedAssets][google.cloud.asset.v1.AssetService.AnalyzeOrgPolicyGovernedAssets].
 *
 * Generated from protobuf message <code>google.cloud.asset.v1.AnalyzeOrgPolicyGovernedAssetsRequest</code>
 */
class AnalyzeOrgPolicyGovernedAssetsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The organization to scope the request. Only organization
     * policies within the scope will be analyzed. The output assets will
     * also be limited to the ones governed by those in-scope organization
     * policies.
     * * organizations/{ORGANIZATION_NUMBER} (e.g., "organizations/123456")
     *
     * Generated from protobuf field <code>string scope = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $scope = '';
    /**
     * Required. The name of the constraint to analyze governed assets for. The
     * analysis only contains analyzed organization policies for the provided
     * constraint.
     *
     * Generated from protobuf field <code>string constraint = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $constraint = '';
    /**
     * The expression to filter
     * [AnalyzeOrgPolicyGovernedAssetsResponse.governed_assets][google.cloud.asset.v1.AnalyzeOrgPolicyGovernedAssetsResponse.governed_assets].
     * For governed resources, filtering is currently available for bare literal
     * values and the following fields:
     * * governed_resource.project
     * * governed_resource.folders
     * * consolidated_policy.rules.enforce
     * When filtering by `governed_resource.project` or
     * `consolidated_policy.rules.enforce`, the only supported operator is `=`.
     * When filtering by `governed_resource.folders`, the supported operators
     * are `=` and `:`.
     * For example, filtering by `governed_resource.project="projects/12345678"`
     * will return all the governed resources under "projects/12345678",
     * including the project itself if applicable.
     * For governed IAM policies, filtering is currently available for bare
     * literal values and the following fields:
     * * governed_iam_policy.project
     * * governed_iam_policy.folders
     * * consolidated_policy.rules.enforce
     * When filtering by `governed_iam_policy.project` or
     * `consolidated_policy.rules.enforce`, the only supported operator is `=`.
     * When filtering by `governed_iam_policy.folders`, the supported operators
     * are `=` and `:`.
     * For example, filtering by `governed_iam_policy.folders:"folders/12345678"`
     * will return all the governed IAM policies under "folders/001".
     *
     * Generated from protobuf field <code>string filter = 3;</code>
     */
    private $filter = '';
    /**
     * The maximum number of items to return per page. If unspecified,
     * [AnalyzeOrgPolicyGovernedAssetsResponse.governed_assets][google.cloud.asset.v1.AnalyzeOrgPolicyGovernedAssetsResponse.governed_assets]
     * will contain 100 items with a maximum of 200.
     *
     * Generated from protobuf field <code>optional int32 page_size = 4;</code>
     */
    private $page_size = null;
    /**
     * The pagination token to retrieve the next page.
     *
     * Generated from protobuf field <code>string page_token = 5;</code>
     */
    private $page_token = '';

    /**
     * @param string $scope      Required. The organization to scope the request. Only organization
     *                           policies within the scope will be analyzed. The output assets will
     *                           also be limited to the ones governed by those in-scope organization
     *                           policies.
     *
     *                           * organizations/{ORGANIZATION_NUMBER} (e.g., "organizations/123456")
     * @param string $constraint Required. The name of the constraint to analyze governed assets for. The
     *                           analysis only contains analyzed organization policies for the provided
     *                           constraint.
     * @param string $filter     The expression to filter
     *                           [AnalyzeOrgPolicyGovernedAssetsResponse.governed_assets][google.cloud.asset.v1.AnalyzeOrgPolicyGovernedAssetsResponse.governed_assets].
     *
     *                           For governed resources, filtering is currently available for bare literal
     *                           values and the following fields:
     *                           * governed_resource.project
     *                           * governed_resource.folders
     *                           * consolidated_policy.rules.enforce
     *                           When filtering by `governed_resource.project` or
     *                           `consolidated_policy.rules.enforce`, the only supported operator is `=`.
     *                           When filtering by `governed_resource.folders`, the supported operators
     *                           are `=` and `:`.
     *                           For example, filtering by `governed_resource.project="projects/12345678"`
     *                           will return all the governed resources under "projects/12345678",
     *                           including the project itself if applicable.
     *
     *                           For governed IAM policies, filtering is currently available for bare
     *                           literal values and the following fields:
     *                           * governed_iam_policy.project
     *                           * governed_iam_policy.folders
     *                           * consolidated_policy.rules.enforce
     *                           When filtering by `governed_iam_policy.project` or
     *                           `consolidated_policy.rules.enforce`, the only supported operator is `=`.
     *                           When filtering by `governed_iam_policy.folders`, the supported operators
     *                           are `=` and `:`.
     *                           For example, filtering by `governed_iam_policy.folders:"folders/12345678"`
     *                           will return all the governed IAM policies under "folders/001".
     *
     * @return \Google\Cloud\Asset\V1\AnalyzeOrgPolicyGovernedAssetsRequest
     *
     * @experimental
     */
    public static function build(string $scope, string $constraint, string $filter): self
    {
        return (new self())
            ->setScope($scope)
            ->setConstraint($constraint)
            ->setFilter($filter);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $scope
     *           Required. The organization to scope the request. Only organization
     *           policies within the scope will be analyzed. The output assets will
     *           also be limited to the ones governed by those in-scope organization
     *           policies.
     *           * organizations/{ORGANIZATION_NUMBER} (e.g., "organizations/123456")
     *     @type string $constraint
     *           Required. The name of the constraint to analyze governed assets for. The
     *           analysis only contains analyzed organization policies for the provided
     *           constraint.
     *     @type string $filter
     *           The expression to filter
     *           [AnalyzeOrgPolicyGovernedAssetsResponse.governed_assets][google.cloud.asset.v1.AnalyzeOrgPolicyGovernedAssetsResponse.governed_assets].
     *           For governed resources, filtering is currently available for bare literal
     *           values and the following fields:
     *           * governed_resource.project
     *           * governed_resource.folders
     *           * consolidated_policy.rules.enforce
     *           When filtering by `governed_resource.project` or
     *           `consolidated_policy.rules.enforce`, the only supported operator is `=`.
     *           When filtering by `governed_resource.folders`, the supported operators
     *           are `=` and `:`.
     *           For example, filtering by `governed_resource.project="projects/12345678"`
     *           will return all the governed resources under "projects/12345678",
     *           including the project itself if applicable.
     *           For governed IAM policies, filtering is currently available for bare
     *           literal values and the following fields:
     *           * governed_iam_policy.project
     *           * governed_iam_policy.folders
     *           * consolidated_policy.rules.enforce
     *           When filtering by `governed_iam_policy.project` or
     *           `consolidated_policy.rules.enforce`, the only supported operator is `=`.
     *           When filtering by `governed_iam_policy.folders`, the supported operators
     *           are `=` and `:`.
     *           For example, filtering by `governed_iam_policy.folders:"folders/12345678"`
     *           will return all the governed IAM policies under "folders/001".
     *     @type int $page_size
     *           The maximum number of items to return per page. If unspecified,
     *           [AnalyzeOrgPolicyGovernedAssetsResponse.governed_assets][google.cloud.asset.v1.AnalyzeOrgPolicyGovernedAssetsResponse.governed_assets]
     *           will contain 100 items with a maximum of 200.
     *     @type string $page_token
     *           The pagination token to retrieve the next page.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Asset\V1\AssetService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The organization to scope the request. Only organization
     * policies within the scope will be analyzed. The output assets will
     * also be limited to the ones governed by those in-scope organization
     * policies.
     * * organizations/{ORGANIZATION_NUMBER} (e.g., "organizations/123456")
     *
     * Generated from protobuf field <code>string scope = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * Required. The organization to scope the request. Only organization
     * policies within the scope will be analyzed. The output assets will
     * also be limited to the ones governed by those in-scope organization
     * policies.
     * * organizations/{ORGANIZATION_NUMBER} (e.g., "organizations/123456")
     *
     * Generated from protobuf field <code>string scope = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setScope($var)
    {
        GPBUtil::checkString($var, True);
        $this->scope = $var;

        return $this;
    }

    /**
     * Required. The name of the constraint to analyze governed assets for. The
     * analysis only contains analyzed organization policies for the provided
     * constraint.
     *
     * Generated from protobuf field <code>string constraint = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getConstraint()
    {
        return $this->constraint;
    }

    /**
     * Required. The name of the constraint to analyze governed assets for. The
     * analysis only contains analyzed organization policies for the provided
     * constraint.
     *
     * Generated from protobuf field <code>string constraint = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setConstraint($var)
    {
        GPBUtil::checkString($var, True);
        $this->constraint = $var;

        return $this;
    }

    /**
     * The expression to filter
     * [AnalyzeOrgPolicyGovernedAssetsResponse.governed_assets][google.cloud.asset.v1.AnalyzeOrgPolicyGovernedAssetsResponse.governed_assets].
     * For governed resources, filtering is currently available for bare literal
     * values and the following fields:
     * * governed_resource.project
     * * governed_resource.folders
     * * consolidated_policy.rules.enforce
     * When filtering by `governed_resource.project` or
     * `consolidated_policy.rules.enforce`, the only supported operator is `=`.
     * When filtering by `governed_resource.folders`, the supported operators
     * are `=` and `:`.
     * For example, filtering by `governed_resource.project="projects/12345678"`
     * will return all the governed resources under "projects/12345678",
     * including the project itself if applicable.
     * For governed IAM policies, filtering is currently available for bare
     * literal values and the following fields:
     * * governed_iam_policy.project
     * * governed_iam_policy.folders
     * * consolidated_policy.rules.enforce
     * When filtering by `governed_iam_policy.project` or
     * `consolidated_policy.rules.enforce`, the only supported operator is `=`.
     * When filtering by `governed_iam_policy.folders`, the supported operators
     * are `=` and `:`.
     * For example, filtering by `governed_iam_policy.folders:"folders/12345678"`
     * will return all the governed IAM policies under "folders/001".
     *
     * Generated from protobuf field <code>string filter = 3;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * The expression to filter
     * [AnalyzeOrgPolicyGovernedAssetsResponse.governed_assets][google.cloud.asset.v1.AnalyzeOrgPolicyGovernedAssetsResponse.governed_assets].
     * For governed resources, filtering is currently available for bare literal
     * values and the following fields:
     * * governed_resource.project
     * * governed_resource.folders
     * * consolidated_policy.rules.enforce
     * When filtering by `governed_resource.project` or
     * `consolidated_policy.rules.enforce`, the only supported operator is `=`.
     * When filtering by `governed_resource.folders`, the supported operators
     * are `=` and `:`.
     * For example, filtering by `governed_resource.project="projects/12345678"`
     * will return all the governed resources under "projects/12345678",
     * including the project itself if applicable.
     * For governed IAM policies, filtering is currently available for bare
     * literal values and the following fields:
     * * governed_iam_policy.project
     * * governed_iam_policy.folders
     * * consolidated_policy.rules.enforce
     * When filtering by `governed_iam_policy.project` or
     * `consolidated_policy.rules.enforce`, the only supported operator is `=`.
     * When filtering by `governed_iam_policy.folders`, the supported operators
     * are `=` and `:`.
     * For example, filtering by `governed_iam_policy.folders:"folders/12345678"`
     * will return all the governed IAM policies under "folders/001".
     *
     * Generated from protobuf field <code>string filter = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * The maximum number of items to return per page. If unspecified,
     * [AnalyzeOrgPolicyGovernedAssetsResponse.governed_assets][google.cloud.asset.v1.AnalyzeOrgPolicyGovernedAssetsResponse.governed_assets]
     * will contain 100 items with a maximum of 200.
     *
     * Generated from protobuf field <code>optional int32 page_size = 4;</code>
     * @return int
     */
    public function getPageSize()
    {
        return isset($this->page_size) ? $this->page_size : 0;
    }

    public function hasPageSize()
    {
        return isset($this->page_size);
    }

    public function clearPageSize()
    {
        unset($this->page_size);
    }

    /**
     * The maximum number of items to return per page. If unspecified,
     * [AnalyzeOrgPolicyGovernedAssetsResponse.governed_assets][google.cloud.asset.v1.AnalyzeOrgPolicyGovernedAssetsResponse.governed_assets]
     * will contain 100 items with a maximum of 200.
     *
     * Generated from protobuf field <code>optional int32 page_size = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * The pagination token to retrieve the next page.
     *
     * Generated from protobuf field <code>string page_token = 5;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * The pagination token to retrieve the next page.
     *
     * Generated from protobuf field <code>string page_token = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}
