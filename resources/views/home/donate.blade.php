@extends('home.Causes_Details')
@section('cause_details')
    <style>
        a {
            text-decoration: none;
        }
        .card {
            color: #fff;
            position: relative;
            overflow: hidden;
            margin: 0 10px 10px 10px;
            max-width: 550px;
            background: #000000;
            text-align: left;
            cursor: pointer;
        }
        .card__image {
            max-width: 100%;
            opacity: 1;
            transition: all 0.4s;
        }
        .card__title {
            position: absolute;
            bottom: 0;
            left: 0;
            padding: 30px 30px 30px 50px;
            width: 100%;
            height: 100%;
        }
        .card__title::before {
            content: "";
            position: absolute;
            background: rgba(255, 255, 255, 0.5);
            top: 30px;
            right: 30px;
            bottom: 30px;
            left: 100%;
            border-left: 4px solid rgba(255, 255, 255, 0.8);
            opacity: 0;
            transition: all 0.5s;
            transition-delay: 0.7s;
        }
        .card__title h2,
        .card__title p {
            margin: 0 0 10px;
            opacity: 0;
            transition: all 0.4s;
        }
        .card__title h2 {
            text-transform: uppercase;
            transform: translateX(50px);
            transition-delay: 0.3s;
        }
        .card__title p {
            transform: translateY(40px);
        }
        .card__title--icon > a {
            color: #fff;
            margin: 4px;
            transform: translateX(50px);
            opacity: 0;
            border: 2px solid #fff;
            padding: 7px 10px;
            border-radius: 11px;
            transition: all 0.4s;
            position: relative;
            top: 10px;
        }
        .card__title--icon > a:nth-child(1) {
            transition-delay: 0.5s;
        }
        .card__title--icon > a:nth-child(2) {
            transition-delay: 0.4s;
        }
        .card__title--icon > a:nth-child(3) {
            transition-delay: 0.3s;
        }
        .card__title--icon > a:nth-child(4) {
            transition-delay: 0.2s;
        }

        .card .card__image {
            opacity: 0.2;
        }
        .card .card__title h2 {
            opacity: 1;
            transform: translateX(0px);
            transition-delay: 0.4s;
            font-size: 28px;
        }
        .card .card__title p {
            opacity: 1;
            transform: translateY(0);
            transition-delay: 0.6s;
            font-size: 14px;
        }
        .card .card__title::before {
            left: 30px;
            opacity: 1;
            background: transparent;
            transition-delay: 0s;
        }
        .card .card__title--icon > a {
            opacity: 1;
            transform: translateX(0);
            transition: all 0.4s;
        }
        .card .card__title--icon > a:nth-child(1) {
            transition-delay: 0.7s;
        }
        .card .card__title--icon > a:nth-child(2) {
            transition-delay: 0.8s;
        }
        .card .card__title--icon > a:nth-child(3) {
            transition-delay: 0.9s;
        }
        .card .card__title--icon > a:nth-child(4) {
            transition-delay: 1s;
        }

        .radio-input a{
            display: none;
        }

        .article-content form div p.active a{
            display: block ;
        }


    </style>
    @if(Auth::check())
    @foreach($donate2 as $donate)
        <div class="error" style="position: absolute">
            @if(count($errors)>0)
                <p style="margin-left: 185px;top: 12px; color: red; position: relative;">
                @foreach($errors->all() as $err)
                    {{$err}}
                @endforeach
                </p>
            @endif
        </div>
        <div class="thanhcong" style="position: absolute">
            @if(Session::has('thanhcong'))
                <div class="success" style="position: relative;margin-left: 184px;top: 9px;font-size: 18px;color: #ff3b7b;">
                    {{Session::get('thanhcong')}}
                </div>
            @endif
        </div>
                <div class="article-content" style="width: 48%;margin-bottom: 40px; margin-top: 0">
                    <form action="{{route('donate.store')}}" method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="payment-method" style="position: absolute; margin-top: -115px">
                            <p class="radio-input active" style="display: none"></p>
                            <h3>Select Payment Method</h3>
                            <p style="padding-right: 11px;padding-left: 8px;">
                                <input type="radio" id="paypal" name="radio" value="PayPal">
                                <label for="paypal">PayPal</label>
                            </p>
                            <p class="radio-input" style="padding-right: 11px;padding-left: 8px;">
                                <input type="radio" id="credit" name="radio" value="Card">
                                <label for="credit">Card</label>
                                <a class="input-card">
                                    <input style="font-size: 16px;width: 197%;height: 50px;border: 1px solid #e6e6e6;margin-bottom: -9px;position: absolute;margin-left: -97px;margin-top: -4px; padding-left: 19px" type="number" id="others" name="card" placeholder="Card number">
                                </a>
                            </p>
                            <p class="radio-input" style="padding-right: 11px;padding-left: 8px;">
                                <input type="radio" id="credit" name="radio" value="Other">
                                <label for="credit">Other</label>
                                <a class="input-card">
                                    <input style="font-size: 16px;width: 197%;height: 50px;border: 1px solid #e6e6e6;margin-bottom: -9px;position: absolute;margin-left: -172px;margin-top: -4px; padding-left: 19px" type="text" id="others" name="other" placeholder="Payment methods">
                                </a>
                            </p>
                        </div>
                        <div class="contact-form" style="line-height: 5; margin-top: 100px;position: relative;top: 20px;">
                            <input type="hidden" name="name" value="{{Auth::user()->name}}">
                            <input type="hidden" name="doituong" value="{{$donate->doi_tuong}}">
                            <input type="text" name="email"  placeholder="Email">
                            <input type="text" name="phone"  placeholder="Phone">
                            <input type="text" name="money"  placeholder="$100.00">
                            <button type="submit" class="default-btn" >Donate Now</button>
                        </div>

                    </form>

                </div>
                <div class="campaing-img" style="margin-left: 35px;">
                    <div class="card">
                        <img style="width: 550px;height: 436px;" class="card__image" src="{{asset("fronend/home/img/projects/" . "$donate->img" . "")}}" alt="img">
                        <div class="card__title">
                            <h2>{{$donate->doi_tuong}}</h2>
                            <p style="color: white; font-size: 19px">
                                {{$donate->title1}}
                                <br>
                                {{$donate->title2}}
                            </p>
                            <p style="color: white; margin-top: 50px;font-size: 13px">{{$donate->p1}}</p>
                            <p style="color: white;font-size: 13px">{{$donate->p2}}</p>
                        </div>
                    </div>
                </div>
        <script>
            $(document).ready(function () {
                $('.article-content form div p').click(function() {
                    if ($(this).hasClass('active')) {
                        return;
                    } else {
                        $('.active').removeClass('active');
                        $(this).addClass('active');
                    }
                });
            });
        </script>

    @endforeach
    @endif
@endsection
