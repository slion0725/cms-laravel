@extends('components.layout') 
@section('content')
<div class="d-flex justify-content-center">
    <div style="max-width: 327px;width: 327px;" class="m-4">
        <form action="login" autocomplete="off" method="POST" novalidate ref="login" @submit.prevent="onSubmit">
            @csrf

            <div class="text-center mb-4">
                <img src="#" data-src="holder.js/90x90?theme=sky&text=90" class="rounded mb-4" width="90" height="90">
                <h3 class="h3 mb-3 font-weight-normal">Login</h3>
            </div>

            <div class="form-group">
                <label for="email" class="col-form-label col-form-label-sm">Email</label>
                <input type="email" id="email" name="email" class="form-control form-control-sm{{ $errors->has('email') ? ' is-invalid' : '' }}"
                    :class="{'is-invalid': errors.has('email')}" data-vv-as="Email" v-validate="'required|email'">
                <div class="invalid-feedback" v-text="errors.first('email')"></div>
                <div class="invalid-feedback" v-show="!errors.has('email')">{{ $errors->first('email') }}</div>
            </div>

            <div class="form-group">
                <label for="password" class="col-form-label col-form-label-sm">Password</label>
                <input type="password" id="password" name="password" class="form-control form-control-sm{{ $errors->has('password') ? ' is-invalid' : '' }}"
                    :class="{'is-invalid': errors.has('password')}" data-vv-as="Password" v-validate="'required'">
                <div class="invalid-feedback" v-text="errors.first('password')"></div>
                <div class="invalid-feedback" v-show="!errors.has('password')">{{ $errors->first('password') }}</div>
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember me
                </label>
            </div>

            <div class="form-group">
                <button class="btn btn-sm btn-primary btn-block" type="submit">Login</button>
            </div>

            <div class="form-group">
                <a href="{{ route('password.request') }}">Forgot Your Password?</a>
            </div>
        </form>
    </div>
</div>
@endsection