<div class="off-canvas off-canvas-right off-canvas-effect" id="offcanvas-add">
    <div class="card d-flex flex-column h-100">
        <div class="card-header">
            Add
        </div>
        <div class="card-body align-self-stretch">
            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="add-name" class="col-form-label col-form-label-sm">Name</label>
                </div>
                <div class="col-sm-9">
                    <input type="checkbox" id="add-name" name="name" class="form-control form-control-sm" v-model="add.name">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="add-title" class="col-form-label col-form-label-sm">Title</label>
                </div>
                <div class="col-sm-9">
                    <input type="checkbox" id="add-title" name="title" class="form-control form-control-sm" v-model="add.title">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="add-price" class="col-form-label col-form-label-sm">Price</label>
                </div>
                <div class="col-sm-9">
                    <input type="checkbox" id="add-price" name="price" class="form-control form-control-sm" v-model="add.price">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="add-manual" class="col-form-label col-form-label-sm">Manual</label>
                </div>
                <div class="col-sm-9">
                    <input type="checkbox" id="add-manual" name="manual" class="form-control form-control-sm" v-model="add.manual">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="add-image" class="col-form-label col-form-label-sm">Image</label>
                </div>
                <div class="col-sm-9">
                    <input type="checkbox" id="add-image" name="image" class="form-control form-control-sm" v-model="add.image">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="add-event_start" class="col-form-label col-form-label-sm">Event Start</label>
                </div>
                <div class="col-sm-9">
                    <input type="checkbox" id="add-event_start" name="event_start" class="form-control form-control-sm" v-model="add.event_start">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="add-event_end" class="col-form-label col-form-label-sm">Event End</label>
                </div>
                <div class="col-sm-9">
                    <input type="checkbox" id="add-event_end" name="event_end" class="form-control form-control-sm" v-model="add.event_end">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="add-description" class="col-form-label col-form-label-sm">Description</label>
                </div>
                <div class="col-sm-9">
                    <input type="checkbox" id="add-description" name="description" class="form-control form-control-sm" v-model="add.description">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="add-spec" class="col-form-label col-form-label-sm">Spec</label>
                </div>
                <div class="col-sm-9">
                    <input type="checkbox" id="add-spec" name="spec" class="form-control form-control-sm" v-model="add.spec">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="add-status" class="col-form-label col-form-label-sm">Status</label>
                </div>
                <div class="col-sm-9">
                    <input type="checkbox" id="add-status" name="status" class="form-control form-control-sm" v-model="add.status">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="add-created_at" class="col-form-label col-form-label-sm">Created At</label>
                </div>
                <div class="col-sm-9">
                    <input type="checkbox" id="add-created_at" name="created_at" class="form-control form-control-sm" v-model="add.created_at">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="add-updated_at" class="col-form-label col-form-label-sm">Updated At</label>
                </div>
                <div class="col-sm-9">
                    <input type="checkbox" id="add-updated_at" name="updated_at" class="form-control form-control-sm" v-model="add.updated_at">
                </div>
            </div>

        </div>
        <div class="card-footer">
            <a href="javascript:;" class="text-secondary mr-4 btn-offcanvas-close">Close</a>
            <a href="javascript:;" class="text-primary mr-4" @click="add_onSubmit('add')">Save</a>
        </div>
    </div>
</div>