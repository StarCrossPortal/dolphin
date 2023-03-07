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
    <div class="col-9 ">
        <div class="tuchu" style="border-radius: 5px;">
            <div class="row">
                <?php foreach ($filterList as $item) { ?>
                    <div class="col-2">
                        <div style=" margin-bottom:  10px; ">
                            <select style="color: rgba(0,0,0,0.65);" class="form-select"
                                    aria-label="Default select example">
                                <option>{$item['name']}</option>
                                <?php foreach ($item['lists'] as $label) { ?>
                                    <option value="{$label}">{$label}</option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                <?php } ?>

                <div class="col-6">
                    <input class="form-control" type="text" placeholder="搜索">
                </div>
                <div class="col-auto">
                    <button type="button" class="btn btn-primary btn-sm">查询</button>&nbsp;&nbsp;
                    <span style="color: #ccc;">IP数量{:count(array_unique(array_column($portList,'ip')))}个,找到{:count($portList)}条结果</span>
                </div>
                <div class="col-12">
                    <div style="height: 10px;"></div>
                    <button type="button" class="btn btn-secondary btn-sm" disabled>Favicon搜索</button>
                    <button type="button" class="btn btn-primary btn-sm" disabled>保存查询条件</button>
                    <button type="button" class="btn btn-primary btn-sm" disabled>导出</button>
                    <button type="button" class="btn btn-primary btn-sm" disabled>网站数据</button>
                    <button type="button" class="btn btn-primary btn-sm" disabled>全球视角</button>
                    <button type="button" class="btn btn-primary btn-sm" disabled>相关漏洞插件</button>
                    <button type="button" class="btn btn-primary btn-sm" disabled>排除云上资产</button>
                </div>
            </div>
        </div>
        <div class="tuchu" style="border-radius: 5px;">
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab"
                               aria-controls="home" aria-selected="true">数据</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab"
                               aria-controls="profile" aria-selected="false">统计</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <?php foreach ($portList as $value) { ?>
                                <div class="row" style="padding:10px;">
                                    <div class="col-4">
                                        <h5>{$value['host']}:{$value['port']} <span
                                                    style="color:ccc;font-size:14px;"> </span>
                                        </h5>
                                        <p>
                                            <span class="badge item_tag">{$value['create_time']}</span>
                                            <?php
                                            foreach ($value['tags'] as $tag) { ?>
                                                <span class="badge   item_tag">{$tag}</span>
                                            <?php } ?>
                                        </p>
                                        <p></p>
                                    </div>
                                    <div class="col-8">
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <a class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                                   href="#nav-home" role="tab" aria-controls="nav-home"
                                                   aria-selected="true">响应</a>
                                                <a class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                                   href="#nav-profile" role="tab" aria-controls="nav-profile"
                                                   aria-selected="false">原始数据</a>
                                            </div>
                                        </nav>
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                                 aria-labelledby="nav-home-tab">
                                            <textarea class="form-control textarea" style="background-color:#fff;"
                                                      rows="6"
                                                      disabled>{$value['banner']}</textarea>
                                            </div>
                                            <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                                 aria-labelledby="nav-profile-tab">
                                            <textarea class="form-control textarea" rows="6"
                                                      disabled>{$value['banner']}</textarea>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <hr/>
                            <?php } ?>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                    </div>
                </div>
            </div>

            {include file='public/fenye' /}
        </div>
    </div>

    <div class="col-2 ">
        <div class="row ">
            <?php foreach ($countList as $item) { ?>
                <div class="col-12">
                    <div class="tuchu" style="border-radius: 5px;">
                        <p style="font-weight: 500;">{$item['name']}</p>
                        <div class="row">
                            <?php foreach ($item['lists'] as $name => $num) { ?>
                                <div class="col-9" style="color: #666;font-size: 14px;">{$name}</div>
                                <div class="col-3" style="color: #666;font-size: 14px;">{$num}</div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

    </div>
</div>

<style>
    .textarea {
        border: 1px solid #efefef;
        font-size: 12px;
        color: #8c8c8c;
        overflow: hidden;
    }

    .textarea:hover {
        overflow: auto;
    }

    .item_tag {
        background-color: rgb(68, 157, 230);
        margin-bottom: 5px;
    }
</style>