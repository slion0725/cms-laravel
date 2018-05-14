<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include('components.head')
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- style -->
    <link href="{{ mix('css/' . Route::currentRouteName() . '.css') }}" rel="stylesheet">
</head>

<body>
    <!-- nav -->
    @include('components.nav')
    @yield('content')
    <!-- loading -->
    @include('components.loading')
    <!-- footer -->
    @include('components.footer')
    <!-- script -->
    <script src="{{ mix('js/manifest.js') }}"></script>
    <script src="{{ mix('js/vendor.js') }}"></script>
    <script src="{{ mix('js/' . Route::currentRouteName() . '.js') }}"></script>
</body>

</html>