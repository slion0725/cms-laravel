@extends('components.layout')

@section('content')
<!-- login -->
<div class="d-flex justify-content-center">
    <div style="max-width: 327px;" class="m-4">
        <form>
            <div class="text-center mb-4">
                <img class="rounded mb-4" src="images/apple-touch-icon.png" alt="" width="72" height="72">
                <h3 class="h3 mb-3 font-weight-normal">Floating labels</h3>
                <p>Build form controls with floating labels via the
                    <code>:placeholder-shown</code> pseudo-element.
                    <a href="https://caniuse.com/#feat=css-placeholder-shown">Works in latest Chrome, Safari, and Firefox.</a>
                </p>
            </div>
            <div class="form-group">
                <label for="email" class="col-form-label col-form-label-sm">Email</label>
                <input type="email" class="form-control form-control-sm" id="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="password" class="col-form-label col-form-label-sm">Password</label>
                <input type="password" class="form-control form-control-sm" id="password" placeholder="Password">
            </div>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="btn btn-sm btn-primary btn-block" type="submit">Sign in</button>
        </form>
    </div>
</div>
@endsection