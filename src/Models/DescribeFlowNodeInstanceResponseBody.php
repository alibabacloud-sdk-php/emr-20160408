<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class DescribeFlowNodeInstanceResponseBody extends Model
{
    /**
     * @var string
     */
    public $failAct;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $jobName;

    /**
     * @var string
     */
    public $externalStatus;

    /**
     * @var string
     */
    public $paramConf;

    /**
     * @var string
     */
    public $flowId;

    /**
     * @var string
     */
    public $externalInfo;

    /**
     * @var int
     */
    public $retries;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var bool
     */
    public $adhoc;

    /**
     * @var string
     */
    public $jobParams;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $externalId;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $flowInstanceId;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $maxRetry;

    /**
     * @var string
     */
    public $externalSubId;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $envConf;

    /**
     * @var string
     */
    public $jobType;

    /**
     * @var string
     */
    public $externalChildIds;

    /**
     * @var string
     */
    public $monitorConf;

    /**
     * @var string
     */
    public $retryInterval;

    /**
     * @var string
     */
    public $runConf;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $retryPolicy;

    /**
     * @var bool
     */
    public $pending;
    protected $_name = [
        'failAct'          => 'FailAct',
        'endTime'          => 'EndTime',
        'nodeName'         => 'NodeName',
        'gmtModified'      => 'GmtModified',
        'jobName'          => 'JobName',
        'externalStatus'   => 'ExternalStatus',
        'paramConf'        => 'ParamConf',
        'flowId'           => 'FlowId',
        'externalInfo'     => 'ExternalInfo',
        'retries'          => 'Retries',
        'clusterName'      => 'ClusterName',
        'adhoc'            => 'Adhoc',
        'jobParams'        => 'JobParams',
        'hostName'         => 'HostName',
        'jobId'            => 'JobId',
        'status'           => 'Status',
        'requestId'        => 'RequestId',
        'clusterId'        => 'ClusterId',
        'mode'             => 'Mode',
        'externalId'       => 'ExternalId',
        'projectId'        => 'ProjectId',
        'startTime'        => 'StartTime',
        'flowInstanceId'   => 'FlowInstanceId',
        'duration'         => 'Duration',
        'maxRetry'         => 'MaxRetry',
        'externalSubId'    => 'ExternalSubId',
        'type'             => 'Type',
        'gmtCreate'        => 'GmtCreate',
        'envConf'          => 'EnvConf',
        'jobType'          => 'JobType',
        'externalChildIds' => 'ExternalChildIds',
        'monitorConf'      => 'MonitorConf',
        'retryInterval'    => 'RetryInterval',
        'runConf'          => 'RunConf',
        'id'               => 'Id',
        'retryPolicy'      => 'RetryPolicy',
        'pending'          => 'Pending',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failAct) {
            $res['FailAct'] = $this->failAct;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }
        if (null !== $this->externalStatus) {
            $res['ExternalStatus'] = $this->externalStatus;
        }
        if (null !== $this->paramConf) {
            $res['ParamConf'] = $this->paramConf;
        }
        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }
        if (null !== $this->externalInfo) {
            $res['ExternalInfo'] = $this->externalInfo;
        }
        if (null !== $this->retries) {
            $res['Retries'] = $this->retries;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->adhoc) {
            $res['Adhoc'] = $this->adhoc;
        }
        if (null !== $this->jobParams) {
            $res['JobParams'] = $this->jobParams;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->externalId) {
            $res['ExternalId'] = $this->externalId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->flowInstanceId) {
            $res['FlowInstanceId'] = $this->flowInstanceId;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->maxRetry) {
            $res['MaxRetry'] = $this->maxRetry;
        }
        if (null !== $this->externalSubId) {
            $res['ExternalSubId'] = $this->externalSubId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->envConf) {
            $res['EnvConf'] = $this->envConf;
        }
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }
        if (null !== $this->externalChildIds) {
            $res['ExternalChildIds'] = $this->externalChildIds;
        }
        if (null !== $this->monitorConf) {
            $res['MonitorConf'] = $this->monitorConf;
        }
        if (null !== $this->retryInterval) {
            $res['RetryInterval'] = $this->retryInterval;
        }
        if (null !== $this->runConf) {
            $res['RunConf'] = $this->runConf;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->retryPolicy) {
            $res['RetryPolicy'] = $this->retryPolicy;
        }
        if (null !== $this->pending) {
            $res['Pending'] = $this->pending;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFlowNodeInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailAct'])) {
            $model->failAct = $map['FailAct'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }
        if (isset($map['ExternalStatus'])) {
            $model->externalStatus = $map['ExternalStatus'];
        }
        if (isset($map['ParamConf'])) {
            $model->paramConf = $map['ParamConf'];
        }
        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }
        if (isset($map['ExternalInfo'])) {
            $model->externalInfo = $map['ExternalInfo'];
        }
        if (isset($map['Retries'])) {
            $model->retries = $map['Retries'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['Adhoc'])) {
            $model->adhoc = $map['Adhoc'];
        }
        if (isset($map['JobParams'])) {
            $model->jobParams = $map['JobParams'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['ExternalId'])) {
            $model->externalId = $map['ExternalId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['FlowInstanceId'])) {
            $model->flowInstanceId = $map['FlowInstanceId'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['MaxRetry'])) {
            $model->maxRetry = $map['MaxRetry'];
        }
        if (isset($map['ExternalSubId'])) {
            $model->externalSubId = $map['ExternalSubId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['EnvConf'])) {
            $model->envConf = $map['EnvConf'];
        }
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }
        if (isset($map['ExternalChildIds'])) {
            $model->externalChildIds = $map['ExternalChildIds'];
        }
        if (isset($map['MonitorConf'])) {
            $model->monitorConf = $map['MonitorConf'];
        }
        if (isset($map['RetryInterval'])) {
            $model->retryInterval = $map['RetryInterval'];
        }
        if (isset($map['RunConf'])) {
            $model->runConf = $map['RunConf'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['RetryPolicy'])) {
            $model->retryPolicy = $map['RetryPolicy'];
        }
        if (isset($map['Pending'])) {
            $model->pending = $map['Pending'];
        }

        return $model;
    }
}
