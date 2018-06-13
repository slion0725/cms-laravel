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
                    <label for="edit-id" class="col-form-label col-form-label-sm">ID</label>
                </div>
                <div class="col-sm-9">
                    <input type="text" id="edit-id" name="id" data-vv-as="ID" data-vv-scope="edit" class="form-control form-control-sm" :class="{'is-invalid': errors.has('edit.id')}"
                        v-validate="'required'" v-model="edit.id" @focus="$validator.errors.removeById('res-edit-id')">
                    <div class="invalid-feedback" v-text="errors.first('edit.id')"></div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="edit-name" class="col-form-label col-form-label-sm">Name</label>
                </div>
                <div class="col-sm-9">
                    <input type="text" id="edit-name" name="name" data-vv-as="Name" data-vv-scope="edit" class="form-control form-control-sm"
                        :class="{'is-invalid': errors.has('edit.name')}" v-validate="'required'" v-model="edit.name" @focus="$validator.errors.removeById('res-edit-name')">
                    <div class="invalid-feedback" v-text="errors.first('edit.name')"></div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="edit-title" class="col-form-label col-form-label-sm">Title</label>
                </div>
                <div class="col-sm-9">
                    <input type="text" id="edit-title" name="title" data-vv-as="Title" data-vv-scope="edit" class="form-control form-control-sm"
                        :class="{'is-invalid': errors.has('edit.title')}" v-validate="'required'" v-model="edit.title" @focus="$validator.errors.removeById('res-edit-title')">
                    <div class="invalid-feedback" v-text="errors.first('edit.title')"></div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="edit-price" class="col-form-label col-form-label-sm">Price</label>
                </div>
                <div class="col-sm-9">
                    <input type="text" id="edit-price" name="price" data-vv-as="Price" data-vv-scope="edit" class="form-control form-control-sm"
                        :class="{'is-invalid': errors.has('edit.price')}" v-validate="'required'" v-model="edit.price" @focus="$validator.errors.removeById('res-edit-price')">
                    <div class="invalid-feedback" v-text="errors.first('edit.price')"></div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="edit-manual" class="col-form-label col-form-label-sm">Manual</label>
                </div>
                <div class="col-sm-9">
                    <input type="text" id="edit-manual" name="manual" data-vv-as="Manual" data-vv-scope="edit" class="form-control form-control-sm"
                        :class="{'is-invalid': errors.has('edit.manual')}" v-validate="'required'" v-model="edit.manual" @focus="$validator.errors.removeById('res-edit-manual')">
                    <div class="invalid-feedback" v-text="errors.first('edit.manual')"></div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="edit-image" class="col-form-label col-form-label-sm">Image</label>
                </div>
                <div class="col-sm-9">
                    <input type="text" id="edit-image" name="image" data-vv-as="Image" data-vv-scope="edit" class="form-control form-control-sm"
                        :class="{'is-invalid': errors.has('edit.image')}" v-validate="'required'" v-model="edit.image" @focus="$validator.errors.removeById('res-edit-image')">
                    <div class="invalid-feedback" v-text="errors.first('edit.image')"></div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="edit-event_start" class="col-form-label col-form-label-sm">Event Start</label>
                </div>
                <div class="col-sm-9">
                    <input type="text" id="edit-event_start" name="event_start" data-vv-as="Event Start" data-vv-scope="edit" class="form-control form-control-sm"
                        :class="{'is-invalid': errors.has('edit.event_start')}" v-validate="'required'" v-model="edit.event_start"
                        @focus="$validator.errors.removeById('res-edit-event_start')">
                    <div class="invalid-feedback" v-text="errors.first('edit.event_start')"></div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="edit-event_end" class="col-form-label col-form-label-sm">Event End</label>
                </div>
                <div class="col-sm-9">
                    <input type="text" id="edit-event_end" name="event_end" data-vv-as="Event End" data-vv-scope="edit" class="form-control form-control-sm"
                        :class="{'is-invalid': errors.has('edit.event_end')}" v-validate="'required'" v-model="edit.event_end"
                        @focus="$validator.errors.removeById('res-edit-event_end')">
                    <div class="invalid-feedback" v-text="errors.first('edit.event_end')"></div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="edit-description" class="col-form-label col-form-label-sm">Description</label>
                </div>
                <div class="col-sm-9">
                    <input type="text" id="edit-description" name="description" data-vv-as="Description" data-vv-scope="edit" class="form-control form-control-sm"
                        :class="{'is-invalid': errors.has('edit.description')}" v-validate="'required'" v-model="edit.description"
                        @focus="$validator.errors.removeById('res-edit-description')">
                    <div class="invalid-feedback" v-text="errors.first('edit.description')"></div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="edit-spec" class="col-form-label col-form-label-sm">Spec</label>
                </div>
                <div class="col-sm-9">
                    <input type="text" id="edit-spec" name="spec" data-vv-as="Spec" data-vv-scope="edit" class="form-control form-control-sm"
                        :class="{'is-invalid': errors.has('edit.spec')}" v-validate="'required'" v-model="edit.spec" @focus="$validator.errors.removeById('res-edit-spec')">
                    <div class="invalid-feedback" v-text="errors.first('edit.spec')"></div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="edit-status" class="col-form-label col-form-label-sm">Status</label>
                </div>
                <div class="col-sm-9">
                    <input type="text" id="edit-status" name="status" data-vv-as="Status" data-vv-scope="edit" class="form-control form-control-sm"
                        :class="{'is-invalid': errors.has('edit.status')}" v-validate="'required'" v-model="edit.status" @focus="$validator.errors.removeById('res-edit-status')">
                    <div class="invalid-feedback" v-text="errors.first('edit.status')"></div>
                </div>
            </div>

        </div>
        <div class="card-footer">
            <a href="javascript:;" class="text-secondary mr-4 btn-offcanvas-close">Close</a>
            <a href="javascript:;" class="text-primary mr-4" @click="edit_onSubmit('edit')">Save</a>
        </div>
    </div>
</div>