<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datalabeling/v1beta1/data_labeling_service.proto

namespace Google\Cloud\DataLabeling\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for GetAnnotatedDataset.
 *
 * Generated from protobuf message <code>google.cloud.datalabeling.v1beta1.GetAnnotatedDatasetRequest</code>
 */
class GetAnnotatedDatasetRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the annotated dataset to get, format:
     * projects/{project_id}/datasets/{dataset_id}/annotatedDatasets/
     * {annotated_dataset_id}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';

    /**
     * @param string $name Required. Name of the annotated dataset to get, format:
     *                     projects/{project_id}/datasets/{dataset_id}/annotatedDatasets/
     *                     {annotated_dataset_id}
     *                     Please see {@see DataLabelingServiceClient::annotatedDatasetName()} for help formatting this field.
     *
     * @return \Google\Cloud\DataLabeling\V1beta1\GetAnnotatedDatasetRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Name of the annotated dataset to get, format:
     *           projects/{project_id}/datasets/{dataset_id}/annotatedDatasets/
     *           {annotated_dataset_id}
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datalabeling\V1Beta1\DataLabelingService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the annotated dataset to get, format:
     * projects/{project_id}/datasets/{dataset_id}/annotatedDatasets/
     * {annotated_dataset_id}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Name of the annotated dataset to get, format:
     * projects/{project_id}/datasets/{dataset_id}/annotatedDatasets/
     * {annotated_dataset_id}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}
