<div id="sidebar" class="sidebar">
    <!-- begin sidebar scrollbar -->
    <div data-scrollbar="true" data-height="100%">
        <!-- begin sidebar nav -->
        <ul class="nav">
            {{-- <li class="nav-user">
                <div class="image">
                    <img src="assets/img/user_profile.jpg" alt="" />
                </div>
                <div class="info">
                    <div class="name dropdown">
                        <a href="javascript:;" data-toggle="dropdown">Thomas Evans <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="javascript:;">Edit Profile</a></li>
                            <li><a href="javascript:;"><span class="badge badge-danger pull-right">2</span> Inbox</a></li>
                            <li><a href="javascript:;">Calendar</a></li>
                            <li><a href="javascript:;">Setting</a></li>
                            <li class="divider"></li>
                            <li><a href="javascript:;">Log Out</a></li>
                        </ul>
                    </div>
                    <div class="position">Front End Designer</div>
                </div>
            </li> --}}
            <li class="nav-header">Navigation</li>
            <li class="has-sub {{ Request::path() == 'dashboard' ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}">
                    <i class="fa fa-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="has-sub {{ Request::path() == 'location' ? 'active' : '' || Request::path() == 'suppliers' ? 'active' : '' || Request::path() == 'department' ? 'active' : '' || Request::path() == 'category' ? 'active' : '' || Request::path() == 'product' ? 'active' : ''}}">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-suitcase"></i>
                    <span>Master Details</span> 
                </a>
                <ul class="sub-menu {{ Request::path() == 'location' ? 'active' : '' || Request::path() == 'suppliers' ? 'active' : '' || Request::path() == 'department' ? 'active' : '' || Request::path() == 'category' ? 'active' : '' || Request::path() == 'product' ? 'active' : '' }}">
                    <li class="{{ Request::path() == 'location' ? 'active' : '' }}">
                        <a href="/location">Locations</a>
                    </li>
                    <li class="{{ Request::path() == 'suppliers' ? 'active' : '' }}">
                        <a href="{{ route('suppliers') }}">Suppliers</a>
                    </li>
                    <li class="has-sub {{ Request::path() == 'department' ? 'active' : '' || Request::path() == 'category' ? 'active' : '' || Request::path() == 'product' ? 'active' : '' }}">
                        <a href="javascript:;">
                            <b class="caret pull-right"></b>
                            <span>Prooduct Details</span>
                        </a>
                        <ul class="sub-menu">
                            <li class="{{ Request::path() == 'department' ? 'active' : '' }}">
                                <a href="{{ route('department') }}">Department</a>
                            </li>
                            <li class="{{ Request::path() == 'category' ? 'active' : '' }}">
                                <a href="{{ route('category') }}">Category</a>
                            </li>
                            <li class="{{ Request::path() == 'product' ? 'active' : '' }}">
                                <a href="{{ route('product') }}">Products</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-file-o"></i>
                    <span>Inventory</span> 
                </a>
                <ul class="sub-menu">
                    <li><a href="ui_general.html">Opening Stock</a></li>
                    <li class="has-sub">
                        <a href="javascript:;">
                            <b class="caret pull-right"></b>
                            <span>Purchase Order [PO]</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="javascript:;">New PO</a></li>
                            <li><a href="javascript:;">View PO Details</a></li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a href="javascript:;">
                            <b class="caret pull-right"></b>
                            <span>Goods Receive Note [GRN]</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="javascript:;">New GRN</a></li>
                            <li><a href="javascript:;">View GRN Details</a></li>
                        </ul>
                    </li>
                    <li><a href="ui_general.html">Issue Note [IN]</a></li>
                    <li><a href="ui_general.html">Transfer Note [TN]</a></li>
                    <li><a href="ui_general.html">Stock Adjustment Note [SAN]</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-cogs"></i>
                    <span>Settings</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="page_blank.html">Blank Page</a></li>
                    <li><a href="page_with_fixed_footer.html">Page with Fixed Footer</a></li>
                    <li><a href="page_with_right_sidebar.html">Page with Right Sidebar</a></li>
                    <li><a href="page_with_minified_sidebar.html">Page with Minified Sidebar</a></li>
                    <li><a href="page_with_two_sidebar.html">Page with Two Sidebar</a></li>
                    <li><a href="page_with_top_menu.html">Page with Top Menu</a></li>
                </ul>
            </li>
            {{-- <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-align-left"></i> 
                    <span>Menu Level</span>
                </a>
                <ul class="sub-menu">
                    <li class="has-sub">
                        <a href="javascript:;">
                            <b class="caret pull-right"></b>
                            Menu 1.1
                        </a>
                        <ul class="sub-menu">
                            <li class="has-sub">
                                <a href="javascript:;">
                                    <b class="caret pull-right"></b>
                                    Menu 2.1
                                </a>
                                <ul class="sub-menu">
                                    <li><a href="javascript:;">Menu 3.1</a></li>
                                    <li><a href="javascript:;">Menu 3.2</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:;">Menu 2.2</a></li>
                            <li><a href="javascript:;">Menu 2.3</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:;">Menu 1.2</a></li>
                    <li><a href="javascript:;">Menu 1.3</a></li>
                </ul>
            </li> --}}
            <li class="divider has-minify-btn">
                <!-- begin sidebar minify button -->
                <a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-left"></i></a>
                <!-- end sidebar minify button -->
            </li>
        </ul>
        <!-- end sidebar nav -->
    </div>
    <!-- end sidebar scrollbar -->
</div>
<div class="sidebar-bg"></div>