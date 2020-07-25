<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Causes Details</title>
    <link rel="stylesheet" href="{{asset('fronend/css/Causes_Details.css')}}" type="text/css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="icon" href="{{asset('fronend/home/img/nivo-logo.png')}}">

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
            <h2>Causes Details</h2>
            <ul>
                <li>
                    <a href="#">Home</a>
                </li>
                <i class="fa fa-chevron-right" style="color:#bab0b0"></i>
                <li>Causes Details</li>
            </ul>
        </div>
    </div>
</section>

<section class="blog-details-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">

                <div class="article-image">

                    <div class="campaing-img" >
                        <img style="width: 100%;" src="{{asset('fronend/img_blog/causes1.png')}}">
                    </div>

                    <div class="campaing-text">
                        <div class="progress pink">
                            <div class="progress-bar">
                                <div class="progress-value" style="width: 50%;">50%</div>
                            </div>
                        </div>
                        <ul>
                            <li><span>Raised:</span> $5000.00</li>
                            <li class="left-site"><span>Goal:</span> $8000.00</li>
                        </ul>
                        <h3>Education for Poor Children</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, accusantium cupiditate exercitationem quaerat dolorum architecto fugiat suscipit praesentium iusto? Fuga cupiditate laboriosam fugiat in, maiores a quidem labore autem accusantium! lore</p>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia cupiditate nihil ipsam atque! Autem dolores id ducimus, ipsum magnam at quidem praesentium possimus harum quas, facere explicabo impedit atque doloremque.</p>
                    </div>

                </div>

                <div class="article-content">
                    <div class="entry-meta">
                        <ul>
                            <li><span style="color: #fd3c65">Posted On: </span> September 31, 2019</li>
                        </ul>
                    </div>
                    <h3>Raise Fund For Healthy Food</h3>
                    <p>Quuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quia non numquam eius modi tempora incidunt ut labore et dolore magnam dolor sit amet, consectetur.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in  sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in  sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat.</p>
                </div>
                <div class="article-content">
                    <div class="payment-method">
                        <h3>Select Payment Method</h3>
                        <p>
                            <input type="radio" id="paypal" name="radio-group">
                            <label for="paypal">PayPal</label>
                        </p>
                        <p>
                            <input type="radio" id="credit" name="radio-group">
                            <label for="credit">Credit Card</label>
                        </p>
                        <p>
                            <input type="radio" id="debit" name="radio-group">
                            <label for="debit">Debit Card</label>
                        </p>
                        <p>
                            <input type="radio" id="others" name="radio-group">
                            <label for="others">others</label>
                        </p>
                    </div>
                    <div class="contact-form">
                        <input type="text" name="name"  placeholder="First Name">
                        <input type="text" name="name"  placeholder="Last Name">
                        <input type="text" name="email"  placeholder="Email">
                        <input type="text" name="phone_number"  placeholder="Phone">
                        <input type="text" name="message"  placeholder="$100.00">
                        <button type="submit" class="default-btn" >Donate Now</button>
                    </div>
                </div>

                <div class="article-footer">
                    <div class="article-tags">
                        <span><i class="fa fa-share"></i></span>
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
</section>
@include('footer.footer')

</body>
</html>

