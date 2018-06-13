<div class="off-canvas off-canvas-right off-canvas-effect" id="offcanvas-search">
    <div class="card d-flex flex-column h-100">
        <div class="card-header">
            Search
        </div>
        <div class="card-body align-self-stretch">
            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="search-all" class="col-form-label col-form-label-sm">All</label>
                </div>
                <div class="col-sm-9">
                    <div class="input-group">
                        <input type="text" class="form-control form-control-sm" id="search-all" placeholder="" v-model="search.all">
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="__input__-id" class="col-form-label col-form-label-sm">ID</label>
                </div>
                <div class="col-sm-9">
                    <input type="text" id="__input__-id" name="id" data-vv-as="ID" data-vv-scope="__input__" class="form-control form-control-sm"
                        :class="{'is-invalid': errors.has('__input__.id')}" v-validate="'required'" v-model="__input__.id" @focus="$validator.errors.removeById('res-__input__-id')">
                    <div class="invalid-feedback" v-text="errors.first('__input__.id')"></div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="__input__-name" class="col-form-label col-form-label-sm">Name</label>
                </div>
                <div class="col-sm-9">
                    <input type="text" id="__input__-name" name="name" data-vv-as="Name" data-vv-scope="__input__" class="form-control form-control-sm"
                        :class="{'is-invalid': errors.has('__input__.name')}" v-validate="'required'" v-model="__input__.name"
                        @focus="$validator.errors.removeById('res-__input__-name')">
                    <div class="invalid-feedback" v-text="errors.first('__input__.name')"></div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="__input__-title" class="col-form-label col-form-label-sm">Title</label>
                </div>
                <div class="col-sm-9">
                    <input type="text" id="__input__-title" name="title" data-vv-as="Title" data-vv-scope="__input__" class="form-control form-control-sm"
                        :class="{'is-invalid': errors.has('__input__.title')}" v-validate="'required'" v-model="__input__.title"
                        @focus="$validator.errors.removeById('res-__input__-title')">
                    <div class="invalid-feedback" v-text="errors.first('__input__.title')"></div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="__input__-price" class="col-form-label col-form-label-sm">Price</label>
                </div>
                <div class="col-sm-9">
                    <input type="text" id="__input__-price" name="price" data-vv-as="Price" data-vv-scope="__input__" class="form-control form-control-sm"
                        :class="{'is-invalid': errors.has('__input__.price')}" v-validate="'required'" v-model="__input__.price"
                        @focus="$validator.errors.removeById('res-__input__-price')">
                    <div class="invalid-feedback" v-text="errors.first('__input__.price')"></div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="__input__-manual" class="col-form-label col-form-label-sm">Manual</label>
                </div>
                <div class="col-sm-9">
                    <input type="text" id="__input__-manual" name="manual" data-vv-as="Manual" data-vv-scope="__input__" class="form-control form-control-sm"
                        :class="{'is-invalid': errors.has('__input__.manual')}" v-validate="'required'" v-model="__input__.manual"
                        @focus="$validator.errors.removeById('res-__input__-manual')">
                    <div class="invalid-feedback" v-text="errors.first('__input__.manual')"></div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="__input__-image" class="col-form-label col-form-label-sm">Image</label>
                </div>
                <div class="col-sm-9">
                    <input type="text" id="__input__-image" name="image" data-vv-as="Image" data-vv-scope="__input__" class="form-control form-control-sm"
                        :class="{'is-invalid': errors.has('__input__.image')}" v-validate="'required'" v-model="__input__.image"
                        @focus="$validator.errors.removeById('res-__input__-image')">
                    <div class="invalid-feedback" v-text="errors.first('__input__.image')"></div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="__input__-event_start" class="col-form-label col-form-label-sm">Event Start</label>
                </div>
                <div class="col-sm-9">
                    <input type="text" id="__input__-event_start" name="event_start" data-vv-as="Event Start" data-vv-scope="__input__" class="form-control form-control-sm"
                        :class="{'is-invalid': errors.has('__input__.event_start')}" v-validate="'required'" v-model="__input__.event_start"
                        @focus="$validator.errors.removeById('res-__input__-event_start')">
                    <div class="invalid-feedback" v-text="errors.first('__input__.event_start')"></div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="__input__-event_end" class="col-form-label col-form-label-sm">Event End</label>
                </div>
                <div class="col-sm-9">
                    <input type="text" id="__input__-event_end" name="event_end" data-vv-as="Event End" data-vv-scope="__input__" class="form-control form-control-sm"
                        :class="{'is-invalid': errors.has('__input__.event_end')}" v-validate="'required'" v-model="__input__.event_end"
                        @focus="$validator.errors.removeById('res-__input__-event_end')">
                    <div class="invalid-feedback" v-text="errors.first('__input__.event_end')"></div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="__input__-description" class="col-form-label col-form-label-sm">Description</label>
                </div>
                <div class="col-sm-9">
                    <input type="text" id="__input__-description" name="description" data-vv-as="Description" data-vv-scope="__input__" class="form-control form-control-sm"
                        :class="{'is-invalid': errors.has('__input__.description')}" v-validate="'required'" v-model="__input__.description"
                        @focus="$validator.errors.removeById('res-__input__-description')">
                    <div class="invalid-feedback" v-text="errors.first('__input__.description')"></div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="__input__-spec" class="col-form-label col-form-label-sm">Spec</label>
                </div>
                <div class="col-sm-9">
                    <input type="text" id="__input__-spec" name="spec" data-vv-as="Spec" data-vv-scope="__input__" class="form-control form-control-sm"
                        :class="{'is-invalid': errors.has('__input__.spec')}" v-validate="'required'" v-model="__input__.spec"
                        @focus="$validator.errors.removeById('res-__input__-spec')">
                    <div class="invalid-feedback" v-text="errors.first('__input__.spec')"></div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="__input__-status" class="col-form-label col-form-label-sm">Status</label>
                </div>
                <div class="col-sm-9">
                    <input type="text" id="__input__-status" name="status" data-vv-as="Status" data-vv-scope="__input__" class="form-control form-control-sm"
                        :class="{'is-invalid': errors.has('__input__.status')}" v-validate="'required'" v-model="__input__.status"
                        @focus="$validator.errors.removeById('res-__input__-status')">
                    <div class="invalid-feedback" v-text="errors.first('__input__.status')"></div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="__input__-created_at" class="col-form-label col-form-label-sm">Created At</label>
                </div>
                <div class="col-sm-9">
                    <input type="text" id="__input__-created_at" name="created_at" data-vv-as="Created At" data-vv-scope="__input__" class="form-control form-control-sm"
                        :class="{'is-invalid': errors.has('__input__.created_at')}" v-validate="'required'" v-model="__input__.created_at"
                        @focus="$validator.errors.removeById('res-__input__-created_at')">
                    <div class="invalid-feedback" v-text="errors.first('__input__.created_at')"></div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="__input__-updated_at" class="col-form-label col-form-label-sm">Updated At</label>
                </div>
                <div class="col-sm-9">
                    <input type="text" id="__input__-updated_at" name="updated_at" data-vv-as="Updated At" data-vv-scope="__input__" class="form-control form-control-sm"
                        :class="{'is-invalid': errors.has('__input__.updated_at')}" v-validate="'required'" v-model="__input__.updated_at"
                        @focus="$validator.errors.removeById('res-__input__-updated_at')">
                    <div class="invalid-feedback" v-text="errors.first('__input__.updated_at')"></div>
                </div>
            </div>

        </div>
        <div class="card-footer">
            <a href="javascript:;" class="text-secondary mr-4 btn-offcanvas-close">Close</a>
            <a href="javascript:;" class="text-primary mr-4" @click="search_emit(search)">Search</a>
            <a href="javascript:;" class="text-info mr-4" @click="search_clear(search)">Clear</a>
        </div>
    </div>
</div>