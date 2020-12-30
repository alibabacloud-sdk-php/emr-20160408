<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowProjectClusterSettingResponseBody\clusterSettings;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowProjectClusterSettingResponseBody\clusterSettings\clusterSetting\hostList;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowProjectClusterSettingResponseBody\clusterSettings\clusterSetting\queueList;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowProjectClusterSettingResponseBody\clusterSettings\clusterSetting\userList;
use AlibabaCloud\Tea\Model;

class clusterSetting extends Model
{
    /**
     * @var string
     */
    public $k8sClusterId;

    /**
     * @var string
     */
    public $defaultQueue;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var queueList
     */
    public $queueList;

    /**
     * @var userList
     */
    public $userList;

    /**
     * @var string
     */
    public $defaultUser;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var hostList
     */
    public $hostList;

    /**
     * @var string
     */
    public $clusterId;
    protected $_name = [
        'k8sClusterId' => 'K8sClusterId',
        'defaultQueue' => 'DefaultQueue',
        'projectId'    => 'ProjectId',
        'gmtCreate'    => 'GmtCreate',
        'clusterName'  => 'ClusterName',
        'queueList'    => 'QueueList',
        'userList'     => 'UserList',
        'defaultUser'  => 'DefaultUser',
        'gmtModified'  => 'GmtModified',
        'hostList'     => 'HostList',
        'clusterId'    => 'ClusterId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->k8sClusterId) {
            $res['K8sClusterId'] = $this->k8sClusterId;
        }
        if (null !== $this->defaultQueue) {
            $res['DefaultQueue'] = $this->defaultQueue;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->queueList) {
            $res['QueueList'] = null !== $this->queueList ? $this->queueList->toMap() : null;
        }
        if (null !== $this->userList) {
            $res['UserList'] = null !== $this->userList ? $this->userList->toMap() : null;
        }
        if (null !== $this->defaultUser) {
            $res['DefaultUser'] = $this->defaultUser;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->hostList) {
            $res['HostList'] = null !== $this->hostList ? $this->hostList->toMap() : null;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterSetting
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['K8sClusterId'])) {
            $model->k8sClusterId = $map['K8sClusterId'];
        }
        if (isset($map['DefaultQueue'])) {
            $model->defaultQueue = $map['DefaultQueue'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['QueueList'])) {
            $model->queueList = queueList::fromMap($map['QueueList']);
        }
        if (isset($map['UserList'])) {
            $model->userList = userList::fromMap($map['UserList']);
        }
        if (isset($map['DefaultUser'])) {
            $model->defaultUser = $map['DefaultUser'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['HostList'])) {
            $model->hostList = hostList::fromMap($map['HostList']);
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        return $model;
    }
}
