{include file='public/head' /}
<?php
$colorArr = [
    '全部' => 'rgb(245, 34, 45);',
    '严重' => 'rgb(207, 19, 34);',
    '高危' => 'rgb(250, 84, 28);',
    '中危' => 'rgb(250, 140, 22);',
    '低危' => 'rgb(255, 214, 102);',
    '提示' => 'rgb(24, 144, 255);'
];
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
        <div class="row">
            <div class="col-3 "></div>
            <div class="col-6 ">
                <input type="text" class="form-control" placeholder="请输入域名, ip进行搜索">
                <div style="height:10px"></div>
            </div>
            <div class="col-3 "></div>
            <div class="col-12 ">
                <div class="btn-group me-2" role="group" aria-label="First group" style="float: right;">
                    <button type="button" class="btn btn-outline-secondary"><</button>
                    <button type="button" class="btn btn-outline-secondary">1</button>
                    <button type="button" class="btn btn-outline-secondary">></button>
                </div>
            </div>
            <div style="height:10px"></div>

        </div>
        <div class="row">
            <?php foreach ($domainList as $value) { ?>
                <div class="col-6 ">
                    <div style=" border: 1px solid #eee; border-radius:5px;height:250px;margin-bottom:20px;padding: 20px;">
                        <div class="row" style="height: 170px;">
                            <div class="col-6 "><img src="{$value['icon_url']}" style="max-width:32px;">&nbsp;
                                <b style="font-size:28px;color:rgb(89, 89, 89);">{$value['domain']}</b>
                            </div>
                            <div class="col-6 "><span style="color:#ccc;height: 24px;line-height: 24px;">最近更新 {$value['create_time']}</span>
                            </div>
                            <?php foreach ($value['tags'] as $tag => $valStr) {
                                if ($valStr == '') continue;
                                ?>
                                <div class="col-auto" style="text-align:center;">
                                    <span style="color:#999;">{$tag}:</span> <span
                                            style="font-weight: bolder;color: rgb(89, 89, 89);">{$valStr}</span>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="row">
                            <?php foreach ($value['bugs'] as $tag => $valStr) { ?>
                                <div class="col-2" style="text-align:center;font-weight: bolder;">
                                    <span style="color:#999;">{$tag}</span><br>
                                    <span style="color:{$colorArr[$tag]}">{$valStr}</span>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

</div>