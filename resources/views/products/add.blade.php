<div class="off-canvas off-canvas-right off-canvas-effect" id="offcanvas-add">
    <div class="card d-flex flex-column h-100">
        <div class="card-header">
            Add
        </div>
        <div class="card-body align-self-stretch">
            <nav>
                <div class="nav nav-tabs d-flex flex-nowrap">
                    <a class="nav-item nav-link text-nowrap active" data-toggle="tab" href="#navtab-add-tab1">General</a>
                    <a class="nav-item nav-link text-nowrap" data-toggle="tab" href="#navtab-add-tab2">Files</a>
                    <a class="nav-item nav-link text-nowrap" data-toggle="tab" href="#navtab-add-tab3">Event Date</a>
                    <a class="nav-item nav-link text-nowrap" data-toggle="tab" href="#navtab-add-tab4">Description</a>
                    <a class="nav-item nav-link text-nowrap" data-toggle="tab" href="#navtab-add-tab5">Spec</a>
                </div>
            </nav>

            <div class="tab-content">
                <div class="tab-pane pt-2 show active" id="navtab-add-tab1">
                    <div class="form-group row">
                        <div class="col-sm-3">
                            <label class="col-form-label col-form-label-sm" for="add-name">Name</label>
                        </div>
                        <div class="col-sm-9">
                            <input class="form-control form-control-sm" id="add-name" name="name" data-vv-as="Name" data-vv-scope="add" type="text" :class="{'is-invalid': errors.has('add.name')}"
                                v-validate="'required|max:255'" v-model="add.name" @focus="$validator.errors.removeById('res-add-name')">
                            <div class="invalid-feedback" v-text="errors.first('add.name')"></div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-3">
                            <label class="col-form-label col-form-label-sm" for="add-title">Title</label>
                        </div>
                        <div class="col-sm-9">
                            <input class="form-control form-control-sm" id="add-title" name="title" data-vv-as="Title" data-vv-scope="add" type="text"
                                :class="{'is-invalid': errors.has('add.title')}" v-validate="'required|max:255'" v-model="add.title"
                                @focus="$validator.errors.removeById('res-add-title')">
                            <div class="invalid-feedback" v-text="errors.first('add.title')"></div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-3">
                            <label class="col-form-label col-form-label-sm" for="add-price">Price</label>
                        </div>
                        <div class="col-sm-9">
                            <input class="form-control form-control-sm" id="add-price" name="price" data-vv-as="Price" data-vv-scope="add" type="number"
                                step="0.01" :class="{'is-invalid': errors.has('add.price')}" v-validate="'required|min_value:0'"
                                v-model="add.price" @focus="$validator.errors.removeById('res-add-price')">
                            <div class="invalid-feedback" v-text="errors.first('add.price')"></div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-3">
                            <label class="col-form-label col-form-label-sm" for="add-status">Status</label>
                        </div>
                        <div class="col-sm-9">
                            <select class="form-control form-control-sm" v-model="add.status">
                                <option value="0">Off</option>
                                <option value="1">On</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="tab-pane pt-2" id="navtab-add-tab2">
                    <div class="form-group row">
                        <div class="col-sm-3">
                            <label class="col-form-label col-form-label-sm" for="add-image">Image (single)</label>
                        </div>
                        <div class="col-sm-9">
                            <input class="form-control-file" id="add-image" name="image" data-vv-scope="add" type="file" v-validate="'image'" :class="{'is-invalid': errors.has('add.image')}"
                                @focus="$validator.errors.removeById('res-add-image')" ref="add-image" @change="processFile($event, ['add', 'image'])">
                            <div class="invalid-feedback" v-text="errors.first('add.image')"></div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-3">
                            <label class="col-form-label col-form-label-sm" for="add-images">Images (multiple)</label>
                        </div>
                        <div class="col-sm-9">
                            <input class="form-control-file" id="add-images" name="images" data-vv-scope="add" type="file" multiple v-validate="'image|length:0,6'"
                                :class="{'is-invalid': errors.has('add.images')}" @focus="$validator.errors.removeById('res-add-images')"
                                ref="add-images" @change="processFile($event, ['add', 'images'], true)">
                            <div class="invalid-feedback" v-text="errors.first('add.images')"></div>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-sm-3">
                            <label class="col-form-label col-form-label-sm" for="add-manual">Manual (pdf)</label>
                        </div>
                        <div class="col-sm-9">
                            <input class="form-control-file" id="add-manual" name="manual" data-vv-scope="add" type="file" v-validate="'mimes:application/pdf'"
                                :class="{'is-invalid': errors.has('add.manual')}" @focus="$validator.errors.removeById('res-add-manual')"
                                ref="add-manual" @change="processFile($event, ['add', 'manual'])">
                            <div class="invalid-feedback" v-text="errors.first('add.manual')"></div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane pt-2" id="navtab-add-tab3">
                    <div class="form-group row">
                        <div class="col-sm-3">
                            <label class="col-form-label col-form-label-sm" for="add-event_start">Event Start</label>
                        </div>
                        <div class="col-sm-9">
                            <input class="form-control form-control-sm" id="add-event_start" name="event_start" data-vv-as="Event Start" data-vv-scope="add"
                                type="text" :class="{'is-invalid': errors.has('add.event_start')}" v-validate="'required|date_format:YYYY-MM-DD HH:mm:ss'"
                                ref="add-event_start" v-model="add.event_start" @focus="$validator.errors.removeById('res-add-event_start')">
                            <div class="invalid-feedback" v-text="errors.first('add.event_start')"></div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-3">
                            <label class="col-form-label col-form-label-sm" for="add-event_end">Event End</label>
                        </div>
                        <div class="col-sm-9">
                            <input class="form-control form-control-sm" id="add-event_end" name="event_end" data-vv-as="Event End" data-vv-scope="add"
                                type="text" :class="{'is-invalid': errors.has('add.event_end')}" v-validate="'required|date_format:YYYY-MM-DD HH:mm:ss|after:$add-event_start'"
                                ref="add-event_end" v-model="add.event_end" @focus="$validator.errors.removeById('res-add-event_end')">
                            <div class="invalid-feedback" v-text="errors.first('add.event_end')"></div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane pt-2" id="navtab-add-tab4">
                    <label class="col-form-label col-form-label-sm" for="add-description">Description</label>
                    <textarea id="add-description" name="description" v-model="add.description"></textarea>
                </div>

                <div class="tab-pane pt-2" id="navtab-add-tab5">
                    <label class="col-form-label col-form-label-sm" for="add-spec">Spec</label>
                    <div id="add-spec"></div>
                </div>

            </div>

        </div>
        <div class="card-footer">
            <a class="text-secondary mr-4 btn-offcanvas-close" href="javascript:;">Close</a>
            <a class="text-primary mr-4" href="javascript:;" @click="add_onSubmit('add')">Save</a>
        </div>
    </div>
</div>