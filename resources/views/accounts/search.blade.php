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
                        <input type="text" class="form-control form-control-sm" id="search-id" placeholder="" v-model="search.id.value">
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
                    <label for="search-name" class="col-form-label col-form-label-sm">Name</label>
                </div>
                <div class="col-sm-9">
                    <div class="input-group">
                        <input type="text" class="form-control form-control-sm" id="search-name" placeholder="" v-model="search.name.value">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" v-model="search.name.regex">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="search-email" class="col-form-label col-form-label-sm">Email</label>
                </div>
                <div class="col-sm-9">
                    <div class="input-group">
                        <input type="text" class="form-control form-control-sm" id="search-email" placeholder="" v-model="search.email.value">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" v-model="search.email.regex">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="search-status" class="col-form-label col-form-label-sm">Status</label>
                </div>
                <div class="col-sm-9">
                    <div class="input-group">
                        <select class="form-control form-control-sm" v-model="search.status.value">
                            <option disabled value="">Not selected</option>
                            <option value="0">Off</option>
                            <option value="1">On</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="search-created_at" class="col-form-label col-form-label-sm">Created At</label>
                </div>
                <div class="col-sm-9">
                    <div class="input-group">
                        <input type="text" class="form-control form-control-sm" id="search-created_at" placeholder="" v-model="search.created_at.value">
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
                        <input type="text" class="form-control form-control-sm" id="search-updated_at" placeholder="" v-model="search.updated_at.value">
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