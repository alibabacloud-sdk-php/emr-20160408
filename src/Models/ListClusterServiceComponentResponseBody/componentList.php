<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterServiceComponentResponseBody;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterServiceComponentResponseBody\componentList\component;
use AlibabaCloud\Tea\Model;

class componentList extends Model
{
    /**
     * @var component[]
     */
    public $component;
    protected $_name = [
        'component' => 'Component',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->component) {
            $res['Component'] = [];
            if (null !== $this->component && \is_array($this->component)) {
                $n = 0;
                foreach ($this->component as $item) {
                    $res['Component'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return componentList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Component'])) {
            if (!empty($map['Component'])) {
                $model->component = [];
                $n                = 0;
                foreach ($map['Component'] as $item) {
                    $model->component[$n++] = null !== $item ? component::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
