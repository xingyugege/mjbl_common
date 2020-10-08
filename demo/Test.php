<?php
require "../vendor/autoload.php";

use MicroServerInterface\WithdrawInterface;
class Test implements WithdrawInterface
{



    public function reject($withdrawOrderId, $note=null)
    {
        echo 'reject';
    }


    public function accept($withdrawOrderId, $note=null)
    {
        echo 'accept';
    }
}
(new Test())->reject();