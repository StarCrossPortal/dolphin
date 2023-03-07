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
                        <div class="col-3">
                            <a href="#">请求入口</a>
                            <a href="#">登陆页面</a>
                        </div>
                        <div class="col-5"></div>
                        <div class="col-4">
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
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">时间</th>
                                <th scope="col">应用</th>
                                <th scope="col">标题</th>
                                <th scope="col">入口</th>
                                <th scope="col">Method</th>
                                <th scope="col">资源类型</th>
                                <th scope="col">请求</th>
                                <th scope="col">操作</th>
                            </tr>
                            </thead>
                            <tbody>

                                <?php foreach ($list as $value) { ?>
                                <tr>
                                    <th scope="row"></th>
                                    <td>{$value['application']}</td>
                                    <td>{$value['title']}</td>
                                    <td>{$value['port']}</td>
                                    <td>{$value['id']}</td>
                                    <td>{$value['id']}</td>
                                </tr>
                                <?php } ?>

                            </tbody>
                        </table>

                    </div>
                </div>

                <div class="col-2">
                    <h5>应用</h5>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select><h5>应用</h5>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select><h5>应用</h5>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select><h5>应用</h5>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>