<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowInstanceResponseBody;

use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowInstanceResponseBody\dependencyFlowList\parentFlow;
use AlibabaCloud\Tea\Model;

class dependencyFlowList extends Model
{
    /**
     * @var parentFlow[]
     */
    public $parentFlow;
    protected $_name = [
        'parentFlow' => 'ParentFlow',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->parentFlow) {
            $res['ParentFlow'] = [];
            if (null !== $this->parentFlow && \is_array($this->parentFlow)) {
                $n = 0;
                foreach ($this->parentFlow as $item) {
                    $res['ParentFlow'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dependencyFlowList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParentFlow'])) {
            if (!empty($map['ParentFlow'])) {
                $model->parentFlow = [];
                $n                 = 0;
                foreach ($map['ParentFlow'] as $item) {
                    $model->parentFlow[$n++] = null !== $item ? parentFlow::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
