<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListScalingActivityV2ResponseBody\items;

use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @example asa-bp18jfxw7gqnkhtz****
     *
     * @var string
     */
    public $bizId;

    /**
     * @example A user requests to execute scaling rule \"asr-bp1d8mebzisgwu34mcn3\", changing the Total Capacity from \"0\" to \"1\".
     *
     * @var string
     */
    public $cause;

    /**
     * @example \"1\" ECS instances are added
     *
     * @var string
     */
    public $description;

    /**
     * @example 1600691996000
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $expectNum;

    /**
     * @example G-4A1833AA86EA****
     *
     * @var string
     */
    public $hostGroupBizId;

    /**
     * @var string
     */
    public $hostGroupName;

    /**
     * @example [\"i-bp1ci2e4xqt9eqjqtfrr\"]
     *
     * @var string
     */
    public $instanceIds;

    /**
     * @example asr-bp19zruz0q7pru31****
     *
     * @var string
     */
    public $scalingRuleId;

    /**
     * @var string
     */
    public $scalingRuleName;

    /**
     * @example 1600691996000
     *
     * @var int
     */
    public $startTime;

    /**
     * @example Successful
     *
     * @var string
     */
    public $status;

    /**
     * @example 10
     *
     * @var int
     */
    public $totalCapacity;

    /**
     * @example SCALE_OUT
     *
     * @var string
     */
    public $transition;
    protected $_name = [
        'bizId'           => 'BizId',
        'cause'           => 'Cause',
        'description'     => 'Description',
        'endTime'         => 'EndTime',
        'expectNum'       => 'ExpectNum',
        'hostGroupBizId'  => 'HostGroupBizId',
        'hostGroupName'   => 'HostGroupName',
        'instanceIds'     => 'InstanceIds',
        'scalingRuleId'   => 'ScalingRuleId',
        'scalingRuleName' => 'ScalingRuleName',
        'startTime'       => 'StartTime',
        'status'          => 'Status',
        'totalCapacity'   => 'TotalCapacity',
        'transition'      => 'Transition',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->cause) {
            $res['Cause'] = $this->cause;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->expectNum) {
            $res['ExpectNum'] = $this->expectNum;
        }
        if (null !== $this->hostGroupBizId) {
            $res['HostGroupBizId'] = $this->hostGroupBizId;
        }
        if (null !== $this->hostGroupName) {
            $res['HostGroupName'] = $this->hostGroupName;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->scalingRuleId) {
            $res['ScalingRuleId'] = $this->scalingRuleId;
        }
        if (null !== $this->scalingRuleName) {
            $res['ScalingRuleName'] = $this->scalingRuleName;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->totalCapacity) {
            $res['TotalCapacity'] = $this->totalCapacity;
        }
        if (null !== $this->transition) {
            $res['Transition'] = $this->transition;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return item
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['Cause'])) {
            $model->cause = $map['Cause'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ExpectNum'])) {
            $model->expectNum = $map['ExpectNum'];
        }
        if (isset($map['HostGroupBizId'])) {
            $model->hostGroupBizId = $map['HostGroupBizId'];
        }
        if (isset($map['HostGroupName'])) {
            $model->hostGroupName = $map['HostGroupName'];
        }
        if (isset($map['InstanceIds'])) {
            $model->instanceIds = $map['InstanceIds'];
        }
        if (isset($map['ScalingRuleId'])) {
            $model->scalingRuleId = $map['ScalingRuleId'];
        }
        if (isset($map['ScalingRuleName'])) {
            $model->scalingRuleName = $map['ScalingRuleName'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TotalCapacity'])) {
            $model->totalCapacity = $map['TotalCapacity'];
        }
        if (isset($map['Transition'])) {
            $model->transition = $map['Transition'];
        }

        return $model;
    }
}
