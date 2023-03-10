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

        $projectId = 1;
        $where = ['project_id' => $projectId];
        $projectConf = Db::table('project_conf')->where($where)->column('value','key');

        $mainList = Db::table('setting_domain')->where($where)->select()->toArray();
        $urlsList = Db::table('urls')->where('project_id', 1)->select()->toArray();
        $data = ['mainList' => $mainList, 'urlsList' => $urlsList,'projectConf'=>$projectConf];

        return View::fetch('setting', $data);
    }

    public function _add_domain(Request $request)
    {
        $data = ['domain' => $request->param('domain'), 'project_id' => 1];

        Db::table('domain')->extra('IGNORE')->insert($data);
        Db::table('setting_domain')->extra('IGNORE')->insert($data);


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
        Db::table('setting_domain')->delete($id);


        return redirect($_SERVER['HTTP_REFERER']);
    }

    public function _del_url(int $id)
    {
        Db::table('urls')->delete($id);


        return redirect($_SERVER['HTTP_REFERER']);
    }

}
