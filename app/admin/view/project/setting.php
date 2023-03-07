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
    <div class="col-11 tuchu" style="border-radius:5px;">


        <div style="height:24px;"></div>
        <div class="row">
            <div class="col-auto accordion" id="accordionExample">
                <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">添加
                </button>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">域名</th>
                        <th scope="col">操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($mainList as $item) { ?>
                        <tr>
                            <td>{$item['domain']}</td>
                            <td>
                                <a class="btn btn-sm btn-outline-danger"  href="{:url('project/_del_domain',['id'=>$item['id']])}">删除</a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>

            <div class="col-auto accordion" id="accordionExample_URL">
                <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                        data-bs-target="#exampleModal_URL">添加
                </button>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">URL</th>
                        <th scope="col">操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($urlsList as $item) { ?>
                        <tr>
                            <td>{$item['url']}</td>
                            <td>
                                <a class="btn btn-sm btn-outline-danger"  href="{:url('project/_del_url',['id'=>$item['id']])}">删除</a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
{include file='project/add_domain' /}
{include file='project/add_url' /}