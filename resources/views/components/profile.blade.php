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
                        <input type="text" class="form-control form-control-sm" id="profile-name" name="profile-name" v-model="profile.name">
                        <div class="invalid-feedback" v-text="errors.first('profile-name')"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3">
                        <label for="profile-email" class="col-form-label col-form-label-sm">Email</label>
                    </div>
                    <div class="col-sm-9">
                        <input type="text" class="form-control form-control-sm" id="profile-email" name="profile-email" v-model="profile.email">
                        <div class="invalid-feedback" v-text="errors.first('profile-email')"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3">
                        <label for="profile-password" class="col-form-label col-form-label-sm">Password</label>
                    </div>
                    <div class="col-sm-9">
                        <input type="password" class="form-control form-control-sm" id="profile-password" name="profile-password" placeholder="text">
                        <div class="invalid-feedback" v-text="errors.first('profile-password')"></div>
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
                <a href="javascript:;" class="text-primary mr-4" @click="onSubmit">Save</a>
            </div>
        </div>
    </div>
</v-profile>