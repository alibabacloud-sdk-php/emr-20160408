<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterServiceConfigResponseBody\config\propertyInfoList\propertyInfo;

use AlibabaCloud\Tea\Model;

class effectWay extends Model
{
    /**
     * @example ""
     *
     * @var string
     */
    public $effectType;

    /**
     * @example ""
     *
     * @var string
     */
    public $invokeServiceName;
    protected $_name = [
        'effectType'        => 'EffectType',
        'invokeServiceName' => 'InvokeServiceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->effectType) {
            $res['EffectType'] = $this->effectType;
        }
        if (null !== $this->invokeServiceName) {
            $res['InvokeServiceName'] = $this->invokeServiceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return effectWay
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EffectType'])) {
            $model->effectType = $map['EffectType'];
        }
        if (isset($map['InvokeServiceName'])) {
            $model->invokeServiceName = $map['InvokeServiceName'];
        }

        return $model;
    }
}
