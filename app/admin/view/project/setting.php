{include file='public/head' /}
<?php

$qtConfDemo = '{
    "fofa_email": "fofa",
    "fofa_token": "fofa",
    "github_token": "fofa",
    "mysql_db_name": "fofa",
    "mysql_host": "fofa",
    "mysql_password": "fofa",
    "mysql_port": "fofa",
    "mysql_username": "fofa"
}';
?>
<style>
    a {
        text-decoration: none;
    }

    li {
        list-style: none;
    }
</style>
<div class="row">
    <div class="col-1 ">
        {include file='Common/nav' /}
    </div>
    <div class="col-11 tuchu" style="border-radius:5px;">
        <div style="height:24px;"></div>
        <div class="row">
            <div class="col-4">
                <div style="border-radius:10px;border: 1px solid #ccc;padding:10px;">
                    <div style="padding:10px;">
                        <span style="color:#666;font-weight: bold;font-size: 16px;">蜻蜓引擎配置</span>
                    </div>
                    <div>
                        <form method="post" action="{:URL('project/update_project_conf')}">
                            <div style="margin-bottom: 10px;">
                                <span><input class="form-control" type="text" name="QT_TOKEN"
                                             placeholder="请填写蜻蜓Token"
                                             value="{$projectConf['QT_TOKEN'] ?? ''}"></span>
                            </div>
                            <div style="margin-bottom: 10px;">
                                <span>
                                    <input class="form-control" type="text" name="QT_ID" placeholder="请填写工作流ID"
                                           value="{$projectConf['QT_ID'] ?? ''}">
                                </span>
                            </div>
                            <div style="margin-bottom: 10px;">
                            <span>
                                <textarea rows="10" class="form-control" name="QT_CONF"
                                          placeholder='全局变量参数 {"xxx":"xxx"}'>{$projectConf['QT_CONF'] ?? $qtConfDemo}</textarea>
                            </span>
                            </div>
                            <?php if(!empty($paramRet)){ ?>
                            <div style="margin-bottom: 10px;">
                                <span style="color:#ccc;">引擎配置保存到蜻蜓结果</span>
                                <textarea style="color:#aaa;" rows="2" class="form-control"  disabled>{$paramRet ?? ''}</textarea>
                            </div>
                            <?php } ?>
                            <div style="margin-bottom: 10px;">

                                <span style="color:#666;font-weight: bold;font-size: 16px;">周期扫描设置</span>
                            </div>
                            <div style="margin-bottom: 10px;">
                                <div class="input-group">
                                    <span class="input-group-text">首次扫描</span>
                                    <input class="form-control" type="datetime-local" step="1" name="cycle_start_time"
                                           placeholder="首次运行时间"
                                           value="{$projectConf['cycle_start_time'] ?? date('Y-m-d H:i:s')}">
                                </div>
                            </div>
                            <div style="margin-bottom: 10px;">
                                <div class="input-group">
                                    <input type="text" name="time_value" class="form-control"
                                           value="{$projectConf['time_value'] ?? 0}"/>
                                    <select class="form-control" name="schedule">
                                        <?php $projectConf['schedule'] = $projectConf['schedule'] ?? 3600; ?>
                                        <option value="1"
                                                <?php echo ($projectConf['schedule'] == 1) ? 'selected' : '' ?>秒
                                        </option>
                                        <option value="60" <?php echo ($projectConf['schedule'] == 60) ? 'selected' : '' ?>>
                                            分
                                        </option>
                                        <option value="3600" <?php echo ($projectConf['schedule'] == 3600) ? 'selected' : '' ?>>
                                            小时
                                        </option>
                                        <option value="86400" <?php echo ($projectConf['schedule'] == 86400) ? 'selected' : '' ?>>
                                            天
                                        </option>
                                        <option value="604800" <?php echo ($projectConf['schedule'] == 604800) ? 'selected' : '' ?>>
                                            周
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <?php if(!empty($paramRet)){ ?>
                            <div style="margin-bottom: 10px;">
                                <span style="color:#ccc;">周期扫描设置保存到蜻蜓结果</span>
                                <textarea style="color:#aaa;" rows="2" class="form-control"  disabled>{$ruleRet ?? ''}</textarea>
                            </div>
                            <?php } ?>
                            <div style="margin-bottom: 10px;">
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-outline-primary">保存</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-4" id="accordionExample">
                <div style="border-radius:10px;border: 1px solid #ccc;padding:10px;">
                    <div style="padding:10px;">
                        <span style="color:#666;font-weight: bold;font-size: 16px;">域名配置</span>
                        <button style="float:right;" type="button" class="btn btn-sm btn-outline-primary"
                                data-bs-toggle="modal"
                                data-bs-target="#exampleModal">添加
                        </button>
                    </div>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col" style="color:#ccc;">域名</th>
                            <th scope="col" style="color:#ccc;">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($mainList as $item) { ?>
                            <tr>
                                <td>{$item['domain']}</td>
                                <td>
                                    <a class="btn btn-sm btn-outline-danger"
                                       href="{:url('project/_del_domain',['id'=>$item['id']])}">删除</a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
{include file='project/add_domain' /}
{include file='project/add_url' /}