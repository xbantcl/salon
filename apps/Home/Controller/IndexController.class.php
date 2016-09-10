<?php
namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {
        echo $this->fetch();
    }

    public function read()
    {
        echo 'read';
    }
}
