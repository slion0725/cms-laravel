@extends('components.layout')

@section('off-canvas-right')
    @include('activityLogs.search')
    @include('activityLogs.show')
@endsection

@section('content')
<div class="container-fluid">
    {{ Breadcrumbs::render(Route::currentRouteName()) }}
    <!-- button -->
    <div class="scroll-btn">
        <v-datatables-page-length-btn></v-datatables-page-length-btn>
        <v-datatables-select-btn></v-datatables-select-btn>
        <v-datatables-search-btn></v-datatables-search-btn>
        <v-datatables-show-btn :show="show" path="activity-log"></v-datatables-show-btn>
        <v-datatables-download-btn path="activity-log"></v-datatables-download-btn>
    </div>
    <v-datatables :setting="datatablesSetting"></v-datatables>
</div>
@endsection