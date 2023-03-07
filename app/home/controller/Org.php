<?php
declare (strict_types=1);

namespace app\home\controller;

use think\facade\Db;
use think\facade\View;

class Org
{
    public function index(): string
    {
        $list = Db::table('biu_title')->select();
//        var_dump($list);
        return View::fetch('org/index', [
            'list' => $list
        ]);
    }

}
