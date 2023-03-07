<?php
declare (strict_types=1);

namespace app\admin\controller;

use think\facade\Db;
use think\facade\View;
use think\Request;

class Project extends Common
{
    public function setting(Request $request)
    {

        $projectId  =1;
        $where = ['project_id'=>$projectId ];
        $mainList = Db::table('setting_domain')->where($where)->select();
        $urlsList = Db::table('urls')->where('project_id', 1)->select();
        $data = ['mainList' => $mainList, 'urlsList' => $urlsList];

        return View::fetch('setting', $data);
    }

    public function _add_domain(Request $request)
    {
        $data = ['domain' => $request->param('domain'), 'project_id' => 1];

        Db::table('domain')->extra('IGNORE')->insert($data);


        return redirect($_SERVER['HTTP_REFERER']);
    }

    public function _add_url($url)
    {
        $data = ['url' => $url, 'project_id' => 1];

        Db::table('urls')->extra('IGNORE')->insert($data);


        return redirect($_SERVER['HTTP_REFERER']);
    }

    public function _del_domain(int $id)
    {
        Db::table('domain')->delete($id);


        return redirect($_SERVER['HTTP_REFERER']);
    }

    public function _del_url(int $id)
    {
        Db::table('urls')->delete($id);


        return redirect($_SERVER['HTTP_REFERER']);
    }

}