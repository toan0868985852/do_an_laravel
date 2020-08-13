@extends('home.Causes_Details')
@section('cause_details')
    @foreach($causeDetails as $caudetails)
                <div class="col-lg-8 col-md-12">

                    <div class="article-image">

                        <div class="campaing-img" >
                            <img style="width: 100%;" src="{{asset("fronend/home/img/projects/" . "$caudetails->img" . "")}}">
                        </div>

                        <div class="campaing-text">
                            <div class="progress pink">
                                <div class="progress-bar">
                                    <div class="progress-value" style="width: 50%;">50%</div>
                                </div>
                            </div>
                            <ul>
                                <li><span>Raised:</span> ${{$caudetails->muc_tieu}}</li>
                                <li class="left-site"><span>Goal:</span> ${{$caudetails->so_tien_khuyen_gop_duoc}}</li>
                            </ul>
                            <h3>{{$caudetails->title1}}</h3>
                            <p>{{$caudetails->p1}}</p>
                            <p>{{$caudetails->p2}}</p>
                        </div>

                    </div>

                    <div class="article-content">
                        <div class="entry-meta">
                            <ul>
                                <li><span style="color: #fd3c65">Posted On: </span> September 31, 2019</li>
                            </ul>
                        </div>
                        <h3>{{$caudetails->title2}}</h3>
                        <p>{{$caudetails->p3}}</p>
                        <p>{{$caudetails->p4}}</p>
                    </div>
                    @if(Auth::check())
                        <a style="text-decoration: none;padding: 12px 340px 12px 340px;color: #fff; background: #e22b64; margin-left: 13px; position: relative;top: 25px;border-radius: 8px;font-weight: 600;" href="{{url("home/donate2/".$caudetails->id."")}}">Donate</a>
                    @else
                        <a style="text-decoration: none;padding: 12px 340px 12px 340px;color: #fff; background: #e22b64; margin-left: 13px; position: relative;top: 25px;border-radius: 8px;font-weight: 600;" href="{{route('login.index')}}">Donate</a>
                    @endif
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
    @endforeach
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
@endsection
