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
                <div class="col-10">一级域名<input type="text" class="form-control"></div>
                <div class="col-2"><img src="/img/yumi.png"></div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <span class="card-header">
                            <h5>fanmosaic.com</h5>
                        <sup>最近更新 2022-08-22 18:02</sup>
                        </span>
                        <div class="card-body">
                            <span>DNS</span><code>2</code>

                            <span>风险总数</span><code>2</code>

                        </div>
                        <div>
                            <span>风险总数<br><code>2</code></span>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <span class="card-header">
                            <h5>tesla.com</h5>
                            <sup>最近更新 2022-08-22 18:02</sup>
                        </span>

                        <div class="card-body">
                            <span>风险总数</span>
                            <span>风险总数</span>
                        </div>
                        <div>
                            <span>风险总数<br><code>2</code></span>
                        </div>
                    </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

</div>
</div>
</div>
</div>
</body>
</html>