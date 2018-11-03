@extends('shared.layout')

@section('title')
    Locations
@endsection

@section('css')
    <link href="{{ asset('plugins/DataTables/media/css/dataTables.bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/switchery/switchery.min.css') }}" rel="stylesheet" />
@endsection

@section('content')
    @if(session()->has('success'))
        <div class="alert alert-success fade in m-b-10">
            <strong>Success!</strong>
            {{ session()->get('success') }}
            <span class="close" data-dismiss="alert">&times;</span>
        </div>
    @endif
    @if(session()->has('error'))
        <div class="alert alert-error fade in m-b-10">
            <strong>Success!</strong>
            {{ session()->get('success') }}
            <span class="close" data-dismiss="alert">&times;</span>
        </div>
    @endif
    <!-- begin section-container -->
    <div class="section-container section-with-top-border">
        <div class="panel pagination-inverse m-b-1">
            <button type="button" class="btn btn-inverse m-b-2 m-t-2 m-l-2" data-backdrop="static" data-toggle="modal" data-target="#new">New Location</button>
        </div>
        <div class="panel pagination-inverse clearfix m-b-0">
            <table id="data-table" data-order='[[1,"asc"]]' class="table table-bordered table-hover" width="100%">
                <thead>
                    <tr class="inverse">
                        <th data-sorting="disabled"></th>
                        <th>Location Name</th>
                        <th>Description</th>
                        <th>Is Order Location</th>
                        <th>status</th>
                        <th data-sorting="disabled"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $location)
                        <tr class="odd gradeX">
                            <td></td>
                            <td>{{ $location->name }}</td>
                            <td>{{ $location->description }}</td>
                            <td>{{ $location->is_order_location ? 'Yes':'No' }}</td>
                            <td>{{ $location->status ? 'Active':'Deactive' }}</td>
                            <td>
                                <button type="button" 
                                    class="btn btn-info fa fa-eye"
                                    data-backdrop="static"
                                    data-toggle="modal"
                                    data-target="#view"
                                    data-id = "{{ $location->id }}"
                                    data-name = "{{ $location->name }}"
                                    data-description = "{{ $location->description }}"
                                    data-is_order_location = "{{ $location->is_order_location }}"
                                    data-status = "{{ $location->status }}"
                                ></button>
                                <button type="button" 
                                    class="btn btn-success fa fa-edit"
                                    data-backdrop="static"
                                    data-toggle="modal"
                                    data-target="#edit"
                                    data-id = "{{ $location->id }}"
                                    data-name = "{{ $location->name }}"
                                    data-description = "{{ $location->description }}"
                                    data-is_order_location = "{{ $location->is_order_location }}"
                                    data-status = "{{ $location->status }}"
                                ></button>
                                <button type="button" 
                                    class="btn btn-danger fa fa-trash-o"
                                    data-toggle="modal"
                                    data-target="#delete"
                                    data-backdrop="static"
                                    data-id="{{ $location->id }}"
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

    @include('home.master.modal.locations.new')
    @include('home.master.modal.locations.view')
    @include('home.master.modal.locations.edit')
    @include('home.master.modal.locations.delete')
@endsection

@section('js')
    <script src="{{ asset('plugins/switchery/switchery.min.js') }}"></script>
    <script src="{{ asset('plugins/DataTables/media/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('plugins/DataTables/media/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('js/page-form-slider-switcher.demo.min.js') }}"></script>
    <script src="{{ asset('js/location.js') }}"></script>

    @if($errors->add->count()>0)
        <script>
            $('#new').modal('toggle');
        </script>
    @endif
    @if($errors->edit->count()>0)
        <script>
            $('#edit').modal('toggle');
        </script>
    @endif
@endsection