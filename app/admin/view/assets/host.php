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
    <div class="col-9 " style="border-radius: 10px;">
        <div class="tuchu">
            <div class="row">
                <div class="col-5 ">
                    <span style="color: #ccc;line-height: 30px;height:30px;">找到约 566 条结果 用时 0.180284 秒</span>
                </div>
                <div class="col-7 ">
                    <button type="button" class="btn btn-primary btn-sm">排除云上资产</button>
                    <button type="button" class="btn btn-secondary btn-sm">端口数据</button>
                    <button type="button" class="btn btn-secondary btn-sm">相关漏洞插件</button>
                    <button type="button" class="btn btn-secondary btn-sm">查询语法</button>
                    <button type="button" class="btn btn-secondary btn-sm">导出</button>
                </div>
                <div style="height:20px;"></div>
                <?php foreach ($filterList as $item) { ?>
                    <div class="col-3">
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
                <div class="col-3 ">
                    <input type="email" class="form-control">
                </div>
                <div class="col-auto">
                    <button type="button" class="btn btn-primary btn-sm">查询</button>&nbsp;&nbsp;
                </div>
                <div style="height:10px;"></div>
                <div class="col-12">
                    <div class="btn-group me-2" role="group" aria-label="First group" style="float: right">
                        <button type="button" class="btn btn-outline-secondary">1</button>
                        <button type="button" class="btn btn-outline-secondary">2</button>
                        <button type="button" class="btn btn-outline-secondary">3</button>
                        <button type="button" class="btn btn-outline-secondary">4</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="tuchu">
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
                                <div class="row" style="padding: 10px;">
                                    <div class="col-4">
                                        <h5>{$value['host']}:{$value['port']} <span style="color:ccc;font-size:14px;">{$value['title']}</span>
                                        </h5>
                                        <p>
                                            <span class="badge bg-secondary">{$value['create_time']}</span>
                                            <?php
                                            foreach ($value['tags'] as $tag) { ?>
                                                <span class="badge bg-secondary">{$tag}</span>
                                            <?php } ?>
                                        </p>
                                        <p></p>
                                    </div>
                                    <div class="col-4">
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <a class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                                   href="#nav-home" role="tab" aria-controls="nav-home"
                                                   aria-selected="true">响应</a>
                                                <a class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                                   href="#nav-zhengshu" role="tab" aria-controls="nav-profile"
                                                   aria-selected="false">证书</a>
                                            </div>
                                        </nav>
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                                 aria-labelledby="nav-home-tab">
                                            <textarea class="form-control" rows="6" style="overflow:hidden"
                                                      disabled>{$value['header']}</textarea>
                                            </div>
                                            <div class="tab-pane fade" id="nav-zhengshu" role="tabpanel"
                                                 aria-labelledby="nav-profile-tab">
                                            <textarea class="form-control" rows="6" style="overflow:hidden"
                                                      disabled>{$value['cert']}</textarea>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-4">
                                        <img style="width:100%;"
                                             src="https://asm.biu.life/biu/screenshot/a16c9f32cee6a7a7d7a50275955a47cf.png?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=minio%2F20230227%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Date=20230227T120517Z&X-Amz-Expires=604800&X-Amz-SignedHeaders=host&X-Amz-Signature=12d16d87c4d082ccbfbd1113ae28c04afab42f8df552da786aa24a06cff6e539">
                                    </div>
                                </div>
                                <hr>
                            <?php } ?>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="col-2 ">
        <div class="row ">
            <?php foreach ($countList as $item) { ?>
                <div class="col-12">
                    <div class="tuchu" style="padding:10px;border-radius:10px;">
                        <h6>{$item['name']}</h6>
                        <hr/>
                        <div class="row right_li" style="max-height:320px;" >
                            <?php foreach ($item['lists'] as $name => $num) { ?>
                                <div class="col-9 right_li"  >{$name}</div>
                                <div class="col-3">{$num}</div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<style>
    .right_li{
        overflow:hidden;
    }
    .right_li:hover{
        overflow:hidden;
    }
</style>