<?php
declare (strict_types=1);

namespace app\admin\controller;

use think\facade\Db;
use think\facade\View;

class Common
{

    public function __construct()
    {

        $controName = \think\facade\Request::controller();
        $actionName = \think\facade\Request::action();

        $currentHref = strtolower("{$controName}/{$actionName}");

        $menuList = [
//            ['title' => '首页', 'href' => 'index/index'],
            ['title' => '概要', 'href' => 'home/index'],
            ['title' => '漏洞管理', 'href' => 'scan/report'],
            ['title' => '端口服务', 'href' => 'assets/port'],
            ['title' => '网站列表', 'href' => 'assets/host'],
            ['title' => '域名列表', 'href' => 'assets/domain'],
            ['title' => '服务截图', 'href' => 'explore/images'],
            ['title' => '请求数据', 'href' => 'endpoint/index'],
            ['title' => '邮箱列表', 'href' => 'mail/index'],
            ['title' => '信息泄露', 'href' => 'leakage/index'],
//            ['title' => '公司信息', 'href' => 'assets/enterprise'],
            ['title' => '设置', 'href' => 'project/setting'],
        ];
        $headImg = 'https://thirdwx.qlogo.cn/mmopen/vi_32/DYAIOgq83erTCOcE08e8ia72SSqabRHQJr43rRJ1s0Tam2gib9RdQUClVicKyGlibLc0AOuzhTI6qpqY74gVrgzsvA/132';
        View::assign('href', $currentHref);
        View::assign('menu_list', $menuList);
        View::assign('userInfo', ['headimgurl' => $headImg]);
    }

    protected function apiReturn($data = [], $status = 0, $msg = '', $isRaw = false)
    {
        if ($isRaw) {
            return json($data);
        }
        $result['code'] = $status;
        $result['msg'] = $msg;
        $result['data'] = $data;


        return json($result);
    }
}
