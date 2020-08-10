
@extends('header.header')
@section('home')
<section class="home">
    <div class="slider">
        @foreach($homeTitle as $hometitie)
        <div class="slide active-slide" style="background-image: url({{asset("fronend/home/img/" . "$hometitie->img" . "")}})">
            <div class="container">
                <div class="caption js-conten">
                    <p>{{$hometitie->title}}</p>
                    <h1>{{$hometitie->h1p1}} <br> {{$hometitie->h1p2}} <br> {{$hometitie->h1p3}}</h1>
                    <p>{{$hometitie->p1}} <br> {{$hometitie->p2}}</p>
                    <a href="">Join us</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="controls">
        <div class="prev"><i class='fas fa-angle-left' style='font-size:36px'></i></div>
        <div class="next"><i class='fas fa-angle-right' style='font-size:36px'></i></div>
    </div>
    <div class="indicator"></div>
</section>
<main>
    <section class="section2">
        <div class="container">
            <div class="section2-2 col-md-12 col-xs-12 col-lg-12 col-sm-12">
                <h4>Good Causes</h4>
                <h2>Help the Poor Through Us</h2>
                <p>Life is a constant process of giving and receiving, each of us is an important link in that circle. </p>
                <p>Don't hesitate to open up your heart to people. Many people, many parts of the world are waiting for your generosity.</p>
            </div>
            <div class="section2-3 col-md-12 col-xs-12 col-lg-12 col-sm-12">
                @foreach($homeBox as $HomeBox)
                <div class="section2-3-1 {{$HomeBox->session}} {{$HomeBox->session2}} col-md-3 col-xs-3 col-lg-3 col-sm-3">
                    <font color="{{$HomeBox->color}}"><i class='{{$HomeBox->icon}}' style='font-size:36px'></i></font>
                    <h5>{{$HomeBox->title}}</h5>
                    <div ><font color="{{$HomeBox->color}}"><i class='{{$HomeBox->icon}}' ></i></font></div>
                    <p>{{$HomeBox->content}}</p>
                    <a href="#" class="read-more" >Read More</a>
                </div>
                @endforeach
            </div>
            <div class="section2-4 col-md-12 col-xs-12 col-lg-12 col-sm-12">
                <div class="section2-4-1 col-md-6 col-xs-6 col-lg-6 col-sm-6">
                    <img src="{{asset('fronend/home/img/about-2.jpg')}}">
                </div>
                <div class="section2-4-2 col-md-6 col-xs-6 col-lg-6 col-sm-6">
                    <div>About us</div>
                    <h3>Their joy is our happiness</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                        ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                        viverra maecenas accumsan lacus vel facilisis.Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry.Lorem Ipsum is simply dummy text.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Quis ipsum suspendisse ultrices gravida. Risus commodo
                        viverra maecenas.</p>
                    <button class="btn">More Details</button>
                </div>
            </div>

            <div class="section2-5 col-md-12 col-xs-12 col-lg-12 col-sm-12">
                <div class="section2-5-1 section2-5-1-img col-md-6 col-xs-6 col-lg-6 col-sm-6">
                    <img src="{{asset('fronend/home/img/get-started.png')}}">
                </div>
                <div class="section2-5-2 col-md-6 col-xs-6 col-lg-6 col-sm-6">
                    <div>Starting from today</div>
                    <p class="about1">Our fundraising plan</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.</p>
                    @foreach($homePlan as $HomePlan)
                    <div>
                        <div class="col-md-2 col-xs-2 col-lg-2 col-sm-2">
                            <img src="{{asset("fronend/home/img/" . "$HomePlan->img" . "")}}" width="66%">
                        </div>
                        <div class="col-md-10 col-xs-10 col-lg-10 col-sm-10">
                            <h3>{{ $HomePlan->title }}</h3>
                            <p>{{ $HomePlan->content }}</p>
                        </div>
                    </div>
                    @endforeach
                    <button class="btn">Learn More</button>
                </div>
            </div>
        </div>
    </section>
    <section class="section3">
        <div class="container">
            <div class="section2-2 section3-1 col-md-12 col-xs-12 col-lg-12 col-sm-12">
                <h4>Operation campaign</h4>
                <h2>Some good jobs</h2>
                <p>Here are some of the war schedules that we are working on. Please join hands with us for a better life</p>
            </div>
        </div>
        <img class="swiper-slide-icon__img" src="{{asset('fronend/home/img/1%20(1).png')}}" width="210px" height="210px">
        <div class="container">
        <div class="slide">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    @foreach($homeSlide as $project)
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
                                    <a class="read-more" href="{{url("home/cause_details/".$project->cause_details."")}}">Read More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        </div>
    </section>

    <section class="section4">
        <div class="container">
            <div class="section4-1 col-md-12 col-xs-12 col-lg-12 col-sm-12">
                <div class="section2-5-1 section4-img col-md-6 col-xs-6 col-lg-6 col-sm-6">
                    <img src="{{asset('fronend/home/img/organaization.png')}}">
                </div>
                <div class="section4-box">
                    <div class="section4-title">
                        <i class='fas fa-gift' style='font-size:28px; color: #0b85ff'></i>
                        <div class="box-conten">
                        <h3>Happy Hour</h3>
                        <p>Lorem ipsum dolor <br> amet,sed do eli elit, sed.</p>
                        <a href="#">Read More</a>
                        </div>
                    </div>
                    <div class="section4-title">
                        <i class='fas fa-apple-alt' style='font-size:28px; color: #ff0b7b'></i>
                        <div class="box-conten">
                            <h3>Healthy Life</h3>
                            <p>Lorem ipsum dolor <br> amet,sed do eli elit, sed.</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                    <div class="section4-title">
                        <i class='fas fa-home' style='font-size:28px; color: #70bd00'></i>
                        <div class="box-conten">
                            <h3>Home shelter</h3>
                            <p>Lorem ipsum dolor <br> amet,sed do eli elit, sed.</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                    <div class="section4-title">
                        <i class='fas fa-burn' style='font-size:28px; color: #ef03ff'></i>
                        <div class="box-conten">
                            <h3>Drinking Water</h3>
                            <p>Lorem ipsum dolor <br> amet,sed do eli elit, sed.</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
            </div>
        </div>
        </div>
    </section>

    <section class="section5">
        <div class="container">
            <div class="section5-1 col-md-12 col-xs-12 col-lg-12 col-sm-12">
                <h1 class="title-session5" style="font-weight: 700"><font color="white"> Some good purposes</font></h1>
                <font color="white">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    <br>
                magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas.</p>
                </font>
                <div class="donate1"><a href="#">Ủng hộ ngay</a> </div>
                <div class="join"><a href="#">Tham  gia ngay</a> </div>

                <div class="section5-2 col-md-12 col-xs-12 col-lg-12 col-sm-12">
                    <div class="tt col-md-2 col-xs-2 col-lg-2 col-sm-2">
                        <span class="counter">2,500</span>
                        <p class="number"><font color="white" style="line-height: 47px"> Since</font></p>
                    </div>
                    <div class="tt tt1 col-md-2 col-xs-2 col-lg-2 col-sm-2">
                        <span class="counter">2,005</span>
                        <p class="number"><font color="white" style="line-height: 47px"> Project</font></p>
                    </div>
                    <div class="tt tt1 col-md-2 col-xs-2 col-lg-2 col-sm-2">
                        <span class="counter">999</span>
                        <p class="number"><font color="white" style="line-height: 47px"> Volunteers</font></p>
                    </div>
                    <div class="tt tt1 col-md-2 col-xs-2 col-lg-2 col-sm-2">
                        <span class="counter">10000<span>+</span></span>
                        <p class="number"><font color="white" style="line-height: 47px"> Member</font></p>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <section class="section6">
        <div class="container">
            <div class="section6-1 col-md-12 col-xs-12 col-lg-12 col-sm-12">
                <div class="chodi col-md-6 col-xs-6 col-lg-7 col-sm-6">
                    <font color="black">
                        <div class="session6-title">
                            <h1>
                                Giving away gets you more in return than you lose.
                            </h1>
                        </div>
                        <p class="session6-conten">
                            Just give and receive back
                            hundred thousand times love. Give love will
                            to receive love in return, what was received was even greater than that.
                            <br>
                            That is the blessing, the serenity of the soul.
                            These are immeasurable values. The
                            The love and help we receive in return is the fruit
                            the sweetness of the love we have given.
                        </p>
                    </font>
                    <a class="button" href="">Làm cách nào để ủng hộ</a>
                </div>
                <div class="section6-img col-md-5 col-xs-6 col-lg-5 col-sm-6">
                    <img src="{{asset('fronend/home/img/organaization-2.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="section7">
        <div class="container">
            <div class="section2-2 ">
                <h4>Event </h4>
                <h2>Our upcoming event</h2>
                <p>Let's join hands to help people in need
                    as difficult as whatever you have even the smallest</p>
                <p>Give is take back, don't keep to yourself. There are things that are
                    to leave the baby compared to busy, but they are too invaluable to others. </p>
                <p> </p>
            </div>
            <div class="container-list">
                <div class="list">
                    @foreach($homeEvent as $even)
                        <div class="list-img-text {{$even->session}}">
                            <div class="background">
                                <img src="{{asset('fronend/home/img/backgrou.jpg')}}" alt="" width="270px" height="260px">
                            </div>
                            <div class="list-item">
                                <div class="list-item__img">
                                    <img src="{{asset("fronend/home/img/even/" . "$even->img" . "")}}" alt="" width="270px" height="260px">
                                </div>
                                <div class="list-item__text">
                                    <h4>{{$even->title}}</h4>
                                    <p>{{ $even->note }}</p>
                                    <ul>
                                        <li style="list-style: none">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <span>{{ $even->address }}</span>
                                        </li>
                                        <li style="list-style: none">
                                            <i class='far fa-clock'></i>
                                            <span>{{ $even->time }}</span>
                                        </li>
                                        <li style="list-style: none">
                                            <i class='fas fa-calendar-alt'></i>
                                            <span>{{ $even->date }}</span>
                                        </li>
                                    </ul>
                                    <a class="read-more" href="{{url("home/event_details/" . "$even->id" . "")}}">
                                        Read More
                                    </a>
                                    <span>0{{ $even->id }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>

    <section class="blog-area" style="padding-top: 70px">
        <div class="container">
            <div class="title-blog">
                <p>Latest News</p>
                <h1>Some of The Recent Stories</h1>
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit, sed do eiusmod tempor incididunt ut labore et
                    dolore <br> magna aliqua. Quis ipsum suspendisse ultrices
                    gravida. Risus commodo viverra maecenas.</span>
            </div>
            <div class="row">
                @foreach($homeBlogGrid as $BlogGrids)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-news">
                            <div class="news-img">
                                <a href="{{url("home/blog_details_1/" . "$BlogGrids->id" . "")}}">
                                    <img style="width: 100%;" src="{{asset("fronend/img_blog/blog/" . "$BlogGrids->img" . "")}}" alt="News">
                                </a>
                                <div class="date">
                                    <span>{{$BlogGrids->date}}</span>
                                </div>
                            </div>
                            <div class="news-text" style="color:#747677">
                                <ul>
                                    <li>
                                        <i class='fas fa-user' style="color:#e22b64"></i>
                                        By
                                        <a class="name-user" href="{{url("home/blog_details_1/" . "$BlogGrids->id" . "")}}">
                                            {{$BlogGrids->tac_gia}}
                                        </a>
                                    </li>

                                </ul>
                                <h3>
                                    <a href="{{url("home/blog_details_1/" . "$BlogGrids->id" . "")}}">{{$BlogGrids->tieu_de}}</a>
                                </h3>
                                <p style="line-height: 23px">{{$BlogGrids->noi_dung}}</p>
                                <a class="read-more2" href="{{url("home/blog_details_1/" . "$BlogGrids->id" . "")}}">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="img-partner">
        <div class="container">
            <div class="partner-title">
                <h5>Our Fundraising</h5>
                <h1>Charity Organization Worked In The Fundraising</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore <br>
                    magna aliqua. Quis ipsum suspendisse ultrices gravida.
                    Risus commodo viverra maecenas.</p>
            </div>
            <div class="partner-img">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        @foreach($partnerList as $parner)
                        <div class="swiper-slide" style="width: 200px; box-shadow: none; background: none; height: 90px">
                            <img class="img-slide" src="{{asset("fronend/img-partner/" . "$parner->img" . "")}}" alt="">
                        </div>
                        @endforeach
                     </div>
                </div>

            </div>
        </div>
    </section>
</main>
@include('footer.footer')
@endsection

