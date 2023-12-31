<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgxdcapserver\V20200726\Models;

use AlibabaCloud\Tea\Model;

class PckCrlRequest extends Model
{
    /**
     * @var string
     */
    public $acsHost;

    /**
     * @var string
     */
    public $clientVpcId;

    /**
     * @example platform
     *
     * @var string
     */
    public $ca;
    protected $_name = [
        'acsHost'     => 'AcsHost',
        'clientVpcId' => 'ClientVpcId',
        'ca'          => 'ca',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acsHost) {
            $res['AcsHost'] = $this->acsHost;
        }
        if (null !== $this->clientVpcId) {
            $res['ClientVpcId'] = $this->clientVpcId;
        }
        if (null !== $this->ca) {
            $res['ca'] = $this->ca;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PckCrlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcsHost'])) {
            $model->acsHost = $map['AcsHost'];
        }
        if (isset($map['ClientVpcId'])) {
            $model->clientVpcId = $map['ClientVpcId'];
        }
        if (isset($map['ca'])) {
            $model->ca = $map['ca'];
        }

        return $model;
    }
}
