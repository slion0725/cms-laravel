<div class="off-canvas off-canvas-right off-canvas-effect" id="offcanvas-search">
    <div class="card d-flex flex-column h-100">
        <div class="card-header">
            Search
        </div>
        <div class="card-body align-self-stretch">
            <div class="form-group row">
                <div class="col-sm-3">
                    <label class="col-form-label col-form-label-sm" for="search-all">All</label>
                </div>
                <div class="col-sm-9">
                    <div class="input-group">
                        <input class="form-control form-control-sm" id="search-all" type="text" v-model="search.all">
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label class="col-form-label col-form-label-sm" for="search-id">ID</label>
                </div>
                <div class="col-sm-9">
                    <div class="input-group">
                        <input class="form-control form-control-sm" id="search-id" type="text" v-model="search.id.value">
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
                    <label class="col-form-label col-form-label-sm" for="search-name">Name</label>
                </div>
                <div class="col-sm-9">
                    <div class="input-group">
                        <input class="form-control form-control-sm" id="search-name" type="text" v-model="search.name.value">
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
                    <label class="col-form-label col-form-label-sm" for="search-title">Title</label>
                </div>
                <div class="col-sm-9">
                    <div class="input-group">
                        <input class="form-control form-control-sm" id="search-title" type="text" v-model="search.title.value">
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
                    <label class="col-form-label col-form-label-sm" for="search-price">Price</label>
                </div>
                <div class="col-sm-9">
                    <div class="input-group">
                        <input class="form-control form-control-sm" id="search-price" type="text" v-model="search.price.value">
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
                    <label class="col-form-label col-form-label-sm" for="search-event_start">Event Start</label>
                </div>
                <div class="col-sm-9">
                    <div class="input-group">
                        <input class="form-control form-control-sm" id="search-event_start" type="text" v-model="search.event_start.value">
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
                    <label class="col-form-label col-form-label-sm" for="search-event_end">Event End</label>
                </div>
                <div class="col-sm-9">
                    <div class="input-group">
                        <input class="form-control form-control-sm" id="search-event_end" type="text" v-model="search.event_end.value">
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
                    <label class="col-form-label col-form-label-sm" for="search-status">Status</label>
                </div>
                <div class="col-sm-9">
                    <div class="input-group">
                        <input class="form-control form-control-sm" id="search-status" type="text" v-model="search.status.value">
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
                    <label class="col-form-label col-form-label-sm" for="search-created_at">Created At</label>
                </div>
                <div class="col-sm-9">
                    <div class="input-group">
                        <input class="form-control form-control-sm" id="search-created_at" type="text" v-model="search.created_at.value">
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
                    <label class="col-form-label col-form-label-sm" for="search-updated_at">Updated At</label>
                </div>
                <div class="col-sm-9">
                    <div class="input-group">
                        <input class="form-control form-control-sm" id="search-updated_at" type="text" v-model="search.updated_at.value">
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
            <a class="text-secondary mr-4 btn-offcanvas-close" href="javascript:;">Close</a>
            <a class="text-primary mr-4" href="javascript:;" @click="search_emit(search)">Search</a>
            <a class="text-info mr-4" href="javascript:;" @click="search_clear(search)">Clear</a>
        </div>
    </div>
</div>