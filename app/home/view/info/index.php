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
                <div class="col-5">
                    <p>泄露总数</p>
                    <p>983</p>
                </div>
                <div class="col-4"></div>
                <div class="col-3">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="input-group">
                    <div class="col-3">一级域名<input type="text" class="form-control"></div>
                </div>
            </div>
            <div class="row">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">文件名</th>
                        <th scope="col">标签</th>
                        <th scope="col">发现时间</th>
                        <th scope="col">备注</th>
                        <th scope="col">操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($list as $value) { ?>
                        <tr>
                            <th scope="row">{$value['title']}</th>
                            <th scope="row">{$value['application']}</th>
                            <th scope="row">{$value['risk']}</th>
                            <th scope="row">{$value['port']}</th>
                            <th scope="row">{$value['ccie']}</th>
                            <td>
                                <a><button class="btn btn-outline-primary">Commits</button></a>
                                <a><button class="btn btn-outline-primary">快速排查</button></a>
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
</body>
</html>