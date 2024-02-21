<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowInstanceResponseBody\dependencyFlowList;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowInstanceResponseBody\nodeInstance;
use AlibabaCloud\Tea\Model;

class DescribeFlowInstanceResponseBody extends Model
{
    /**
     * @example C-F32FB31D8295****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $cronExpression;

    /**
     * @var dependencyFlowList
     */
    public $dependencyFlowList;

    /**
     * @example 12000
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
     * @example F-35683D0E4573****
     *
     * @var string
     */
    public $flowId;

    /**
     * @example flow-hive
     *
     * @var string
     */
    public $flowName;

    /**
     * @example 1540796248000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example 1540796248000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @example {"nodes":[{"shape":"startControlNode","size":"80*34","spmAnchorId":"0.0.0.i0.766645eb2cmNtQ","x":500,"y":250,"index":0,"id":"48d474ea","attribute":{"type":"START"},"type":"node"},{"shape":"hiveSQLJobNode","size":"170*34","spmAnchorId":"5176.8250060.0.i11.499128d0KWdQvq","x":515,"y":334.5,"index":1,"id":"2f089966","label":"hive-test","attribute":{"jobId":"FJ-C6C794219DE652B9","type":"JOB","jobType":"HIVE_SQL"},"type":"node","config":{"hostName":"","clusterId":""}},{"shape":"endControlNode","size":"80*34","spmAnchorId":"5176.8250060.0.i15.499128d0KWdQvq","x":532,"y":453.5,"index":2,"id":"ac092a54","attribute":{"type":"END"},"type":"node"}],"edges":[{"sourceAnchor":0,"targetAnchor":0,"index":3,"source":"48d474ea","id":"77e6117c","target":"2f089966"},{"sourceAnchor":1,"targetAnchor":0,"index":4,"source":"2f089966","id":"95ba3716","target":"ac092a54"}]}
     *
     * @var string
     */
    public $graph;

    /**
     * @var bool
     */
    public $hasNodeFailed;

    /**
     * @example FI-7CAF9709CD32****
     *
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $lifecycle;

    /**
     * @var string
     */
    public $logArchiveLocation;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var nodeInstance
     */
    public $nodeInstance;

    /**
     * @example FP-7A1018ADE917****
     *
     * @var string
     */
    public $projectId;

    /**
     * @example EDF99BA3-F7AF-49B2-ABA1-36430A31F482
     *
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $scheduleTime;

    /**
     * @example 1540796236000
     *
     * @var int
     */
    public $startTime;

    /**
     * @example SUCCEEDED
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'clusterId'          => 'ClusterId',
        'cronExpression'     => 'CronExpression',
        'dependencyFlowList' => 'DependencyFlowList',
        'duration'           => 'Duration',
        'endTime'            => 'EndTime',
        'flowId'             => 'FlowId',
        'flowName'           => 'FlowName',
        'gmtCreate'          => 'GmtCreate',
        'gmtModified'        => 'GmtModified',
        'graph'              => 'Graph',
        'hasNodeFailed'      => 'HasNodeFailed',
        'id'                 => 'Id',
        'lifecycle'          => 'Lifecycle',
        'logArchiveLocation' => 'LogArchiveLocation',
        'namespace'          => 'Namespace',
        'nodeInstance'       => 'NodeInstance',
        'projectId'          => 'ProjectId',
        'requestId'          => 'RequestId',
        'scheduleTime'       => 'ScheduleTime',
        'startTime'          => 'StartTime',
        'status'             => 'Status',
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
        if (null !== $this->cronExpression) {
            $res['CronExpression'] = $this->cronExpression;
        }
        if (null !== $this->dependencyFlowList) {
            $res['DependencyFlowList'] = null !== $this->dependencyFlowList ? $this->dependencyFlowList->toMap() : null;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }
        if (null !== $this->flowName) {
            $res['FlowName'] = $this->flowName;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->graph) {
            $res['Graph'] = $this->graph;
        }
        if (null !== $this->hasNodeFailed) {
            $res['HasNodeFailed'] = $this->hasNodeFailed;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->lifecycle) {
            $res['Lifecycle'] = $this->lifecycle;
        }
        if (null !== $this->logArchiveLocation) {
            $res['LogArchiveLocation'] = $this->logArchiveLocation;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->nodeInstance) {
            $res['NodeInstance'] = null !== $this->nodeInstance ? $this->nodeInstance->toMap() : null;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->scheduleTime) {
            $res['ScheduleTime'] = $this->scheduleTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFlowInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['CronExpression'])) {
            $model->cronExpression = $map['CronExpression'];
        }
        if (isset($map['DependencyFlowList'])) {
            $model->dependencyFlowList = dependencyFlowList::fromMap($map['DependencyFlowList']);
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }
        if (isset($map['FlowName'])) {
            $model->flowName = $map['FlowName'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Graph'])) {
            $model->graph = $map['Graph'];
        }
        if (isset($map['HasNodeFailed'])) {
            $model->hasNodeFailed = $map['HasNodeFailed'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Lifecycle'])) {
            $model->lifecycle = $map['Lifecycle'];
        }
        if (isset($map['LogArchiveLocation'])) {
            $model->logArchiveLocation = $map['LogArchiveLocation'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['NodeInstance'])) {
            $model->nodeInstance = nodeInstance::fromMap($map['NodeInstance']);
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ScheduleTime'])) {
            $model->scheduleTime = $map['ScheduleTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
