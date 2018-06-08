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

                <dt>Email</dt>
                <dd v-text="show.email"></dd>
                <hr>

                <dt>Roles</dt>
                <dd v-text="show.roles"></dd>
                <hr>

            </dl>
        </div>
        <div class="card-footer">
            <a href="javascript:;" class="text-secondary mr-4 btn-offcanvas-close">Close</a>
        </div>
    </div>
</div>