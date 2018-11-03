<div id="header" class="header navbar navbar-inverse navbar-fixed-top">
    <!-- begin container-fluid -->
    <div class="container-fluid">
        <!-- begin mobile sidebar expand / collapse button -->
        <div class="navbar-header">
            <a href="{{ route('dashboard') }}" class="navbar-brand">
                <img src="{{ asset('img/logo.png') }}" class="logo" alt="" /> Pilgrims Hostel
            </a>
            <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- end mobile sidebar expand / collapse button -->
        
        <!-- begin navbar-right -->
        <ul class="nav navbar-nav navbar-right">
            {{-- <li class="dropdown">
                <a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle has-notify" data-click="toggle-notify">
                    <i class="fa fa-bell"></i>
                </a>
                <ul class="dropdown-menu dropdown-notification pull-right">
                    <li class="dropdown-header">Notifications (5)</li>
                    <li class="notification-item">
                        <a href="javascript:;">
                            <div class="media"><i class="fa fa-exclamation-triangle"></i></div>
                            <div class="message">
                                <h6 class="title">Server Error Reports</h6>
                                <div class="time">3 minutes ago</div>
                            </div>
                            <div class="option" data-toggle="tooltip" data-title="Mark as Read" data-click="set-message-status" data-status="unread" data-container="body">
                                <i class="fa fa-circle-o"></i>
                            </div>
                        </a>
                    </li>
                    <li class="notification-item">
                        <a href="javascript:;">
                            <div class="media"><img src="assets/img/user_1.jpg" alt="" /></div>
                            <div class="message">
                                <h6 class="title">Solvia Smith</h6>
                                <p class="desc">Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                <div class="time">25 minutes ago</div>
                            </div>
                            <div class="option read" data-toggle="tooltip" data-title="Mark as Unread" data-click="set-message-status" data-status="read" data-container="body">
                                <i class="fa fa-circle-o"></i>
                            </div>
                        </a>
                    </li>
                    <li class="notification-item">
                        <a href="javascript:;">
                            <div class="media"><img src="assets/img/user_2.jpg" alt="" /></div>
                            <div class="message">
                                <h6 class="title">Olivia</h6>
                                <p class="desc">Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                <div class="time">35 minutes ago</div>
                            </div>
                            <div class="option read" data-toggle="tooltip" data-title="Mark as Unread" data-click="set-message-status" data-status="read" data-container="body">
                                <i class="fa fa-circle-o"></i>
                            </div>
                        </a>
                    </li>
                    <li class="notification-item">
                        <a href="javascript:;">
                            <div class="media"><i class="fa fa-user-plus media-object"></i></div>
                            <div class="message">
                                <h6 class="title"> New User Registered</h6>
                                <div class="time">1 hour ago</div>
                            </div>
                            <div class="option read" data-toggle="tooltip" data-title="Mark as Unread" data-click="set-message-status" data-status="read" data-container="body">
                                <i class="fa fa-circle-o"></i>
                            </div>
                        </a>
                    </li>
                    <li class="notification-item">
                        <a href="javascript:;">
                            <div class="media bg-success"><i class="fa fa-credit-card"></i></div>
                            <div class="message">
                                <h6 class="title"> New Item Sold</h6>
                                <div class="time">2 hour ago</div>
                            </div>
                            <div class="option read" data-toggle="tooltip" data-title="Mark as Read" data-click="set-message-status" data-status="read" data-container="body">
                                <i class="fa fa-circle-o"></i>
                            </div>
                        </a>
                    </li>
                    <li class="dropdown-footer text-center">
                        <a href="javascript:;">View more</a>
                    </li>
                </ul>
            </li> --}}
            <li class="dropdown navbar-user">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="image"><img src="{{ asset('img/user_profile.jpg') }}" alt="" /></span>
                    <span class="hidden-xs">John Smith</span> <b class="caret"></b>
                </a>
                <ul class="dropdown-menu pull-right">
                    <li><a href="javascript:;">Edit Profile</a></li>
                    <li><a href="javascript:;"><span class="badge badge-danger pull-right">2</span> Inbox</a></li>
                    <li><a href="javascript:;">Calendar</a></li>
                    <li><a href="javascript:;">Setting</a></li>
                    <li class="divider"></li>
                    <li><a href="javascript:;">Log Out</a></li>
                </ul>
            </li>
            {{-- <li>
                <a href="javascript:;" data-click="right-sidebar-toggled">
                    <i class="fa fa-align-left"></i>
                </a>
            </li> --}}
        </ul>
        <!-- end navbar-right -->
    </div>
    <!-- end container-fluid -->
</div>