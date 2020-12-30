<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListLibrariesResponseBody\items;

use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $scope;

    /**
     * @var string
     */
    public $libraryVersion;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $properties;

    /**
     * @var string
     */
    public $sourceLocation;
    protected $_name = [
        'type'           => 'Type',
        'createTime'     => 'CreateTime',
        'userId'         => 'UserId',
        'sourceType'     => 'SourceType',
        'bizId'          => 'BizId',
        'scope'          => 'Scope',
        'libraryVersion' => 'LibraryVersion',
        'name'           => 'Name',
        'properties'     => 'Properties',
        'sourceLocation' => 'SourceLocation',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }
        if (null !== $this->libraryVersion) {
            $res['LibraryVersion'] = $this->libraryVersion;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->properties) {
            $res['Properties'] = $this->properties;
        }
        if (null !== $this->sourceLocation) {
            $res['SourceLocation'] = $this->sourceLocation;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return item
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }
        if (isset($map['LibraryVersion'])) {
            $model->libraryVersion = $map['LibraryVersion'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Properties'])) {
            $model->properties = $map['Properties'];
        }
        if (isset($map['SourceLocation'])) {
            $model->sourceLocation = $map['SourceLocation'];
        }

        return $model;
    }
}
