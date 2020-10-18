<?php
/**
 * User: yu
 * Date: 2020/10/8 7:44 上午
 * Note:
 */
namespace Xingyugege\MicroServerInterface;
interface BuryPointInterface
{
    public function add($routerPath,array $params);
}