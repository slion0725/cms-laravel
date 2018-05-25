@extends('components.layout')

@section('off-canvas-right')
    @include('accounts.search')
    @include('accounts.show')
    @include('accounts.add')
    {{-- @include('accounts.edit') --}}
@endsection

@section('content')
<div class="container-fluid">
    @include('components.breadcrumb')
    <!-- button -->
    <div class="scroll-btn">
        <v-datatables-page-length-btn></v-datatables-page-length-btn>
        <v-datatables-select-btn></v-datatables-select-btn>
        <a href="#" class="btn-item offcanvas-toggle" data-offcanvas="offcanvas-search">
            <i class="mdi mdi-magnify mr-1"></i>Search
        </a>
        <a href="#" class="btn-item offcanvas-toggle" data-offcanvas="offcanvas-show">
            <i class="mdi mdi-view-list mr-1"></i>Show
        </a>
        <a href="#" class="btn-item offcanvas-toggle" data-offcanvas="offcanvas-add">
            <i class="mdi mdi-plus mr-1"></i>Add
        </a>
        <a href="#" class="btn-item offcanvas-toggle" data-offcanvas="offcanvas-edit">
            <i class="mdi mdi-pencil mr-1"></i>Edit
        </a>
        <a href="#" class="btn-item" id="del-btn">
            <i class="mdi mdi-delete mr-1"></i>Del
        </a>
        <a href="#" class="btn-item" id="download-btn">
            <i class="mdi mdi-download mr-1"></i>Download
        </a>
    </div>
    <v-datatables :setting="datatablesSetting"></v-datatables>
</div>
@endsection