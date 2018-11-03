@extends('shared.layout')

@section('title')
    Dashboard
@endsection

@section('css')
    <link href="{{ asset('plugins/bootstrap-calendar/css/bootstrap_calendar.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/gritter/css/jquery.gritter.css') }}" rel="stylesheet" />	
    <link href="{{ asset('plugins/DataTables/media/css/dataTables.bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css') }}" rel="stylesheet" />
@endsection

@section('content')
<!-- begin breadcrumb -->
{{-- <ol class="breadcrumb pull-right">
    <li><a href="javascript:;">Home</a></li>
    <li><a href="javascript:;">Dashboard</a></li>
    <li class="active">Dashboard v3</li>
</ol> --}}
<!-- end breadcrumb -->
<!-- begin page-header -->
{{-- <h1 class="page-header">Dashboard v3 <small>header small text goes here...</small></h1> --}}
<!-- end page-header -->

<!-- begin row -->
<div class="row">
    <!-- begin col-10 -->
    <div class="col-lg-10">
        <!-- begin radius-container -->
        <div class="radius-container m-b-30">
            <!-- begin panel -->
            <div class="panel no-rounded-corner bg-inverse text-white wrapper m-b-0">
                <!-- begin btn-group -->
                <div class="btn-group btn-group-xs pull-right">
                    <a href="#" class="btn btn-white dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-cog"></i> Settings <b class="caret text-muted"></b>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="javascript:;">Last Week</a></li>
                        <li><a href="javascript:;">Last Month</a></li>
                        <li><a href="javascript:;">Last Year</a></li>
                    </ul>
                </div>
                <!-- end btn-group -->
                <!-- begin title -->
                <h4 class="text-white m-t-0 m-b-10">
                    <i class="fa fa-snowflake-o text-success-light"></i> Sales Report 
                    <small class="text-muted m-l-5">past 12 months</small>
                </h4>
                <!-- end title -->
                <!-- begin chart -->
                <canvas id="monthly-report-chart" height="100"></canvas>
                <!-- end chart -->
            </div>
            <!-- end panel -->
            <!-- begin panel -->
            <div class="panel pagination-inverse bg-white clearfix no-rounded-corner m-b-0">
                <!-- begin table -->
                <table id="data-table" data-order='[[1,"asc"]]' class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="width-100">Month</th>
                            <th>Orders</th>
                            <th>Earning</th>
                            <th data-sorting="disabled"></th>
                            <th class="width-50" data-sorting="disabled"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>January</td>
                            <td>1,929 items sold</td>
                            <td>$19,290</td>
                            <td class="p-5"><div data-render="sparkline"></div></td>
                            <td class="p-5"><a href="#" class="btn btn-default btn-sm"><i class="fa fa-cog"></i> View Details</a></td>
                        </tr>
                        <tr>
                            <td>February</td>
                            <td>1,392 items sold</td>
                            <td>$13,920</td>
                            <td class="p-5"><div data-render="sparkline"></div></td>
                            <td class="p-5"><a href="#" class="btn btn-default btn-sm"><i class="fa fa-cog"></i> View Details</a></td>
                        </tr>
                        <tr>
                            <td>March</td>
                            <td>988 items sold</td>
                            <td>$9,880</td>
                            <td class="p-5"><div data-render="sparkline"></div></td>
                            <td class="p-5"><a href="#" class="btn btn-default btn-sm"><i class="fa fa-cog"></i> View Details</a></td>
                        </tr>
                        <tr>
                            <td>April</td>
                            <td>780 items sold</td>
                            <td>$7,800</td>
                            <td class="p-5"><div data-render="sparkline"></div></td>
                            <td class="p-5"><a href="#" class="btn btn-default btn-sm"><i class="fa fa-cog"></i> View Details</a></td>
                        </tr>
                        <tr>
                            <td>May</td>
                            <td>1,023 items sold</td>
                            <td>$10,230</td>
                            <td class="p-5"><div data-render="sparkline"></div></td>
                            <td class="p-5"><a href="#" class="btn btn-default btn-sm"><i class="fa fa-cog"></i> View Details</a></td>
                        </tr>
                        <tr>
                            <td>June</td>
                            <td>502 items sold</td>
                            <td>$5,020</td>
                            <td class="p-5"><div data-render="sparkline"></div></td>
                            <td class="p-5"><a href="#" class="btn btn-default btn-sm"><i class="fa fa-cog"></i> View Details</a></td>
                        </tr>
                        <tr>
                            <td>July</td>
                            <td>1,499 items sold</td>
                            <td>$14,990</td>
                            <td class="p-5"><div data-render="sparkline"></div></td>
                            <td class="p-5"><a href="#" class="btn btn-default btn-sm"><i class="fa fa-cog"></i> View Details</a></td>
                        </tr>
                        <tr>
                            <td>August</td>
                            <td>684 items sold</td>
                            <td>$6,840</td>
                            <td class="p-5"><div data-render="sparkline"></div></td>
                            <td class="p-5"><a href="#" class="btn btn-default btn-sm"><i class="fa fa-cog"></i> View Details</a></td>
                        </tr>
                        <tr>
                            <td>September</td>
                            <td>433 items sold</td>
                            <td>$4,330</td>
                            <td class="p-5"><div data-render="sparkline"></div></td>
                            <td class="p-5"><a href="#" class="btn btn-default btn-sm"><i class="fa fa-cog"></i> View Details</a></td>
                        </tr>
                        <tr>
                            <td>October</td>
                            <td>581 items sold</td>
                            <td>$5,810</td>
                            <td class="p-5"><div data-render="sparkline"></div></td>
                            <td class="p-5"><a href="#" class="btn btn-default btn-sm"><i class="fa fa-cog"></i> View Details</a></td>
                        </tr>
                    </tbody>
                </table>
                <!-- end table -->
            </div>
            <!-- end panel -->
        </div>
        <!-- end radius-container -->
    </div>
    <!-- end col-10 -->
    <!-- begin col-2 -->
    <div class="col-lg-2">
        <div class="row">
            <div class="col-lg-12 col-md-4 col-xs-6">
                <!-- begin widget -->
                <div class="widget widget-stat bg-inverse text-white">
                    <div class="widget-stat-btn"><a href="#" data-click="widget-reload"><i class="fa fa-repeat"></i></a></div>
                    <div class="widget-stat-number">13,492</div>
                    <div class="widget-stat-text">Items Sold</div>
                </div>
                <!-- end widget -->
            </div>
            <div class="col-lg-12 col-md-4 col-xs-6">
                <!-- begin widget -->
                <div class="widget widget-stat bg-inverse text-white">
                    <div class="widget-stat-btn"><a href="#" data-click="widget-reload"><i class="fa fa-repeat"></i></a></div>
                    <div class="widget-stat-number">$139K <i class="fa fa-caret-up text-lime-light"></i></div>
                    <div class="widget-stat-text">Revenue</div>
                </div>
                <!-- end widget -->
            </div>
            <div class="col-lg-12 col-md-4 col-xs-6">
                <!-- begin widget -->
                <div class="widget widget-stat bg-inverse text-white">
                    <div class="widget-stat-btn"><a href="#" data-click="widget-reload"><i class="fa fa-repeat"></i></a></div>
                    <div class="widget-stat-number">1.2m</div>
                    <div class="widget-stat-text">Page Views</div>
                </div>
                <!-- end widget -->
            </div>
            <div class="col-lg-12 col-md-4 col-xs-6">
                <!-- begin widget -->
                <div class="widget widget-stat bg-inverse text-white">
                    <div class="widget-stat-btn"><a href="#" data-click="widget-reload"><i class="fa fa-repeat"></i></a></div>
                    <div class="widget-stat-number">135k <i class="fa fa-caret-down text-danger-light"></i></div>
                    <div class="widget-stat-text">Visitors</div>
                </div>
                <!-- end widget -->
            </div>
            <div class="col-lg-12 col-md-4 col-xs-6">
                <!-- begin widget -->
                <div class="widget widget-stat bg-inverse text-white">
                    <div class="widget-stat-btn"><a href="#" data-click="widget-reload"><i class="fa fa-repeat"></i></a></div>
                    <div class="widget-stat-number">10.29%</div>
                    <div class="widget-stat-text">Bounce Rate</div>
                </div>
                <!-- end widget -->
            </div>
            <div class="col-lg-12 col-md-4 col-xs-6">
                <!-- begin widget -->
                <div class="widget widget-stat bg-inverse text-white">
                    <div class="widget-stat-btn"><a href="#" data-click="widget-reload"><i class="fa fa-repeat"></i></a></div>
                    <div class="widget-stat-number">54.3k <i class="fa fa-caret-down text-danger-light"></i></div>
                    <div class="widget-stat-text">New Visitors</div>
                </div>
                <!-- end widget -->
            </div>
            <div class="col-lg-12 col-md-4 col-xs-6">
                <!-- begin widget -->
                <div class="widget widget-stat bg-inverse text-white">
                    <div class="widget-stat-btn"><a href="#" data-click="widget-reload"><i class="fa fa-repeat"></i></a></div>
                    <div class="widget-stat-number">60.4k</div>
                    <div class="widget-stat-text">Returned Visitors</div>
                </div>
                <!-- end widget -->
            </div>
            <div class="col-lg-12 col-md-4 col-xs-6">
                <!-- begin widget -->
                <div class="widget widget-stat bg-inverse text-white">
                    <div class="widget-stat-btn"><a href="#" data-click="widget-reload"><i class="fa fa-repeat"></i></a></div>
                    <div class="widget-stat-number">05:10 <i class="fa fa-caret-up text-lime-light"></i></div>
                    <div class="widget-stat-text">Avg. Time on Site</div>
                </div>
                <!-- end widget -->
            </div>
        </div>
    </div>
    <!-- end col-2 -->
</div>
<!-- end row -->

<!-- begin #footer -->
<div id="footer" class="footer">
    <span class="pull-right">
        <a href="javascript:;" class="btn-scroll-to-top" data-click="scroll-top">
            <i class="fa fa-arrow-up"></i> <span class="hidden-xs">Back to Top</span>
        </a>
    </span>
    &copy; 2017 <b>IntelAccess</b> All Right Reserved
</div>
<!-- end #footer -->
@endsection

@section('js')
    <script src="{{ asset('plugins/bootstrap-calendar/js/bootstrap_calendar.min.js') }}"></script>
    <script src="{{ asset('plugins/chart-js/Chart.min.js') }}"></script>
    <script src="{{ asset('plugins/gritter/js/jquery.gritter.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap-calendar/js/bootstrap_calendar.min.js') }}"></script>
    <script src="{{ asset('plugins/DataTables/media/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('plugins/DataTables/media/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('js/page-index-v3.demo.min.js') }}"></script>
    <script src="{{ asset('js/apps.min.js') }}"></script>    
@endsection