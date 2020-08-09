
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <link rel="stylesheet" href="{{asset('backend/css/bootstrap.min.css')}}" >
    <link rel="icon" href="{{asset('fronend/img/lago2.png')}}">
    <link href="{{asset('backend/css/image.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/style.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{asset('backend/css/style-responsive.css')}}" rel="stylesheet"/>
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <link rel="stylesheet" href="{{asset('backend/css/font.css')}}" type="text/css"/>
    <script src="{{asset('backend/js/jquery2.0.3.min.js')}}"></script>
    <script src="{{asset('backend/js/raphael-min.js')}}"></script>
    <script src="{{asset('backend/js/morris.js')}}"></script>

</head>
<body>
<section id="container">
    <header class="header fixed-top clearfix">
        <div class="brand">
            <a href="index.html" class="logo">
                <img src="{{asset('fronend/img/lago2.png')}}" alt="">
                ADMIN
            </a>
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars"></div>
            </div>
        </div>
        <div class="top-nav clearfix">
            <ul class="nav pull-right top-menu">
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="fas fa-user-shield"></i>
                        <span class="username">
                    @if(Auth::check())
                        {{Auth::user()->name}}
                    @endif
                        </span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
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
                        <a class="active" href="{{route('admin.index')}}">
                            <i class="fas fa-tachometer-alt"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="sub-menu">
                        <a href="#">
                            <i class="fa fa-book"></i>
                            <span>Company information</span>
                            <i id="icon-1" class="fa fa-chevron-down"></i>
                        </a>
                        <ul class="sub">
                            <li><a href="typography.html">Introduction</a></li>
                            <li><a href="glyphicon.html">Completed projects</a></li>
                            <li><a href="grids.html">Ongoing projects</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="#">
                            <i class="fa fa-users"></i>
                            <span>User</span>
                            <i id="icon-2" class="fa fa-chevron-down"></i>
                        </a>
                        <ul class="sub">
                            <li><a href="{{route('register.index')}}">Subscribers</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="#">
                            <i class="fa fa-tasks"></i>
                            <span>Partner</span>
                            <i id="icon-3" class="fa fa-chevron-down"></i>
                        </a>
                        <ul class="sub">
                            <li><a href="form_component.html">Add object</a></li>
                            <li><a href="form_validation.html">List of partners</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="#">
                            <i class="fa fa-envelope"></i>
                            <span>Mail </span>
                            <i id="icon-mail" class="fa fa-chevron-down"></i>
                        </a>
                        <ul class="sub">
                            <li><a href="{{route('sendemail')}}">Sent</a></li>
                            <li><a href="{{route('mail')}}">Compose Mail</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="#">
                            <i class="fas fa-donate"></i>
                            <span>Donate</span>
                            <i id="icon-donate" class="fa fa-chevron-down"></i>
                        </a>
                        <ul class="sub">
                            <li><a href="chartjs.html">List of supporters</a></li>
                            <li><a href="chartjs.html">The most supporters</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="#">
                            <i class="fa fa-image"></i>
                            <span>Image</span>
                            <i id="icon-img" class="fa fa-chevron-down"></i>
                        </a>
                        <ul class="sub">
                            <li><a href="{{route('image')}}">List of photo categories</a></li>
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

