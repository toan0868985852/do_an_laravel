
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
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna
                aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                viverra maecenas.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-good-causes">
                    <i class='fas fa-gift'></i>
                    <h3>Surprised Box</h3>
                    <p>Lorem ipsum dolor amet, consectetur amet adipiscing elit, sed do eiusmod  incididunt labore  dolore.</p>
                    <a class="read-more" href="#">
                        Read More
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-good-causes">
                    <i class='fas fa-hand-holding-usd hand1' style="color: #eca66b"></i>
                    <h3>Helping Hand</h3>
                    <p>Lorem ipsum dolor amet, consectetur amet adipiscing elit, sed do eiusmod  incididunt labore  dolore.</p>
                    <a class="read-more" href="#">
                        Read More
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-good-causes">
                    <i class='fas fa-hand-holding-usd hand2'  style="color: #54c983"></i>
                    <h3>Aid For Children</h3>
                    <p>Lorem ipsum dolor amet, consectetur amet adipiscing elit, sed do eiusmod  incididunt labore  dolore.</p>
                    <a class="read-more" href="#">
                        Read More
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-good-causes">
                    <i class='fas fa-users' style="color: #62d1d3"></i>
                    <h3>Helping Hand</h3>
                    <p>Lorem ipsum dolor amet, consectetur amet adipiscing elit, sed do eiusmod  incididunt labore  dolore.</p>
                    <a class="read-more" href="#">
                        Read More
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-good-causes">
                    <i class='fas fa-apple-alt' style="color: #eb6840"></i>
                    <h3>Food Camp</h3>
                    <p>Lorem ipsum dolor amet, consectetur amet adipiscing elit, sed do eiusmod  incididunt labore  dolore.</p>
                    <a class="read-more" href="#">
                        Read More
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-good-causes">
                    <i class='far fa-smile-beam' style="color: #7c3c83"></i>
                    <h3>Smile Session</h3>
                    <p>Lorem ipsum dolor amet, consectetur amet adipiscing elit, sed do eiusmod  incididunt labore  dolore.</p>
                    <a class="read-more" href="#">
                        Read More
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="good-causes-area">
    <div class="container">
        <div class="section-title">
            <span>Active Campaing</span>
            <h2>Some Good Causes</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas.</p>
        </div>
        <div class="stage-outer"></div>
    </div>
</section>
<div class="slide-img">
    <div class="container">
        <div class="slide">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slide__img">
                            <img src="{{asset('fronend/home/img/projects/25.jpg')}}" alt="">
                        </div>
                        <div class="skill">
                            <div class="skill-bar">
                                <div class="skill-per" per="90"></div>
                            </div>
                            <div class="slill__text">
                                <div class="price">
                                    <span class="text__left">Raised: $5000.00</span>
                                    <span class="text__right">Goal: $8000.00</span>
                                </div>
                                <hr>
                                <h3>School For Poor Children</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur scinelit, sed do eiusmod tempor incididunt</p>
                                <a class="read-more" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide__img">
                            <img src="{{asset('fronend/home/img/projects/27.jpg')}}" alt="">
                        </div>
                        <div class="skill">
                            <div class="skill-bar">
                                <div class="skill-per" per="70"></div>
                            </div>
                            <div class="slill__text">
                                <div class="price">
                                    <span class="text__left">Raised: $5000.00</span>
                                    <span class="text__right">Goal: $8000.00</span>
                                </div>
                                <hr>
                                <h3>Help Us To Send Food</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur scinelit, sed do eiusmod tempor incididunt</p>
                                <a class="read-more" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide__img">
                            <img src="{{asset('fronend/home/img/projects/28.jpg')}}" alt="">
                        </div>
                        <div class="skill">
                            <div class="skill-bar">
                                <div class="skill-per" per="45"></div>
                            </div>
                            <div class="slill__text">
                                <div class="price">
                                    <span class="text__left">Raised: $5000.00</span>
                                    <span class="text__right">Goal: $8000.00</span>
                                </div>
                                <hr>
                                <h3>Clothes For Everyone</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur scinelit, sed do eiusmod tempor incididunt</p>
                                <a class="read-more" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide__img">
                            <img src="{{asset('fronend/home/img/projects/29.jpg')}}" alt="">
                        </div>
                        <div class="skill">
                            <div class="skill-bar">
                                <div class="skill-per" per="50"></div>
                            </div>
                            <div class="slill__text">
                                <div class="price">
                                    <span class="text__left">Raised: $5000.00</span>
                                    <span class="text__right">Goal: $8000.00</span>
                                </div>
                                <hr>
                                <h3>School For Poor Children</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur scinelit, sed do eiusmod tempor incididunt</p>
                                <a class="read-more" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
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
