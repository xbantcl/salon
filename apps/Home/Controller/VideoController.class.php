<?php
namespace Home\Controller;

use Think\Controller;

class VideoController extends Controller
{
    public function video()
    {
        echo $this->fetch();
    }
}
