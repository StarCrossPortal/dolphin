<?php
declare (strict_types=1);

namespace app\admin\controller;

use think\facade\Db;
use think\facade\View;
use think\Request;

class Endpoint extends Common
{
    public function index(Request $request)
    {
        $where = ['project_id' => 1];

        $requestList = Db::table('web_requests')->where($where)->select()->toArray();

        $data = ['requestList' => $requestList];

        return View::fetch('index', $data);
    }
}
