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
                    <input type="text" id="add-name" name="name" data-vv-as="Name" data-vv-scope="add" class="form-control form-control-sm" :class="{'is-invalid': errors.has('add.name')}"
                        v-validate="'required'" v-model="add.name" @focus="$validator.errors.removeById('res-add-name')">
                    <div class="invalid-feedback" v-text="errors.first('add.name')"></div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="add-title" class="col-form-label col-form-label-sm">Title</label>
                </div>
                <div class="col-sm-9">
                    <input type="text" id="add-title" name="title" data-vv-as="Title" data-vv-scope="add" class="form-control form-control-sm"
                        :class="{'is-invalid': errors.has('add.title')}" v-validate="'required'" v-model="add.title" @focus="$validator.errors.removeById('res-add-title')">
                    <div class="invalid-feedback" v-text="errors.first('add.title')"></div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="add-price" class="col-form-label col-form-label-sm">Price</label>
                </div>
                <div class="col-sm-9">
                    <input type="text" id="add-price" name="price" data-vv-as="Price" data-vv-scope="add" class="form-control form-control-sm"
                        :class="{'is-invalid': errors.has('add.price')}" v-validate="'required'" v-model="add.price" @focus="$validator.errors.removeById('res-add-price')">
                    <div class="invalid-feedback" v-text="errors.first('add.price')"></div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="add-manual" class="col-form-label col-form-label-sm">Manual</label>
                </div>
                <div class="col-sm-9">
                    <input type="text" id="add-manual" name="manual" data-vv-as="Manual" data-vv-scope="add" class="form-control form-control-sm"
                        :class="{'is-invalid': errors.has('add.manual')}" v-validate="'required'" v-model="add.manual" @focus="$validator.errors.removeById('res-add-manual')">
                    <div class="invalid-feedback" v-text="errors.first('add.manual')"></div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="add-image" class="col-form-label col-form-label-sm">Image</label>
                </div>
                <div class="col-sm-9">
                    <input type="text" id="add-image" name="image" data-vv-as="Image" data-vv-scope="add" class="form-control form-control-sm"
                        :class="{'is-invalid': errors.has('add.image')}" v-validate="'required'" v-model="add.image" @focus="$validator.errors.removeById('res-add-image')">
                    <div class="invalid-feedback" v-text="errors.first('add.image')"></div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="add-event_start" class="col-form-label col-form-label-sm">Event Start</label>
                </div>
                <div class="col-sm-9">
                    <input type="text" id="add-event_start" name="event_start" data-vv-as="Event Start" data-vv-scope="add" class="form-control form-control-sm"
                        :class="{'is-invalid': errors.has('add.event_start')}" v-validate="'required'" v-model="add.event_start"
                        @focus="$validator.errors.removeById('res-add-event_start')">
                    <div class="invalid-feedback" v-text="errors.first('add.event_start')"></div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="add-event_end" class="col-form-label col-form-label-sm">Event End</label>
                </div>
                <div class="col-sm-9">
                    <input type="text" id="add-event_end" name="event_end" data-vv-as="Event End" data-vv-scope="add" class="form-control form-control-sm"
                        :class="{'is-invalid': errors.has('add.event_end')}" v-validate="'required'" v-model="add.event_end"
                        @focus="$validator.errors.removeById('res-add-event_end')">
                    <div class="invalid-feedback" v-text="errors.first('add.event_end')"></div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="add-description" class="col-form-label col-form-label-sm">Description</label>
                </div>
                <div class="col-sm-9">
                    <input type="text" id="add-description" name="description" data-vv-as="Description" data-vv-scope="add" class="form-control form-control-sm"
                        :class="{'is-invalid': errors.has('add.description')}" v-validate="'required'" v-model="add.description"
                        @focus="$validator.errors.removeById('res-add-description')">
                    <div class="invalid-feedback" v-text="errors.first('add.description')"></div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="add-spec" class="col-form-label col-form-label-sm">Spec</label>
                </div>
                <div class="col-sm-9">
                    <input type="text" id="add-spec" name="spec" data-vv-as="Spec" data-vv-scope="add" class="form-control form-control-sm" :class="{'is-invalid': errors.has('add.spec')}"
                        v-validate="'required'" v-model="add.spec" @focus="$validator.errors.removeById('res-add-spec')">
                    <div class="invalid-feedback" v-text="errors.first('add.spec')"></div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="add-status" class="col-form-label col-form-label-sm">Status</label>
                </div>
                <div class="col-sm-9">
                    <input type="text" id="add-status" name="status" data-vv-as="Status" data-vv-scope="add" class="form-control form-control-sm"
                        :class="{'is-invalid': errors.has('add.status')}" v-validate="'required'" v-model="add.status" @focus="$validator.errors.removeById('res-add-status')">
                    <div class="invalid-feedback" v-text="errors.first('add.status')"></div>
                </div>
            </div>

        </div>
        <div class="card-footer">
            <a href="javascript:;" class="text-secondary mr-4 btn-offcanvas-close">Close</a>
            <a href="javascript:;" class="text-primary mr-4" @click="add_onSubmit('add')">Save</a>
        </div>
    </div>
</div>