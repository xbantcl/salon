<?php
namespace Admin\Controller;

use Think\Controller;

class LoginController extends Controller
{
    public function index()
    {
        echo phpinfo();exit;
        $this->display();
    }

}
