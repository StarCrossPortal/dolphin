<?php
declare (strict_types=1);

namespace app\admin\controller;

use app\admin\model\BugsModel;
use app\admin\model\DomainModel;
use app\admin\model\PortsModel;
use app\admin\model\ProductsModel;
use app\admin\model\WebSitesModel;
use think\facade\Db;
use think\facade\View;
use think\Request;

class Assets extends Common
{
    public function port()
    {

        $filterList = [
            ['name' => '产品', 'lists' => array_keys(ProductsModel::getCountByPort(1))],
            ['name' => 'IP地址', 'lists' => array_keys(PortsModel::getCount(1))],
            ['name' => '端口', 'lists' => array_keys(PortsModel::getCountByIp(1))],
            ['name' => '协议', 'lists' => array_keys(PortsModel::getCountByProtocol(1))],
        ];


        $where = ['project_id' => 1];
        $portList = Db::table('ports')->where($where)->select()->toArray();
        foreach ($portList as &$item) {
            $item['host'] = $item['ip'];
            $item['tags'] = explode(',', $item['product']);
        }


        $countList = [
            ['name' => '产品', 'lists' => ProductsModel::getCountByPort(1)],
            ['name' => '端口', 'lists' => PortsModel::getCount(1)],
            ['name' => 'IP', 'lists' => PortsModel::getCountByIp(1)],
            ['name' => '协议', 'lists' => PortsModel::getCountByProtocol(1)],
//            ['name' => '状态码', 'lists' => ['https' => 172, 'http' => 132, 'mysql' => 76]],
//            ['name' => '网页标题', 'lists' => ['https' => 172, 'http' => 132, 'mysql' => 76]],
//            ['name' => '域名', 'lists' => ['https' => 172, 'http' => 132, 'mysql' => 76]],
//            ['name' => '证书持有者', 'lists' => ['https' => 172, 'http' => 132, 'mysql' => 76]],
//            ['name' => '特征', 'lists' => ['https' => 172, 'http' => 132, 'mysql' => 76]],
//            ['name' => '服务', 'lists' => ['https' => 172, 'http' => 132, 'mysql' => 76]],
//            ['name' => '备案号', 'lists' => ['https' => 172, 'http' => 132, 'mysql' => 76]],
//            ['name' => '供应商', 'lists' => ['https' => 172, 'http' => 132, 'mysql' => 76]],
        ];

        $data = ['filterList' => $filterList, 'portList' => $portList, 'countList' => $countList];

        return View::fetch('port', $data);
    }

    public function host()
    {
        $filterList = [
//            ['name' => '网页标题:', 'lists' => ['page title' => 'page title', 'test' => 'test']],
//            ['name' => '位置:', 'lists' => ['page title' => 'page title', 'test' => 'test']],
//            ['name' => '域名:', 'lists' => ['page title' => 'page title', 'test' => 'test']],
//            ['name' => '指纹标签:', 'lists' => ['page title' => 'page title', 'test' => 'test']],
//            ['name' => '公司/单位:', 'lists' => ['page title' => 'page title', 'test' => 'test']],
            ['name' => '产品', 'lists' => array_keys(WebSitesModel::getCountByPort(1))],
            ['name' => 'IP地址', 'lists' => array_keys(WebSitesModel::getCountByDomain(1))],
            ['name' => '端口', 'lists' => array_keys(WebSitesModel::getCount(1))],
            ['name' => '协议', 'lists' => array_keys(WebSitesModel::getCountByProtocol(1))],
            ['name' => '标题', 'lists' => array_keys(WebSitesModel::getCountByTitle(1))],
        ];

        $where = ['project_id' => 1];
        $portList = Db::table('websites')->where($where)->limit(10)->select()->toArray();
        foreach ($portList as &$item) {
            $item['header'] = empty($item['header']) ? $item['banner'] : $item['header'];
            $item['host'] = $item['domain'];
            $item['tags'] = explode(',', $item['product']);
        }
        $portList = array_merge($portList, $portList, $portList, $portList);

        $countList = [
            ['name' => '产品', 'lists' => WebSitesModel::getCountByPort(1)],
            ['name' => 'IP', 'lists' => WebSitesModel::getCountByDomain(1)],
            ['name' => '端口', 'lists' => WebSitesModel::getCount(1)],
            ['name' => '协议', 'lists' => WebSitesModel::getCountByProtocol(1)],
            ['name' => '标题', 'lists' => WebSitesModel::getCountByTitle(1)],
        ];
        $data = ['filterList' => $filterList, 'portList' => $portList, 'countList' => $countList];

        return View::fetch('host', $data);
    }


    public function domain()
    {
        $projectId = 1;
        $where = ['project_id' => $projectId];
        $domainList = Db::table('setting_domain')->where($where)->select()->toArray();

        foreach ($domainList as &$domain) {
            $domain['bugs'] = BugsModel::getCount($domain['domain'], $projectId);
            $domain['icon_url'] = Db::table('websites')->where($where)->where(['domain'=>$domain['domain']])->value('icon_url');
            $temp = [
                'tags' => DomainModel::getCount($domain, $projectId),
            ];
            $domain = array_merge($domain, $temp);

        }

        $data = ['domainList' => $domainList];
        return View::fetch('domain', $data);
    }

    public function enterprise(Request $request)
    {
        $enterList = [
            ['name' => '拓速乐汽车销售（北京）有限公司', 'from' => '天眼查', 'url' => 'http://www.asianev.com/company/image/nimg180_2.png',
                'fanwei' => '汽车及其汽车零部件、橡胶制品、仪器仪表、日用百货、纺织、服装服饰、工艺美术品、电子产品、太阳能充电器、充电桩、充电柜、电池管理系统、换流柜、逆变柜/器、汇流箱、开关柜、储能机组、储能电池及其他能源系统产品的批发、进出口和佣金代理（拍卖除外）；',
                'infoArr' => [
                    '法定代表人' => '唐庆松', '电话' => '010-6554321', '邮箱' => '78778443@qq.com',
                    '网址' => 'http://www.qq.com', '注册地址' => '北京市海淀区学清路8号',
                    '简介' => '拓速乐汽车销售(北京)有限公司,于2012-11-07在北京市注册成立,距今成立10年3月零17天了。'
                ]
            ]
        ];
        $enterList = array_merge($enterList, $enterList, $enterList);
        $enterList = array_merge($enterList, $enterList, $enterList);
        $data = ['enterList' => $enterList];
        return View::fetch('enterprise', $data);
    }
}
