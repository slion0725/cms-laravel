@extends('components.layout')

@section('content')
<div class="d-flex justify-content-center">
    <div style="max-width: 327px;width: 327px;" class="m-4">
        <form action="login" autocomplete="off" method="POST" novalidate ref="login" @submit.prevent="onSubmit">
            <div class="text-center mb-4">
                <img class="rounded mb-4" src="" alt="" width="72" height="72">
                <h3 class="h3 mb-3 font-weight-normal">Floating labels</h3>
            </div>
            <div class="form-group">
                <label for="email" class="col-form-label col-form-label-sm">Email</label>
                <input type="email" class="form-control form-control-sm" id="email" name="email" placeholder="" :class="{'is-invalid': errors.has('email')}"
                    data-vv-as="Email" v-validate="'required|email'" v-model="form.email">
                <div class="invalid-feedback" v-text="errors.first('email')"></div>
            </div>
            <div class="form-group">
                <label for="password" class="col-form-label col-form-label-sm">Password</label>
                <input type="password" class="form-control form-control-sm" id="password" name="password" placeholder="" :class="{'is-invalid': errors.has('password')}"
                    data-vv-as="Password" v-validate="'required'" v-model="form.password">
                <div class="invalid-feedback" v-text="errors.first('password')"></div>
            </div>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <div class="form-group">
                <button class="btn btn-sm btn-primary btn-block" type="submit">Login</button>
            </div>
            <div class="form-group">
                <a href="password_sendlink.html">Forgot Your Password?</a>
            </div>
        </form>
    </div>
</div>
@endsection