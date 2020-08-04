<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even Git</title>
        <!--  css -->
    <link rel="stylesheet" href="{{asset('fronend/home/css/even.css')}}">
        <!--   icon  -->
    <link rel="icon" href="{{asset('fronend/home/img/nivo-logo.png')}}">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
@include('header.header')
<section class="section">
    <span class="setting-background"></span>
        <div class="container">
            <h1>Event Grid</h1>
            <p class="link-title"><a href="#">Home</a> <i class="fa fa-angle-right"></i> <b>Event</b></p>
        </div>
</section>
<section class="section-item">
    <div class="container">
        <div class="container-list">
            <div class="list">
                <div class="list-img-text">
                    <div class="background">
                        <img src="{{asset('fronend/home/img/even/backgrou.jpg')}}" alt="" width="270px" height="260px">
                    </div>
                <div class="list-item">
                        <div class="list-item__img">
                            <img src="{{asset('fronend/home/img/even/1.jpg')}}" alt="" width="270px" height="260px">
                        </div>
                        <div class="list-item__text">
                            <h4>Donation is hope</h4>
                            <p>Lorem ipsum dolor sit amet, elip consectetur adipiscing sed.</p>
                            <ul>
                                <li>
                                     <i class="fas fa-map-marker-alt"></i>
                                    <span>Newyork city</span>
                                </li>
                                <li>
                                    <i class='far fa-clock'></i>
                                    <span>8.00 am-5.00 pm</span>
                                </li>
                                <li>
                                     <i class='fas fa-calendar-alt'></i>
                                    <span>5 Jun 2019</span>
                                </li>
                            </ul>
                            <a class="read-more" href="#">
                                Read More
                            </a>
                            <span>01</span>
                        </div>
                    </div>
                </div>
                <div class="list-img-text">
                    <div class="background">
                        <img src="{{asset('fronend/home/img/even/backgrou.jpg')}}" alt="" width="270px" height="260px">
                    </div>
                    <div class="list-item">
                        <div class="list-item__img">
                            <img src="{{asset('fronend/home/img/even/2.jpg')}}" alt="">
                        </div>
                        <div class="list-item__text">
                            <h4>Donation is hope</h4>
                            <p>Lorem ipsum dolor sit amet, elip consectetur adipiscing sed.</p>
                            <ul>
                                <li>
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>Newyork city</span>
                                </li>
                                <li>
                                    <i class='far fa-clock'></i>
                                    <span>8.00 am-5.00 pm</span>
                                </li>
                                <li>
                                    <i class='fas fa-calendar-alt'></i>
                                    <span>{{date("D-M-Y", strtotime("2011-01-07"))}}</span>
                                </li>
                            </ul>
                            <a class="read-more" href="#">
                                Read More
                            </a>
                            <span>02</span>
                        </div>
                    </div>
                </div>
                <div class="list-img-text">
                    <div class="background">
                        <img src="{{asset('fronend/home/img/even/backgrou.jpg')}}" alt="" width="270px" height="260px">
                    </div>
                    <div class="list-item">
                        <div class="list-item__img">
                            <img src="{{asset('fronend/home/img/even/3.jpg')}}" alt="" width="270px" height="260px">
                        </div>
                        <div class="list-item__text">
                            <h4>Donation is hope</h4>
                            <p>Lorem ipsum dolor sit amet, elip consectetur adipiscing sed.</p>
                            <ul>
                                <li>
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>Newyork city</span>
                                </li>
                                <li>
                                    <i class='far fa-clock'></i>
                                    <span>8.00 am-5.00 pm</span>
                                </li>
                                <li>
                                    <i class='fas fa-calendar-alt'></i>
                                    <span>5 Jun 2019</span>
                                </li>
                            </ul>
                            <a class="read-more" href="#">
                                Read More
                            </a>
                            <span>03</span>
                        </div>
                    </div>
                </div>
                <div class="list-img-text">
                    <div class="background">
                        <img src=".{{asset('fronend/homeimg/even/backgrou.jpg')}}" alt="" width="270px" height="260px">
                    </div>
                    <div class="list-item">
                        <div class="list-item__img">
                            <img src="{{asset('fronend/home/img/even/4.jpg')}}" alt="" width="270px" height="260px">
                        </div>
                        <div class="list-item__text">
                            <h4>Donation is hope</h4>
                            <p>Lorem ipsum dolor sit amet, elip consectetur adipiscing sed.</p>
                            <ul>
                                <li>
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>Newyork city</span>
                                </li>
                                <li>
                                    <i class='far fa-clock'></i>
                                    <span>8.00 am-5.00 pm</span>
                                </li>
                                <li>
                                    <i class='fas fa-calendar-alt'></i>
                                    <span>5 Jun 2019</span>
                                </li>
                            </ul>
                            <a class="read-more" href="#">
                                Read More
                            </a>
                            <span>04</span>
                        </div>
                    </div>
                </div>
                <div class="list-img-text">
                    <div class="background">
                        <img src="{{asset('fronend/home/img/even/backgrou.jpg')}}" alt="" width="270px" height="260px">
                    </div>
                    <div class="list-item">
                        <div class="list-item__img">
                            <img src="{{asset('fronend/home/img/even/5.jpg')}}" alt="" width="270px" height="260px">
                        </div>
                        <div class="list-item__text">
                            <h4>Donation is hope</h4>
                            <p>Lorem ipsum dolor sit amet, elip consectetur adipiscing sed.</p>
                            <ul>
                                <li>
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>Newyork city</span>
                                </li>
                                <li>
                                    <i class='far fa-clock'></i>
                                    <span>8.00 am-5.00 pm</span>
                                </li>
                                <li>
                                    <i class='fas fa-calendar-alt'></i>
                                    <span>5 Jun 2019</span>
                                </li>
                            </ul>
                            <a class="read-more" href="#">
                                Read More
                            </a>
                            <span>05</span>
                        </div>
                    </div>
                </div>
                <div class="list-img-text">
                    <div class="background">
                        <img src="{{asset('fronend/home/img/even/backgrou.jpg')}}" alt="" width="270px" height="260px">
                    </div>
                    <div class="list-item">
                        <div class="list-item__img">
                            <img src="{{asset('fronend/home/img/even/6.jpg')}}" alt="" width="270px" height="260px">
                        </div>
                        <div class="list-item__text">
                            <h4>Donation is hope</h4>
                            <p>Lorem ipsum dolor sit amet, elip consectetur adipiscing sed.</p>
                            <ul>
                                <li>
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>Newyork city</span>
                                </li>
                                <li>
                                    <i class='far fa-clock'></i>
                                    <span>8.00 am-5.00 pm</span>
                                </li>
                                <li>
                                    <i class='fas fa-calendar-alt'></i>
                                    <span>5 Jun 2019</span>
                                </li>
                            </ul>
                            <a class="read-more" href="#">
                                Read More
                            </a>
                            <span>06</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('footer.footer')
</body>
</html>
