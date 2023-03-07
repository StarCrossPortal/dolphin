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

<div class="contarner">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <img class="fenlei" src="/img/yumi.png">
            </img>
            <div class="center">
                <form action="../index/index.php" method="post">
                    欢迎使用Biu<p></p>
                    账号<input type="text" class="form-control" id="username">
                    密码<input type="text" class="form-control" id="password">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">登陆</button>
                    <a>新账号激活</a>
                </form>
            </div>
        </div>
        <div class="col-3"></div>
    </div>
</div>
</body>
</html>

