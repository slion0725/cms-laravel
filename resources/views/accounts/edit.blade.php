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
                        :class="{'is-invalid': errors.has('edit.name')}" v-validate="'required|max:255'" v-model="edit.name"
                        @focus="$validator.errors.removeById('res-edit-name')">
                    <div class="invalid-feedback" v-text="errors.first('edit.name')"></div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="edit-email" class="col-form-label col-form-label-sm">Email</label>
                </div>
                <div class="col-sm-9">
                    <input type="text" id="edit-email" name="email" placeholder="" data-vv-as="Email" data-vv-scope="edit" class="form-control form-control-sm"
                        :class="{'is-invalid': errors.has('edit.email')}" v-validate="'required|email|max:255'" v-model="edit.email"
                        @focus="$validator.errors.removeById('res-edit-email')">
                    <div class="invalid-feedback" v-text="errors.first('edit.email')"></div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="edit-password" class="col-form-label col-form-label-sm">Password</label>
                </div>
                <div class="col-sm-9">
                    <input type="password" id="edit-password" name="edit_password" placeholder="" data-vv-as="Password" data-vv-scope="edit" class="form-control form-control-sm"
                        :class="{'is-invalid': errors.has('edit.password')}" v-validate="'required|min:6|max:20'" v-model="edit.password"
                        @focus="$validator.errors.removeById('res-edit-password')">
                    <div class="invalid-feedback" v-text="errors.first('edit.password')"></div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="edit-password_confirmation" class="col-form-label col-form-label-sm">Password Confirmation</label>
                </div>
                <div class="col-sm-9">
                    <input type="password" id="edit-password_confirmation" name="password_confirmation" placeholder="" data-vv-as="Password Confirmation" data-vv-scope="edit" class="form-control form-control-sm"
                        :class="{'is-invalid': errors.has('edit.password_confirmation')}" v-validate="'required|min:6|max:20|confirmed:edit_password'" v-model="edit.password_confirmation"
                        @focus="$validator.errors.removeById('res-edit-password_confirmation')">
                    <div class="invalid-feedback" v-text="errors.first('edit.password_confirmation')"></div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="edit-status" class="col-form-label col-form-label-sm">Status</label>
                </div>
                <div class="col-sm-9">
                    <select class="form-control form-control-sm" v-model="edit.status">
                        <option value="0">Off</option>
                        <option value="1">On</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <a href="#" class="text-secondary mr-4 btn-offcanvas-close">Close</a>
            <a href="#" class="text-primary mr-4" @click="edit_onSubmit('edit')">Save</a>
        </div>
    </div>
</div>