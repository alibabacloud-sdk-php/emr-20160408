<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterServiceConfigResponseBody\config\propertyInfoList\propertyInfo;

use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterServiceConfigResponseBody\config\propertyInfoList\propertyInfo\propertyValueAttributes\entries;
use AlibabaCloud\Tea\Model;

class propertyValueAttributes extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $maximum;

    /**
     * @var string
     */
    public $unit;

    /**
     * @var bool
     */
    public $hidden;

    /**
     * @var string
     */
    public $incrememtStep;

    /**
     * @var bool
     */
    public $readOnly;

    /**
     * @var entries
     */
    public $entries;

    /**
     * @var string
     */
    public $mimimum;
    protected $_name = [
        'type'          => 'Type',
        'maximum'       => 'Maximum',
        'unit'          => 'Unit',
        'hidden'        => 'Hidden',
        'incrememtStep' => 'IncrememtStep',
        'readOnly'      => 'ReadOnly',
        'entries'       => 'Entries',
        'mimimum'       => 'Mimimum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->maximum) {
            $res['Maximum'] = $this->maximum;
        }
        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
        }
        if (null !== $this->hidden) {
            $res['Hidden'] = $this->hidden;
        }
        if (null !== $this->incrememtStep) {
            $res['IncrememtStep'] = $this->incrememtStep;
        }
        if (null !== $this->readOnly) {
            $res['ReadOnly'] = $this->readOnly;
        }
        if (null !== $this->entries) {
            $res['Entries'] = null !== $this->entries ? $this->entries->toMap() : null;
        }
        if (null !== $this->mimimum) {
            $res['Mimimum'] = $this->mimimum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return propertyValueAttributes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Maximum'])) {
            $model->maximum = $map['Maximum'];
        }
        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }
        if (isset($map['Hidden'])) {
            $model->hidden = $map['Hidden'];
        }
        if (isset($map['IncrememtStep'])) {
            $model->incrememtStep = $map['IncrememtStep'];
        }
        if (isset($map['ReadOnly'])) {
            $model->readOnly = $map['ReadOnly'];
        }
        if (isset($map['Entries'])) {
            $model->entries = entries::fromMap($map['Entries']);
        }
        if (isset($map['Mimimum'])) {
            $model->mimimum = $map['Mimimum'];
        }

        return $model;
    }
}
