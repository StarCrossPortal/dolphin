<?php
declare (strict_types=1);

namespace app\admin\controller;

use app\admin\model\DomainModel;
use app\admin\model\PortsModel;
use app\admin\model\ProductCateModel;
use app\admin\model\ProductsModel;
use app\admin\model\UrlsModel;
use think\facade\Db;
use think\facade\View;
use think\Request;

class Home extends Common
{
    public function index(Request $request)
    {
        $categoryList = ProductCateModel::getCount(1);
        $imgList = [
            ['src' => 'http://qingting.starcross.cn/static/logo1.svg', 'num' => 10],
            ['src' => 'http://qingting.starcross.cn/favicon.ico', 'num' => 10],
            ['src' => 'https://demo.starcross.cn/favicon.ico', 'num' => 10],
            ['src' => 'https://bootstrapdoc.com/assets/img/bootstrap.svg', 'num' => 10],
            ['src' => 'https://fofa.info/favicon.ico', 'num' => 10],
        ];

        $otherList = [
            ['title' => '标题', 'lists' => UrlsModel::getCount(1)],
            ['title' => '应用', 'lists' => ProductsModel::getCount(1)],
            ['title' => '风险', 'lists' => []],
            ['title' => '端口', 'lists' => PortsModel::getCount(1)],
            ['title' => '证书', 'lists' => []],
            ['title' => '供应商', 'lists' => []],
        ];

        $data = ['categoryList' => $categoryList, 'imgList' => $imgList, 'otherList' => $otherList];

        return View::fetch('index', $data);
    }

}
