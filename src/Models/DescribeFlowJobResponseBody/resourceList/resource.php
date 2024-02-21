<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowJobResponseBody\resourceList;

use AlibabaCloud\Tea\Model;

class resource extends Model
{
    /**
     * @example demo.jar
     *
     * @var string
     */
    public $alias;

    /**
     * @example oss://path/demo.jar
     *
     * @var string
     */
    public $path;
    protected $_name = [
        'alias' => 'Alias',
        'path'  => 'Path',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
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
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        return $model;
    }
}
