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
                    <div class="row">
                        <div class="col-2">网页标题
                            <div class="input-group">
                                <select class="form-select" id="inputGroupSelect04"
                                        aria-label="Example select with button addon">
                                    <option selected>Choose...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-2">位置
                            <div class="input-group">
                                <select class="form-select" id="inputGroupSelect04"
                                        aria-label="Example select with button addon">
                                    <option selected>Choose...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-2">域名
                            <div class="input-group">
                                <select class="form-select" id="inputGroupSelect04"
                                        aria-label="Example select with button addon">
                                    <option selected>Choose...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-2">指纹标签
                            <div class="input-group">
                                <select class="form-select" id="inputGroupSelect04"
                                        aria-label="Example select with button addon">
                                    <option selected>Choose...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-2">公司/单位
                            <div class="input-group">
                                <select class="form-select" id="inputGroupSelect04"
                                        aria-label="Example select with button addon">
                                    <option selected>Choose...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">搜索<input type="text" class="form-control"></div>
                    </div>
                    <h4>数据如下:</h4>
                    <div class="row">
                        <div class="col-4">
                            <h4>ip</h4>
                            <p>端口</p>
                            <p>美国得克萨斯州</p>
                            <p>ASN: 16625</p>
                            <p>组织: AKAMAI-AS</p>
                        </div>
                        <div class="col-8">
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
                                            Reference&#32;&#35;9&#46;27aad617&#46;1674286814&#46;f15ae68
                                        </BODY>
                                        </HTML>
                                    </code></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <h4>ip</h4>
                            <p>端口</p>
                            <p>美国得克萨斯州</p>
                            <p>ASN: 16625</p>
                            <p>组织: AKAMAI-AS</p>
                        </div>
                        <div class="col-8">
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
                                            Reference&#32;&#35;9&#46;27aad617&#46;1674286814&#46;f15ae68
                                        </BODY>
                                        </HTML>
                                    </code></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-2">
                    <li>状态码</li>
                    <?php foreach ($list as $value) { ?>
                        {$value['port']}<p></p>
                    <?php } ?>
                    <li>指纹/标签</li>
                    <?php foreach ($list as $value) { ?>
                        {$value['title']}<p></p>
                    <?php } ?>

                </div>

            </div>
        </div>
    </div>
</div>
</body>
</html>