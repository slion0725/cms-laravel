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

                <dt>Title</dt>
                <dd v-text="show.title"></dd>
                <hr>

                <dt>Price</dt>
                <dd v-text="show.price"></dd>
                <hr>

                <dt>Manual</dt>
                <dd v-if="show.manual">
                    <a :href="'{{ asset('/storage') }}/' + show.manual">Download</a>
                </dd>
                <hr>

                <dt>Image</dt>
                <dd v-if="show.image">
                    <img :src="'{{ asset('/storage') }}/' + show.image" width="100%">
                </dd>
                <hr>

                <dt>Event Start</dt>
                <dd v-text="show.event_start"></dd>
                <hr>

                <dt>Event End</dt>
                <dd v-text="show.event_end"></dd>
                <hr>

                <dt>Description</dt>
                <dd v-html="show.description"></dd>
                <hr>

                <dt>Spec</dt>
                <dd v-html="show.spec"></dd>
                <hr>

                <dt>Status</dt>
                <dd v-text="show.status == 1 ? 'On' : 'Off'"></dd>
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
            <a class="text-secondary mr-4 btn-offcanvas-close" href="javascript:;">Close</a>
        </div>
    </div>
</div>