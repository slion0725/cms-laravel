<v-profile inline-template :profile="{{ Auth::user() }}">
    <div class="off-canvas off-canvas-right off-canvas-effect" id="offcanvas-profile">
        <div class="card d-flex flex-column h-100">
            <div class="card-header">
                Profile
            </div>
            <div class="card-body align-self-stretch">

                <div class="text-center pb-3">
                    <img data-src="holder.js/150x150?auto=yes&theme=sky&text=36p" src="{{ Auth::user()->avater ? asset('/storage') . '/' . Auth::user()->avater : '#' }}" class="rounded-circle" width="36%">
                </div>

                <div class="form-group row">
                    <div class="col-sm-3">
                        <label class="col-form-label col-form-label-sm" for="profile-name">Name</label>
                    </div>
                    <div class="col-sm-9">
                        <input class="form-control form-control-sm" id="profile-name" name="name" data-vv-as="name" data-vv-scope="profile" type="text" :class="{'is-invalid': errors.has('profile.name')}" v-validate="'required|max:255'" v-model="profile.name" @focus="$validator.errors.removeById('res-profile-name')">
                        <div class="invalid-feedback" v-text="errors.first('profile.name')"></div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-3">
                        <label class="col-form-label col-form-label-sm" for="profile-email">Email</label>
                    </div>
                    <div class="col-sm-9">
                        <input class="form-control form-control-sm" id="profile-email" name="email" data-vv-as="email" data-vv-scope="profile" type="text" :class="{'is-invalid': errors.has('profile.email')}" v-validate="'required|email|max:255'" v-model="profile.email" @focus="$validator.errors.removeById('res-profile-email')">
                        <div class="invalid-feedback" v-text="errors.first('profile.email')"></div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-3">
                        <label class="col-form-label col-form-label-sm" for="profile-password">Password</label>
                    </div>
                    <div class="col-sm-9">
                        <input class="form-control form-control-sm" id="profile-password" name="password" data-vv-as="password" data-vv-scope="profile" type="password" :class="{'is-invalid': errors.has('profile.password')}" v-validate="'min:6|max:20|confirmed:profile-password_confirmation'" @focus="$validator.errors.removeById('res-profile-password')" ref="profile-password" v-model="password">
                        <div class="invalid-feedback" v-text="errors.first('profile.password')"></div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-3">
                        <label class="col-form-label col-form-label-sm" for="profile-password_confirmation">Password Confirmation</label>
                    </div>
                    <div class="col-sm-9">
                        <input class="form-control form-control-sm" id="profile-password_confirmation" name="profile-password_confirmation" type="password" ref="profile-password_confirmation" v-model="password_confirmation">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-3">
                        <label class="col-form-label col-form-label-sm" for="profile-avater">Avater</label>
                    </div>
                    <div class="col-sm-9">
                        <div class="custom-file">
                            <input class="custom-file-input" id="profile-avater" name="avater" data-vv-as="avater" data-vv-scope="profile" type="file" :class="{'is-invalid': errors.has('profile.avater')}" v-validate="'image'" ref="profile-avater" @change="processAvaterFile($event)" @focus="$validator.errors.removeById('res-profile-avater')">
                            <label class="custom-file-label" for="profile-avater" v-text="avater != null ? avater_name : 'Choose Image'"></label>
                            <div class="invalid-feedback" v-text="errors.first('profile.avater')"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a class="text-secondary mr-4 btn-offcanvas-close" href="javascript:;">Close</a>
                <a class="text-primary mr-4" href="javascript:;" @click="onSubmit('profile')">Save</a>
            </div>
        </div>
    </div>
</v-profile>