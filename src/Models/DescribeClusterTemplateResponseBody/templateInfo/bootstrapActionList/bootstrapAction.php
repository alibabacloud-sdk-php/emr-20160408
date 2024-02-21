<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterTemplateResponseBody\templateInfo\bootstrapActionList;

use AlibabaCloud\Tea\Model;

class bootstrapAction extends Model
{
    /**
     * @example --a
     *
     * @var string
     */
    public $arg;

    /**
     * @example action_name
     *
     * @var string
     */
    public $name;

    /**
     * @example oss://bucket/path
     *
     * @var string
     */
    public $path;
    protected $_name = [
        'arg'  => 'Arg',
        'name' => 'Name',
        'path' => 'Path',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arg) {
            $res['Arg'] = $this->arg;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bootstrapAction
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Arg'])) {
            $model->arg = $map['Arg'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        return $model;
    }
}
