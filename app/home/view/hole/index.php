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
                <div class="col-3">漏洞总数(个)
                    <p></p><span>9</span>
                    <p>今日新增 0 本周新增 0</p>
                </div>
                <div class="col-3">受影响主机(台)
                    <p></p><span>9</span>
                    <p>内网 0 外网 0</p>
                </div>
                <div class="col-3">修复率
                    <p></p><span>9</span>
                    <p>待修复 0 已修复 0</p>
                </div>
                <div class="col-3">严重漏洞(个)
                    <p></p><span>9</span>
                    <p>高危 0 中危 0 低危 0</p>
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <button class="btn btn-outline-info">外网</button>
                    <button class="btn btn-outline-info">内网</button>
                </div>
                <div class="col-3">
                    <button type="button" class="btn btn-outline-info">全部</button>
                    <button type="button" class="btn btn-outline-info">未修复</button>
                    <button type="button" class="btn btn-outline-info">已修复</button>
                </div>
                <div class="col-5">
                    <button type="button" class="btn btn-outline-info">全部</button>
                    <button type="button" class="btn btn-outline-info">严重</button>
                    <button type="button" class="btn btn-outline-info">高危</button>
                    <button type="button" class="btn btn-outline-info">中危</button>
                    <button type="button" class="btn btn-outline-info">低危</button>
                    <button type="button" class="btn btn-outline-info">提示</button>
                </div>
                <div class="col-2">
                   <input type="text" class="form-control" placeholder="输入信息进行搜索">
                </div>

            </div>
            <div class="row">
                <div class="col-6">
                    <p>分页</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>