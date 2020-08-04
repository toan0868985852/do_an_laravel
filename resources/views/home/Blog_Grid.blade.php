
<!DOCTYPE html>
<html>
<head>
    <title>Blog Grid</title>
    <link rel="stylesheet" href="{{asset('fronend/css/Blog_Grid.css')}}" type="text/css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
            <h2>Blog Grid</h2>
            <ul>
                <li>
                    <a href="#">Home</a>
                </li>
                <i class="fa fa-chevron-right" style="color:#bab0b0"></i>
                <li>Blog Grid</li>
            </ul>
        </div>
    </div>
</section>

<section class="blog-area" style="padding-top: 100px">
    <div class="container">
        <div class="row">
            @foreach($blogGrid as $BlogGrids)
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
                            <a class="read-more" href="{{url("home/blog_details_1/" . "$BlogGrids->id" . "")}}">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
            {{--            <div class="col-lg-4 col-md-6">--}}
            {{--                <div class="single-news">--}}
            {{--                    <div class="news-img">--}}
            {{--                        <a href="#">--}}
            {{--                            <img style="width: 100%;" src="{{asset('fronend/img_blog/blog/2.jpg')}}" alt="News">--}}
            {{--                        </a>--}}
            {{--                        <div class="date">--}}
            {{--                            <span>2 November</span>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                    <div class="news-text" style="color:#747677">--}}
            {{--                        <ul>--}}
            {{--                            <li>--}}
            {{--                                <i class='fas fa-user' style="color:#e22b64"></i>--}}
            {{--                                By--}}
            {{--                                <a class="name-user" href="#">Admin</a>--}}
            {{--                            </li>--}}

            {{--                        </ul>--}}
            {{--                        <h3>--}}
            {{--                            <a href="{{route('blog_details_1')}}">A place start a new life with peace</a>--}}
            {{--                        </h3>--}}
            {{--                        <p>Lorem ipsum dolor sit amet, consectetur eiussi adipiscing elit, sed do eiusmod tempor incididunt ut</p>--}}
            {{--                        <a class="read-more" href="{{route('blog_details_1')}}">--}}
            {{--                            Read More--}}
            {{--                        </a>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}
        </div>
    </div>
</section>
@include('footer.footer')
</body>
</html>

