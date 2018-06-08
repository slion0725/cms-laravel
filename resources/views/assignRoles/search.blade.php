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
                        <input type="text" class="form-control form-control-sm" id="search-all" v-model="search.all">
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
                    <label for="search-email" class="col-form-label col-form-label-sm">Email</label>
                </div>
                <div class="col-sm-9">
                    <div class="input-group">
                        <input type="text" class="form-control form-control-sm" id="search-email" v-model="search.email.value">
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
        <label for="search-roles" class="col-form-label col-form-label-sm">Roles</label>
    </div>
    <div class="col-sm-9">
        <div class="input-group">
            <input type="text" class="form-control form-control-sm" id="search-roles" v-model="search.roles.value">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <input type="checkbox" v-model="search.roles.regex">
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