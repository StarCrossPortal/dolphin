<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <form method="post" action="<?php echo url('project/_add_domain'); ?>">
                    <div class="mb-3">
                        <label class="form-label">域名</label>
                        <textarea class="form-control" name="domain" placeholder="每行一个主域名,例如: songboy.site" rows="5"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">添加</button>
                </form>
            </div>
        </div>
    </div>
</div>