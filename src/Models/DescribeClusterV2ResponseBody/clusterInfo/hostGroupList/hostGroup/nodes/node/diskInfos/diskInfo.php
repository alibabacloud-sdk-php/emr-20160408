<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterV2ResponseBody\clusterInfo\hostGroupList\hostGroup\nodes\node\diskInfos;

use AlibabaCloud\Tea\Model;

class diskInfo extends Model
{
    /**
     * @example /dev/xvdb
     *
     * @var string
     */
    public $device;

    /**
     * @example d-bp15vg2nr3x2t0f37ko9
     *
     * @var string
     */
    public $diskId;

    /**
     * @example disk1
     *
     * @var string
     */
    public $diskName;

    /**
     * @example 80
     *
     * @var int
     */
    public $size;

    /**
     * @example data
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'device'   => 'Device',
        'diskId'   => 'DiskId',
        'diskName' => 'DiskName',
        'size'     => 'Size',
        'type'     => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->device) {
            $res['Device'] = $this->device;
        }
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }
        if (null !== $this->diskName) {
            $res['DiskName'] = $this->diskName;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return diskInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Device'])) {
            $model->device = $map['Device'];
        }
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }
        if (isset($map['DiskName'])) {
            $model->diskName = $map['DiskName'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
