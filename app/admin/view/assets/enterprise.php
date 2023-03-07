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
        <?php foreach ($enterList as $bianhao => $item) { ?>
            <div style="border: 1px solid #ccc;border-radius:5px;min-height:290px;padding: 10px;margin-bottom: 10px;">
                <div class="row">
                    <div class="col-12">
                        <h4 style="">
                            <img style="width:64px;" src="{$item['url']}">
                            {$item['name']} &nbsp;
                            <span style="font-size:14px;">
                            <span style="color:#ccc;">数据来源: </span>
                            <a href="#" target="_blank">{$item['from']}</a>
                        </span>
                        </h4>
                    </div>
                    <?php foreach ($item['infoArr'] as $key => $subItem) { ?>
                        <div class="col-6">
                            <div style="padding:5px;"><span style="color: #999;">{$key}:</span> <span>{$subItem}</span>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="col-12">
                        <div style="padding:5px;"><span style="color: #999;">经营范围:</span>
                            <span>{$item['fanwei']}</span></div>
                    </div>
                    <div class="col-12">
                        <div class="accordion" id="accordionExample_{$bianhao}">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo_{$bianhao}">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo_{$bianhao}" aria-expanded="false"
                                            aria-controls="collapseTwo_{$bianhao}">
                                        展开
                                    </button>
                                </h2>
                                <div id="collapseTwo_{$bianhao}" class="accordion-collapse collapse" aria-labelledby="headingTwo_{$bianhao}"
                                     data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                       ...
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

</div>