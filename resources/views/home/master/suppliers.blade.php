@extends('shared.layout')

@section('title')
    Suppliers
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
            <button type="button" class="btn btn-inverse m-b-2 m-t-2 m-l-2" data-backdrop="static" data-toggle="modal" data-target="#new">New Supplier</button>
        </div>
        <div class="panel pagination-inverse clearfix m-b-0">
            <table id="data-table" data-order='[[1,"asc"]]' class="table table-bordered table-hover" width="100%">
                <thead>
                    <tr class="inverse">
                        <th data-sorting="disabled"></th>
                        <th>Code</th>
                        <th>Ref.Name</th>
                        <th>Company Name</th>
                        <th>Telephone No</th>
                        <th>status</th>
                        <th data-sorting="disabled"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $supplier)
                        <tr class="odd gradeX">
                            <td></td>
                            <td>{{ $supplier->code }}</td>
                            <td>{{ $supplier->ref_name }}</td>
                            <td>{{ $supplier->company_name }}</td>
                            <td>{{ $supplier->phone1 }}</td>
                            <td>{{ $supplier->status ? 'Active':'Deactive' }}</td>
                            <td>
                                <button type="button" 
                                    class="btn btn-info fa fa-eye"
                                    data-backdrop="static"
                                    data-toggle="modal"
                                    data-target="#view"
                                    data-id = "{{ $supplier->id }}"
                                    data-code = "{{ $supplier->code }}"
                                    data-ref_name = "{{ $supplier->ref_name }}"
                                    data-company_name = "{{ $supplier->company_name }}"
                                    data-address = "{{ $supplier->address }}"
                                    data-phone1 = "{{ $supplier->phone1 }}"
                                    data-phone2 = "{{ $supplier->phone2 }}"
                                    data-email = "{{ $supplier->email }}"
                                    data-status = "{{ $supplier->status }}"
                                ></button>
                                <button type="button" 
                                    class="btn btn-success fa fa-edit"
                                    data-backdrop="static"
                                    data-toggle="modal"
                                    data-target="#edit"
                                    data-id = "{{ $supplier->id }}"
                                    data-code = "{{ $supplier->code }}"
                                    data-ref_name = "{{ $supplier->ref_name }}"
                                    data-company_name = "{{ $supplier->company_name }}"
                                    data-address = "{{ $supplier->address }}"
                                    data-phone1 = "{{ $supplier->phone1 }}"
                                    data-phone2 = "{{ $supplier->phone2 }}"
                                    data-email = "{{ $supplier->email }}"
                                    data-status = "{{ $supplier->status }}"
                                ></button>
                                <button type="button" 
                                    class="btn btn-danger fa fa-trash-o"
                                    data-toggle="modal"
                                    data-target="#delete"
                                    data-backdrop="static"
                                    data-id="{{ $supplier->id }}"
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

    @include('home.master.modal.suppliers.new')
    @include('home.master.modal.suppliers.view')
    @include('home.master.modal.suppliers.edit')
    @include('home.master.modal.suppliers.delete')
@endsection

@section('js')
    <script src="{{ asset('plugins/switchery/switchery.min.js') }}"></script>
    <script src="{{ asset('plugins/DataTables/media/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('plugins/DataTables/media/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('js/page-form-slider-switcher.demo.min.js') }}"></script>
    <script src="{{ asset('js/supplier.js') }}"></script>

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