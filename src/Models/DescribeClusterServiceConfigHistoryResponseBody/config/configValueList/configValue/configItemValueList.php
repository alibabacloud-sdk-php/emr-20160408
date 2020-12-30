<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterServiceConfigHistoryResponseBody\config\configValueList\configValue;

use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterServiceConfigHistoryResponseBody\config\configValueList\configValue\configItemValueList\configItemValue;
use AlibabaCloud\Tea\Model;

class configItemValueList extends Model
{
    /**
     * @var configItemValue[]
     */
    public $configItemValue;
    protected $_name = [
        'configItemValue' => 'ConfigItemValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configItemValue) {
            $res['ConfigItemValue'] = [];
            if (null !== $this->configItemValue && \is_array($this->configItemValue)) {
                $n = 0;
                foreach ($this->configItemValue as $item) {
                    $res['ConfigItemValue'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configItemValueList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigItemValue'])) {
            if (!empty($map['ConfigItemValue'])) {
                $model->configItemValue = [];
                $n                      = 0;
                foreach ($map['ConfigItemValue'] as $item) {
                    $model->configItemValue[$n++] = null !== $item ? configItemValue::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
