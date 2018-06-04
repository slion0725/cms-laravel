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
                    <label for="search-id" class="col-form-label col-form-label-sm">ID</label>
                </div>
                <div class="col-sm-9">
                    <div class="input-group">
                        <input type="text" class="form-control form-control-sm" id="search-id" v-model="search.id.value">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" v-model="search.id.regex">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="search-log_name" class="col-form-label col-form-label-sm">Log Name</label>
                </div>
                <div class="col-sm-9">
                    <div class="input-group">
                        <input type="text" class="form-control form-control-sm" id="search-log_name" v-model="search.log_name.value">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" v-model="search.log_name.regex">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="search-description" class="col-form-label col-form-label-sm">Description</label>
                </div>
                <div class="col-sm-9">
                    <div class="input-group">
                        <input type="text" class="form-control form-control-sm" id="search-description" v-model="search.description.value">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" v-model="search.description.regex">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="search-subject_id" class="col-form-label col-form-label-sm">Subject ID</label>
                </div>
                <div class="col-sm-9">
                    <div class="input-group">
                        <input type="text" class="form-control form-control-sm" id="search-subject_id" v-model="search.subject_id.value">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" v-model="search.subject_id.regex">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="search-subject_type" class="col-form-label col-form-label-sm">Subject Type</label>
                </div>
                <div class="col-sm-9">
                    <div class="input-group">
                        <input type="text" class="form-control form-control-sm" id="search-subject_type" v-model="search.subject_type.value">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" v-model="search.subject_type.regex">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="search-causer_id" class="col-form-label col-form-label-sm">Causer ID</label>
                </div>
                <div class="col-sm-9">
                    <div class="input-group">
                        <input type="text" class="form-control form-control-sm" id="search-causer_id" v-model="search.causer_id.value">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" v-model="search.causer_id.regex">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="search-causer_type" class="col-form-label col-form-label-sm">Causer Type</label>
                </div>
                <div class="col-sm-9">
                    <div class="input-group">
                        <input type="text" class="form-control form-control-sm" id="search-causer_type" v-model="search.causer_type.value">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" v-model="search.causer_type.regex">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="search-properties" class="col-form-label col-form-label-sm">Properties</label>
                </div>
                <div class="col-sm-9">
                    <div class="input-group">
                        <input type="text" class="form-control form-control-sm" id="search-properties" v-model="search.properties.value">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" v-model="search.properties.regex">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="search-created_at" class="col-form-label col-form-label-sm">Created At</label>
                </div>
                <div class="col-sm-9">
                    <div class="input-group">
                        <input type="text" class="form-control form-control-sm" id="search-created_at" v-model="search.created_at.value">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" v-model="search.created_at.regex">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="search-updated_at" class="col-form-label col-form-label-sm">Updated At</label>
                </div>
                <div class="col-sm-9">
                    <div class="input-group">
                        <input type="text" class="form-control form-control-sm" id="search-updated_at" v-model="search.updated_at.value">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" v-model="search.updated_at.regex">
                            </div>
                        </div>
                    </div>
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