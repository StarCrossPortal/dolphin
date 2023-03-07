<?php
declare (strict_types=1);

namespace app\admin\controller;

use think\facade\Db;
use think\facade\View;
use think\Request;

class Index extends Common
{
    public function index()
    {

        $list = Db::table('main')->limit(10)->select();

        return View::fetch('index/index', ['list' => $list]);
    }

    public function _add_batch(Request $request)
    {
        $hosts = $request->param('hosts');

        $hostArr = explode("\n", $hosts);
        $hostArr = array_values(array_filter($hostArr));
        $num = 0;
        foreach ($hostArr as $host) {
            $data = ['host' => $host];
            $num += Db::table("main")->extra('IGNORE')->insert($data);
        }

        return redirect($_SERVER['HTTP_REFERER']);
    }
}
