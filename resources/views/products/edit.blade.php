<div class="off-canvas off-canvas-right off-canvas-effect" id="offcanvas-edit">
    <div class="card d-flex flex-column h-100">
        <div class="card-header">
            Edit
        </div>
        <div class="card-body align-self-stretch">
            <nav>
                <div class="nav nav-tabs d-flex flex-nowrap">
                    <a class="nav-item nav-link text-nowrap active" data-toggle="tab" href="#navtab-edit-tab1">General</a>
                    <a class="nav-item nav-link text-nowrap" data-toggle="tab" href="#navtab-edit-tab2">Files</a>
                    <a class="nav-item nav-link text-nowrap" data-toggle="tab" href="#navtab-edit-tab3">Event Date</a>
                    <a class="nav-item nav-link text-nowrap" data-toggle="tab" href="#navtab-edit-tab4">Description</a>
                    <a class="nav-item nav-link text-nowrap" data-toggle="tab" href="#navtab-edit-tab5">Spec</a>
                </div>
            </nav>

            <div class="tab-content">
                <div class="tab-pane pt-2 show active" id="navtab-edit-tab1">
                    <div class="form-group row">
                        <div class="col-sm-3">
                            <label class="col-form-label col-form-label-sm" for="edit-name">Name</label>
                        </div>
                        <div class="col-sm-9">
                            <input class="form-control form-control-sm" id="edit-name" name="name" data-vv-as="Name" data-vv-scope="edit" type="text" :class="{'is-invalid': errors.has('edit.name')}"
                                v-validate="'required|max:255'" v-model="edit.name" @focus="$validator.errors.removeById('res-edit-name')">
                            <div class="invalid-feedback" v-text="errors.first('edit.name')"></div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-3">
                            <label class="col-form-label col-form-label-sm" for="edit-title">Title</label>
                        </div>
                        <div class="col-sm-9">
                            <input class="form-control form-control-sm" id="edit-title" name="title" data-vv-as="Title" data-vv-scope="edit" type="text"
                                :class="{'is-invalid': errors.has('edit.title')}" v-validate="'required|max:255'" v-model="edit.title"
                                @focus="$validator.errors.removeById('res-edit-title')">
                            <div class="invalid-feedback" v-text="errors.first('edit.title')"></div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-3">
                            <label class="col-form-label col-form-label-sm" for="edit-price">Price</label>
                        </div>
                        <div class="col-sm-9">
                            <input class="form-control form-control-sm" id="edit-price" name="price" data-vv-as="Price" data-vv-scope="edit" type="number"
                                step="0.01" :class="{'is-invalid': errors.has('edit.price')}" v-validate="'required|min_value:0'"
                                v-model="edit.price" @focus="$validator.errors.removeById('res-edit-price')">
                            <div class="invalid-feedback" v-text="errors.first('edit.price')"></div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-3">
                            <label class="col-form-label col-form-label-sm" for="edit-status">Status</label>
                        </div>
                        <div class="col-sm-9">
                            <select class="form-control form-control-sm" v-model="edit.status">
                                <option value="0">Off</option>
                                <option value="1">On</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="tab-pane pt-2" id="navtab-edit-tab2">
                    <div class="form-group row">
                        <div class="col-sm-3">
                            <label class="col-form-label col-form-label-sm" for="edit-image">Image (single)</label>
                        </div>
                        <div class="col-sm-9">
                            <input class="form-control-file" id="edit-image" name="image" data-vv-scope="edit" type="file" v-validate="'image'" :class="{'is-invalid': errors.has('edit.image')}"
                                @focus="$validator.errors.removeById('res-edit-image')" ref="edit-image" @change="processFile($event, ['edit', 'image'])">
                            <div class="invalid-feedback" v-text="errors.first('edit.image')"></div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-3">
                            <label class="col-form-label col-form-label-sm" for="edit-images">Images (multiple)</label>
                        </div>
                        <div class="col-sm-9">
                            <input class="form-control-file" id="edit-images" name="images" data-vv-scope="edit" type="file" multiple v-validate="'image|length:0,6'"
                                :class="{'is-invalid': errors.has('edit.images')}" @focus="$validator.errors.removeById('res-edit-images')"
                                ref="edit-images" @change="processFile($event, ['edit', 'images'], true)">
                            <div class="invalid-feedback" v-text="errors.first('edit.images')"></div>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-sm-3">
                            <label class="col-form-label col-form-label-sm" for="edit-manual">Manual (pdf)</label>
                        </div>
                        <div class="col-sm-9">
                            <input class="form-control-file" id="edit-manual" name="manual" data-vv-scope="edit" type="file" v-validate="'mimes:application/pdf'"
                                :class="{'is-invalid': errors.has('edit.manual')}" @focus="$validator.errors.removeById('res-edit-manual')"
                                ref="edit-manual" @change="processFile($event, ['edit', 'manual'])">
                            <div class="invalid-feedback" v-text="errors.first('edit.manual')"></div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane pt-2" id="navtab-edit-tab3">
                    <div class="form-group row">
                        <div class="col-sm-3">
                            <label class="col-form-label col-form-label-sm" for="edit-event_start">Event Start</label>
                        </div>
                        <div class="col-sm-9">
                            <input class="form-control form-control-sm" id="edit-event_start" name="event_start" data-vv-as="Event Start" data-vv-scope="edit"
                                type="text" :class="{'is-invalid': errors.has('edit.event_start')}" v-validate="'required|date_format:YYYY-MM-DD HH:mm:ss'"
                                ref="edit-event_start" v-model="edit.event_start" @focus="$validator.errors.removeById('res-edit-event_start')">
                            <div class="invalid-feedback" v-text="errors.first('edit.event_start')"></div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-3">
                            <label class="col-form-label col-form-label-sm" for="edit-event_end">Event End</label>
                        </div>
                        <div class="col-sm-9">
                            <input class="form-control form-control-sm" id="edit-event_end" name="event_end" data-vv-as="Event End" data-vv-scope="edit"
                                type="text" :class="{'is-invalid': errors.has('edit.event_end')}" v-validate="'required|date_format:YYYY-MM-DD HH:mm:ss|after:$edit-event_start'"
                                ref="edit-event_end" v-model="edit.event_end" @focus="$validator.errors.removeById('res-edit-event_end')">
                            <div class="invalid-feedback" v-text="errors.first('edit.event_end')"></div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane pt-2" id="navtab-edit-tab4">
                    <label class="col-form-label col-form-label-sm" for="edit-description">Description</label>
                    <textarea id="edit-description" name="description" v-model="edit.description"></textarea>
                </div>

                <div class="tab-pane pt-2" id="navtab-edit-tab5">
                    <label class="col-form-label col-form-label-sm" for="edit-spec">Spec</label>
                    <div id="edit-spec"></div>
                </div>

            </div>

        </div>
        <div class="card-footer">
            <a class="text-secondary mr-4 btn-offcanvas-close" href="javascript:;">Close</a>
            <a class="text-primary mr-4" href="javascript:;" @click="edit_onSubmit('edit')">Save</a>
        </div>
    </div>
</div>