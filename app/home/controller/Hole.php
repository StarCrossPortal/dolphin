<?php
declare (strict_types=1);

namespace app\home\controller;

use think\facade\Db;
use think\facade\View;

class Hole
{
    public function index(): string
    {
        $list = Db::table('biu_title')->select();
//        var_dump($list);
        return View::fetch('hole/index', [
            'list' => $list
        ]);
    }

    public function common(): string
    {
//        return '您好！这是一个[home]示例应用';
        return View::fetch('common/head');
    }
}
