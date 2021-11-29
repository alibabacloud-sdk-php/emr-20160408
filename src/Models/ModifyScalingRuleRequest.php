<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyScalingRuleRequest\cloudWatchTrigger;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyScalingRuleRequest\schedulerTrigger;
use AlibabaCloud\Tea\Model;

class ModifyScalingRuleRequest extends Model
{
    /**
     * @var string
     */
    public $adjustmentType;

    /**
     * @var int
     */
    public $adjustmentValue;

    /**
     * @var cloudWatchTrigger[]
     */
    public $cloudWatchTrigger;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var int
     */
    public $cooldown;

    /**
     * @var string
     */
    public $hostGroupId;

    /**
     * @var int
     */
    public $launchExpirationTime;

    /**
     * @var string
     */
    public $launchTime;

    /**
     * @var string
     */
    public $recurrenceEndTime;

    /**
     * @var string
     */
    public $recurrenceType;

    /**
     * @var string
     */
    public $recurrenceValue;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var string
     */
    public $scalingRuleId;

    /**
     * @var schedulerTrigger[]
     */
    public $schedulerTrigger;

    /**
     * @var int
     */
    public $timeoutWithGrace;

    /**
     * @var bool
     */
    public $withGrace;
    protected $_name = [
        'adjustmentType'       => 'AdjustmentType',
        'adjustmentValue'      => 'AdjustmentValue',
        'cloudWatchTrigger'    => 'CloudWatchTrigger',
        'clusterId'            => 'ClusterId',
        'cooldown'             => 'Cooldown',
        'hostGroupId'          => 'HostGroupId',
        'launchExpirationTime' => 'LaunchExpirationTime',
        'launchTime'           => 'LaunchTime',
        'recurrenceEndTime'    => 'RecurrenceEndTime',
        'recurrenceType'       => 'RecurrenceType',
        'recurrenceValue'      => 'RecurrenceValue',
        'regionId'             => 'RegionId',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'ruleName'             => 'RuleName',
        'scalingRuleId'        => 'ScalingRuleId',
        'schedulerTrigger'     => 'SchedulerTrigger',
        'timeoutWithGrace'     => 'TimeoutWithGrace',
        'withGrace'            => 'WithGrace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adjustmentType) {
            $res['AdjustmentType'] = $this->adjustmentType;
        }
        if (null !== $this->adjustmentValue) {
            $res['AdjustmentValue'] = $this->adjustmentValue;
        }
        if (null !== $this->cloudWatchTrigger) {
            $res['CloudWatchTrigger'] = [];
            if (null !== $this->cloudWatchTrigger && \is_array($this->cloudWatchTrigger)) {
                $n = 0;
                foreach ($this->cloudWatchTrigger as $item) {
                    $res['CloudWatchTrigger'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->cooldown) {
            $res['Cooldown'] = $this->cooldown;
        }
        if (null !== $this->hostGroupId) {
            $res['HostGroupId'] = $this->hostGroupId;
        }
        if (null !== $this->launchExpirationTime) {
            $res['LaunchExpirationTime'] = $this->launchExpirationTime;
        }
        if (null !== $this->launchTime) {
            $res['LaunchTime'] = $this->launchTime;
        }
        if (null !== $this->recurrenceEndTime) {
            $res['RecurrenceEndTime'] = $this->recurrenceEndTime;
        }
        if (null !== $this->recurrenceType) {
            $res['RecurrenceType'] = $this->recurrenceType;
        }
        if (null !== $this->recurrenceValue) {
            $res['RecurrenceValue'] = $this->recurrenceValue;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->scalingRuleId) {
            $res['ScalingRuleId'] = $this->scalingRuleId;
        }
        if (null !== $this->schedulerTrigger) {
            $res['SchedulerTrigger'] = [];
            if (null !== $this->schedulerTrigger && \is_array($this->schedulerTrigger)) {
                $n = 0;
                foreach ($this->schedulerTrigger as $item) {
                    $res['SchedulerTrigger'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->timeoutWithGrace) {
            $res['TimeoutWithGrace'] = $this->timeoutWithGrace;
        }
        if (null !== $this->withGrace) {
            $res['WithGrace'] = $this->withGrace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyScalingRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdjustmentType'])) {
            $model->adjustmentType = $map['AdjustmentType'];
        }
        if (isset($map['AdjustmentValue'])) {
            $model->adjustmentValue = $map['AdjustmentValue'];
        }
        if (isset($map['CloudWatchTrigger'])) {
            if (!empty($map['CloudWatchTrigger'])) {
                $model->cloudWatchTrigger = [];
                $n                        = 0;
                foreach ($map['CloudWatchTrigger'] as $item) {
                    $model->cloudWatchTrigger[$n++] = null !== $item ? cloudWatchTrigger::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Cooldown'])) {
            $model->cooldown = $map['Cooldown'];
        }
        if (isset($map['HostGroupId'])) {
            $model->hostGroupId = $map['HostGroupId'];
        }
        if (isset($map['LaunchExpirationTime'])) {
            $model->launchExpirationTime = $map['LaunchExpirationTime'];
        }
        if (isset($map['LaunchTime'])) {
            $model->launchTime = $map['LaunchTime'];
        }
        if (isset($map['RecurrenceEndTime'])) {
            $model->recurrenceEndTime = $map['RecurrenceEndTime'];
        }
        if (isset($map['RecurrenceType'])) {
            $model->recurrenceType = $map['RecurrenceType'];
        }
        if (isset($map['RecurrenceValue'])) {
            $model->recurrenceValue = $map['RecurrenceValue'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['ScalingRuleId'])) {
            $model->scalingRuleId = $map['ScalingRuleId'];
        }
        if (isset($map['SchedulerTrigger'])) {
            if (!empty($map['SchedulerTrigger'])) {
                $model->schedulerTrigger = [];
                $n                       = 0;
                foreach ($map['SchedulerTrigger'] as $item) {
                    $model->schedulerTrigger[$n++] = null !== $item ? schedulerTrigger::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TimeoutWithGrace'])) {
            $model->timeoutWithGrace = $map['TimeoutWithGrace'];
        }
        if (isset($map['WithGrace'])) {
            $model->withGrace = $map['WithGrace'];
        }

        return $model;
    }
}
