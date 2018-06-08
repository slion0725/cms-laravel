@extends('components.layout')

@section('off-canvas-right')
    @include('assignRoles.search')
    @include('assignRoles.show')
    @include('assignRoles.edit')
@endsection

@section('content')
<div class="container-fluid">
    {{ Breadcrumbs::render(Route::currentRouteName()) }}
    <!-- button -->
    <div class="scroll-btn">
        <v-datatables-page-length-btn></v-datatables-page-length-btn>
        <v-datatables-select-btn></v-datatables-select-btn>
        <v-datatables-search-btn></v-datatables-search-btn>
        <v-datatables-edit-btn :edit="edit" path="assign-roles"></v-datatables-edit-btn>
        <v-datatables-show-btn :show="show" path="assign-roles"></v-datatables-show-btn>
        <v-datatables-download-btn path="assign-roles"></v-datatables-download-btn>
    </div>
    <v-datatables :setting="datatablesSetting"></v-datatables>
</div>
@endsection