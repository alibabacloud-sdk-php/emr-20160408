<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class ModifyClusterTemplateResponseBody extends Model
{
    /**
     * @example CT-4A6799A79D73****
     *
     * @var string
     */
    public $clusterTemplateId;

    /**
     * @example BF4FBAC6-B03E-4BFB-B6DB-EB53C34F2E22
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clusterTemplateId' => 'ClusterTemplateId',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterTemplateId) {
            $res['ClusterTemplateId'] = $this->clusterTemplateId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyClusterTemplateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterTemplateId'])) {
            $model->clusterTemplateId = $map['ClusterTemplateId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
