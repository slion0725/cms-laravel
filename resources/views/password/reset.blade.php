@extends('components.layout') 
@section('content')
<div class="d-flex justify-content-center">
    <div style="max-width: 327px;width: 327px;" class="m-4">
        <form action="{{ route('password.request') }}" autocomplete="off" method="POST" novalidate ref="reset" @submit.prevent="onSubmit">
            @csrf

            <div class="text-center mb-4">
                <h3 class="h3 mb-3 font-weight-normal">Reset Password</h3>
            </div>

            <div class="form-group">
                <label for="email" class="col-form-label col-form-label-sm">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control form-control-sm{{ $errors->has('email') ? ' is-invalid' : '' }}"
                    :class="{'is-invalid': errors.has('email')}" data-vv-as="Email" v-validate="'required|email'">
                <div class="invalid-feedback" v-text="errors.first('email')"></div>
                <div class="invalid-feedback" v-show="!errors.has('email')">{{ $errors->first('email') }}</div>
            </div>

            <div class="form-group">
                <label for="password" class="col-form-label col-form-label-sm">Password</label>
                <input type="password" id="password" name="password" class="form-control form-control-sm{{ $errors->has('password') ? ' is-invalid' : '' }}"
                    :class="{'is-invalid': errors.has('password')}" data-vv-as="Password" v-validate="'required|min:6|max:20|confirmed:password_confirmation'">
                <div class="invalid-feedback" v-text="errors.first('password')"></div>
                <div class="invalid-feedback" v-show="!errors.has('password')">{{ $errors->first('password') }}</div>
            </div>

            <div class="form-group">
                <label for="password_confirmation" class="col-form-label col-form-label-sm">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control form-control-sm">
            </div>
            
            <div class="form-group">
                <button class="btn btn-sm btn-primary btn-block" type="submit">Reset Password</button>
            </div>
        </form>
    </div>
</div>
@endsection