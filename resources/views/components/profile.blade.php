<v-profile inline-template>
    <div class="off-canvas off-canvas-right off-canvas-effect" id="offcanvas-profile">
        <div class="card d-flex flex-column h-100">
            <div class="card-header">
                Profile
            </div>
            <div class="card-body align-self-stretch">
                <div class="form-group row">
                    <div class="col-sm-3">
                        <label for="profile-name" class="col-form-label col-form-label-sm">Name</label>
                    </div>
                    <div class="col-sm-9">
                        <input type="text" id="profile-name" name="name" placeholder="" data-vv-as="Name" data-vv-scope="profile" class="form-control form-control-sm"
                            :class="{'is-invalid': errors.has('profile.name')}" v-validate="'required|max:255'" v-model="profile.name" @focus="$validator.errors.removeById('res-profile-name')">
                        <div class="invalid-feedback" v-text="errors.first('profile.name')"></div>
                    </div>
                </div>
                
                <div class="form-group row">
                    <div class="col-sm-3">
                        <label for="profile-email" class="col-form-label col-form-label-sm">Email</label>
                    </div>
                    <div class="col-sm-9">
                        <input type="text" id="profile-email" name="email" placeholder="" data-vv-as="Email" data-vv-scope="profile" class="form-control form-control-sm"
                            :class="{'is-invalid': errors.has('profile.email')}" v-validate="'required|email|max:255'" v-model="profile.email"
                            @focus="$validator.errors.removeById('res-profile-email')">
                        <div class="invalid-feedback" v-text="errors.first('profile.email')"></div>
                    </div>
                </div>
                
                <div class="form-group row">
                    <div class="col-sm-3">
                        <label for="profile-password" class="col-form-label col-form-label-sm">Password</label>
                    </div>
                    <div class="col-sm-9">
                        <input type="password" id="profile-password" name="password" placeholder="" data-vv-as="Password" data-vv-scope="profile" class="form-control form-control-sm"
                            :class="{'is-invalid': errors.has('profile.password')}" v-validate="'required|min:6|max:20|confirmed:profile-password_confirmation'" v-model="profile.password"
                            @focus="$validator.errors.removeById('res-profile-password')">
                        <div class="invalid-feedback" v-text="errors.first('profile.password')"></div>
                    </div>
                </div>
                
                <div class="form-group row">
                    <div class="col-sm-3">
                        <label for="profile-password_confirmation" class="col-form-label col-form-label-sm">Password Confirmation</label>
                    </div>
                    <div class="col-sm-9">
                        <input type="password" id="profile-password_confirmation" name="profile-password_confirmation" placeholder="" class="form-control form-control-sm" v-model="profile.password_confirmation">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-3">
                        <label for="profile-avater" class="col-form-label col-form-label-sm">Avater 1</label>
                    </div>
                    <div class="col-sm-9">
                        <input type="file" class="form-control-file" id="profile-avater1" name="profile-avater1">
                    </div>
                </div>
                
                <div class="form-group row">
                    <div class="col-sm-3">
                        <label for="profile-avater" class="col-form-label col-form-label-sm">Avater 2</label>
                    </div>
                    <div class="col-sm-9">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="profile-avater2" name="profile-avater2">
                            <label class="custom-file-label" for="profile-avater">Choose Image</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a href="javascript:;" class="text-secondary mr-4 btn-offcanvas-close">Close</a>
                <a href="javascript:;" class="text-primary mr-4" @click="onSubmit('profile')">Save</a>
            </div>
        </div>
    </div>
</v-profile>