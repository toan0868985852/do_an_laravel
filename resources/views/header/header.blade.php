<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FABV NGO-Donate</title>

    <link rel="stylesheet" type="text/css" href="{{asset('fronend/home/vendorabc/fontawesome/css/all.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('fronend/home/vendorabc/bootstrap3.3.7/css/bootstrap.css')}}">
    <link rel="icon" href="{{asset('fronend/home/img/nivo-logo.png')}}">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{asset('fronend/home/css/slider.css')}}">
    <link rel="stylesheet" href="{{asset('fronend/css/loader.css')}}">

</head>
<body>
{{--<div class="loader-img">--}}
{{--<img src="{{asset('fronend/img/lago2.png')}}" alt="">--}}
{{--<div class="loader">--}}
{{--    <span></span>--}}
{{--    <span></span>--}}
{{--    <span></span>--}}
{{--</div>--}}
{{--</div>--}}
<section class="main">
<header>
    <a href="{{route('home')}}" class="logo"><img src="{{asset('fronend/home/img/logo.png')}}" alt=""></a>
    <button class="menu-toggler">
        <span></span>
        <span></span>
        <span></span>
    </button>
    <ul class="navbar-menu">
        <li><a class="active" href="{{route('home')}}">Home</a></li>
        <li><a class="" href="{{route('about')}}">About</a></li>
        <li><a class="" href="{{route('even')}}">Event</a></li>
        <li><a class="" href="{{route('project')}}">Project</a></li>
        <li>
            <div class="dropdown">
                <button class="dropbtn js-item">Causes
                    <i class="fa fa-chevron-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="{{route('causes_grid')}}">Causes Grid</a>
                    <a href="{{route('causes_details')}}">Causes Details</a>
                </div>
            </div>
        </li>
        <li>
            <div class="dropdown">
                <button class="dropbtn js-item">Blog
                    <i class="fa fa-chevron-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="{{route('blog_grid')}}">Blog Grid</a>
                    <a href="{{url('home/blog_details_1/1')}}">Blog Details</a>
                </div>
            </div>
        </li>
        <li><a class="" href="#">Contact</a></li>
        @if(Auth::check())
            <li>
                <div class="dropdown seting-color">
                    <button class="dropbtn js-item setting-user">
                        <i class="far fa-user-circle"></i>
                        <i class="fa fa-chevron-down"></i>
                    </button>
                    <div class="dropdown-content conten-setting">
                        <a href="{{route('log_out')}}">Đăng xuất</a>
                    </div>
                </div>
            </li>
        @else
            <li><a class="donate__header2" href="{{route('login.index')}}"><i class="fas fa-sign-in-alt"></i></a></li>
        @endif

    </ul>
</header>
    @yield('home')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="{{asset('fronend/home/js/jsitem.js')}}"></script>
<script src="{{asset('fronend/home/js/slider.js')}}"></script>
<script src="{{asset('fronend/home/js/loader.js')}}"></script>
</section>
</body>
</html>

