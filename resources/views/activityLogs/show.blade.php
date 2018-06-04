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

                <dt>Log Name</dt>
                <dd v-text="show.log_name"></dd>
                <hr>

                <dt>Description</dt>
                <dd v-text="show.description"></dd>
                <hr>

                <dt>Subject ID</dt>
                <dd v-text="show.subject_id"></dd>
                <hr>

                <dt>Subject Type</dt>
                <dd v-text="show.subject_type"></dd>
                <hr>

                <dt>Causer ID</dt>
                <dd v-text="show.causer_id"></dd>
                <hr>

                <dt>Causer Type</dt>
                <dd v-text="show.causer_type"></dd>
                <hr>

                <dt>Properties</dt>
                <pre>@{{ show.properties | json }}</pre>
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