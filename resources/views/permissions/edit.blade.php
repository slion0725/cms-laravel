<div class="off-canvas off-canvas-right off-canvas-effect" id="offcanvas-edit">
    <div class="card d-flex flex-column h-100">
        <div class="card-header">
            Edit
        </div>
        <div class="card-body align-self-stretch">
            <div class="form-group row">
                <div class="col-sm-3">
                    <label class="col-form-label col-form-label-sm">ID</label>
                </div>
                <div class="col-sm-9 align-self-center" v-text="edit.id"></div>
            </div>
            
            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="edit-name" class="col-form-label col-form-label-sm">Name</label>
                </div>
                <div class="col-sm-9">
                    <input type="text" id="edit-name" name="name" placeholder="" data-vv-as="Name" data-vv-scope="edit" class="form-control form-control-sm"
                        :class="{'is-invalid': errors.has('edit.name')}" v-validate="'required'" v-model="edit.name"
                        @focus="$validator.errors.removeById('res-edit-name')">
                    <div class="invalid-feedback" v-text="errors.first('edit.name')"></div>
                </div>
            </div>
            
            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="edit-guard_name" class="col-form-label col-form-label-sm">Guard Name</label>
                </div>
                <div class="col-sm-9">
                    <input type="text" id="edit-guard_name" name="guard_name" placeholder="" data-vv-as="Guard Name" data-vv-scope="edit" class="form-control form-control-sm"
                        :class="{'is-invalid': errors.has('edit.guard_name')}" v-validate="'required'" v-model="edit.guard_name"
                        @focus="$validator.errors.removeById('res-edit-guard_name')">
                    <div class="invalid-feedback" v-text="errors.first('edit.guard_name')"></div>
                </div>
            </div>

        </div>
        <div class="card-footer">
            <a href="javascript:;" class="text-secondary mr-4 btn-offcanvas-close">Close</a>
            <a href="javascript:;" class="text-primary mr-4" @click="edit_onSubmit('edit')">Save</a>
        </div>
    </div>
</div>