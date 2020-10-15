<?php

namespace Xingyugege\MicroServerInterface;

interface WithdrawInterface
{
    /**
     * 客服💁拒绝❌提现
     * @param $withdrawOrderId
     * @param null $note
     * @return mixed
     */
    public function reject($withdrawOrderId, $note=null);

    /**
     * 客服💁同意✅提现
     * @param $withdrawOrderId
     * @param null $note
     * @return mixed
     */
    public function accept($withdrawOrderId, $note=null);
}
