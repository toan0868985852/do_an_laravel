
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
                <p>Cuộc sống là quá trình trao tặng và đón nhận không
                    ngừng, mỗi người chúng
                    ta là một mắc xích quan trọng trong vòng liên kết ấy. </p>
                <p>Đừng do dự khi mở rộng lòng mình với mọi người. Rất nhiều
                    người, nhiều nơi trên thế giới đang chờ đợi ở bạn một sự
                    hảo tâm.</p>
            </div>
            <div class="section2-3 col-md-12 col-xs-12 col-lg-12 col-sm-12">
                @foreach($homeBox as $HomeBox)
                <div class="section2-3-1 {{$HomeBox->session}} {{$HomeBox->session2}} col-md-3 col-xs-3 col-lg-3 col-sm-3">
                    <font color="{{$HomeBox->color}}"><i class='{{$HomeBox->icon}}' style='font-size:36px'></i></font>
                    <h5>Save Water</h5>
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
                    <div>Về chúng tôi</div>
                    <h3>Niềm vui của họ là hạnh phúc của chúng tôi</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                        ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                        viverra maecenas accumsan lacus vel facilisis.Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry.Lorem Ipsum is simply dummy text.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Quis ipsum suspendisse ultrices gravida. Risus commodo
                        viverra maecenas.</p>
                    <button class="btn">Tìm hiểu thêm</button>
                </div>
            </div>

            <div class="section2-5 col-md-12 col-xs-12 col-lg-12 col-sm-12">
                <div class="section2-5-1 section2-5-1-img col-md-6 col-xs-6 col-lg-6 col-sm-6">
                    <img src="{{asset('fronend/home/img/get-started.png')}}">
                </div>
                <div class="section2-5-2 col-md-6 col-xs-6 col-lg-6 col-sm-6">
                    <div>Bắt đầu từ hôm nay</div>
                    <p class="about1">Kế hoạch gây quĩ của chúng tôi</p>
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
                    <button class="btn">Tìm hiểu thêm</button>
                </div>
            </div>
        </div>
    </section>
    <section class="section3">
        <div class="container">
            <div class="section2-2 section3-1 col-md-12 col-xs-12 col-lg-12 col-sm-12">
                <h4>Chiến dịch hoạt dộng</h4>
                <h2>Một số việc làm tốt</h2>
                <p>Dưới đây là một số chiến lịch mà chúng tôi đang thực hiện. Hãy chúng tay với chúng tôi vì một cuộc sống tươi đẹp hơn</p>
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
                                    <a class="read-more" href="#">Read More</a>
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
                <h1 class="title-session5" style="font-weight: 700"><font color="white"> Một số những mục đích tốt</font></h1>
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
                        <p class="number"><font color="white" style="line-height: 47px"> Thành viên</font></p>
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
                                Cho đi sẽ nhận lại được nhiều hơn những gì bạn mất.
                            </h1>
                        </div>
                        <p class="session6-conten">
                            Hãy cứ cho đi sẽ nhận lại
                            gấp trăm ngàn lần yêu thương. Trao yêu thương sẽ
                            nhận lại yêu thương, cái được nhận lại còn lớn lao gấp bội lần.
                            <br>
                            Đó chính là phước báo, là sự thanh thản trong tâm hồn.
                            Đây chính là những giá trị không thể đo đếm được. Sự
                            yêu thương giúp đỡ mà chúng ta nhận lại chính là quả
                            ngọt của tình yêu thương mà chúng ta đã trao đi.
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
                <h4>Sự kiện </h4>
                <h2>Sự kiện sắp tới của chúng tôi</h2>
                <p>Hãy cùng chung tôi chung tay giúp đỡ những người có hoàn cảnh
                    khó khăn bằng bất cứ những gì bạn có dù là nhỏ nhất </p>
                <p>Cho đi là nhận lại, đừng giữ cho riêng mình. Có những thứ là
                    bỏ bé so với bận nhưng đó là những món quá vô giá đối với người khác.   </p>
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

