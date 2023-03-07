<?php

namespace app\admin\model;

use think\facade\Db;
use think\Model;

class UrlsModel extends Model
{
    protected $name = 'ports';


    public static function getCount($projectId)
    {
        $data = [];
        $cateList = Db::table('urls')->where(['project_id'=>$projectId])->group('title')->column('title');

        foreach ($cateList as $title) {
            $where = ['title' => $title,'project_id'=>$projectId];
            $data[$title] = Db::table('urls')->where($where)->count();
        }
        return $data;
    }
}