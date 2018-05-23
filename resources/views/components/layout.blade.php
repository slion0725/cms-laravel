<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include('components.head')
    <!-- style -->
    <link href="{{ mix('css/' . str_before(Route::currentRouteName(),'.') . '.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <!-- nav -->
        @include('components.nav')
        @auth
            <!-- off-canvas-left + menu -->
            @include('components.menu')
            <!-- off-canvas-right + profile + search + show + add + edit -->
            @include('components.profile')
            @yield('off-canvas-right')
        @endauth
        <!-- content -->
        @yield('content')
        <!-- loading -->
        @include('components.loading')
        <!-- footer -->
        @include('components.footer')
    </div>
    <!-- script -->
	<script src="{{ mix('js/manifest.js') }}"></script>
	<script src="{{ mix('js/vendor.js') }}"></script>
    <script src="{{ mix('js/' . str_before(Route::currentRouteName(),'.') . '.js') }}"></script>
</body>

</html>