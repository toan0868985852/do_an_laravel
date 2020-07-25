
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="{{asset('backend/css/bootstrap.min.css')}}" >
    {{--icon--}}
    <link rel="icon" href="{{asset('fronend/img/lago2.png')}}">
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="{{asset('backend/css/style.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{asset('backend/css/style-responsive.css')}}" rel="stylesheet"/>
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{asset('backend/css/font.css')}}" type="text/css"/>
    <link href="{{asset('backend/css/font-awesome.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('backend/css/morris.css')}}" type="text/css"/>
    <!-- calendar -->
    <link rel="stylesheet" href="{{asset('backend/css/monthly.css')}}">
    <!-- //calendar -->
    <!-- //font-awesome icons -->
    <script src="{{asset('backend/js/jquery2.0.3.min.js')}}"></script>
    <script src="{{asset('backend/js/raphael-min.js')}}"></script>
    <script src="{{asset('backend/js/morris.js')}}"></script>
</head>
<body>
<section id="container">
    <!--header start-->
    <header class="header fixed-top clearfix">
        <!--logo start-->
        <div class="brand">
            <a href="index.html" class="logo">
                ADMIN
            </a>
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars"></div>
            </div>
        </div>
        <div class="top-nav clearfix">
            <!--search & user info start-->
            <ul class="nav pull-right top-menu">
                <li>
                    <input type="text" class="form-control search" placeholder=" Search">
                </li>
                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <img alt="" src="{{asset('fronend/img/lago2.png')}}">
                        <span class="username">
                    @if(Auth::check())
                        {{Auth::user()->name}}
                    @endif
                        </span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                        <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                        <li><a href="{{route('log_out')}}"><i class="fa fa-key"></i> Đăng xuất</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </header>
    <aside>
        <div id="sidebar" class="nav-collapse">
            <!-- sidebar menu start-->
            <div class="leftside-navigation">
                <ul class="sidebar-menu" id="nav-accordion">
                    <li>
                        <a class="active" href="index.html">
                            <i class="fa fa-dashboard"></i>
                            <span>Tổng quan</span>
                        </a>
                    </li>

                    <li class="sub-menu">
                        <a href="#">
                            <i class="fa fa-book"></i>
                            <span>Thông tin về công ty</span>
                        </a>
                        <ul class="sub">
                            <li><a href="typography.html">Giới thiệu về công ty</a></li>
                            <li><a href="glyphicon.html">Những dự án dã hoàn thành</a></li>
                            <li><a href="grids.html">những dự án đang thực hiện</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="#">
                            <i class="fa fa-users"></i>
                            <span>Những người đã đăng ký</span>
                        </a>
                        <ul class="sub">
                            <li><a href="basic_table.html">Liệt kê những người đã đăng ký</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="#">
                            <i class="fa fa-tasks"></i>
                            <span>Danh sách đối tác</span>
                        </a>
                        <ul class="sub">
                            <li><a href="form_component.html">Thêm đối tác</a></li>
                            <li><a href="form_validation.html">Liệt kê các đối tác</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="#">
                            <i class="fa fa-envelope"></i>
                            <span>Mail </span>
                        </a>
                        <ul class="sub">
                            <li><a href="mail.html">Inbox</a></li>
                            <li><a href="mail_compose.html">Compose Mail</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="#">
                            <i class="fa fa-dollar"></i>
                            <span>Donate</span>
                        </a>
                        <ul class="sub">
                            <li><a href="chartjs.html">Liệt kê người donate</a></li>
                            <li><a href="chartjs.html">Những người donate nhiều nhất</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="#">
                            <i class="fa fa-image"></i>
                            <span>Danh mục ảnh</span>
                        </a>
                        <ul class="sub">
                            <li><a href="chartjs.html">Liệt kê danh mục ảnh</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </aside>
    <section id="main-content">
        <section class="wrapper">
            @yield('content_admin')
        </section>
    </section>
</section>
<script src="{{asset('backend/js/bootstrap.js')}}"></script>
<script src="{{asset('backend/js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('backend/js/scripts.js')}}"></script>
<script src="{{asset('backend/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('backend/js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('backend/js/jquery.scrollTo.js')}}"></script>
</body>
</html>

