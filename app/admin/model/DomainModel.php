<?php

namespace app\admin\model;

use think\facade\Db;
use think\Model;

class DomainModel extends Model
{
    protected $name = 'domain';


    public static function getCount($domain, $projectId)
    {
        $where = ['project_id' => $projectId];
        $ipList = Db::table('ip')->where($where)->whereLike('domain',"%{$domain['domain']}%")->cache(60)->column('ip');

        $data =
        [
            '组织' => '',
            '备案' => Db::table('websites')->where($where)->whereNotNull('icp')->whereLike('domain',"%{$domain['domain']}%")->cache(60)->value('icp'),
            'DNS' => Db::table('domain')->where($where)->whereLike('domain',"%{$domain['domain']}%")->cache(60)->count(),
            '网站' => Db::table('websites')->where($where)->whereLike('domain',"%{$domain['domain']}%")->cache(60)->count(),
            'IP' => Db::table('ip')->where($where)->whereLike('domain',"%{$domain['domain']}%")->cache(60)->count(),
            '开放端口' => Db::table('ports')->where($where)->whereIn('ip',$ipList)->cache(60)->count(),
        ];
        return $data;
    }
}