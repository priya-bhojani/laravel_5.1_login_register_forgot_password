    <!DOCTYPE html>
    <!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
    <!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
    <!--[if !IE]><!-->
    <html lang="en" class="no-js">
        <!--<![endif]-->
        <!-- BEGIN HEAD -->
        <head>
            <meta charset="utf-8"/>
            <title>Dashboard | Rubicon ERP System</title>
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
            <meta content="" name="description"/>
            <meta content="" name="author"/>
            <meta name="MobileOptimized" content="320">
            <!-- BEGIN GLOBAL MANDATORY STYLES -->
            <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
            <link href="{{ URL::asset('assets/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>
            <link href="{{ URL::asset('assets/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css"/>
            <link href="{{ URL::asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
            <link href="{{ URL::asset('assets/plugins/uniform/css/uniform.default.css') }}" rel="stylesheet" type="text/css"/>
            <!-- END GLOBAL MANDATORY STYLES -->
            <!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
            <link href="{{ URL::asset('assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css') }}" rel="stylesheet" type="text/css"/>
            <!-- END PAGE LEVEL PLUGIN STYLES -->
            <!-- BEGIN THEME STYLES -->
            <link href="{{ URL::asset('assets/css/style-crm.css') }}" rel="stylesheet" type="text/css"/>
            <link href="{{ URL::asset('assets/css/style-responsive.css') }}" rel="stylesheet" type="text/css"/>
            <link href="{{ URL::asset('assets/css/plugins.css') }}" rel="stylesheet" type="text/css"/>
            <link href="{{ URL::asset('assets/css/pages/tasks.css') }}" rel="stylesheet" type="text/css"/>
            <link href="{{ URL::asset('assets/css/themes/default.css') }}" rel="stylesheet" type="text/css" id="style_color"/>
            <link href="{{ URL::asset('assets/css/custom.css') }}" rel="stylesheet" type="text/css"/>
            <!-- END THEME STYLES -->
            <link rel="shortcut icon" href="favicon.ico"/>
        </head>
        <!-- END HEAD -->
        <!-- BEGIN BODY -->
        <body class="page-header-fixed page-sidebar-fixed page-actions-none">
            <!-- BEGIN HEADER -->
            <div class="header navbar navbar-fixed-top">
                <!-- BEGIN TOP NAVIGATION BAR -->
                <div class="header-inner">
                    <!-- BEGIN LOGO -->
                    <div class="page-logo">
                        <a href="index.html">
                            <img src="{{ URL::asset('assets/img/logo.png') }}" alt="logo"/>
                        </a>
                    </div>
                    <!-- END LOGO -->
                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                    <a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <img src="{{ URL::asset('assets/img/menu-toggler.png') }}" alt=""/>
                    </a>
                    <!-- END RESPONSIVE MENU TOGGLER -->
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <ul class="nav navbar-nav pull-right">
                        <li id="header-search">
                            <form class="search-form search-form-header" role="form" action="index.html">
                                <div class="input-icon right">
                                    <i class="icon-magnifier"></i>
                                    <input type="text" class="form-control input-sm" name="query" placeholder="Search...">
                                </div>
                            </form>
                        </li>


                        <!-- BEGIN TODO DROPDOWN -->
                        <li class="dropdown" id="header_task_bar">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <i class="icon-plus"></i>
                            </a>
                            <ul class="dropdown-menu extended tasks">

                                <li>
                                    <a href="">
                                        <span class="label label-icon">
                                            <i class="icon-briefcase"></i>
                                        </span>
                                        COMPANY
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="label label-icon">
                                            <i class="icon-pin"></i>
                                        </span>
                                        VACANCY
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="label label-icon">
                                            <i class="icon-volume-2"></i>
                                        </span>
                                        CONTACT ATTEMPT
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="label label-icon">
                                            <i class="icon-calendar"></i>
                                        </span>
                                        CALENDAR ENTRY
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="label label-icon">
                                            <i class="icon-envelope-letter"></i>
                                        </span>
                                        MESSAGE
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <!-- END TODO DROPDOWN -->
                        <!-- BEGIN NOTIFICATION DROPDOWN -->

                        <li class="dropdown" id="header_notification_bar">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <i class="icon-bell"></i>
                                <span class="badge">
                                    5 </span>
                            </a>
                            <ul class="dropdown-menu extended notification">
                                <li>
                                    <p>
                                        You have 4 new notifications
                                    </p>
                                </li>
                                <li>
                                    <ul class="dropdown-menu-list scroller" style="height: 180px;">
                                        <li>
                                            <a href="#">
                                                <span class="label label-sm label-icon label-info">
                                                    <i class="icon-user"></i>
                                                </span>
                                                New user registered. <span class="time">
                                                    Just now </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="label label-sm label-icon label-danger">
                                                    <i class="fa fa-bolt"></i>
                                                </span>
                                                Server maintenance sc...<span class="time">
                                                    15 mins </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="label label-sm label-icon label-warning">
                                                    <i class="fa fa-bell-o"></i>
                                                </span>
                                                Meeting today at 14:00 <span class="time">
                                                    22 mins </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="label label-sm label-icon label-success">
                                                    <i class="icon-check"></i>
                                                </span>
                                                New Match Found <span class="time">
                                                    40 mins </span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="external">
                                    <a href="#">See all notifications <i class="fa fa-angle-right"></i></a>
                                </li>
                            </ul>
                        </li>
                        <!-- END NOTIFICATION DROPDOWN -->
                        <!-- BEGIN INBOX DROPDOWN -->
                        <li class="dropdown" id="header_inbox_bar">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <i class="icon-bubbles"></i>
                                <span class="badge">
                                    5 </span>
                            </a>
                            <ul class="dropdown-menu extended inbox">
                                <li>
                                    <p>
                                        You have 4 new messages
                                    </p>
                                </li>
                                <li>
                                    <ul class="dropdown-menu-list scroller" style="height: 250px;">
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                    <img src="{{ URL::asset('assets/img/avatar2.jpg') }}" alt=""/>
                                                </span>
                                                <span class="subject">
                                                    <span class="from">
                                                        Barry Allen </span>
                                                    <span class="time">
                                                        Just Now </span>
                                                </span>
                                                <span class="message">
                                                    Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                    <img src="{{ URL::asset('assets/img/avatar3.jpg') }}" alt=""/>
                                                </span>
                                                <span class="subject">
                                                    <span class="from">
                                                        Oliver Queen </span>
                                                    <span class="time">
                                                        16 mins </span>
                                                </span>
                                                <span class="message">
                                                    Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                    <img src="{{ URL::asset('assets/img/avatar1.jpg') }}" alt=""/>
                                                </span>
                                                <span class="subject">
                                                    <span class="from">
                                                        Sarah Lance </span>
                                                    <span class="time">
                                                        2 hrs </span>
                                                </span>
                                                <span class="message">
                                                    Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                    <img src="{{ URL::asset('assets/img/avatar2.jpg') }}" alt=""/>
                                                </span>
                                                <span class="subject">
                                                    <span class="from">
                                                        Barry Allen </span>
                                                    <span class="time">
                                                        40 mins </span>
                                                </span>
                                                <span class="message">
                                                    Vivamus sed auctor nibh congue nibh... </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                    <img src="{{ URL::asset('assets/img/avatar3.jpg') }}" alt=""/>
                                                </span>
                                                <span class="subject">
                                                    <span class="from">
                                                        Oliver Queen </span>
                                                    <span class="time">
                                                        46 mins </span>
                                                </span>
                                                <span class="message">
                                                    Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="external">
                                    <a href="#">See all messages <i class="fa fa-angle-right"></i></a>
                                </li>
                            </ul>
                        </li>
                        <!-- END INBOX DROPDOWN -->
                        <li class="devider">
                            &nbsp;
                        </li>
                        <!-- BEGIN USER LOGIN DROPDOWN -->
                        <li class="dropdown user">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img alt="" src="{{ URL::asset('assets/img/avatar3_small.jpg') }}"/>
                                <span class="username username-hide-on-mobile">
                                    <?php 
                                        echo $first_name.' '.$last_name;
                                    ?>
                                </span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#"><i class="icon-list"></i> My Tasks <span class="badge badge-danger">
                                            7 </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-envelope"></i> My Inbox <span class="badge badge-info">
                                            3 </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-question"></i> Help</a>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-settings"></i> Settings</a>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-lock"></i> Lock Screen</a>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-calendar"></i> My Calendar</a>
                                </li>
                                <li class="divider">
                                </li>
                                <li>
                                    <a href="auth/logout"><i class="icon-key"></i> Log Out</a>
                                </li>
                            </ul>
                        </li>
                        <!-- END USER LOGIN DROPDOWN -->
                        <!-- ACTION PANEL TOGGLE -->
                        <li href="" id="action-panel-toggle">
                            |
                        </li>
                        <!-- END ACTION PANEL TOGGLE -->
                    </ul>
                    <!-- END TOP NAVIGATION MENU -->

                </div>
                <!-- END TOP NAVIGATION BAR -->
            </div>
            <!-- END HEADER -->
            <div class="clearfix">
            </div>
            <!--BEGIN CONTAINER -->
            <div class = "page-container">
                @include('includes.dashboard_sidebar')