<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkservices/v1/mesh.proto

namespace GPBMetadata\Google\Cloud\Networkservices\V1;

class Mesh
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
*google/cloud/networkservices/v1/mesh.protogoogle.cloud.networkservices.v1google/api/resource.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.proto"�
Mesh
name (	B�A
	self_link	 (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�AF
labels (21.google.cloud.networkservices.v1.Mesh.LabelsEntryB�A
description (	B�A
interception_port (B�A-
LabelsEntry
key (	
value (	:8:_�A\\
#networkservices.googleapis.com/Mesh5projects/{project}/locations/{location}/meshes/{mesh}"w
ListMeshesRequest;
parent (	B+�A�A%#networkservices.googleapis.com/Mesh
	page_size (

page_token (	"d
ListMeshesResponse5
meshes (2%.google.cloud.networkservices.v1.Mesh
next_page_token (	"K
GetMeshRequest9
name (	B+�A�A%
#networkservices.googleapis.com/Mesh"�
CreateMeshRequest;
parent (	B+�A�A%#networkservices.googleapis.com/Mesh
mesh_id (	B�A8
mesh (2%.google.cloud.networkservices.v1.MeshB�A"�
UpdateMeshRequest4
update_mask (2.google.protobuf.FieldMaskB�A8
mesh (2%.google.cloud.networkservices.v1.MeshB�A"N
DeleteMeshRequest9
name (	B+�A�A%
#networkservices.googleapis.com/MeshB�
#com.google.cloud.networkservices.v1B	MeshProtoPZMcloud.google.com/go/networkservices/apiv1/networkservicespb;networkservicespb�Google.Cloud.NetworkServices.V1�Google\\Cloud\\NetworkServices\\V1�"Google::Cloud::NetworkServices::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}
