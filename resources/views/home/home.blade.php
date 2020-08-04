
@extends('header.header')
@section('home')
<section class="home">
    <div class="slider">
        <div class="slide active-slide" style="background-image: url({{asset('fronend/home/img/silder1.jpg')}})">
            <div class="container">
                <div class="caption js-conten">
                    <p>Bringing Completeness</p>
                    <h1>Charity for a Better <br> Future, Charity Brings <br> Happiness!</h1>
                    <p>Your small contribution can drive us to perform and achieve our
                        mission. We are working for <br> millions of children
                        who are striving for their basic needs.</p>
                    <a href="">Join us</a>
                </div>
            </div>
        </div>
        <div class="slide" style="background-image: url({{asset('fronend/home/img/silder2.jpg')}})">
            <div class="container">
                <div class="caption js-conten">
                    <p>Bringing Smiles</p>
                    <h1>Bringing Smiles to <br> Millions!</h1>
                    <p>Our focus is to make the next generation needful child ready
                        for giving back to the world! <br> Your support is the key
                        to make us successful.</p>
                    <a href="">Join us</a>
                </div>
            </div>
        </div>
        <div class="slide" style="background-image: url({{asset('fronend/home/img/silder3.jpg')}})">
            <div class="container">
                <div class="caption js-conten">
                    <p>Bringing Completeness</p>
                    <h1>We Encourage <br> Participating in <br> Charity!</h1>
                    <p>Engaging in a charity can give you a good feeling! Your
                        contribution can make you more <br> complete. Millions of
                        children need your support.</p>
                    <a href="">Join us</a>
                </div>
            </div>
        </div>
    </div>
    <!--    controls-->
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
                <h4> Những việc làm tốt</h4>
                <h2>Hạnh phúc...là cho, và sống vì người khác.</h2>
                <p>Cuộc sống là quá trình trao tặng và đón nhận không
                    ngừng, mỗi người chúng
                    ta là một mắc xích quan trọng trong vòng liên kết ấy. </p>
                <p>Đừng do dự khi mở rộng lòng mình với mọi người. Rất nhiều
                    người, nhiều nơi trên thế giới đang chờ đợi ở bạn một sự
                    hảo tâm, một vòng tay ấm áp</p>
                <p>Đôi khi, chỉ một ánh mắt , một nụ cười thân thiện, hay một
                    câu nói chân tình cũng đủ làm viên mãn một trái tim! Hãy cho
                    đi để thấy rằng đời sống thật phong phú.</p>
            </div>
            <div class="section2-3 col-md-12 col-xs-12 col-lg-12 col-sm-12">
                <div class="section2-3-1 session2-box1 col-md-3 col-xs-3 col-lg-3 col-sm-3">
                    <font color="#1e90ff"><i class='fas fa-burn' style='font-size:36px'></i></font>
                    <h5>Tiết kiệm nước</h5>
                    <div ><font color="#1e90ff"><i class='fas fa-burn' ></i></font></div>
                    <p>Lorem ipsum dolor amet, consectetur amet adipiscing elit, sed do eiusmod incididunt labore dolore.</p>
                    <a href="#" class="read-more" >Đọc thêm</a>
                </div>
                <div class="section2-3-1 session2-box2 section2-3-11 col-md-3 col-xs-3 col-lg-3 col-sm-3">
                    <font color=" #cc7c39"><i class='far fa-hand-paper' style='font-size:36px'></i></font>
                    <h5>Trở thành tình nguyện viên</h5>
                    <div><font color=" #cc7c39"><i class='far fa-hand-paper' ></i></font></div>
                    <p>Lorem ipsum dolor amet, consectetur amet adipiscing elit, sed do eiusmod incididunt labore dolore.</p>
                    <a href="#"class="read-more" >Đọc thêm</a>
                </div>
                <div class="section2-3-1 session2-box3 section2-3-11 col-md-3 col-xs-3 col-lg-3 col-sm-3">
                    <font color="red"><i class='far fa-heart' style='font-size:36px'></i></font>
                    <h5>Trao đi yêu thương</h5>
                    <div><font color="red"><i class='far fa-heart' ></i></font></div>
                    <p>Lorem ipsum dolor amet, consectetur amet adipiscing elit, sed do eiusmod incididunt labore dolore.</p>
                    <a href="#" class="read-more" >Đọc thêm</a>
                </div>
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
                    <div>
                        <div class="col-md-2 col-xs-2 col-lg-2 col-sm-2">
                            <img src="{{asset('fronend/home/img/getstarted1.png')}}" width="66%">
                        </div>
                        <div class="col-md-10 col-xs-10 col-lg-10 col-sm-10">
                            <h3>Giáo dục cho trẻ em</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed</p>
                        </div>
                    </div>
                    <div>
                        <div class="col-md-2 col-xs-2 col-lg-2 col-sm-2">
                            <img src="{{asset('fronend/home/img/getstarted2.png')}}" width="66%">
                        </div>
                        <div class="col-md-10 col-xs-10 col-lg-10 col-sm-10">
                            <h3>Nhà ở công cộng cho người vô gia cư</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed</p>
                        </div>
                    </div>
                    <div>
                        <div class="col-md-2 col-xs-2 col-lg-2 col-sm-2">
                            <img src="{{asset('fronend/home/img/getstarted3.png')}}" width="66%">
                        </div>
                        <div class="col-md-10 col-xs-10 col-lg-10 col-sm-10">
                            <h3>Dịch vụ y tế miễn phí</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed</p>
                        </div>
                    </div>
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

                    <div class="swiper-slide">
                        <div class="slide__img">
                            <img src="{{asset('fronend/home/img/svtive1.jpg')}}" alt="">
                        </div>
                        <div class="skill">
                            <div class="skill-bar">
                                <div class="skill-per" per="90"></div>
                            </div>
                            <div class="slill__text">
                                <div class="price">
                                    <span class="text__left">Raised: $1000.00</span>
                                    <span class="text__right">Goal: $5000.00</span>
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
                            <img src="{{asset('fronend/home/img/svtive2.jpg')}}" alt="">
                        </div>
                        <div class="skill">
                            <div class="skill-bar">
                                <div class="skill-per" per="70"></div>
                            </div>
                            <div class="slill__text">
                                <div class="price">
                                    <span class="text__left">Raised: $1000.00</span>
                                    <span class="text__right">Goal: $9000.00</span>
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
                            <img src="{{asset('fronend/home/img/svtive3.jpg')}}" alt="">
                        </div>
                        <div class="skill">
                            <div class="skill-bar">
                                <div class="skill-per" per="45"></div>
                            </div>
                            <div class="slill__text">
                                <div class="price">
                                    <span class="text__left">Raised: $1000.00</span>
                                    <span class="text__right">Goal: $7689.00</span>
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
                            <img src="{{asset('fronend/home/img/svtive4.jpg')}}" alt="">
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
                        <p class="number"><font color="white"> Since</font></p>
                    </div>
                    <div class="tt tt1 col-md-2 col-xs-2 col-lg-2 col-sm-2">
                        <span class="counter">2,005</span>
                        <p class="number"><font color="white"> Project</font></p>
                    </div>
                    <div class="tt tt1 col-md-2 col-xs-2 col-lg-2 col-sm-2">
                        <span class="counter">999</span>
                        <p class="number"><font color="white"> Volunteers</font></p>
                    </div>
                    <div class="tt tt1 col-md-2 col-xs-2 col-lg-2 col-sm-2">
                        <span class="counter">10000<span>+</span></span>
                        <p class="number"><font color="white"> Thành viên</font></p>
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
                    <div class="list-img-text section7-current__1">
                        <div class="background">
                            <img src="{{asset('fronend/home/img/backgrou.jpg')}}" alt="" width="270px" height="260px">
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
                    <div class="list-img-text section7-current__2">
                        <div class="background">
                            <img src="{{asset('fronend/home/img/backgrou.jpg')}}" alt="" width="270px" height="260px">
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
                                        <span>5 Jun 2019</span>
                                    </li>
                                </ul>
                                <a class="read-more" href="#">
                                    Read More
                                </a>
                                <span>02</span>
                            </div>
                        </div>
                    </div>
                    <div class="list-img-text section7-current__3">
                        <div class="background">
                            <img src="{{asset('fronend/home/img/backgrou.jpg')}}" alt="" width="270px" height="260px">
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
                    <div class="list-img-text section7-current__4">
                        <div class="background">
                            <img src="{{asset('fronend/home/img/backgrou.jpg')}}" alt="" width="270px" height="260px">
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
                <div class="col-lg-4 col-md-6">
                    <div class="single-news">
                        <div class="news-img">
                            <a href="#">
                                <img style="width: 100%;" src="{{asset('fronend/img_blog/blog/1.jpg')}}" alt="News">
                            </a>
                            <div class="date">
                                <span>1 November</span>
                            </div>
                        </div>
                        <div class="news-text" style="color:#747677">
                            <ul>
                                <li>
                                    <i class='fas fa-user' style="color:#e22b64"></i>
                                    By
                                    <a class="name-user" href="#">Admin</a>
                                </li>

                            </ul>
                            <h3>
                                <a href="{{route('blog_details_1')}}">Highlight some of the fundraising</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur eiussi adipiscing elit, sed do eiusmod tempor incididunt ut</p>
                            <a class="read-more2" href="{{route('blog_details_1')}}">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-news">
                        <div class="news-img">
                            <a href="#">
                                <img style="width: 100%;" src="{{asset('fronend/img_blog/blog/2.jpg')}}" alt="News">
                            </a>
                            <div class="date">
                                <span>2 November</span>
                            </div>
                        </div>
                        <div class="news-text" style="color:#747677">
                            <ul>
                                <li>
                                    <i class='fas fa-user' style="color:#e22b64"></i>
                                    By
                                    <a class="name-user" href="#">Admin</a>
                                </li>

                            </ul>
                            <h3>
                                <a href="{{route('blog_details_1')}}">A place start a new life with peace</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur eiussi adipiscing elit, sed do eiusmod tempor incididunt ut</p>
                            <a class="read-more2" href="{{route('blog_details_1')}}">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-news">
                        <div class="news-img">
                            <a href="#">
                                <img style="width: 100%;" src="{{asset('fronend/img_blog/blog/3.jpg')}}" alt="News">
                            </a>
                            <div class="date">
                                <span>3 November</span>
                            </div>
                        </div>
                        <div class="news-text" style="color:#747677">
                            <ul>
                                <li>
                                    <i class='fas fa-user' style="color:#e22b64"></i>
                                    By
                                    <a class="name-user" href="#">Admin</a>
                                </li>

                            </ul>
                            <h3>
                                <a href="{{route('blog_details_1')}}">Build school for poor children</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur eiussi adipiscing elit, sed do eiusmod tempor incididunt ut</p>
                            <a class="read-more2" href="{{route('blog_details_1')}}">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
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
                        <div class="swiper-slide" style="width: 200px; box-shadow: none; background: none; height: 90px">
                            <img class="img-slide" src="{{asset('fronend/img-partner/1.png')}}" alt="">
                        </div>
                        <div class="swiper-slide" style="width: 200px; box-shadow: none; background: none; height: 90px">
                            <img class="img-slide" src="{{asset('fronend/img-partner/2.png')}}" alt="">
                        </div>
                        <div class="swiper-slide" style="width: 200px; box-shadow: none; background: none; height: 90px">
                            <img class="img-slide" src="{{asset('fronend/img-partner/3.png')}}" alt="">
                        </div>
                        <div class="swiper-slide" style="width: 200px; box-shadow: none; background: none; height: 90px">
                            <img class="img-slide" src="{{asset('fronend/img-partner/4.png')}}" alt="">
                        </div>
                        <div class="swiper-slide" style="width: 200px; box-shadow: none; background: none; height: 90px">
                            <img class="img-slide" src="{{asset('fronend/img-partner/5.png')}}" alt="">
                        </div>
                     </div>
                </div>

            </div>
        </div>
    </section>
</main>
@include('footer.footer')
@endsection

