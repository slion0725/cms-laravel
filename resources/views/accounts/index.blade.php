@extends('components.layout')

@section('off-canvas-right')
    @include('accounts.search')
    @include('accounts.show')
    @include('accounts.add')
    @include('accounts.edit')
@endsection

@section('content')
<div class="container-fluid">
    @include('components.breadcrumb')
    <!-- button -->
    <div class="scroll-btn">
        <v-datatables-page-length-btn></v-datatables-page-length-btn>
        <v-datatables-select-btn></v-datatables-select-btn>
        <v-datatables-search-btn></v-datatables-search-btn>
        <v-datatables-show-btn :show="show"></v-datatables-show-btn>
        <v-datatables-add-btn :add="add"></v-datatables-add-btn>
        <v-datatables-edit-btn :edit="edit"></v-datatables-edit-btn>
        <v-datatables-delete-btn></v-datatables-delete-btn>
        <a href="#" class="btn-item" id="download-btn">
            <i class="mdi mdi-download mr-1"></i>Download
        </a>
    </div>
    <v-datatables :setting="datatablesSetting"></v-datatables>
</div>
@endsection