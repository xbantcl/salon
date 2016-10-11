<?php
namespace Home\Controller;

use Think\Controller;

class VideoController extends Controller
{
    public function getList()
    {
        echo 111;exit;
        echo $this->fetch();
    }
}
