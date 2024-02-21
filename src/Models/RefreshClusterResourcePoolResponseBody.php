<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class RefreshClusterResourcePoolResponseBody extends Model
{
    /**
     * @example xxxx
     *
     * @var string
     */
    public $operationId;

    /**
     * @example A544317F-4A60-4532-AC96-191B9D80420A
     *
     * @var string
     */
    public $requestId;

    /**
     * @example ****
     *
     * @var string
     */
    public $workFlowInstanceId;
    protected $_name = [
        'operationId'        => 'OperationId',
        'requestId'          => 'RequestId',
        'workFlowInstanceId' => 'WorkFlowInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operationId) {
            $res['OperationId'] = $this->operationId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->workFlowInstanceId) {
            $res['WorkFlowInstanceId'] = $this->workFlowInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RefreshClusterResourcePoolResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OperationId'])) {
            $model->operationId = $map['OperationId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['WorkFlowInstanceId'])) {
            $model->workFlowInstanceId = $map['WorkFlowInstanceId'];
        }

        return $model;
    }
}
