<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/maps/fleetengine/delivery/v1/delivery_api.proto

namespace GPBMetadata\Google\Maps\Fleetengine\Delivery\V1;

class DeliveryApi
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
        \GPBMetadata\Google\Api\Routing::initOnce();
        \GPBMetadata\Google\Geo\Type\Viewport::initOnce();
        \GPBMetadata\Google\Maps\Fleetengine\Delivery\V1\DeliveryVehicles::initOnce();
        \GPBMetadata\Google\Maps\Fleetengine\Delivery\V1\Header::initOnce();
        \GPBMetadata\Google\Maps\Fleetengine\Delivery\V1\TaskTrackingInfo::initOnce();
        \GPBMetadata\Google\Maps\Fleetengine\Delivery\V1\Tasks::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(
            '
�,
6google/maps/fleetengine/delivery/v1/delivery_api.protomaps.fleetengine.delivery.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/api/routing.protogoogle/geo/type/viewport.proto;google/maps/fleetengine/delivery/v1/delivery_vehicles.proto0google/maps/fleetengine/delivery/v1/header.proto<google/maps/fleetengine/delivery/v1/task_tracking_info.proto/google/maps/fleetengine/delivery/v1/tasks.proto google/protobuf/field_mask.proto"�
CreateDeliveryVehicleRequestH
header (23.maps.fleetengine.delivery.v1.DeliveryRequestHeaderB�A
parent (	B�A 
delivery_vehicle_id (	B�AL
delivery_vehicle (2-.maps.fleetengine.delivery.v1.DeliveryVehicleB�A"�
GetDeliveryVehicleRequestH
header (23.maps.fleetengine.delivery.v1.DeliveryRequestHeaderB�A@
name (	B2�A�A,
*fleetengine.googleapis.com/DeliveryVehicle"�
ListDeliveryVehiclesRequestH
header (23.maps.fleetengine.delivery.v1.DeliveryRequestHeaderB�AB
parent (	B2�A�A,*fleetengine.googleapis.com/DeliveryVehicle
	page_size (B�A

page_token (	B�A
filter (	B�A0
viewport (2.google.geo.type.ViewportB�A"�
ListDeliveryVehiclesResponseH
delivery_vehicles (2-.maps.fleetengine.delivery.v1.DeliveryVehicle
next_page_token (	

total_size ("�
UpdateDeliveryVehicleRequestH
header (23.maps.fleetengine.delivery.v1.DeliveryRequestHeaderB�AL
delivery_vehicle (2-.maps.fleetengine.delivery.v1.DeliveryVehicleB�A4
update_mask (2.google.protobuf.FieldMaskB�A"�
BatchCreateTasksRequestH
header (23.maps.fleetengine.delivery.v1.DeliveryRequestHeaderB�A7
parent (	B\'�A�A!fleetengine.googleapis.com/TaskF
requests (2/.maps.fleetengine.delivery.v1.CreateTaskRequestB�A"M
BatchCreateTasksResponse1
tasks (2".maps.fleetengine.delivery.v1.Task"�
CreateTaskRequestH
header (23.maps.fleetengine.delivery.v1.DeliveryRequestHeaderB�A
parent (	B�A
task_id (	B�A5
task (2".maps.fleetengine.delivery.v1.TaskB�A"�
GetTaskRequestH
header (23.maps.fleetengine.delivery.v1.DeliveryRequestHeaderB�A5
name (	B\'�A�A!
fleetengine.googleapis.com/Task"�
UpdateTaskRequestH
header (23.maps.fleetengine.delivery.v1.DeliveryRequestHeaderB�A5
task (2".maps.fleetengine.delivery.v1.TaskB�A4
update_mask (2.google.protobuf.FieldMaskB�A"�
ListTasksRequestH
header (23.maps.fleetengine.delivery.v1.DeliveryRequestHeaderB�A7
parent (	B\'�A�A!fleetengine.googleapis.com/Task
	page_size (B�A

page_token (	B�A
filter (	B�A"s
ListTasksResponse1
tasks (2".maps.fleetengine.delivery.v1.Task
next_page_token (	

total_size ("�
GetTaskTrackingInfoRequestH
header (23.maps.fleetengine.delivery.v1.DeliveryRequestHeaderB�AA
name (	B3�A�A-
+fleetengine.googleapis.com/TaskTrackingInfo2�
DeliveryService�
CreateDeliveryVehicle:.maps.fleetengine.delivery.v1.CreateDeliveryVehicleRequest-.maps.fleetengine.delivery.v1.DeliveryVehicle"��A+parent,delivery_vehicle,delivery_vehicle_id���=")/v1/{parent=providers/*}/deliveryVehicles:delivery_vehicle���%#
parent{provider_id=providers/*}�
GetDeliveryVehicle7.maps.fleetengine.delivery.v1.GetDeliveryVehicleRequest-.maps.fleetengine.delivery.v1.DeliveryVehicle"a�Aname���+)/v1/{name=providers/*/deliveryVehicles/*}���#!
name{provider_id=providers/*}�
UpdateDeliveryVehicle:.maps.fleetengine.delivery.v1.UpdateDeliveryVehicleRequest-.maps.fleetengine.delivery.v1.DeliveryVehicle"��Adelivery_vehicle,update_mask���N2:/v1/{delivery_vehicle.name=providers/*/deliveryVehicles/*}:delivery_vehicle���42
delivery_vehicle.name{provider_id=providers/*}�
BatchCreateTasks5.maps.fleetengine.delivery.v1.BatchCreateTasksRequest6.maps.fleetengine.delivery.v1.BatchCreateTasksResponse"`���/"*/v1/{parent=providers/*}/tasks:batchCreate:*���%#
parent{provider_id=providers/*}�

CreateTask/.maps.fleetengine.delivery.v1.CreateTaskRequest".maps.fleetengine.delivery.v1.Task"m�Aparent,task,task_id���&"/v1/{parent=providers/*}/tasks:task���%#
parent{provider_id=providers/*}�
GetTask,.maps.fleetengine.delivery.v1.GetTaskRequest".maps.fleetengine.delivery.v1.Task"V�Aname��� /v1/{name=providers/*/tasks/*}���#!
name{provider_id=providers/*}�

UpdateTask/.maps.fleetengine.delivery.v1.UpdateTaskRequest".maps.fleetengine.delivery.v1.Task"r�Atask,update_mask���+2#/v1/{task.name=providers/*/tasks/*}:task���(&
	task.name{provider_id=providers/*}�
	ListTasks..maps.fleetengine.delivery.v1.ListTasksRequest/.maps.fleetengine.delivery.v1.ListTasksResponse"Z�Aparent��� /v1/{parent=providers/*}/tasks���%#
parent{provider_id=providers/*}�
GetTaskTrackingInfo8.maps.fleetengine.delivery.v1.GetTaskTrackingInfoRequest..maps.fleetengine.delivery.v1.TaskTrackingInfo"a�Aname���+)/v1/{name=providers/*/taskTrackingInfo/*}���#!
name{provider_id=providers/*}�
ListDeliveryVehicles9.maps.fleetengine.delivery.v1.ListDeliveryVehiclesRequest:.maps.fleetengine.delivery.v1.ListDeliveryVehiclesResponse"e�Aparent���+)/v1/{parent=providers/*}/deliveryVehicles���%#
parent{provider_id=providers/*}N�Afleetengine.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
#google.maps.fleetengine.delivery.v1BDeliveryApiPZIcloud.google.com/go/maps/fleetengine/delivery/apiv1/deliverypb;deliverypb�CFED�#Google.Maps.FleetEngine.Delivery.V1�#Google\\Maps\\FleetEngine\\Delivery\\V1�\'Google::Maps::FleetEngine::Delivery::V1�A;
#fleetengine.googleapis.com/Providerproviders/{provider}bproto3'
        , true);

        static::$is_initialized = true;
    }
}
