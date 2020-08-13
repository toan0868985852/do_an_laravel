<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FABV-about</title>
    <link rel="stylesheet" type="text/css" href="{{asset('fronend/home/vendorabc/fontawesome/css/all.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('fronend/home/vendorabc/bootstrap3.3.7/css/bootstrap.css')}}">
    <link rel="icon" href="{{asset('fronend/home/img/nivo-logo.png')}}">
    <link rel="stylesheet" href="{{asset('fronend/home/css/about.css')}}">

</head>
<body>
@include('header.header')
<main>
    <section class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>About</h2>
                <ul>
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <i class="fa fa-chevron-right" style="color:#bab0b0"></i>
                    <li>About</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="section2">
        <div class="container">

            <div class="section2-4 col-md-12 col-xs-12 col-lg-12 col-sm-12">
                <div class="section2-4-1 col-md-6 col-xs-6 col-lg-6 col-sm-6">
                    <img src="{{asset('fronend/home/img/about-2.jpg')}}">
                </div>
                <div class="section2-4-2 col-md-6 col-xs-6 col-lg-6 col-sm-6">
                    <div>About us</div>
                    <h3>Their joy is our happiness</h3>
                    <p>We want to develop our organization as one of the largest charitable
                        communities in Vietnam. We will try to be active and call for more
                        investors, corporations that can help us. To build a corporation
                        like today is very difficult to maintain and develop, the more
                        difficult it is, so we are together with everyone. What you donate
                        is not for us, but for everyone who is in need of our help. For a
                        beautiful country, for a united people. Let's join hands with Fabv
                        to complete the mission we set out to bring happiness to everyone.</p>
                    <p>What Fabv does is not for our own sake but we want to help the needy,
                        the needy, we want to convey a message to everyone "or to give,
                        whether it be the smallest things ". After a period of operation,
                        our organization has a lot of companions and collaborators of Fabv
                        spread across Vietnam. It is a fear of honor and a happiness for
                        us, that shows your trust in our organization.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="section5">
        <div class="container">
            <div class="section5-1 col-md-12 col-xs-12 col-lg-12 col-sm-12">
                <h1 class="title-session5" style="font-weight: 700"><font color="white"> Some Good Causes</font></h1>
                <font color="white">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                        <br>
                        magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas.</p>
                </font>
                <div class="donate1"><a href="#">Donate Now</a> </div>
                <div class="join"><a href="#">Join Now</a> </div>

                <div class="section5-2 col-md-12 col-xs-12 col-lg-12 col-sm-12">
                    <div class="tt col-md-2 col-xs-2 col-lg-2 col-sm-2">
                        <div>2,500</div>
                        <p class="number"><font color="white"> Since</font></p>
                    </div>
                    <div class="tt tt1 col-md-2 col-xs-2 col-lg-2 col-sm-2">
                        <div>2,005</div>
                        <p class="number"><font color="white"> Project</font></p>
                    </div>
                    <div class="tt tt1 col-md-2 col-xs-2 col-lg-2 col-sm-2">
                        <div>999</div>
                        <p class="number"><font color="white"> Volunteers</font></p>
                    </div>
                    <div class="tt tt1 col-md-2 col-xs-2 col-lg-2 col-sm-2">
                        <div>10000+</div>
                        <p class="number"><font color="white"> Member</font></p>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <section class="section2">
        <div class="container">
            <div class="section2-5 col-md-12 col-xs-12 col-lg-12 col-sm-12">
                <div class="section2-5-1 col-md-6 col-xs-6 col-lg-6 col-sm-6">
                    <img src="{{asset('fronend/home/img/get-started.png')}}">
                </div>
                <div class="section2-5-2 col-md-6 col-xs-6 col-lg-6 col-sm-6">
                    <div>Starting from today</div>
                    <p class="about1">Our fundraising plan</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
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
    <section class="section6">
        <div class="container">
            <div style="display: flex; margin-top: -70px" class="section6-1 col-md-12 col-xs-12 col-lg-12 col-sm-12">
                <div style="opacity: 1; position: relative; left: 180px" class="chodi col-md-6 col-xs-6 col-lg-7 col-sm-6">
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
                    <a class="button" href="">How To Donate</a>
                </div>
                <div style="opacity: 1; position: relative; right: 211px; top: -20px" class="section6-img col-md-5 col-xs-6 col-lg-5 col-sm-6">
                    <img src="{{asset('fronend/home/img/organaization-2.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </section>
</main>

@include('footer.footer')
<script type="text/javascript" src="{{asset('fronend/home/js/jquery.js')}}"></script>
</body>
</html>
