<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowJobResponseBody\resourceList;

use AlibabaCloud\Tea\Model;

class resource extends Model
{
    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $alias;
    protected $_name = [
        'path'  => 'Path',
        'alias' => 'Alias',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }

        return $model;
    }
}
