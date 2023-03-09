<?php

namespace app\admin\model;

use think\facade\Db;
use think\Model;

class BugsModel extends Model
{
    protected $name = 'bugs';


    public static function getCount(string $domain, int $projectId)
    {
        $data = [];
        $where = [['host', 'like', "%{$domain}"], ['project_id', '=', $projectId]];

        $data['全部'] = Db::table('bugs')->where($where)->count();
        $data['严重'] = Db::table('bugs')->where($where)->where(['level' => 1])->cache(60)->count();
        $data['高危'] = Db::table('bugs')->where($where)->where(['level' => 2])->cache(60)->count();
        $data['中危'] = Db::table('bugs')->where($where)->where(['level' => 3])->cache(60)->count();
        $data['低危'] = Db::table('bugs')->where($where)->where(['level' => 4])->cache(60)->count();
        $data['提示'] = Db::table('bugs')->where($where)->where(['level' => 5])->cache(60)->count();

        return $data;
    }

    public static function getDetailCount()
    {

        $where = ['project_id' => 1];

        //修复率
        $repairNum = Db::table('bugs')->where($where)->where(['is_repair' => 1])->count();
        $unRepairNum = Db::table('bugs')->where($where)->where(['is_repair' => 0])->count();
        $repairCount = (empty($repairNum) && empty($unRepairNum)) ? 0 : intval($repairNum / $unRepairNum);

        //漏洞等级
        $level1 = Db::table('bugs')->where($where)->where(['level' => 1])->count();
        $level2 = Db::table('bugs')->where($where)->where(['level' => 2])->count();
        $level3 = Db::table('bugs')->where($where)->where(['level' => 3])->count();
        $level4 = Db::table('bugs')->where($where)->where(['level' => 4])->count();
        $level5 = Db::table('bugs')->where($where)->where(['level' => 5])->count();


        $countList = [
            ['name' => '漏洞总数(个)',
                'num' => Db::table('bugs')->where(['project_id' => 1])->count(),
                'lists' => [
                    '今日新增' => Db::table('bugs')->where($where)->whereTime('create_time', '>=', date('Y-m-d', time() - (7 * 86400)))->count(),
                    '本周新增' => Db::table('bugs')->where($where)->whereTime('create_time', '>=', date('Y-m-d', time() - (7 * 86400)))->count(),
                ]
            ],
            ['name' => '受影响主机(台)', 'num' => Db::table('bugs')->where(['project_id' => 1])->group('host')->count(),
                'lists' => [
                    '内网 ' => Db::table('bugs')->whereTime('create_time', '>=', date('Y-m-d'))->where(['project_id' => 1])->group('host')->count(),
                    '外网 ' => Db::table('bugs')->whereTime('create_time', '>=', date('Y-m-d', time() - (7 * 86400)))->where(['project_id' => 1])->group('host')->count()
                ]
            ],
            ['name' => '修复率', 'num' => $repairCount, 'lists' => ['待修复' => $unRepairNum, '已修复' => $repairNum]],
            ['name' => '严重漏洞(个)', 'num' => $level1,
                'lists' => [
                    '高危' => $level2,
                    '中危' => $level3,
                    '低危' => $level4,
                    '提示' => $level5
                ]
            ],
        ];

        return $countList;
    }


}