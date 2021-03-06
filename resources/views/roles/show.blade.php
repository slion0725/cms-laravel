<div class="off-canvas off-canvas-right off-canvas-effect" id="offcanvas-show">
    <div class="card d-flex flex-column h-100">
        <div class="card-header">
            Show
        </div>
        <div class="card-body align-self-stretch">
            <dl>
                <dt>ID</dt>
                <dd v-text="show.id"></dd>
                <hr>
                
                <dt>Name</dt>
                <dd v-text="show.name"></dd>
                <hr>
                
                <dt>Guard Name</dt>
                <dd v-text="show.guard_name"></dd>
                <hr>
                
                <dt>Created At</dt>
                <dd v-text="show.created_at"></dd>
                <hr>
                
                <dt>Updated At</dt>
                <dd v-text="show.updated_at"></dd>
                <hr>
                
            </dl>
        </div>
        <div class="card-footer">
            <a href="javascript:;" class="text-secondary mr-4 btn-offcanvas-close">Close</a>
        </div>
    </div>
</div>