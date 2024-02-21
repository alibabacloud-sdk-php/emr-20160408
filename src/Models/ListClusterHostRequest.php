<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class ListClusterHostRequest extends Model
{
    /**
     * @example C-D7CA98AAA96A****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example HiveServer2
     *
     * @var string
     */
    public $componentName;

    /**
     * @example MASTER
     *
     * @var string
     */
    public $groupType;

    /**
     * @example G-A5EA210E15FC****
     *
     * @var string
     */
    public $hostGroupId;

    /**
     * @example i-bp11vdyh3l6xvmnl****
     *
     * @var string
     */
    public $hostInstanceId;

    /**
     * @example emr-header-1
     *
     * @var string
     */
    public $hostName;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 192.***.***.***
     *
     * @var string
     */
    public $privateIp;

    /**
     * @example 47.***.***.***
     *
     * @var string
     */
    public $publicIp;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @example ["NORMAL"]
     *
     * @var string[]
     */
    public $statusList;
    protected $_name = [
        'clusterId'       => 'ClusterId',
        'componentName'   => 'ComponentName',
        'groupType'       => 'GroupType',
        'hostGroupId'     => 'HostGroupId',
        'hostInstanceId'  => 'HostInstanceId',
        'hostName'        => 'HostName',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'privateIp'       => 'PrivateIp',
        'publicIp'        => 'PublicIp',
        'regionId'        => 'RegionId',
        'resourceOwnerId' => 'ResourceOwnerId',
        'statusList'      => 'StatusList',
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
        if (null !== $this->componentName) {
            $res['ComponentName'] = $this->componentName;
        }
        if (null !== $this->groupType) {
            $res['GroupType'] = $this->groupType;
        }
        if (null !== $this->hostGroupId) {
            $res['HostGroupId'] = $this->hostGroupId;
        }
        if (null !== $this->hostInstanceId) {
            $res['HostInstanceId'] = $this->hostInstanceId;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->privateIp) {
            $res['PrivateIp'] = $this->privateIp;
        }
        if (null !== $this->publicIp) {
            $res['PublicIp'] = $this->publicIp;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->statusList) {
            $res['StatusList'] = $this->statusList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListClusterHostRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ComponentName'])) {
            $model->componentName = $map['ComponentName'];
        }
        if (isset($map['GroupType'])) {
            $model->groupType = $map['GroupType'];
        }
        if (isset($map['HostGroupId'])) {
            $model->hostGroupId = $map['HostGroupId'];
        }
        if (isset($map['HostInstanceId'])) {
            $model->hostInstanceId = $map['HostInstanceId'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PrivateIp'])) {
            $model->privateIp = $map['PrivateIp'];
        }
        if (isset($map['PublicIp'])) {
            $model->publicIp = $map['PublicIp'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['StatusList'])) {
            if (!empty($map['StatusList'])) {
                $model->statusList = $map['StatusList'];
            }
        }

        return $model;
    }
}
