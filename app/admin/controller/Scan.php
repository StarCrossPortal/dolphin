<?php
declare (strict_types=1);

namespace app\admin\controller;

use app\admin\model\BugsModel;
use think\facade\Db;
use think\facade\View;
use think\Request;

class Scan extends Common
{
    public function report()
    {

        $countList = BugsModel::getDetailCount();

        $where = ['project_id' => 1];
        $list = Db::name('bugs')->where($where)->paginate([
            'list_rows' => 20,
            'var_page' => 'page',
        ]);
        $bugList['list'] = $list->items();
        $bugList['page'] = $list->render();
        $data = ['countList' => $countList, 'bugList' => $bugList];

        return View::fetch('report', $data);
    }

}
