<?php
declare (strict_types=1);

namespace app\admin\controller;

use think\facade\Db;
use think\facade\View;
use think\Request;

class Explore extends Common
{
    public function images(Request $request)
    {
        $where = ['project_id' => 1];
        $imagesList = Db::table('websites')->where($where)->order('screen_url','desc')->select()->toArray();


        $data = ['imagesList' => $imagesList];

        return View::fetch('images', $data);
    }
}
