<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>project</title>
    <link rel="icon" href="{{asset('fronend/home/img/nivo-logo.png')}}">
    <!-- slide-->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <!--   icon  -->
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--javascript-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!--  css -->
    <link rel="stylesheet" href="{{asset('fronend/home/css/project.css')}}">
</head>
<body>
@include('header.header')
<section class="section">
    <span class="setting-background"></span>
    <div class="container">
        <h1>Event Grid</h1>
        <p class="link-title"><a href="#">Home</a> <i class="fa fa-angle-right"></i> <b>Projects</b></p>
    </div>
</section>
<div class="section-img">
    <div class="container">
    <div class="navigation">
        <ul>
            <li><a data-filter="all" class="button active">All</a></li>
            <li><a data-filter="child" class="button">Child</a></li>
            <li><a data-filter="charity" class="button">Charity</a></li>
            <li><a data-filter="plants" class="button">Plants</a></li>
            <li><a data-filter="sponsorship" class="button">Sponsorship</a></li>
            <li><a data-filter="volunteering" class="button">Volunteering</a></li>
        </ul>
    </div>
        <div class="navigation-img">
            @foreach($projects as $project)
                <div class="filter {{$project->type}}">
                    <img src="{{asset("fronend/home/img/projects/" . "$project->img" . "")}}" alt="">
                    <div class="overlay-1">
                        <div class="text"><a href=""><i class="fa fa-eye"></i></a></div>
                    </div>
                </div>
            @endforeach

{{--            <div class="filter charity sponsorship">--}}
{{--                <img src="{{asset('fronend/home/img/projects/22.jpg')}}" alt="">--}}
{{--                <div class="overlay-2">--}}
{{--                    <div class="text"><a href=""><i class="fa fa-eye"></i></a></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="filter plants plants">--}}
{{--                <img src="{{asset('fronend/home/img/projects/23.jpg')}}" alt="">--}}
{{--                <div class="overlay-3">--}}
{{--                    <div class="text"><a href=""><i class="fa fa-eye"></i></a></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="filter child sponsorship">--}}
{{--                <img src="{{asset('fronend/home/img/projects/24.jpg')}}" alt="">--}}
{{--                <div class="overlay-4">--}}
{{--                    <div class="text"><a href=""><i class="fa fa-eye"></i></a></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="filter charity volunteering">--}}
{{--                <img src="{{asset('fronend/home/img/projects/25.jpg')}}" alt="">--}}
{{--                <div class="overlay-5">--}}
{{--                    <div class="text"><a href=""><i class="fa fa-eye"></i></a></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="filter charity plants volunteering">--}}
{{--                <img src="{{asset('fronend/home/img/projects/26.jpg')}}" alt="">--}}
{{--                <div class="overlay-6">--}}
{{--                    <div class="text"><a href=""><i class="fa fa-eye"></i></a></div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
</div>
<div class="slide-img">
    <div class="container">
        <div class="slide-title">
            <span class="title__slide-img">Active Campaign</span>
            <h2 class="header__slide">Some Good Causes</h2>
            <p class="conten__slide">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore <br> magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas.
            </p>
            <img class="swiper-slide-icon__img" src="{{asset('fronend/home/img/projects/1%20(1).png')}}" width="210px" height="210px">
        </div>
        <div class="slide">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    @foreach($projects as $project)
                    <div class="swiper-slide">
                        <div class="slide__img">
                            <img src="{{asset("fronend/home/img/projects/" . "$project->img" . "")}}" alt="">
                        </div>
                        <div class="skill">
                            <div class="skill-bar">
                                <div class="skill-per" per="{{($project->so_tien_quyen_gop_duoc /$project->muc_tieu)* 100 }}"></div>
                            </div>
                            <div class="slill__text">
                                <div class="price">
                                    <span class="text__left">Raised: ${{$project->so_tien_quyen_gop_duoc}}</span>
                                    <span class="text__right">Goal: ${{$project->muc_tieu}}</span>
                                </div>
                                <hr>
                                    <h3>{{$project->ten_chien_dich}}</h3>
                                    <p>{{$project->content}}</p>
                                    <a class="read-more" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
{{--                    <div class="swiper-slide">--}}
{{--                        <div class="slide__img">--}}
{{--                            <img src="{{asset('fronend/home/img/projects/27.jpg')}}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="skill">--}}
{{--                            <div class="skill-bar">--}}
{{--                                <div class="skill-per" per="70"></div>--}}
{{--                            </div>--}}
{{--                            <div class="slill__text">--}}
{{--                                <div class="price">--}}
{{--                                    <span class="text__left">Raised: $5000.00</span>--}}
{{--                                    <span class="text__right">Goal: $8000.00</span>--}}
{{--                                </div>--}}
{{--                                <hr>--}}
{{--                                <h3>Help Us To Send Food</h3>--}}
{{--                                <p>Lorem ipsum dolor sit amet, consectetur scinelit, sed do eiusmod tempor incididunt</p>--}}
{{--                                <a class="read-more" href="#">Read More</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="swiper-slide">--}}
{{--                        <div class="slide__img">--}}
{{--                            <img src="{{asset('fronend/home/img/projects/28.jpg')}}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="skill">--}}
{{--                            <div class="skill-bar">--}}
{{--                                <div class="skill-per" per="45"></div>--}}
{{--                            </div>--}}
{{--                            <div class="slill__text">--}}
{{--                                <div class="price">--}}
{{--                                    <span class="text__left">Raised: $5000.00</span>--}}
{{--                                    <span class="text__right">Goal: $8000.00</span>--}}
{{--                                </div>--}}
{{--                                <hr>--}}
{{--                                <h3>Clothes For Everyone</h3>--}}
{{--                                <p>Lorem ipsum dolor sit amet, consectetur scinelit, sed do eiusmod tempor incididunt</p>--}}
{{--                                <a class="read-more" href="#">Read More</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="swiper-slide">--}}
{{--                        <div class="slide__img">--}}
{{--                            <img src="{{asset('fronend/home/img/projects/29.jpg')}}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="skill">--}}
{{--                            <div class="skill-bar">--}}
{{--                                <div class="skill-per" per="50"></div>--}}
{{--                            </div>--}}
{{--                            <div class="slill__text">--}}
{{--                                <div class="price">--}}
{{--                                    <span class="text__left">Raised: $5000.00</span>--}}
{{--                                    <span class="text__right">Goal: $8000.00</span>--}}
{{--                                </div>--}}
{{--                                <hr>--}}
{{--                                <h3>School For Poor Children</h3>--}}
{{--                                <p>Lorem ipsum dolor sit amet, consectetur scinelit, sed do eiusmod tempor incididunt</p>--}}
{{--                                <a class="read-more" href="#">Read More</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</div>
@include('footer.footer')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="{{asset('fronend/home/js/project.js')}}"></script>
</body>
</html>
