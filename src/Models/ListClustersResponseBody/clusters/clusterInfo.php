<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListClustersResponseBody\clusters;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListClustersResponseBody\clusters\clusterInfo\failReason;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListClustersResponseBody\clusters\clusterInfo\orderTaskInfo;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListClustersResponseBody\clusters\clusterInfo\tags;
use AlibabaCloud\Tea\Model;

class clusterInfo extends Model
{
    /**
     * @example PostPaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @example ECM_EMR
     *
     * @var string
     */
    public $createResource;

    /**
     * @example 1542784048000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example HALF_MANAGED
     *
     * @var string
     */
    public $depositType;

    /**
     * @example 1542784048000
     *
     * @var int
     */
    public $expiredTime;

    /**
     * @var failReason
     */
    public $failReason;

    /**
     * @example false
     *
     * @var bool
     */
    public $hasUncompletedOrder;

    /**
     * @example C-010A704DA760****
     *
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $k8sClusterId;

    /**
     * @example ECS
     *
     * @var string
     */
    public $machineType;

    /**
     * @example LOCAL
     *
     * @var string
     */
    public $metaStoreType;

    /**
     * @example cluster_name
     *
     * @var string
     */
    public $name;

    /**
     * @example 1111
     *
     * @var int
     */
    public $operationId;

    /**
     * @example 0
     *
     * @var string
     */
    public $orderList;

    /**
     * @var orderTaskInfo
     */
    public $orderTaskInfo;

    /**
     * @example 36
     *
     * @var int
     */
    public $period;

    /**
     * @example 2345
     *
     * @var int
     */
    public $runningTime;

    /**
     * @example IDEL
     *
     * @var string
     */
    public $status;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @example HADOOP
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'chargeType'          => 'ChargeType',
        'createResource'      => 'CreateResource',
        'createTime'          => 'CreateTime',
        'depositType'         => 'DepositType',
        'expiredTime'         => 'ExpiredTime',
        'failReason'          => 'FailReason',
        'hasUncompletedOrder' => 'HasUncompletedOrder',
        'id'                  => 'Id',
        'k8sClusterId'        => 'K8sClusterId',
        'machineType'         => 'MachineType',
        'metaStoreType'       => 'MetaStoreType',
        'name'                => 'Name',
        'operationId'         => 'OperationId',
        'orderList'           => 'OrderList',
        'orderTaskInfo'       => 'OrderTaskInfo',
        'period'              => 'Period',
        'runningTime'         => 'RunningTime',
        'status'              => 'Status',
        'tags'                => 'Tags',
        'type'                => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->createResource) {
            $res['CreateResource'] = $this->createResource;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->depositType) {
            $res['DepositType'] = $this->depositType;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->failReason) {
            $res['FailReason'] = null !== $this->failReason ? $this->failReason->toMap() : null;
        }
        if (null !== $this->hasUncompletedOrder) {
            $res['HasUncompletedOrder'] = $this->hasUncompletedOrder;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->k8sClusterId) {
            $res['K8sClusterId'] = $this->k8sClusterId;
        }
        if (null !== $this->machineType) {
            $res['MachineType'] = $this->machineType;
        }
        if (null !== $this->metaStoreType) {
            $res['MetaStoreType'] = $this->metaStoreType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->operationId) {
            $res['OperationId'] = $this->operationId;
        }
        if (null !== $this->orderList) {
            $res['OrderList'] = $this->orderList;
        }
        if (null !== $this->orderTaskInfo) {
            $res['OrderTaskInfo'] = null !== $this->orderTaskInfo ? $this->orderTaskInfo->toMap() : null;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->runningTime) {
            $res['RunningTime'] = $this->runningTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['CreateResource'])) {
            $model->createResource = $map['CreateResource'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DepositType'])) {
            $model->depositType = $map['DepositType'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['FailReason'])) {
            $model->failReason = failReason::fromMap($map['FailReason']);
        }
        if (isset($map['HasUncompletedOrder'])) {
            $model->hasUncompletedOrder = $map['HasUncompletedOrder'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['K8sClusterId'])) {
            $model->k8sClusterId = $map['K8sClusterId'];
        }
        if (isset($map['MachineType'])) {
            $model->machineType = $map['MachineType'];
        }
        if (isset($map['MetaStoreType'])) {
            $model->metaStoreType = $map['MetaStoreType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OperationId'])) {
            $model->operationId = $map['OperationId'];
        }
        if (isset($map['OrderList'])) {
            $model->orderList = $map['OrderList'];
        }
        if (isset($map['OrderTaskInfo'])) {
            $model->orderTaskInfo = orderTaskInfo::fromMap($map['OrderTaskInfo']);
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['RunningTime'])) {
            $model->runningTime = $map['RunningTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
