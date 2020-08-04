
<!DOCTYPE html>
<html>
<head>
    <title>Blog Details</title>
    <link rel="stylesheet" href="{{asset('fronend/css/Blog_Details.css')}}" type="text/css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
@include('header/header')
<body style="background-color: #fcfcfc;">
<section class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>Blog Default</h2>
            <ul>
                <li>
                    <a href="#">Home</a>
                </li>
                <i class="fa fa-chevron-right" style="color:#bab0b0"></i>
                <li>Blog Default</li>
            </ul>
        </div>
    </div>
</section>

<div class="blog-details-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="blog-details-desc">
                    <img src="{{asset('fronend/img_blog/blogdefault1.jpg')}}" style="width: 100%;">
                    <div class="article-content">
                        <div class="entry-meta">
                            <ul>
                                <li style="width: 50%;"><span style="color: #fd3c65">Posted On:</span> <a href="#">September 31, 2020</a></li>
                                <li style="width: 50%;"><span style="color: #fd3c65">Posted By:</span> <a href="#">John Anderson</a></li>
                            </ul>
{{--                            <h3>Weather Evident Smiling Bed Against</h3>--}}
{{--                            <p>Quuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quia non numquam eius modi tempora incidunt ut labore et dolore magnam dolor sit amet, consectetur adipisicing.</p>--}}
{{--                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in  sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>--}}
{{--                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in  sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>--}}
                        @yield('blog_content')
                        </div>
                    </div>
                    <div class="article-footer">
                        <div class="article-tags">
                            <span><i class="fa fa-share" style="color: #e22b64"></i></span>
                            <a href="#">Share</a>
                        </div>
                        <div class="article-share">
                            <ul class="social">
                                <li><a href="#" target="_blank"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="post-navigation">
                        <div class="navigation-links">
                            <div class="nav-previous" style="width: 50%">
                                <a href="#"><i class="flaticon-left-chevron"></i> Prev Post</a>
                            </div>

                            <div class="nav-next" style="width: 50%">
                                <a href="#" style="float: right">Next Post <i class="flaticon-right-chevron"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="comments-area">
                        <h3 class="comments-title">
                            2 Comments:
                        </h3>
                        <ul class="comments-list">
                            <li class="comment">
                                <footer class="comments-meta">
                                    <div class="comment-author vcard">
                                        <img src="{{asset('fronend/img_blog/Blog-Details/11.jpg')}}" class="avatar" alt="image">
                                        <b class="fn">John Jones</b>

                                    </div>
                                    <div class="comment-metadata">
                                        <a href="#">
                                            <span>April 24, 2019 at 10:59 am</span>
                                        </a>
                                    </div>
                                    <div class="comment-content">
                                        <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    </div>
                                    <div class="reply">
                                        <a href="#" class="comment-reply-link">Reply</a>
                                    </div>
                                </footer>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="widget-area">
                    <div class="widget-search ">
                        <input type="search" class="search-field" placeholder="Search...">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </div>

                    <div class="widget-post">
                        <h3>Popular Posts</h3>
                        <div class="list-post">
                            <a href="#"><img style="float: left;width: 80px;height: 80px; margin-bottom: -3px;" src="{{asset('fronend/img_blog/causes2.png')}}"></a>
                            <div class="info">
                                <p>June 30,2019</p>
                                <a href="#"><h4>Delicate contempt received two yet advanced</h4></a>
                            </div>
                        </div>
                        <div class="list-post">
                            <a href="#"><img style="float: left;width: 80px;height: 80px;margin-bottom: -3px;" src="{{asset('fronend/img_blog/causes3.png')}}"></a>
                            <div class="info">
                                <p>June 30,2019</p>
                                <a href="#"><h4>Future Plan & Strategy for Consutruction</h4></a>
                            </div>
                        </div>
                        <div class="list-post">
                            <a href="#"><img style="float: left;width: 80px;height: 80px;margin-bottom: -3px;" src="{{asset('fronend/img_blog/causes4.png')}}"></a>
                            <div class="info">
                                <p>June 30,2019</p>
                                <a href="#"><h4>Melancholy devonshire alteration</h4></a>
                            </div>
                        </div>
                        <div class="list-post">
                            <a href="#"><img style="float: left;width: 80px;height: 80px;margin-bottom: -3px;" src="{{asset('fronend/img_blog/causes5.png')}}"></a>
                            <div class="info">
                                <p>June 30,2019</p>
                                <a href="#"><h4>Delicate contempt received two yet advanced</h4></a>
                            </div>
                        </div>
                    </div>

                    <div class="widget-post">
                        <h3>Archives</h3>
                        <ul class="list-archives">
                            <li><a href="#">May 2019</a> </li>
                            <li><a href="#">April 2019</a></li>
                            <li><a href="#">June 2019</a> </li>
                            <li><a href="#">July 2019</a> </li>
                        </ul>
                    </div>
                    <div class="widget-post">
                        <h3>Categories</h3>
                        <ul class="list-archives">
                            <li><a href="#">Educataon (10)</a> </li>
                            <li><a href="#">National (20)</a></li>
                            <li><a href="#">Sports (10)</a> </li>
                            <li><a href="#">Megazine (12)</a> </li>
                            <li><a href="#">Health (16)</a> </li>
                        </ul>
                    </div>
                    <div class="widget-post">
                        <h3>Tags</h3>
                        <div class="widget-tags">
                            <a href="#">Fashion</a>
                            <a href="#">Education</a>
                            <a href="#">Nation</a>
                            <a href="#">Study</a>
                            <a href="#">Health</a>
                            <a href="#">Food</a>
                            <a href="#">Travel</a>
                            <a href="#">Science</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('footer.footer')
</body>
</html>
