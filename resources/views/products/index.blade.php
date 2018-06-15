@extends('components.layout')

@section('off-canvas-right')
    @include('products.search')
    @include('products.show')
    @include('products.add')
    @include('products.edit')
@endsection

@section('content')
<div class="container-fluid">
    {{ Breadcrumbs::render(Route::currentRouteName()) }}
    <!-- button -->
    <div class="scroll-btn">
        <v-datatables-page-length-btn></v-datatables-page-length-btn>
        <v-datatables-select-btn></v-datatables-select-btn>
        <v-datatables-search-btn></v-datatables-search-btn>
        <v-datatables-show-btn :show="show" path="products"></v-datatables-show-btn>

        <v-datatables-add-test-btn @open="add_form"></v-datatables-add-test-btn>
        <v-datatables-edit-test-btn @open="edit_form"></v-datatables-edit-test-btn>

        <v-datatables-delete-btn path="products"></v-datatables-delete-btn>
        <v-datatables-download-btn></v-datatables-download-btn>
    </div>
    <v-datatables :setting="datatablesSetting"></v-datatables>
</div>
@endsection