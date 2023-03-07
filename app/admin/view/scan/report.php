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
    <div class="col-11 tuchu" style="border-radius: 5px;">
        <div class="row">
            <?php foreach ($countList as $item) { ?>
                <div class="col-3">
                    <div style="height: 155px;margin-bottom:20px;border-radius: 10px;padding:10px;border: 1px solid #eee;">
                        <p style="color: #ccc;font-weight:bold;">{$item['name']}</p>
                        <h4>{$item['num']}</h4>
                        <?php foreach ($item['lists'] as $tag => $num) { ?>
                            <span style="color: #ccc;">{$tag}</span> <span>{$num}</span>&nbsp;
                        <?php } ?>
                    </div>

                </div>
            <?php } ?>

        </div>
        <div class="row">
            <div class="col-12">
                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                    <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                    <label class="btn btn-outline-primary" for="btnradio1">外网</label>

                    <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btnradio2">内网</label>
                </div>
                &nbsp;
                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                    <input type="radio" class="btn-check" name="btnradio1" id="btnradio1" autocomplete="off" checked>
                    <label class="btn btn-outline-primary" for="btnradio1">全部</label>
                    <input type="radio" class="btn-check" name="btnradio1" id="btnradio1" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btnradio1">未修复</label>

                    <input type="radio" class="btn-check" name="btnradio1" id="btnradio2" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btnradio2">已修复</label>
                </div>
                &nbsp;
                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                    <input type="radio" class="btn-check" name="btnradio2" id="btnradio1" autocomplete="off" checked>
                    <label class="btn btn-outline-primary" for="btnradio1">全部</label>
                    <input type="radio" class="btn-check" name="btnradio2" id="btnradio1" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btnradio1">严重</label>
                    <input type="radio" class="btn-check" name="btnradio2" id="btnradio2" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btnradio2">高危</label>
                    <input type="radio" class="btn-check" name="btnradio2" id="btnradio2" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btnradio2">中危</label>
                    <input type="radio" class="btn-check" name="btnradio2" id="btnradio2" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btnradio2">低危</label>
                    <input type="radio" class="btn-check" name="btnradio2" id="btnradio2" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btnradio2">提示</label>
                    &nbsp;
                    <input type="text" style="width:200px;" class="form-control" placeholder="按信息进行查询">
                </div>


            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div style="margin-top:20px;">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th style="color:#aaa;">id</th>
                            <th style="color:#aaa;">URL</th>
                            <th style="color:#aaa;">主机</th>
                            <th style="color:#aaa;">端口</th>
                            <th style="color:#aaa;">标签</th>
                            <th style="color:#aaa;">发现时间</th>
                            <th style="color:#aaa;">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($bugList['list'] as $item) { ?>
                            <tr>
                                <td>{$item['id']}</td>
                                <td class="box" style="max-width: 300px;">
                                    <a target="_blank" href="{$item['url']}">
                                        <?php echo parse_url($item['url'])['path'] ?>
                                    </a>
                                </td>
                                <td>{$item['host']}</td>
                                <td>{$item['port']}</td>
                                <td>{$tag}</td>
                                <td>{$item['create_time']}</td>
                                <td><a class="btn btn-sm btn-light" aria-disabled="true">查看详情</a></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>