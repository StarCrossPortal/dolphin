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

                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" href="#nav-home" role="tab"
                           aria-controls="nav-home" aria-selected="true">探测进度</a>
                        <a class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" href="#nav-profile" role="tab"
                           aria-controls="nav-profile" aria-selected="false">屏蔽管理</a>
                        <a class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" href="#nav-contact" role="tab"
                           aria-controls="nav-contact" aria-selected="false">网段分布</a>
                        <a class="nav-link" id="nav-four-tab" data-bs-toggle="tab" href="#nav-contact" role="tab"
                           aria-controls="nav-contact" aria-selected="false">网段分布</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="row">
                            <div class="col-3">总共 1 个资产</div>
                            <div class="col-6"></div>
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
                            <div class="col-4">
                                <p>进度</p>
                                <button type="button" class="btn btn-outline-info">全部</button>
                                <button type="button" class="btn btn-outline-info">完成</button>
                                <button type="button" class="btn btn-outline-info">等待</button>
                            </div>
                            <div class="col-5">
                                <p>进度</p>
                                <button type="button" class="btn btn-outline-info">全部</button>
                                <button type="button" class="btn btn-outline-info">IP</button>
                                <button type="button" class="btn btn-outline-info">子域名爆破</button>
                                <button type="button" class="btn btn-outline-info">子域名导入</button>
                                <button type="button" class="btn btn-outline-info">URL</button>
                            </div>
                            <div class="col-3">
                                <p>进度</p>
                                <input type="text" class="form-control" placeholder="搜索根域名及IP段格式">
                            </div>

                        </div>
                        <div class="row">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">添加时间</th>
                                    <th scope="col">目标</th>
                                    <th scope="col">进度</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($list as $value) { ?>
                                    <tr>
                                        <td>{$value['id']}</td>
                                        <td>{$value['title']}</td>
                                        <td>完成</td>
                                    </tr>
                                <?php } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="row">
                            <div class="col-3">总共 2 个资产</div>
                            <div class="col-6"></div>
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
                            <div class="col-4">
                                <p>进度</p>
                                <button type="button" class="btn btn-outline-info">全部</button>
                                <button type="button" class="btn btn-outline-info">完成</button>
                                <button type="button" class="btn btn-outline-info">等待</button>
                            </div>
                            <div class="col-5">
                                <p>进度</p>
                                <button type="button" class="btn btn-outline-info">全部</button>
                                <button type="button" class="btn btn-outline-info">IP</button>
                                <button type="button" class="btn btn-outline-info">子域名爆破</button>
                                <button type="button" class="btn btn-outline-info">子域名导入</button>
                                <button type="button" class="btn btn-outline-info">URL</button>
                            </div>
                            <div class="col-3">
                                <p>进度</p>
                                <input type="text" class="form-control" placeholder="搜索根域名及IP段格式">
                            </div>

                        </div>
                        <div class="row">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">添加时间</th>
                                    <th scope="col">目标</th>
                                    <th scope="col">进度</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($list as $value) { ?>
                                    <tr>
                                        <td>{$value['id']}</td>
                                        <td>{$value['title']}</td>
                                        <td>完成</td>
                                    </tr>
                                <?php } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="row">
                            <div class="col-3">总共 3 个资产</div>
                            <div class="col-6"></div>
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
                            <div class="col-4">
                                <p>进度</p>
                                <button type="button" class="btn btn-outline-info">全部</button>
                                <button type="button" class="btn btn-outline-info">完成</button>
                                <button type="button" class="btn btn-outline-info">等待</button>
                            </div>
                            <div class="col-5">
                                <p>进度</p>
                                <button type="button" class="btn btn-outline-info">全部</button>
                                <button type="button" class="btn btn-outline-info">IP</button>
                                <button type="button" class="btn btn-outline-info">子域名爆破</button>
                                <button type="button" class="btn btn-outline-info">子域名导入</button>
                                <button type="button" class="btn btn-outline-info">URL</button>
                            </div>
                            <div class="col-3">
                                <p>进度</p>
                                <input type="text" class="form-control" placeholder="搜索根域名及IP段格式">
                            </div>

                        </div>
                        <div class="row">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">添加时间</th>
                                    <th scope="col">目标</th>
                                    <th scope="col">进度</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($list as $value) { ?>
                                    <tr>
                                        <td>{$value['id']}</td>
                                        <td>{$value['title']}</td>
                                        <td>完成</td>
                                    </tr>
                                <?php } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-four" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="row">
                            <div class="col-3">总共 4 个资产</div>
                            <div class="col-6"></div>
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
                            <div class="col-4">
                                <p>进度</p>
                                <button type="button" class="btn btn-outline-info">全部</button>
                                <button type="button" class="btn btn-outline-info">完成</button>
                                <button type="button" class="btn btn-outline-info">等待</button>
                            </div>
                            <div class="col-5">
                                <p>进度</p>
                                <button type="button" class="btn btn-outline-info">全部</button>
                                <button type="button" class="btn btn-outline-info">IP</button>
                                <button type="button" class="btn btn-outline-info">子域名爆破</button>
                                <button type="button" class="btn btn-outline-info">子域名导入</button>
                                <button type="button" class="btn btn-outline-info">URL</button>
                            </div>
                            <div class="col-3">
                                <p>进度</p>
                                <input type="text" class="form-control" placeholder="搜索根域名及IP段格式">
                            </div>

                        </div>
                        <div class="row">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">添加时间</th>
                                    <th scope="col">目标</th>
                                    <th scope="col">进度</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($list as $value) { ?>
                                    <tr>
                                        <td>{$value['id']}</td>
                                        <td>{$value['title']}</td>
                                        <td>完成</td>
                                    </tr>
                                <?php } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
</body>
</html>