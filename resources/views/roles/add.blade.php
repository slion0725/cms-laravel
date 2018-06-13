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
                    <input type="text" id="add-name" name="name" placeholder="" data-vv-as="Name" data-vv-scope="add" class="form-control form-control-sm"
                        :class="{'is-invalid': errors.has('add.name')}" v-validate="'required'" v-model="add.name"
                        @focus="$validator.errors.removeById('res-add-name')">
                    <div class="invalid-feedback" v-text="errors.first('add.name')"></div>
                </div>
            </div>
            
        </div>
        <div class="card-footer">
            <a href="javascript:;" class="text-secondary mr-4 btn-offcanvas-close">Close</a>
            <a href="javascript:;" class="text-primary mr-4" @click="add_onSubmit('add')">Save</a>
        </div>
    </div>
</div>