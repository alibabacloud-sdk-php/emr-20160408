<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowEntitySnapshotResponseBody\items;

use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @var bool
     */
    public $active;

    /**
     * @var string
     */
    public $data;

    /**
     * @var string
     */
    public $entityId;

    /**
     * @var string
     */
    public $entityType;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $entityGroupId;

    /**
     * @var string
     */
    public $committerId;

    /**
     * @var string
     */
    public $revision;
    protected $_name = [
        'active'        => 'Active',
        'data'          => 'Data',
        'entityId'      => 'EntityId',
        'entityType'    => 'EntityType',
        'userId'        => 'UserId',
        'gmtCreate'     => 'GmtCreate',
        'message'       => 'Message',
        'entityGroupId' => 'EntityGroupId',
        'committerId'   => 'CommitterId',
        'revision'      => 'Revision',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->active) {
            $res['Active'] = $this->active;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }
        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->entityGroupId) {
            $res['EntityGroupId'] = $this->entityGroupId;
        }
        if (null !== $this->committerId) {
            $res['CommitterId'] = $this->committerId;
        }
        if (null !== $this->revision) {
            $res['Revision'] = $this->revision;
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
        if (isset($map['Active'])) {
            $model->active = $map['Active'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }
        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['EntityGroupId'])) {
            $model->entityGroupId = $map['EntityGroupId'];
        }
        if (isset($map['CommitterId'])) {
            $model->committerId = $map['CommitterId'];
        }
        if (isset($map['Revision'])) {
            $model->revision = $map['Revision'];
        }

        return $model;
    }
}
