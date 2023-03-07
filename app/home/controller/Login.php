<?php
namespace app\home\controller;

use think\facade\View;

class Login
{
    public function login()
    {
//        return '您好！这是一个[home]示例应用';
        return View::fetch('login/login');
    }
}
