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
                        :class="{'is-invalid': errors.has('add.name')}" v-validate="'required|max:255'" v-model="add.name" @focus="$validator.errors.removeById('res-add-name')">
                    <div class="invalid-feedback" v-text="errors.first('add.name')"></div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="add-email" class="col-form-label col-form-label-sm">Email</label>
                </div>
                <div class="col-sm-9">
                    <input type="text" id="add-email" name="email" placeholder="" data-vv-as="Email" data-vv-scope="add" class="form-control form-control-sm"
                        :class="{'is-invalid': errors.has('add.email')}" v-validate="'required|email|max:255'" v-model="add.email"
                        @focus="$validator.errors.removeById('res-add-email')">
                    <div class="invalid-feedback" v-text="errors.first('add.email')"></div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="add-password" class="col-form-label col-form-label-sm">Password</label>
                </div>
                <div class="col-sm-9">
                    <input type="password" id="add-password" name="password" placeholder="" data-vv-as="Password" data-vv-scope="add" class="form-control form-control-sm"
                        :class="{'is-invalid': errors.has('add.password')}" v-validate="'required|min:6|max:20|confirmed:add-password_confirmation'" v-model="add.password"
                        @focus="$validator.errors.removeById('res-add-password')">
                    <div class="invalid-feedback" v-text="errors.first('add.password')"></div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="add-password_confirmation" class="col-form-label col-form-label-sm">Password Confirmation</label>
                </div>
                <div class="col-sm-9">
                    <input type="password" id="add-password_confirmation" name="add-password_confirmation" placeholder="" class="form-control form-control-sm" v-model="add.password_confirmation">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="add-status" class="col-form-label col-form-label-sm">Status</label>
                </div>
                <div class="col-sm-9">
                    <select class="form-control form-control-sm" v-model="add.status">
                        <option value="0">Off</option>
                        <option value="1">On</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <a href="javascript:;" class="text-secondary mr-4 btn-offcanvas-close">Close</a>
            <a href="javascript:;" class="text-primary mr-4" @click="add_onSubmit('add')">Save</a>
        </div>
    </div>
</div>