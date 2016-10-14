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

    public function video()
    {
        echo 111;exit;
        $this->display('video');
    }
}
