<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/data_taxonomy.proto

namespace Google\Cloud\Dataplex\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Create DataTaxonomy request.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.CreateDataTaxonomyRequest</code>
 */
class CreateDataTaxonomyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the data taxonomy location, of the form:
     * projects/{project_number}/locations/{location_id}
     * where `location_id` refers to a GCP region.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. DataTaxonomy identifier.
     * * Must contain only lowercase letters, numbers and hyphens.
     * * Must start with a letter.
     * * Must be between 1-63 characters.
     * * Must end with a number or a letter.
     * * Must be unique within the Project.
     *
     * Generated from protobuf field <code>string data_taxonomy_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $data_taxonomy_id = '';
    /**
     * Required. DataTaxonomy resource.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataTaxonomy data_taxonomy = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $data_taxonomy = null;
    /**
     * Optional. Only validate the request, but do not perform mutations.
     * The default is false.
     *
     * Generated from protobuf field <code>bool validate_only = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $validate_only = false;

    /**
     * @param string                                 $parent         Required. The resource name of the data taxonomy location, of the form:
     *                                                               projects/{project_number}/locations/{location_id}
     *                                                               where `location_id` refers to a GCP region. Please see
     *                                                               {@see DataTaxonomyServiceClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\Dataplex\V1\DataTaxonomy $dataTaxonomy   Required. DataTaxonomy resource.
     * @param string                                 $dataTaxonomyId Required. DataTaxonomy identifier.
     *                                                               * Must contain only lowercase letters, numbers and hyphens.
     *                                                               * Must start with a letter.
     *                                                               * Must be between 1-63 characters.
     *                                                               * Must end with a number or a letter.
     *                                                               * Must be unique within the Project.
     *
     * @return \Google\Cloud\Dataplex\V1\CreateDataTaxonomyRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\Dataplex\V1\DataTaxonomy $dataTaxonomy, string $dataTaxonomyId): self
    {
        return (new self())
            ->setParent($parent)
            ->setDataTaxonomy($dataTaxonomy)
            ->setDataTaxonomyId($dataTaxonomyId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the data taxonomy location, of the form:
     *           projects/{project_number}/locations/{location_id}
     *           where `location_id` refers to a GCP region.
     *     @type string $data_taxonomy_id
     *           Required. DataTaxonomy identifier.
     *           * Must contain only lowercase letters, numbers and hyphens.
     *           * Must start with a letter.
     *           * Must be between 1-63 characters.
     *           * Must end with a number or a letter.
     *           * Must be unique within the Project.
     *     @type \Google\Cloud\Dataplex\V1\DataTaxonomy $data_taxonomy
     *           Required. DataTaxonomy resource.
     *     @type bool $validate_only
     *           Optional. Only validate the request, but do not perform mutations.
     *           The default is false.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\DataTaxonomy::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the data taxonomy location, of the form:
     * projects/{project_number}/locations/{location_id}
     * where `location_id` refers to a GCP region.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the data taxonomy location, of the form:
     * projects/{project_number}/locations/{location_id}
     * where `location_id` refers to a GCP region.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. DataTaxonomy identifier.
     * * Must contain only lowercase letters, numbers and hyphens.
     * * Must start with a letter.
     * * Must be between 1-63 characters.
     * * Must end with a number or a letter.
     * * Must be unique within the Project.
     *
     * Generated from protobuf field <code>string data_taxonomy_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDataTaxonomyId()
    {
        return $this->data_taxonomy_id;
    }

    /**
     * Required. DataTaxonomy identifier.
     * * Must contain only lowercase letters, numbers and hyphens.
     * * Must start with a letter.
     * * Must be between 1-63 characters.
     * * Must end with a number or a letter.
     * * Must be unique within the Project.
     *
     * Generated from protobuf field <code>string data_taxonomy_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDataTaxonomyId($var)
    {
        GPBUtil::checkString($var, True);
        $this->data_taxonomy_id = $var;

        return $this;
    }

    /**
     * Required. DataTaxonomy resource.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataTaxonomy data_taxonomy = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dataplex\V1\DataTaxonomy|null
     */
    public function getDataTaxonomy()
    {
        return $this->data_taxonomy;
    }

    public function hasDataTaxonomy()
    {
        return isset($this->data_taxonomy);
    }

    public function clearDataTaxonomy()
    {
        unset($this->data_taxonomy);
    }

    /**
     * Required. DataTaxonomy resource.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataTaxonomy data_taxonomy = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dataplex\V1\DataTaxonomy $var
     * @return $this
     */
    public function setDataTaxonomy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\DataTaxonomy::class);
        $this->data_taxonomy = $var;

        return $this;
    }

    /**
     * Optional. Only validate the request, but do not perform mutations.
     * The default is false.
     *
     * Generated from protobuf field <code>bool validate_only = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * Optional. Only validate the request, but do not perform mutations.
     * The default is false.
     *
     * Generated from protobuf field <code>bool validate_only = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

}
