<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class DeleteLibrariesRequest extends Model
{
    /**
     * @var string[]
     */
    public $libraryBizIdList;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'libraryBizIdList' => 'LibraryBizIdList',
        'regionId'         => 'RegionId',
        'resourceOwnerId'  => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->libraryBizIdList) {
            $res['LibraryBizIdList'] = $this->libraryBizIdList;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteLibrariesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LibraryBizIdList'])) {
            if (!empty($map['LibraryBizIdList'])) {
                $model->libraryBizIdList = $map['LibraryBizIdList'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
