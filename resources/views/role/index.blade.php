@extends('components.layout')

@section('off-canvas-right')
    @include('role.search')
    @include('role.show')
    @include('role.add')
    @include('role.edit')
@endsection

@section('content')
<div class="container-fluid">
    {{ Breadcrumbs::render(Route::currentRouteName()) }}
    <!-- button -->
    <div class="scroll-btn">
        <v-datatables-page-length-btn></v-datatables-page-length-btn>
        <v-datatables-select-btn></v-datatables-select-btn>
        <v-datatables-search-btn></v-datatables-search-btn>
        <v-datatables-show-btn :show="show" path="roles"></v-datatables-show-btn>
        <v-datatables-add-btn :add="add"></v-datatables-add-btn>
        <v-datatables-edit-btn :edit="edit" path="roles"></v-datatables-edit-btn>
        <v-datatables-delete-btn></v-datatables-delete-btn>
        <v-datatables-download-btn></v-datatables-download-btn>
    </div>
    <v-datatables :setting="datatablesSetting"></v-datatables>
</div>
@endsection