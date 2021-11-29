<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class ModifyFlowProjectClusterSettingRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $defaultQueue;

    /**
     * @var string
     */
    public $defaultUser;

    /**
     * @var string[]
     */
    public $hostList;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string[]
     */
    public $queueList;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string[]
     */
    public $userList;
    protected $_name = [
        'clusterId'    => 'ClusterId',
        'defaultQueue' => 'DefaultQueue',
        'defaultUser'  => 'DefaultUser',
        'hostList'     => 'HostList',
        'projectId'    => 'ProjectId',
        'queueList'    => 'QueueList',
        'regionId'     => 'RegionId',
        'userList'     => 'UserList',
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
        if (null !== $this->defaultQueue) {
            $res['DefaultQueue'] = $this->defaultQueue;
        }
        if (null !== $this->defaultUser) {
            $res['DefaultUser'] = $this->defaultUser;
        }
        if (null !== $this->hostList) {
            $res['HostList'] = $this->hostList;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->queueList) {
            $res['QueueList'] = $this->queueList;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->userList) {
            $res['UserList'] = $this->userList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyFlowProjectClusterSettingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DefaultQueue'])) {
            $model->defaultQueue = $map['DefaultQueue'];
        }
        if (isset($map['DefaultUser'])) {
            $model->defaultUser = $map['DefaultUser'];
        }
        if (isset($map['HostList'])) {
            if (!empty($map['HostList'])) {
                $model->hostList = $map['HostList'];
            }
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['QueueList'])) {
            if (!empty($map['QueueList'])) {
                $model->queueList = $map['QueueList'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['UserList'])) {
            if (!empty($map['UserList'])) {
                $model->userList = $map['UserList'];
            }
        }

        return $model;
    }
}
