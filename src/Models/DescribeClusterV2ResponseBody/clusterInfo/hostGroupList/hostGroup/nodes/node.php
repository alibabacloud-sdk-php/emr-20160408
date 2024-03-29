<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterV2ResponseBody\clusterInfo\hostGroupList\hostGroup\nodes;

use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterV2ResponseBody\clusterInfo\hostGroupList\hostGroup\nodes\node\daemonInfos;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterV2ResponseBody\clusterInfo\hostGroupList\hostGroup\nodes\node\diskInfos;
use AlibabaCloud\Tea\Model;

class node extends Model
{
    /**
     * @example 1543804242000
     *
     * @var string
     */
    public $createTime;

    /**
     * @var daemonInfos
     */
    public $daemonInfos;

    /**
     * @var diskInfos
     */
    public $diskInfos;

    /**
     * @example 2099-12-31T15:59Z
     *
     * @var string
     */
    public $emrExpiredTime;

    /**
     * @example 2099-12-31T15:59Z
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @example 192.168.128.236
     *
     * @var string
     */
    public $innerIp;

    /**
     * @example i-bp1ftve3lzvpm16hp7lo
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 47.99.***.***
     *
     * @var string
     */
    public $pubIp;

    /**
     * @example NORMAL
     *
     * @var string
     */
    public $status;

    /**
     * @example false
     *
     * @var bool
     */
    public $supportIpV6;

    /**
     * @example cn-hangzhou-e
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'createTime'     => 'CreateTime',
        'daemonInfos'    => 'DaemonInfos',
        'diskInfos'      => 'DiskInfos',
        'emrExpiredTime' => 'EmrExpiredTime',
        'expiredTime'    => 'ExpiredTime',
        'innerIp'        => 'InnerIp',
        'instanceId'     => 'InstanceId',
        'pubIp'          => 'PubIp',
        'status'         => 'Status',
        'supportIpV6'    => 'SupportIpV6',
        'zoneId'         => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->daemonInfos) {
            $res['DaemonInfos'] = null !== $this->daemonInfos ? $this->daemonInfos->toMap() : null;
        }
        if (null !== $this->diskInfos) {
            $res['DiskInfos'] = null !== $this->diskInfos ? $this->diskInfos->toMap() : null;
        }
        if (null !== $this->emrExpiredTime) {
            $res['EmrExpiredTime'] = $this->emrExpiredTime;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->innerIp) {
            $res['InnerIp'] = $this->innerIp;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->pubIp) {
            $res['PubIp'] = $this->pubIp;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->supportIpV6) {
            $res['SupportIpV6'] = $this->supportIpV6;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return node
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DaemonInfos'])) {
            $model->daemonInfos = daemonInfos::fromMap($map['DaemonInfos']);
        }
        if (isset($map['DiskInfos'])) {
            $model->diskInfos = diskInfos::fromMap($map['DiskInfos']);
        }
        if (isset($map['EmrExpiredTime'])) {
            $model->emrExpiredTime = $map['EmrExpiredTime'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['InnerIp'])) {
            $model->innerIp = $map['InnerIp'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PubIp'])) {
            $model->pubIp = $map['PubIp'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SupportIpV6'])) {
            $model->supportIpV6 = $map['SupportIpV6'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
