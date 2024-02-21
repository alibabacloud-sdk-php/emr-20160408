<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class DescribeFlowNodeInstanceResponseBody extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $adhoc;

    /**
     * @example C-F32FB31D8295****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example myCluster
     *
     * @var string
     */
    public $clusterName;

    /**
     * @example 200
     *
     * @var int
     */
    public $duration;

    /**
     * @example 1540796248000
     *
     * @var int
     */
    public $endTime;

    /**
     * @example {"key":"value"}
     *
     * @var string
     */
    public $envConf;

    /**
     * @example application_1541559535023_34028
     *
     * @var string
     */
    public $externalChildIds;

    /**
     * @example application_1541559535023_34027
     *
     * @var string
     */
    public $externalId;

    /**
     * @example empty
     *
     * @var string
     */
    public $externalInfo;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $externalStatus;

    /**
     * @example container_1541559535023_34027_01_000001
     *
     * @var string
     */
    public $externalSubId;

    /**
     * @example STOP
     *
     * @var string
     */
    public $failAct;

    /**
     * @example F-35683D0E4573****
     *
     * @var string
     */
    public $flowId;

    /**
     * @example FI-7CAF9709CD32****
     *
     * @var string
     */
    public $flowInstanceId;

    /**
     * @example 1540796236000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example 1540796247000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @example emr-header-1.cluster-12345
     *
     * @var string
     */
    public $hostName;

    /**
     * @example FNI-9D14A7CCF268****
     *
     * @var string
     */
    public $id;

    /**
     * @example FJ-A23BD131A862****
     *
     * @var string
     */
    public $jobId;

    /**
     * @example myJob
     *
     * @var string
     */
    public $jobName;

    /**
     * @example ls -l
     *
     * @var string
     */
    public $jobParams;

    /**
     * @example HIVE_SQL
     *
     * @var string
     */
    public $jobType;

    /**
     * @example 0
     *
     * @var string
     */
    public $maxRetry;

    /**
     * @example YARN
     *
     * @var string
     */
    public $mode;

    /**
     * @example {"inputs":[{"type":"KAFKA","clusterId":"C-1234567","topics":"kafka_topic","consumer.group":"kafka_consumer_group"}],"outputs":[{"type":"KAFKA","clusterId":"C-1234567","topics":"kafka_topic"}]}
     *
     * @var string
     */
    public $monitorConf;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @example {"date":"${yyyy-MM-dd}"}
     *
     * @var string
     */
    public $paramConf;

    /**
     * @example true
     *
     * @var bool
     */
    public $pending;

    /**
     * @example FP-7A1018ADE917****
     *
     * @var string
     */
    public $projectId;

    /**
     * @example 1549175a-6d14-4c8a-89f9-5e28300f6d7e
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 0
     *
     * @var int
     */
    public $retries;

    /**
     * @example 15
     *
     * @var string
     */
    public $retryInterval;

    /**
     * @var string
     */
    public $retryPolicy;

    /**
     * @example {"priority":1,"userName":"hadoop","memory":2048,"cores":1}
     *
     * @var string
     */
    public $runConf;

    /**
     * @example 1540796237000
     *
     * @var int
     */
    public $startTime;

    /**
     * @example OK
     *
     * @var string
     */
    public $status;

    /**
     * @example JOB
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'adhoc'            => 'Adhoc',
        'clusterId'        => 'ClusterId',
        'clusterName'      => 'ClusterName',
        'duration'         => 'Duration',
        'endTime'          => 'EndTime',
        'envConf'          => 'EnvConf',
        'externalChildIds' => 'ExternalChildIds',
        'externalId'       => 'ExternalId',
        'externalInfo'     => 'ExternalInfo',
        'externalStatus'   => 'ExternalStatus',
        'externalSubId'    => 'ExternalSubId',
        'failAct'          => 'FailAct',
        'flowId'           => 'FlowId',
        'flowInstanceId'   => 'FlowInstanceId',
        'gmtCreate'        => 'GmtCreate',
        'gmtModified'      => 'GmtModified',
        'hostName'         => 'HostName',
        'id'               => 'Id',
        'jobId'            => 'JobId',
        'jobName'          => 'JobName',
        'jobParams'        => 'JobParams',
        'jobType'          => 'JobType',
        'maxRetry'         => 'MaxRetry',
        'mode'             => 'Mode',
        'monitorConf'      => 'MonitorConf',
        'nodeName'         => 'NodeName',
        'paramConf'        => 'ParamConf',
        'pending'          => 'Pending',
        'projectId'        => 'ProjectId',
        'requestId'        => 'RequestId',
        'retries'          => 'Retries',
        'retryInterval'    => 'RetryInterval',
        'retryPolicy'      => 'RetryPolicy',
        'runConf'          => 'RunConf',
        'startTime'        => 'StartTime',
        'status'           => 'Status',
        'type'             => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adhoc) {
            $res['Adhoc'] = $this->adhoc;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->envConf) {
            $res['EnvConf'] = $this->envConf;
        }
        if (null !== $this->externalChildIds) {
            $res['ExternalChildIds'] = $this->externalChildIds;
        }
        if (null !== $this->externalId) {
            $res['ExternalId'] = $this->externalId;
        }
        if (null !== $this->externalInfo) {
            $res['ExternalInfo'] = $this->externalInfo;
        }
        if (null !== $this->externalStatus) {
            $res['ExternalStatus'] = $this->externalStatus;
        }
        if (null !== $this->externalSubId) {
            $res['ExternalSubId'] = $this->externalSubId;
        }
        if (null !== $this->failAct) {
            $res['FailAct'] = $this->failAct;
        }
        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }
        if (null !== $this->flowInstanceId) {
            $res['FlowInstanceId'] = $this->flowInstanceId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }
        if (null !== $this->jobParams) {
            $res['JobParams'] = $this->jobParams;
        }
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }
        if (null !== $this->maxRetry) {
            $res['MaxRetry'] = $this->maxRetry;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->monitorConf) {
            $res['MonitorConf'] = $this->monitorConf;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->paramConf) {
            $res['ParamConf'] = $this->paramConf;
        }
        if (null !== $this->pending) {
            $res['Pending'] = $this->pending;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->retries) {
            $res['Retries'] = $this->retries;
        }
        if (null !== $this->retryInterval) {
            $res['RetryInterval'] = $this->retryInterval;
        }
        if (null !== $this->retryPolicy) {
            $res['RetryPolicy'] = $this->retryPolicy;
        }
        if (null !== $this->runConf) {
            $res['RunConf'] = $this->runConf;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Adhoc'])) {
            $model->adhoc = $map['Adhoc'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['EnvConf'])) {
            $model->envConf = $map['EnvConf'];
        }
        if (isset($map['ExternalChildIds'])) {
            $model->externalChildIds = $map['ExternalChildIds'];
        }
        if (isset($map['ExternalId'])) {
            $model->externalId = $map['ExternalId'];
        }
        if (isset($map['ExternalInfo'])) {
            $model->externalInfo = $map['ExternalInfo'];
        }
        if (isset($map['ExternalStatus'])) {
            $model->externalStatus = $map['ExternalStatus'];
        }
        if (isset($map['ExternalSubId'])) {
            $model->externalSubId = $map['ExternalSubId'];
        }
        if (isset($map['FailAct'])) {
            $model->failAct = $map['FailAct'];
        }
        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }
        if (isset($map['FlowInstanceId'])) {
            $model->flowInstanceId = $map['FlowInstanceId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }
        if (isset($map['JobParams'])) {
            $model->jobParams = $map['JobParams'];
        }
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }
        if (isset($map['MaxRetry'])) {
            $model->maxRetry = $map['MaxRetry'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['MonitorConf'])) {
            $model->monitorConf = $map['MonitorConf'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['ParamConf'])) {
            $model->paramConf = $map['ParamConf'];
        }
        if (isset($map['Pending'])) {
            $model->pending = $map['Pending'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Retries'])) {
            $model->retries = $map['Retries'];
        }
        if (isset($map['RetryInterval'])) {
            $model->retryInterval = $map['RetryInterval'];
        }
        if (isset($map['RetryPolicy'])) {
            $model->retryPolicy = $map['RetryPolicy'];
        }
        if (isset($map['RunConf'])) {
            $model->runConf = $map['RunConf'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
