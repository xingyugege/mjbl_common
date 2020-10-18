<?php
/**
 * User: yu
 * Date: 2020/10/18 10:41
 * Desc:
 */
namespace Xingyugege\MicroServerInterface;
interface MsgVerificationCodeInterface
{
    public function getCode($mobile);
}