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
                    <div class="article-content">
                        <div class="error" style="color: red;text-align: center;">
                            @if(count($errors)>0)
                                @foreach($errors->all() as $err)
                                    {{$err}}
                                @endforeach
                            @endif
                        </div>
                        <div class="thanhcong" style="text-align: center;font-size: 20px;color: #ff3187;font-weight: 600;">
                            @if(Session::has('thanhcong'))
                                <div class="success">
                                    {{Session::get('thanhcong')}}
                                </div>
                            @endif
                        </div>
                        <form action="{{route('donate.store')}}" method="post">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="payment-method">

                            <h3>Select Payment Method</h3>
                            <p>
                                <input type="radio" id="paypal" name="radio" value="PayPal">
                                <label for="paypal">PayPal</label>
                            </p>
                            <p>
                                <input type="radio" id="credit" name="radio" value="Credit Card">
                                <label for="credit">Credit Card</label>
                            </p>
                            <p>
                                <input type="radio" id="debit" name="radio" value="Debit Card">
                                <label for="debit">Debit Card</label>
                            </p>
                            <p>
                                <input type="radio" id="others" name="radio" value="others">
                                <label for="others">others</label>
                            </p>

                        </div>
                        <div class="contact-form">
                            <input type="hidden" name="name" value="{{Auth::user()->name}}">
                            <input type="hidden" name="doituong" value="{{$caudetails->doi_tuong}}">
                            <input type="text" name="email"  placeholder="Email">
                            <input type="text" name="phone"  placeholder="Phone">
                            <input type="text" name="money"  placeholder="$100.00">
                            <button type="submit" class="default-btn" >Donate Now</button>

                        </div>
                        </form>

                    </div>
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
@endsection
