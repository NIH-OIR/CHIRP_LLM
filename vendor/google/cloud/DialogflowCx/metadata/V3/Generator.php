<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/generator.proto

namespace GPBMetadata\Google\Cloud\Dialogflow\Cx\V3;

class Generator
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
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
-google/cloud/dialogflow/cx/v3/generator.protogoogle.cloud.dialogflow.cx.v3google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/protobuf/empty.proto google/protobuf/field_mask.proto"�
	Generator
name (	
display_name (	B�A?
prompt_text (2%.google.cloud.dialogflow.cx.v3.PhraseB�AO
placeholders (24.google.cloud.dialogflow.cx.v3.Generator.PlaceholderB�A\'
Placeholder

id (	
name (	:w�At
#dialogflow.googleapis.com/GeneratorMprojects/{project}/locations/{location}/agents/{agent}/generators/{generator}"
Phrase
text (	B�A"�
ListGeneratorsRequest;
parent (	B+�A�A%#dialogflow.googleapis.com/Generator

	page_size (

page_token (	"o
ListGeneratorsResponse<

generators (2(.google.cloud.dialogflow.cx.v3.Generator
next_page_token (	"g
GetGeneratorRequest9
name (	B+�A�A%
#dialogflow.googleapis.com/Generator

CreateGeneratorRequest;
parent (	B+�A�A%#dialogflow.googleapis.com/Generator@
	generator (2(.google.cloud.dialogflow.cx.v3.GeneratorB�A

UpdateGeneratorRequest@
	generator (2(.google.cloud.dialogflow.cx.v3.GeneratorB�A

update_mask (2.google.protobuf.FieldMask"b
DeleteGeneratorRequest9
name (	B+�A�A%
#dialogflow.googleapis.com/Generator
force (2�

Generators�
ListGenerators4.google.cloud.dialogflow.cx.v3.ListGeneratorsRequest5.google.cloud.dialogflow.cx.v3.ListGeneratorsResponse"H�Aparent���97/v3/{parent=projects/*/locations/*/agents/*}/generators�
GetGenerator2.google.cloud.dialogflow.cx.v3.GetGeneratorRequest(.google.cloud.dialogflow.cx.v3.Generator"F�Aname���97/v3/{name=projects/*/locations/*/agents/*/generators/*}�
CreateGenerator5.google.cloud.dialogflow.cx.v3.CreateGeneratorRequest(.google.cloud.dialogflow.cx.v3.Generator"]�Aparent,generator���D"7/v3/{parent=projects/*/locations/*/agents/*}/generators:	generator�
UpdateGenerator5.google.cloud.dialogflow.cx.v3.UpdateGeneratorRequest(.google.cloud.dialogflow.cx.v3.Generator"l�Agenerator,update_mask���N2A/v3/{generator.name=projects/*/locations/*/agents/*/generators/*}:	generator�
DeleteGenerator5.google.cloud.dialogflow.cx.v3.DeleteGeneratorRequest.google.protobuf.Empty"F�Aname���9*7/v3/{name=projects/*/locations/*/agents/*/generators/*}x�Adialogflow.googleapis.com�AYhttps://www.googleapis.com/auth/cloud-platform,https://www.googleapis.com/auth/dialogflowB�
!com.google.cloud.dialogflow.cx.v3BGeneratorProtoPZ1cloud.google.com/go/dialogflow/cx/apiv3/cxpb;cxpb��DF�Google.Cloud.Dialogflow.Cx.V3�!Google::Cloud::Dialogflow::CX::V3bproto3'
        , true);

        static::$is_initialized = true;
    }
}
