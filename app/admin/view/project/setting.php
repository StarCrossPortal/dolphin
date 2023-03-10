{include file='public/head' /}

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
                        <div style="margin-bottom: 10px;">
                            <span><input class="form-control" type="text" placeholder="请填写蜻蜓Token" value="{$projectConf['QT_TOKEN'] ?? ''}"></span>
                        </div>
                        <div style="margin-bottom: 10px;">
                            <span><input class="form-control" type="text" placeholder="请填写工作流ID" value="{$projectConf['QT_ID'] ?? ''}"></span>
                        </div>
                        <div style="margin-bottom: 10px;">
                            <span>
                                <textarea rows="4" class="form-control" placeholder='全局变量参数 {"xxx":"xxx"}'>{$projectConf['QT_CONF'] ?? ''}</textarea>
                            </span>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-3 accordion" id="accordionExample">
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