<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/genai_tuning_service.proto

namespace GPBMetadata\Google\Cloud\Aiplatform\V1;

class GenaiTuningService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\TuningJob::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
5google/cloud/aiplatform/v1/genai_tuning_service.protogoogle.cloud.aiplatform.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto+google/cloud/aiplatform/v1/tuning_job.protogoogle/protobuf/empty.proto"�
CreateTuningJobRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location>

tuning_job (2%.google.cloud.aiplatform.v1.TuningJobB�A"P
GetTuningJobRequest9
name (	B+�A�A%
#aiplatform.googleapis.com/TuningJob"�
ListTuningJobsRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
filter (	B�A
	page_size (B�A

page_token (	B�A"m
ListTuningJobsResponse:
tuning_jobs (2%.google.cloud.aiplatform.v1.TuningJob
next_page_token (	"S
CancelTuningJobRequest9
name (	B+�A�A%
#aiplatform.googleapis.com/TuningJob2�
GenAiTuningService�
CreateTuningJob2.google.cloud.aiplatform.v1.CreateTuningJobRequest%.google.cloud.aiplatform.v1.TuningJob"V�Aparent,tuning_job���<"./v1/{parent=projects/*/locations/*}/tuningJobs:
tuning_job�
GetTuningJob/.google.cloud.aiplatform.v1.GetTuningJobRequest%.google.cloud.aiplatform.v1.TuningJob"=�Aname���0./v1/{name=projects/*/locations/*/tuningJobs/*}�
ListTuningJobs1.google.cloud.aiplatform.v1.ListTuningJobsRequest2.google.cloud.aiplatform.v1.ListTuningJobsResponse"?�Aparent���0./v1/{parent=projects/*/locations/*}/tuningJobs�
CancelTuningJob2.google.cloud.aiplatform.v1.CancelTuningJobRequest.google.protobuf.Empty"G�Aname���:"5/v1/{name=projects/*/locations/*/tuningJobs/*}:cancel:*M�Aaiplatform.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
com.google.cloud.aiplatform.v1BGenAiTuningServiceProtoPZ>cloud.google.com/go/aiplatform/apiv1/aiplatformpb;aiplatformpb�Google.Cloud.AIPlatform.V1�Google\\Cloud\\AIPlatform\\V1�Google::Cloud::AIPlatform::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}
