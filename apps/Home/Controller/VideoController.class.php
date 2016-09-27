<?php
namespace Home\Controller;

use Think\Controller;

class VideoController extends Controller
{
    public function getList()
    {
        echo $this->fetch();
    }
}
