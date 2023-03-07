<?php
declare (strict_types=1);

namespace app\home\controller;

use think\facade\Db;
use think\facade\View;

class Firm
{
    public function index(): string
    {
        $list = Db::table('biu_title')->select();
//        var_dump($list);
        return View::fetch('firm/index', [
            'list' => $list
        ]);
    }

}
