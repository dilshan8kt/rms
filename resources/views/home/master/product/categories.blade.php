@extends('shared.layout')

@section('title')
    Category
@endsection

@section('css')
    <link href="{{ asset('plugins/DataTables/media/css/dataTables.bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css') }}" rel="stylesheet" />
@endsection

@section('content')
    <!-- begin page-header -->
    {{-- <h1 class="page-header">Managed Tables - Responsive <small>header small text goes here...</small></h1> --}}
    <!-- end page-header -->

    <!-- begin section-container -->
    <div class="section-container section-with-top-border">
        <div class="panel pagination-inverse m-b-1">
            <button type="button" class="btn btn-inverse m-b-2 m-t-2 m-l-2" data-backdrop="static" data-toggle="modal" data-target="#new">New Category</button>
        </div>
        <div class="panel pagination-inverse clearfix m-b-0">
            <table id="data-table" data-order='[[1,"asc"]]' class="table table-bordered table-hover">
                <thead>
                    <tr class="inverse">
                        <th data-sorting="disabled"></th>
                        <th>Code</th>
                        <th>Department</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th data-sorting="disabled"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data['category'] as $category)
                        
                        <tr class="odd gradeX">
                            <td></td>
                            <td>{{ $category->code }}</td>
                            <td>{{ $category->code }}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->description }}</td>
                            <td>{{ $category->status ? 'Active':'Deactive' }}</td>
                            <td>
                                <button type="button" 
                                    class="btn btn-info fa fa-eye"
                                    data-backdrop="static"
                                    data-toggle="modal"
                                    data-target="#view"
                                    data-id          = "{{ $category->id }}"
                                    data-code        = "{{ $category->code }}"
                                    data-name        = "{{ $category->name }}"
                                    data-description = "{{ $category->description }}"
                                    data-status      = "{{ $category->status }}"
                                ></button>
                                <button type="button" 
                                    class="btn btn-success fa fa-edit"
                                    data-backdrop="static"
                                    data-toggle="modal"
                                    data-target="#edit"
                                    data-id          = "{{ $category->id }}"
                                    data-code        = "{{ $category->code }}"
                                    data-name        = "{{ $category->name }}"
                                    data-description = "{{ $category->description }}"
                                    data-status      = "{{ $category->status }}"
                                ></button>
                                <button type="button" 
                                    class="btn btn-danger fa fa-trash-o"
                                    data-toggle="modal"
                                    data-target="#delete"
                                    data-backdrop="static"
                                    data-id="{{ $category->id }}"
                                ></button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- end panel -->
    </div>
    <!-- end section-container -->

    <!-- begin #footer -->
    <div id="footer" class="footer">
        <span class="pull-right">
            <a href="javascript:;" class="btn-scroll-to-top" data-click="scroll-top">
                <i class="fa fa-arrow-up"></i> <span class="hidden-xs">Back to Top</span>
            </a>
        </span>
        &copy; 2017 <b>Source Admin</b> All Right Reserved
    </div>
    <!-- end #footer -->


    @include('home.master.modal.products.category.new')
    @include('home.master.modal.products.category.view')
    @include('home.master.modal.products.category.edit')
    @include('home.master.modal.products.category.delete')
@endsection

@section('js')
    <script src="{{ asset('plugins/DataTables/media/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('plugins/DataTables/media/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('js/category.js') }}"></script>
@endsection