@extends('components.layout')

@section('content')
<div class="container-fluid">
    <!-- breadcrumb -->
    {{ Breadcrumbs::render(Route::currentRouteName()) }}
</div>
@endsection