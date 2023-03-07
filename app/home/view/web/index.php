<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>前台</title>
    <link rel="stylesheet" href="/css/css.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
            crossorigin="anonymous"></script>
</head>
<body>

{include file='common/head' /}
<div class="container">
    <div class="row">
        {include file='common/body' /}
        <div class="col-10">
            <div class="row">

                <div class="col-10">
                    <span>找到约 566 条结果 用时 0.282593 秒</span>
                    <button type="button">排除云上资产</button>
                    <button type="button">端口数据</button>
                    <button type="button">相关漏洞插件</button>
                    <button type="button">查询语法</button>
                    <button type="button">导出</button>
                    <div class="row">
                        <div class="col-3">一级域名<input type="text" class="form-control"></div>
                        <div class="col-3">网页标题<input type="text" class="form-control"></div>
                        <div class="col-12">搜索<input type="text" class="form-control"></div>
                    </div>
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">数据</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">统计</a>
                        </li>
                    </ul>
                    <div class="row">
                        <div class="col-4">
                            <h4>sso.tesla.com:443</h4>
                            <p>单位</p>
                            <p>Apache</p>
                            <p>美国得克萨斯州</p>
                            <p>状态码: 200</p>
                            <p>组织: AKAMAI-AS</p>
                        </div>
                        <div class="col-4">
                            <div class="card">
                                <span class="card-header"><h5>响应</h5></span>
                                <div class="card-body"><code>
                                        <HTML>
                                        <HEAD>
                                            <TITLE>Invalid URL</TITLE>
                                        </HEAD>
                                        <BODY>
                                        <H1>Invalid URL</H1>
                                        The requested URL "&#91;no&#32;URL&#93;", is invalid.<p>

                                        </BODY>
                                        </HTML>
                                    </code></div>
                            </div>
                        </div>
                        <div class="col-4">
                            <img src="/img/yumi.png">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <h4>sso.tesla.com:443</h4>
                            <p>单位</p>
                            <p>Apache</p>
                            <p>美国得克萨斯州</p>
                            <p>状态码: 200</p>
                            <p>组织: AKAMAI-AS</p>
                        </div>
                        <div class="col-4">
                            <div class="card">
                                <span class="card-header"><h5>响应</h5></span>
                                <div class="card-body"><code>
                                        <HTML>
                                        <HEAD>
                                            <TITLE>Invalid URL</TITLE>
                                        </HEAD>
                                        <BODY>
                                        <H1>Invalid URL</H1>
                                        The requested URL "&#91;no&#32;URL&#93;", is invalid.<p>

                                        </BODY>
                                        </HTML>
                                    </code></div>
                            </div>
                        </div>
                        <div class="col-4">
                            <img src="/img/yumi.png">
                        </div>
                    </div>
                </div>

                <div class="col-2">
                    <li>指纹/标签</li>
                    <?php foreach ($list as $value) {?>
                        <p>{$value['title']}</p>
                    <?php }?>
                </div>
s
            </div>
        </div>
    </div>
</div>
</body>
</html>