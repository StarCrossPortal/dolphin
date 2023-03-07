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
    <div class="col-9 tuchu" style="border-radius:5px;">
        <div class="row">
            <div class="row">
                <div class="col-4">
                    <div style="padding:5px;">
                        <span class="badge bg-success">请求入口</span>
                        <span class="badge bg-danger">登录页面</span>
                    </div>
                </div>
                <div class="col-8" style="">
                    <div style="padding:5px; float: right;background-color:#eee;border-radius:5px;">
                        总共 835
                        <div class="btn-group me-2" role="group" aria-label="First group">
                            <button type="button" class="btn btn-outline-secondary">1</button>
                            <button type="button" class="btn btn-outline-secondary">2</button>
                            <button type="button" class="btn btn-outline-secondary">3</button>
                            <button type="button" class="btn btn-outline-secondary">4</button>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">时间</th>
                            <th scope="col">标题</th>
                            <th scope="col">入口</th>
                            <th scope="col">Methed</th>
                            <th scope="col">资源类型</th>
                            <th scope="col">状态码</th>
                            <th scope="col">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($requestList as $item) { ?>
                            <tr>
                                <td>{$item['create_time']}</td>
                                <td>{$item['title']}</td>
                                <td>{$item['url']}</td>
                                <td>{$item['method']}</td>
                                <td>{$item['file_type']}</td>
                                <td>{$item['code']}</td>
                                <td>
                                    <button class="btn btn-primary btn-sm">详情</button>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-2 " >
<div class="tuchu" style="border-radius:5px;padding: 10px;">
    <div class="row">
        <div class="col-12">
            <form class="row g-3">
                <div class="col-auto">
                    <input type="password" class="form-control" placeholder="应用" >
                </div>
                <div class="col-auto">
                    <input type="password" class="form-control" placeholder="方法" >
                </div>
                <div class="col-auto">
                    <input type="password" class="form-control" placeholder="主机" >
                </div>
                <div class="col-auto">
                    <input type="password" class="form-control" placeholder="路径" >
                </div>
                <div class="col-auto">
                    <input type="password" class="form-control" placeholder="状态码" >
                </div>
                <div class="col-auto">
                    <input type="password" class="form-control" placeholder="登录页面" >
                </div>
                <div class="col-auto">
                    <input type="password" class="form-control" placeholder="标题" >
                </div>
                <div class="col-auto">
                    <input type="password" class="form-control" placeholder="响应头" >
                </div>
                <div class="col-auto">
                    <input type="password" class="form-control" placeholder="响应" >
                </div>
                <div class="col-auto">
                    <input type="password" class="form-control" placeholder="入口" >
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3 btn-sm">搜索</button>
                    <button type="reset" class="btn btn-light mb-3 btn-sm">重置</button>
                </div>
            </form>
        </div>
    </div>
</div>

    </div>

</div>