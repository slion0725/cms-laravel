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
                    <label for="search-name" class="col-form-label col-form-label-sm">Name</label>
                </div>
                <div class="col-sm-9">
                    <div class="input-group">
                        <input type="text" class="form-control form-control-sm" id="search-name" v-model="search.name.value">
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
                    <label for="search-title" class="col-form-label col-form-label-sm">Title</label>
                </div>
                <div class="col-sm-9">
                    <div class="input-group">
                        <input type="text" class="form-control form-control-sm" id="search-title" v-model="search.title.value">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" v-model="search.title.regex">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="search-price" class="col-form-label col-form-label-sm">Price</label>
                </div>
                <div class="col-sm-9">
                    <div class="input-group">
                        <input type="text" class="form-control form-control-sm" id="search-price" v-model="search.price.value">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" v-model="search.price.regex">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="search-event_start" class="col-form-label col-form-label-sm">Event Start</label>
                </div>
                <div class="col-sm-9">
                    <div class="input-group">
                        <input type="text" class="form-control form-control-sm" id="search-event_start" v-model="search.event_start.value">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" v-model="search.event_start.regex">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="search-event_end" class="col-form-label col-form-label-sm">Event End</label>
                </div>
                <div class="col-sm-9">
                    <div class="input-group">
                        <input type="text" class="form-control form-control-sm" id="search-event_end" v-model="search.event_end.value">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" v-model="search.event_end.regex">
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
                        <input type="text" class="form-control form-control-sm" id="search-status" v-model="search.status.value">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" v-model="search.status.regex">
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