<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/maps/fleetengine/delivery/v1/task_tracking_info.proto

namespace Google\Maps\FleetEngine\Delivery\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The `TaskTrackingInfo` message. The message contains task tracking
 * information which will be used for display. If a tracking ID is associated
 * with multiple Tasks, Fleet Engine uses a heuristic to decide which Task's
 * TaskTrackingInfo to select.
 *
 * Generated from protobuf message <code>maps.fleetengine.delivery.v1.TaskTrackingInfo</code>
 */
class TaskTrackingInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Must be in the format `providers/{provider}/taskTrackingInfo/{tracking}`,
     * where `tracking` represents the tracking ID.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Immutable. The tracking ID of a Task.
     * * Must be a valid Unicode string.
     * * Limited to a maximum length of 64 characters.
     * * Normalized according to [Unicode Normalization Form C]
     * (http://www.unicode.org/reports/tr15/).
     * * May not contain any of the following ASCII characters: '/', ':', '?',
     * ',', or '#'.
     *
     * Generated from protobuf field <code>string tracking_id = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $tracking_id = '';
    /**
     * The vehicle's last location.
     *
     * Generated from protobuf field <code>.maps.fleetengine.delivery.v1.DeliveryVehicleLocation vehicle_location = 3;</code>
     */
    protected $vehicle_location = null;
    /**
     * A list of points which when connected forms a polyline of the vehicle's
     * expected route to the location of this task.
     *
     * Generated from protobuf field <code>repeated .google.type.LatLng route_polyline_points = 4;</code>
     */
    private $route_polyline_points;
    /**
     * Indicates the number of stops the vehicle remaining until the task stop is
     * reached, including the task stop. For example, if the vehicle's next stop
     * is the task stop, the value will be 1.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value remaining_stop_count = 5;</code>
     */
    protected $remaining_stop_count = null;
    /**
     * The total remaining distance in meters to the `VehicleStop` of interest.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value remaining_driving_distance_meters = 6;</code>
     */
    protected $remaining_driving_distance_meters = null;
    /**
     * The timestamp that indicates the estimated arrival time to the stop
     * location.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp estimated_arrival_time = 7;</code>
     */
    protected $estimated_arrival_time = null;
    /**
     * The timestamp that indicates the estimated completion time of a Task.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp estimated_task_completion_time = 8;</code>
     */
    protected $estimated_task_completion_time = null;
    /**
     * The current execution state of the Task.
     *
     * Generated from protobuf field <code>.maps.fleetengine.delivery.v1.Task.State state = 11;</code>
     */
    protected $state = 0;
    /**
     * The outcome of attempting to execute a Task.
     *
     * Generated from protobuf field <code>.maps.fleetengine.delivery.v1.Task.TaskOutcome task_outcome = 9;</code>
     */
    protected $task_outcome = 0;
    /**
     * The timestamp that indicates when the Task's outcome was set by the
     * provider.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp task_outcome_time = 12;</code>
     */
    protected $task_outcome_time = null;
    /**
     * Immutable. The location where the Task will be completed.
     *
     * Generated from protobuf field <code>.maps.fleetengine.delivery.v1.LocationInfo planned_location = 10 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $planned_location = null;
    /**
     * The time window during which the task should be completed.
     *
     * Generated from protobuf field <code>.maps.fleetengine.delivery.v1.TimeWindow target_time_window = 13;</code>
     */
    protected $target_time_window = null;
    /**
     * The custom attributes set on the task.
     *
     * Generated from protobuf field <code>repeated .maps.fleetengine.delivery.v1.TaskAttribute attributes = 14;</code>
     */
    private $attributes;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Must be in the format `providers/{provider}/taskTrackingInfo/{tracking}`,
     *           where `tracking` represents the tracking ID.
     *     @type string $tracking_id
     *           Immutable. The tracking ID of a Task.
     *           * Must be a valid Unicode string.
     *           * Limited to a maximum length of 64 characters.
     *           * Normalized according to [Unicode Normalization Form C]
     *           (http://www.unicode.org/reports/tr15/).
     *           * May not contain any of the following ASCII characters: '/', ':', '?',
     *           ',', or '#'.
     *     @type \Google\Maps\FleetEngine\Delivery\V1\DeliveryVehicleLocation $vehicle_location
     *           The vehicle's last location.
     *     @type array<\Google\Type\LatLng>|\Google\Protobuf\Internal\RepeatedField $route_polyline_points
     *           A list of points which when connected forms a polyline of the vehicle's
     *           expected route to the location of this task.
     *     @type \Google\Protobuf\Int32Value $remaining_stop_count
     *           Indicates the number of stops the vehicle remaining until the task stop is
     *           reached, including the task stop. For example, if the vehicle's next stop
     *           is the task stop, the value will be 1.
     *     @type \Google\Protobuf\Int32Value $remaining_driving_distance_meters
     *           The total remaining distance in meters to the `VehicleStop` of interest.
     *     @type \Google\Protobuf\Timestamp $estimated_arrival_time
     *           The timestamp that indicates the estimated arrival time to the stop
     *           location.
     *     @type \Google\Protobuf\Timestamp $estimated_task_completion_time
     *           The timestamp that indicates the estimated completion time of a Task.
     *     @type int $state
     *           The current execution state of the Task.
     *     @type int $task_outcome
     *           The outcome of attempting to execute a Task.
     *     @type \Google\Protobuf\Timestamp $task_outcome_time
     *           The timestamp that indicates when the Task's outcome was set by the
     *           provider.
     *     @type \Google\Maps\FleetEngine\Delivery\V1\LocationInfo $planned_location
     *           Immutable. The location where the Task will be completed.
     *     @type \Google\Maps\FleetEngine\Delivery\V1\TimeWindow $target_time_window
     *           The time window during which the task should be completed.
     *     @type array<\Google\Maps\FleetEngine\Delivery\V1\TaskAttribute>|\Google\Protobuf\Internal\RepeatedField $attributes
     *           The custom attributes set on the task.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Maps\Fleetengine\Delivery\V1\TaskTrackingInfo::initOnce();
        parent::__construct($data);
    }

    /**
     * Must be in the format `providers/{provider}/taskTrackingInfo/{tracking}`,
     * where `tracking` represents the tracking ID.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Must be in the format `providers/{provider}/taskTrackingInfo/{tracking}`,
     * where `tracking` represents the tracking ID.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Immutable. The tracking ID of a Task.
     * * Must be a valid Unicode string.
     * * Limited to a maximum length of 64 characters.
     * * Normalized according to [Unicode Normalization Form C]
     * (http://www.unicode.org/reports/tr15/).
     * * May not contain any of the following ASCII characters: '/', ':', '?',
     * ',', or '#'.
     *
     * Generated from protobuf field <code>string tracking_id = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getTrackingId()
    {
        return $this->tracking_id;
    }

    /**
     * Immutable. The tracking ID of a Task.
     * * Must be a valid Unicode string.
     * * Limited to a maximum length of 64 characters.
     * * Normalized according to [Unicode Normalization Form C]
     * (http://www.unicode.org/reports/tr15/).
     * * May not contain any of the following ASCII characters: '/', ':', '?',
     * ',', or '#'.
     *
     * Generated from protobuf field <code>string tracking_id = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setTrackingId($var)
    {
        GPBUtil::checkString($var, True);
        $this->tracking_id = $var;

        return $this;
    }

    /**
     * The vehicle's last location.
     *
     * Generated from protobuf field <code>.maps.fleetengine.delivery.v1.DeliveryVehicleLocation vehicle_location = 3;</code>
     * @return \Google\Maps\FleetEngine\Delivery\V1\DeliveryVehicleLocation|null
     */
    public function getVehicleLocation()
    {
        return $this->vehicle_location;
    }

    public function hasVehicleLocation()
    {
        return isset($this->vehicle_location);
    }

    public function clearVehicleLocation()
    {
        unset($this->vehicle_location);
    }

    /**
     * The vehicle's last location.
     *
     * Generated from protobuf field <code>.maps.fleetengine.delivery.v1.DeliveryVehicleLocation vehicle_location = 3;</code>
     * @param \Google\Maps\FleetEngine\Delivery\V1\DeliveryVehicleLocation $var
     * @return $this
     */
    public function setVehicleLocation($var)
    {
        GPBUtil::checkMessage($var, \Google\Maps\FleetEngine\Delivery\V1\DeliveryVehicleLocation::class);
        $this->vehicle_location = $var;

        return $this;
    }

    /**
     * A list of points which when connected forms a polyline of the vehicle's
     * expected route to the location of this task.
     *
     * Generated from protobuf field <code>repeated .google.type.LatLng route_polyline_points = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRoutePolylinePoints()
    {
        return $this->route_polyline_points;
    }

    /**
     * A list of points which when connected forms a polyline of the vehicle's
     * expected route to the location of this task.
     *
     * Generated from protobuf field <code>repeated .google.type.LatLng route_polyline_points = 4;</code>
     * @param array<\Google\Type\LatLng>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRoutePolylinePoints($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Type\LatLng::class);
        $this->route_polyline_points = $arr;

        return $this;
    }

    /**
     * Indicates the number of stops the vehicle remaining until the task stop is
     * reached, including the task stop. For example, if the vehicle's next stop
     * is the task stop, the value will be 1.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value remaining_stop_count = 5;</code>
     * @return \Google\Protobuf\Int32Value|null
     */
    public function getRemainingStopCount()
    {
        return $this->remaining_stop_count;
    }

    public function hasRemainingStopCount()
    {
        return isset($this->remaining_stop_count);
    }

    public function clearRemainingStopCount()
    {
        unset($this->remaining_stop_count);
    }

    /**
     * Returns the unboxed value from <code>getRemainingStopCount()</code>

     * Indicates the number of stops the vehicle remaining until the task stop is
     * reached, including the task stop. For example, if the vehicle's next stop
     * is the task stop, the value will be 1.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value remaining_stop_count = 5;</code>
     * @return int|null
     */
    public function getRemainingStopCountUnwrapped()
    {
        return $this->readWrapperValue("remaining_stop_count");
    }

    /**
     * Indicates the number of stops the vehicle remaining until the task stop is
     * reached, including the task stop. For example, if the vehicle's next stop
     * is the task stop, the value will be 1.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value remaining_stop_count = 5;</code>
     * @param \Google\Protobuf\Int32Value $var
     * @return $this
     */
    public function setRemainingStopCount($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int32Value::class);
        $this->remaining_stop_count = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int32Value object.

     * Indicates the number of stops the vehicle remaining until the task stop is
     * reached, including the task stop. For example, if the vehicle's next stop
     * is the task stop, the value will be 1.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value remaining_stop_count = 5;</code>
     * @param int|null $var
     * @return $this
     */
    public function setRemainingStopCountUnwrapped($var)
    {
        $this->writeWrapperValue("remaining_stop_count", $var);
        return $this;}

    /**
     * The total remaining distance in meters to the `VehicleStop` of interest.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value remaining_driving_distance_meters = 6;</code>
     * @return \Google\Protobuf\Int32Value|null
     */
    public function getRemainingDrivingDistanceMeters()
    {
        return $this->remaining_driving_distance_meters;
    }

    public function hasRemainingDrivingDistanceMeters()
    {
        return isset($this->remaining_driving_distance_meters);
    }

    public function clearRemainingDrivingDistanceMeters()
    {
        unset($this->remaining_driving_distance_meters);
    }

    /**
     * Returns the unboxed value from <code>getRemainingDrivingDistanceMeters()</code>

     * The total remaining distance in meters to the `VehicleStop` of interest.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value remaining_driving_distance_meters = 6;</code>
     * @return int|null
     */
    public function getRemainingDrivingDistanceMetersUnwrapped()
    {
        return $this->readWrapperValue("remaining_driving_distance_meters");
    }

    /**
     * The total remaining distance in meters to the `VehicleStop` of interest.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value remaining_driving_distance_meters = 6;</code>
     * @param \Google\Protobuf\Int32Value $var
     * @return $this
     */
    public function setRemainingDrivingDistanceMeters($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int32Value::class);
        $this->remaining_driving_distance_meters = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int32Value object.

     * The total remaining distance in meters to the `VehicleStop` of interest.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value remaining_driving_distance_meters = 6;</code>
     * @param int|null $var
     * @return $this
     */
    public function setRemainingDrivingDistanceMetersUnwrapped($var)
    {
        $this->writeWrapperValue("remaining_driving_distance_meters", $var);
        return $this;}

    /**
     * The timestamp that indicates the estimated arrival time to the stop
     * location.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp estimated_arrival_time = 7;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEstimatedArrivalTime()
    {
        return $this->estimated_arrival_time;
    }

    public function hasEstimatedArrivalTime()
    {
        return isset($this->estimated_arrival_time);
    }

    public function clearEstimatedArrivalTime()
    {
        unset($this->estimated_arrival_time);
    }

    /**
     * The timestamp that indicates the estimated arrival time to the stop
     * location.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp estimated_arrival_time = 7;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEstimatedArrivalTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->estimated_arrival_time = $var;

        return $this;
    }

    /**
     * The timestamp that indicates the estimated completion time of a Task.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp estimated_task_completion_time = 8;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEstimatedTaskCompletionTime()
    {
        return $this->estimated_task_completion_time;
    }

    public function hasEstimatedTaskCompletionTime()
    {
        return isset($this->estimated_task_completion_time);
    }

    public function clearEstimatedTaskCompletionTime()
    {
        unset($this->estimated_task_completion_time);
    }

    /**
     * The timestamp that indicates the estimated completion time of a Task.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp estimated_task_completion_time = 8;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEstimatedTaskCompletionTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->estimated_task_completion_time = $var;

        return $this;
    }

    /**
     * The current execution state of the Task.
     *
     * Generated from protobuf field <code>.maps.fleetengine.delivery.v1.Task.State state = 11;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * The current execution state of the Task.
     *
     * Generated from protobuf field <code>.maps.fleetengine.delivery.v1.Task.State state = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Maps\FleetEngine\Delivery\V1\Task\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * The outcome of attempting to execute a Task.
     *
     * Generated from protobuf field <code>.maps.fleetengine.delivery.v1.Task.TaskOutcome task_outcome = 9;</code>
     * @return int
     */
    public function getTaskOutcome()
    {
        return $this->task_outcome;
    }

    /**
     * The outcome of attempting to execute a Task.
     *
     * Generated from protobuf field <code>.maps.fleetengine.delivery.v1.Task.TaskOutcome task_outcome = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setTaskOutcome($var)
    {
        GPBUtil::checkEnum($var, \Google\Maps\FleetEngine\Delivery\V1\Task\TaskOutcome::class);
        $this->task_outcome = $var;

        return $this;
    }

    /**
     * The timestamp that indicates when the Task's outcome was set by the
     * provider.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp task_outcome_time = 12;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getTaskOutcomeTime()
    {
        return $this->task_outcome_time;
    }

    public function hasTaskOutcomeTime()
    {
        return isset($this->task_outcome_time);
    }

    public function clearTaskOutcomeTime()
    {
        unset($this->task_outcome_time);
    }

    /**
     * The timestamp that indicates when the Task's outcome was set by the
     * provider.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp task_outcome_time = 12;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setTaskOutcomeTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->task_outcome_time = $var;

        return $this;
    }

    /**
     * Immutable. The location where the Task will be completed.
     *
     * Generated from protobuf field <code>.maps.fleetengine.delivery.v1.LocationInfo planned_location = 10 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return \Google\Maps\FleetEngine\Delivery\V1\LocationInfo|null
     */
    public function getPlannedLocation()
    {
        return $this->planned_location;
    }

    public function hasPlannedLocation()
    {
        return isset($this->planned_location);
    }

    public function clearPlannedLocation()
    {
        unset($this->planned_location);
    }

    /**
     * Immutable. The location where the Task will be completed.
     *
     * Generated from protobuf field <code>.maps.fleetengine.delivery.v1.LocationInfo planned_location = 10 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param \Google\Maps\FleetEngine\Delivery\V1\LocationInfo $var
     * @return $this
     */
    public function setPlannedLocation($var)
    {
        GPBUtil::checkMessage($var, \Google\Maps\FleetEngine\Delivery\V1\LocationInfo::class);
        $this->planned_location = $var;

        return $this;
    }

    /**
     * The time window during which the task should be completed.
     *
     * Generated from protobuf field <code>.maps.fleetengine.delivery.v1.TimeWindow target_time_window = 13;</code>
     * @return \Google\Maps\FleetEngine\Delivery\V1\TimeWindow|null
     */
    public function getTargetTimeWindow()
    {
        return $this->target_time_window;
    }

    public function hasTargetTimeWindow()
    {
        return isset($this->target_time_window);
    }

    public function clearTargetTimeWindow()
    {
        unset($this->target_time_window);
    }

    /**
     * The time window during which the task should be completed.
     *
     * Generated from protobuf field <code>.maps.fleetengine.delivery.v1.TimeWindow target_time_window = 13;</code>
     * @param \Google\Maps\FleetEngine\Delivery\V1\TimeWindow $var
     * @return $this
     */
    public function setTargetTimeWindow($var)
    {
        GPBUtil::checkMessage($var, \Google\Maps\FleetEngine\Delivery\V1\TimeWindow::class);
        $this->target_time_window = $var;

        return $this;
    }

    /**
     * The custom attributes set on the task.
     *
     * Generated from protobuf field <code>repeated .maps.fleetengine.delivery.v1.TaskAttribute attributes = 14;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * The custom attributes set on the task.
     *
     * Generated from protobuf field <code>repeated .maps.fleetengine.delivery.v1.TaskAttribute attributes = 14;</code>
     * @param array<\Google\Maps\FleetEngine\Delivery\V1\TaskAttribute>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAttributes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Maps\FleetEngine\Delivery\V1\TaskAttribute::class);
        $this->attributes = $arr;

        return $this;
    }

}
