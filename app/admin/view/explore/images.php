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

        <div class="row">
            <div class="col-4">
                <div style="padding:5px;">
                    <input type="text" class="form-control" placeholder="支持根域名及IP段格式">
                </div>
            </div>
            <div class="col-4"></div>
            <div class="col-4" style="background-color:#eee;border-radius:5px;">
                <div style="padding:5px;">
                    总共 835 张截图
                    <div class="btn-group me-2" role="group" aria-label="First group">
                        <button type="button" class="btn btn-outline-secondary">1</button>
                        <button type="button" class="btn btn-outline-secondary">2</button>
                        <button type="button" class="btn btn-outline-secondary">3</button>
                        <button type="button" class="btn btn-outline-secondary">4</button>
                    </div>
                </div>

            </div>
        </div>
        <div style="height: 30px;"></div>
        <div class="row">
            <?php foreach ($imagesList as $item) { ?>
                <div class="col-3">
                    <div style="border: 1px solid #eee;border-radius:5px;margin-bottom: 20px;padding:5px;">
                        <figure class="figure">
                            <?php if ($item['screen_url']) { ?>
                                <img src="{$item['screen_url']}" class="figure-img img-fluid rounded">
                            <?php } ?>
                            <?php if (empty($item['screen_url'])) { ?>
                                <svg class="bd-placeholder-img figure-img img-fluid rounded" width="530" height="265"
                                     xmlns="http://www.w3.org/2000/svg" role="img"
                                     preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#868e96"></rect>
                                    <text x="45%" y="50%" fill="#dee2e6" dy=".3em">未找到</text>
                                </svg>
                            <?php } ?>
                            <figcaption class="figure-caption">
                                <a href="{$item['url']}" target="_blank"
                                   style="width:400px;color:#666;font-size:16px;overflow: hidden;">

                                    <span style="">{$item['domain']}:{$item['port']}</span>
                                </a>
                             </figcaption>
                        </figure>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>

</div>