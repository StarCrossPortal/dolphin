<?php
declare (strict_types = 1);

namespace app\home\controller;

use think\facade\View;

class Common
{
    public function head(): string
    {
//        return '您好！这是一个[home]示例应用';
        return View::fetch('common/head');
    }
    public function common(): string
    {
//        return '您好！这是一个[home]示例应用';
        return View::fetch('common/head');
    }
}
