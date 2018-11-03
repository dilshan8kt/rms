@extends('shared.layout')

@section('title')
    Products
@endsection

@section('css')
    <link href="{{ asset('plugins/DataTables/media/css/dataTables.bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css') }}" rel="stylesheet" />
@endsection

@section('content')
    <!-- begin page-header -->
    <h1 class="page-header">Managed Tables - Responsive <small>header small text goes here...</small></h1>
    <!-- end page-header -->
    
    <!-- begin section-container -->
    <div class="section-container section-with-top-border">
        <div class="panel pagination-inverse clearfix m-b-0">
            <table id="data-table" data-order='[[1,"asc"]]' class="table table-bordered table-hover">
                <thead>
                    <tr class="inverse">
                        <th data-sorting="disabled"></th>
                        <th>Rendering engine</th>
                        <th>Browser</th>
                        <th>Platform(s)</th>
                        <th>Engine version</th>
                        <th>CSS grade</th>
                        <th data-sorting="disabled"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="odd gradeX">
                        <td><input type="checkbox" name="record[]" value="1" /></td>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td>Win 95+</td>
                        <td>4</td>
                        <td>X</td>
                        <td><a href="#" class="btn btn-default btn-xs"><i class="fa fa-cog fa-fw"></i> Setting</a></td>
                    </tr>
                    <tr class="even gradeC">
                        <td><input type="checkbox" name="record[]" value="1" /></td>
                        <td>Trident</td>
                        <td>Internet Explorer 5.0</td>
                        <td>Win 95+</td>
                        <td>5</td>
                        <td>C</td>
                        <td><a href="#" class="btn btn-default btn-xs"><i class="fa fa-cog fa-fw"></i> Setting</a></td>
                    </tr>
                    <tr class="odd gradeA">
                        <td><input type="checkbox" name="record[]" value="1" /></td>
                        <td>Trident</td>
                        <td>Internet Explorer 5.5</td>
                        <td>Win 95+</td>
                        <td>5.5</td>
                        <td>A</td>
                        <td><a href="#" class="btn btn-default btn-xs"><i class="fa fa-cog fa-fw"></i> Setting</a></td>
                    </tr>
                    <tr class="even gradeA">
                        <td><input type="checkbox" name="record[]" value="1" /></td>
                        <td>Trident</td>
                        <td>Internet Explorer 6</td>
                        <td>Win 98+</td>
                        <td>6</td>
                        <td>A</td>
                        <td><a href="#" class="btn btn-default btn-xs"><i class="fa fa-cog fa-fw"></i> Setting</a></td>
                    </tr>
                    <tr class="odd gradeA">
                        <td><input type="checkbox" name="record[]" value="1" /></td>
                        <td>Trident</td>
                        <td>Internet Explorer 7</td>
                        <td>Win XP SP2+</td>
                        <td>7</td>
                        <td>A</td>
                        <td><a href="#" class="btn btn-default btn-xs"><i class="fa fa-cog fa-fw"></i> Setting</a></td>
                    </tr>
                    <tr class="even gradeA">
                        <td><input type="checkbox" name="record[]" value="1" /></td>
                        <td>Trident</td>
                        <td>AOL browser (AOL desktop)</td>
                        <td>Win XP</td>
                        <td>6</td>
                        <td>A</td>
                        <td><a href="#" class="btn btn-default btn-xs"><i class="fa fa-cog fa-fw"></i> Setting</a></td>
                    </tr>
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
@endsection

@section('js')
    <script src="{{ asset('plugins/DataTables/media/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('plugins/DataTables/media/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('js/page-table-manage-responsive.demo.min.js') }}"></script>
@endsection