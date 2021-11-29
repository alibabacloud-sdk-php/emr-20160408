<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class RunClusterServiceActionRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $componentNameList;

    /**
     * @var string
     */
    public $customCommand;

    /**
     * @var string
     */
    public $customParams;

    /**
     * @var string
     */
    public $executeStrategy;

    /**
     * @var string[]
     */
    public $hostGroupIdList;

    /**
     * @var string
     */
    public $hostIdList;

    /**
     * @var int
     */
    public $interval;

    /**
     * @var bool
     */
    public $isRolling;

    /**
     * @var int
     */
    public $nodeCountPerBatch;

    /**
     * @var bool
     */
    public $onlyRestartStaleConfigNodes;

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
    public $serviceActionName;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var int
     */
    public $totlerateFailCount;

    /**
     * @var bool
     */
    public $turnOnMaintenanceMode;
    protected $_name = [
        'clusterId'                   => 'ClusterId',
        'comment'                     => 'Comment',
        'componentNameList'           => 'ComponentNameList',
        'customCommand'               => 'CustomCommand',
        'customParams'                => 'CustomParams',
        'executeStrategy'             => 'ExecuteStrategy',
        'hostGroupIdList'             => 'HostGroupIdList',
        'hostIdList'                  => 'HostIdList',
        'interval'                    => 'Interval',
        'isRolling'                   => 'IsRolling',
        'nodeCountPerBatch'           => 'NodeCountPerBatch',
        'onlyRestartStaleConfigNodes' => 'OnlyRestartStaleConfigNodes',
        'regionId'                    => 'RegionId',
        'resourceOwnerId'             => 'ResourceOwnerId',
        'serviceActionName'           => 'ServiceActionName',
        'serviceName'                 => 'ServiceName',
        'totlerateFailCount'          => 'TotlerateFailCount',
        'turnOnMaintenanceMode'       => 'TurnOnMaintenanceMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->componentNameList) {
            $res['ComponentNameList'] = $this->componentNameList;
        }
        if (null !== $this->customCommand) {
            $res['CustomCommand'] = $this->customCommand;
        }
        if (null !== $this->customParams) {
            $res['CustomParams'] = $this->customParams;
        }
        if (null !== $this->executeStrategy) {
            $res['ExecuteStrategy'] = $this->executeStrategy;
        }
        if (null !== $this->hostGroupIdList) {
            $res['HostGroupIdList'] = $this->hostGroupIdList;
        }
        if (null !== $this->hostIdList) {
            $res['HostIdList'] = $this->hostIdList;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->isRolling) {
            $res['IsRolling'] = $this->isRolling;
        }
        if (null !== $this->nodeCountPerBatch) {
            $res['NodeCountPerBatch'] = $this->nodeCountPerBatch;
        }
        if (null !== $this->onlyRestartStaleConfigNodes) {
            $res['OnlyRestartStaleConfigNodes'] = $this->onlyRestartStaleConfigNodes;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->serviceActionName) {
            $res['ServiceActionName'] = $this->serviceActionName;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->totlerateFailCount) {
            $res['TotlerateFailCount'] = $this->totlerateFailCount;
        }
        if (null !== $this->turnOnMaintenanceMode) {
            $res['TurnOnMaintenanceMode'] = $this->turnOnMaintenanceMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunClusterServiceActionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['ComponentNameList'])) {
            $model->componentNameList = $map['ComponentNameList'];
        }
        if (isset($map['CustomCommand'])) {
            $model->customCommand = $map['CustomCommand'];
        }
        if (isset($map['CustomParams'])) {
            $model->customParams = $map['CustomParams'];
        }
        if (isset($map['ExecuteStrategy'])) {
            $model->executeStrategy = $map['ExecuteStrategy'];
        }
        if (isset($map['HostGroupIdList'])) {
            if (!empty($map['HostGroupIdList'])) {
                $model->hostGroupIdList = $map['HostGroupIdList'];
            }
        }
        if (isset($map['HostIdList'])) {
            $model->hostIdList = $map['HostIdList'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['IsRolling'])) {
            $model->isRolling = $map['IsRolling'];
        }
        if (isset($map['NodeCountPerBatch'])) {
            $model->nodeCountPerBatch = $map['NodeCountPerBatch'];
        }
        if (isset($map['OnlyRestartStaleConfigNodes'])) {
            $model->onlyRestartStaleConfigNodes = $map['OnlyRestartStaleConfigNodes'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['ServiceActionName'])) {
            $model->serviceActionName = $map['ServiceActionName'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['TotlerateFailCount'])) {
            $model->totlerateFailCount = $map['TotlerateFailCount'];
        }
        if (isset($map['TurnOnMaintenanceMode'])) {
            $model->turnOnMaintenanceMode = $map['TurnOnMaintenanceMode'];
        }

        return $model;
    }
}
