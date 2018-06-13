<div class="off-canvas off-canvas-right off-canvas-effect" id="offcanvas-edit">
    <div class="card d-flex flex-column h-100">
        <div class="card-header">
            Edit
        </div>
        <div class="card-body align-self-stretch">
            <div class="form-group row">
                <div class="col-sm-3">
                    <label class="col-form-label col-form-label-sm">ID</label>
                </div>
                <div class="col-sm-9 align-self-center" v-text="edit.id"></div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="edit-name" class="col-form-label col-form-label-sm">Name</label>
                </div>
                <div class="col-sm-9">
                    <input type="checkbox" id="edit-name" name="name" class="form-control form-control-sm" v-model="edit.name">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="edit-title" class="col-form-label col-form-label-sm">Title</label>
                </div>
                <div class="col-sm-9">
                    <input type="checkbox" id="edit-title" name="title" class="form-control form-control-sm" v-model="edit.title">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="edit-price" class="col-form-label col-form-label-sm">Price</label>
                </div>
                <div class="col-sm-9">
                    <input type="checkbox" id="edit-price" name="price" class="form-control form-control-sm" v-model="edit.price">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="edit-manual" class="col-form-label col-form-label-sm">Manual</label>
                </div>
                <div class="col-sm-9">
                    <input type="checkbox" id="edit-manual" name="manual" class="form-control form-control-sm" v-model="edit.manual">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="edit-image" class="col-form-label col-form-label-sm">Image</label>
                </div>
                <div class="col-sm-9">
                    <input type="checkbox" id="edit-image" name="image" class="form-control form-control-sm" v-model="edit.image">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="edit-event_start" class="col-form-label col-form-label-sm">Event Start</label>
                </div>
                <div class="col-sm-9">
                    <input type="checkbox" id="edit-event_start" name="event_start" class="form-control form-control-sm" v-model="edit.event_start">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="edit-event_end" class="col-form-label col-form-label-sm">Event End</label>
                </div>
                <div class="col-sm-9">
                    <input type="checkbox" id="edit-event_end" name="event_end" class="form-control form-control-sm" v-model="edit.event_end">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="edit-description" class="col-form-label col-form-label-sm">Description</label>
                </div>
                <div class="col-sm-9">
                    <input type="checkbox" id="edit-description" name="description" class="form-control form-control-sm" v-model="edit.description">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="edit-spec" class="col-form-label col-form-label-sm">Spec</label>
                </div>
                <div class="col-sm-9">
                    <input type="checkbox" id="edit-spec" name="spec" class="form-control form-control-sm" v-model="edit.spec">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="edit-status" class="col-form-label col-form-label-sm">Status</label>
                </div>
                <div class="col-sm-9">
                    <input type="checkbox" id="edit-status" name="status" class="form-control form-control-sm" v-model="edit.status">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="edit-created_at" class="col-form-label col-form-label-sm">Created At</label>
                </div>
                <div class="col-sm-9">
                    <input type="checkbox" id="edit-created_at" name="created_at" class="form-control form-control-sm" v-model="edit.created_at">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="edit-updated_at" class="col-form-label col-form-label-sm">Updated At</label>
                </div>
                <div class="col-sm-9">
                    <input type="checkbox" id="edit-updated_at" name="updated_at" class="form-control form-control-sm" v-model="edit.updated_at">
                </div>
            </div>

        </div>
        <div class="card-footer">
            <a href="javascript:;" class="text-secondary mr-4 btn-offcanvas-close">Close</a>
            <a href="javascript:;" class="text-primary mr-4" @click="edit_onSubmit('edit')">Save</a>
        </div>
    </div>
</div>