
<!DOCTYPE html>
<html>
<head>
    <title>Causes Grid</title>
    <link rel="stylesheet" href="{{asset('fronend/css/Causes_Grid.css')}}" type="text/css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="icon" href="{{asset('fronend/home/img/nivo-logo.png')}}">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
@include('header.header')
<body style="background-color: #fcfcfc;">
<section class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>Causes Grid</h2>
            <ul>
                <li>
                    <a href="#">Home</a>
                </li>
                <i class="fa fa-chevron-right" style="color:#bab0b0"></i>
                <li>Causes Grid</li>
            </ul>
        </div>
    </div>
</section>

<section class="good-causes-area">
    <div class="container">
        <div class="section-title">
            <span>Good Causes</span>
            <h2>Help the Poor Throught Us</h2>
            <p>The life around us is full of difficulties, helping people as well as
                helping ourselves. So help them when these little
                things can make us feel happier everyday.</p>
        </div>
        <div class="row">
            @foreach($causes as $cause)
            <div class="col-lg-4 col-md-6">
                <div class="single-good-causes">
                    <i class="{{ $cause->icon }}" style="color: {{$cause->style}}"></i>
                    <h3 style="font-weight: 700; font-size: 20px">{{ $cause->title }}</h3>
                    <p style="color: gray;font-size: 15px;line-height: 25px;">
                        {{ $cause->text }}
                    </p>
                    <a class="read-more" href="#">
                        Read More
                    </a>
                </div>
            </div>
            @endforeach
{{--            <div class="col-lg-4 col-md-6">--}}
{{--                <div class="single-good-causes">--}}
{{--                    <i class='fas fa-hand-holding-usd hand1' style="color: #eca66b"></i>--}}
{{--                    <h3 style="font-weight: 700; font-size: 20px">Helping Hand</h3>--}}
{{--                    <p style="color: gray;font-size: 15px;line-height: 25px;">--}}
{{--                        Lorem ipsum dolor amet, consectetur amet adipiscing elit, sed do eiusmod  incididunt labore  dolore.--}}
{{--                    </p>--}}
{{--                    <a class="read-more" href="#">--}}
{{--                        Read More--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
</section>

<section class="good-causes-area">
    <div class="container">
        <div class="section-title">
            <span>Active Campaing</span>
            <h2>Some Good Causes</h2>
            <p>Do you believe that every time you do a good job, not only will the happy people help
                you but also the happy people will help you, and even the
                people around you will be happy too.</p>
        </div>
        <div class="stage-outer"></div>
    </div>
</section>
<div class="slide-img">
    <div class="container">
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
