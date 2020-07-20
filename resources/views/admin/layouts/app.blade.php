<!DOCTYPE html>
<html>
<head>  
    @include('admin.partials._head')    
</head>
<body class="page-header-fixed">
    <div class="overlay"></div>
    <main class="page-content content-wrap">
        <div class="navbar">
            @include('admin.partials._navbar')
        </div><!-- Navbar -->
        <div class="page-sidebar sidebar">
            @include('admin.partials._sidebar')
        </div><!-- Page Sidebar -->
        <div class="page-inner">
            <div class="page-title">
                <h3>@yield('head-title')</h3>
                <div class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li><a href="index-2.html">Home</a></li>
                        <li class="active">@yield('head-title2')</li>
                    </ol>
                </div>
            </div>
            <div id="main-wrapper">
                @yield('content')
            </div><!-- Main Wrapper -->
            <div class="page-footer">
                <p class="no-s">2015 &copy; Modern by Steelcoders.</p>
            </div>
        </div><!-- Page Inner -->
    </main><!-- Page Content -->
    <nav class="cd-nav-container" id="cd-nav">
        <header>
            <h3>Navigation</h3>
            <a href="#0" class="cd-close-nav">Close</a>
        </header>
        <ul class="cd-nav list-unstyled">
            <li class="cd-selected" data-menu="index">
                <a href="javsacript:void(0);">
                    <span>
                        <i class="glyphicon glyphicon-home"></i>
                    </span>
                    <p>Dashboard</p>
                </a>
            </li>
            <li data-menu="profile">
                <a href="javsacript:void(0);">
                    <span>
                        <i class="glyphicon glyphicon-user"></i>
                    </span>
                    <p>Profile</p>
                </a>
            </li>
            <li data-menu="inbox">
                <a href="javsacript:void(0);">
                    <span>
                        <i class="glyphicon glyphicon-envelope"></i>
                    </span>
                    <p>Mailbox</p>
                </a>
            </li>
            <li data-menu="#">
                <a href="javsacript:void(0);">
                    <span>
                        <i class="glyphicon glyphicon-tasks"></i>
                    </span>
                    <p>Tasks</p>
                </a>
            </li>
            <li data-menu="#">
                <a href="javsacript:void(0);">
                    <span>
                        <i class="glyphicon glyphicon-cog"></i>
                    </span>
                    <p>Settings</p>
                </a>
            </li>
            <li data-menu="calendar">
                <a href="javsacript:void(0);">
                    <span>
                        <i class="glyphicon glyphicon-calendar"></i>
                    </span>
                    <p>Calendar</p>
                </a>
            </li>
        </ul>
    </nav>
    <div class="cd-overlay"></div>


    <!-- Javascripts -->

    <script src="/assets/plugins/3d-bold-navigation/js/modernizr.js"></script>
    <script src="/assets/plugins/offcanvasmenueffects/js/snap.svg-min.js"></script>
    <script src="/assets/plugins/jquery/jquery-2.1.4.min.js"></script>
    <script src="/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="/assets/plugins/pace-master/pace.min.js"></script>
    <script src="/assets/plugins/jquery-blockui/jquery.blockui.js"></script>
    <script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="/assets/plugins/switchery/switchery.min.js"></script>
    <script src="/assets/plugins/uniform/jquery.uniform.min.js"></script>
    <script src="/assets/plugins/offcanvasmenueffects/js/classie.js"></script>
    <script src="/assets/plugins/offcanvasmenueffects/js/main.js"></script>
    <script src="/assets/plugins/waves/waves.min.js"></script>
    <script src="/assets/plugins/3d-bold-navigation/js/main.js"></script>
    <script src="/assets/plugins/waypoints/jquery.waypoints.min.js"></script>
    <script src="/assets/plugins/jquery-counterup/jquery.counterup.min.js"></script>
    <script src="/assets/plugins/toastr/toastr.min.js"></script>
    <script src="/assets/plugins/flot/jquery.flot.min.js"></script>
    <script src="/assets/plugins/flot/jquery.flot.time.min.js"></script>
    <script src="/assets/plugins/flot/jquery.flot.symbol.min.js"></script>
    <script src="/assets/plugins/flot/jquery.flot.resize.min.js"></script>
    <script src="/assets/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="/assets/plugins/curvedlines/curvedLines.js"></script>
    <script src="/assets/plugins/metrojs/MetroJs.min.js"></script>
    <script src="/assets/js/modern.js"></script>
    <script src="/assets/js/pages/dashboard.js"></script>
    
</body>
</html>