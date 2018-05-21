<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include('components.head')
    <!-- style -->
    <link href="{{ mix('css/' . Route::currentRouteName() . '.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <!-- nav -->
        @include('components.nav')
        <!-- content -->
        @yield('content')
        <!-- footer -->
        @include('components.footer')
    </div>
    <!-- script -->
	<script src="{{ mix('js/manifest.js') }}"></script>
	<script src="{{ mix('js/vendor.js') }}"></script>
    <script src="{{ mix('js/' . Route::currentRouteName() . '.js') }}"></script>
</body>

</html>