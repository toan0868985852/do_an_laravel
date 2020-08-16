@extends('home.Causes_Details')
@section('cause_details')
    <script src="https://js.stripe.com/v3/"></script>
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

        .StripeElement {
            box-sizing: border-box;
            width: 510px;
            height: 40px;
            padding: 10px 12px;

            border: 1px solid #00000017;
            border-radius: 4px;
            background-color: white;

            box-shadow: 0 1px 3px 0 #e6ebf1;
            -webkit-transition: box-shadow 150ms ease;
            transition: box-shadow 150ms ease;

            margin-top: 20px;
            margin-bottom: 20px;
        }

        .StripeElement--focus {
            box-shadow: 0 1px 3px 0 #cfd7df;
        }

        .StripeElement--invalid {
            border-color: #fa755a;
        }

        .StripeElement--webkit-autofill {
            background-color: #fefde5 !important;
        }

        .tab button{
            background: none;
            outline: none;
            border: none;
        }
        .tab .tablinks{
            padding: 10px 20px;
            border: 2px solid #E22B64;
            color: #E22B64;
            font-weight: 600;
            margin-right: 8px;
            border-radius: 14px;
            margin-top: 10px;
            transition: .3s;
        }

        .tab .tablinks.active{
            background: #E22B64;
            color: white;
        }

        .form-row input{
            width: 510px;
            height: 40px;
            border-radius: 4px;
            border: 1px solid #00000017;
            box-shadow: 0 1px 3px 0 #e6ebf1;
            padding-left: 14px;
            outline: none;
            margin-bottom: 12px;
        }

        .form-row input:focus{
            border: 2px solid #E22B64;
        }

        form button{
            background: #E22B64;
            outline: none;
            text-align: center;
            color: white;
            font-weight: 600;
            padding: 10px 229px;
            border: none;
            border-radius: 8px;
            transition: .3s;
        }
        form button:hover{
            background: #ff427b;
        }

        .card__donate input{
            width: 510px;
            height: 40px;
            border-radius: 4px;
            border: 1px solid #00000017;
            box-shadow: 0 1px 3px 0 #e6ebf1;
            padding-left: 14px;
            outline: none;
            margin-bottom: 12px;
        }

        .card__donate input:focus{
            border: 2px solid #E22B64;
        }

        .other__donate input{
            width: 510px;
            height: 40px;
            border-radius: 4px;
            border: 1px solid #00000017;
            box-shadow: 0 1px 3px 0 #e6ebf1;
            padding-left: 14px;
            outline: none;
            margin-bottom: 12px;
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
                <div class="success" style="position: relative;margin-left: 184px;top: -37px;font-size: 18px;color: #ff3b7b;">
                    {{Session::get('thanhcong')}}
                </div>
            @endif
        </div>
                <div class="article-content" style="width: 48%;height: 439px;margin-bottom: 40px; margin-top: 0">
                    <h3 style="font-weight: 600; margin-top: -10px">Select Payment Method</h3>
                    <div class="tab">
                        <button class="tablinks active" onclick="openCity(event, 'London')" id="defaultOpen">Card</button>
                        <button class="tablinks" onclick="openCity(event, 'Paris')">Paypal</button>
                        <button class="tablinks" onclick="openCity(event, 'Tokyo')">Other</button>
                    </div>

                    <div id="London" class="tabcontent">
                        <form action="{{url('home/donate/card')}}" method="post" id="payment-form">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-row">
                                <div id="card-element">
                                    <!-- A Stripe Element will be inserted here. -->
                                </div>
                                <!-- Used to display form errors. -->
                                <div id="card-errors" role="alert"></div>
                                <p>
                                <input type="text" name="money"  placeholder="$100.00">
                                </p>

                                <p>
                                <input type="text" name="phone"  placeholder="Phone">
                                </p>
                                <input type="hidden" name="email" value="{{Auth::user()->email}}">
                                <input type="hidden" name="name" value="{{Auth::user()->name}}">
                                <input type="hidden" name="account_id" value="{{Auth::user()->id}}">
                                <input type="hidden" name="projects_id" value="{{$donate->id}}">
                                <input type="hidden" name="doituong" value="{{$donate->doi_tuong}}">
                            </div>
                            <button>Donate</button>
                        </form>
                    </div>

                    <div id="Paris" class="tabcontent" style="display: none">
                        <form class="w3-container w3-display-middle w3-card-4 " method="POST" action="{{url('home/donate/paypal')}}">
                            {{ csrf_field() }}
                            <label class="w3-text-blue"><b style="display: none">Enter Amount</b></label>
                            <p class="card__donate">
                                <input class="w3-input w3-border" name="amount" type="text" placeholder="$100.00">
                            </p>
                            <p class="card__donate">
                                <input type="text" name="email"  placeholder="Email">
                            </p>
                            <p class="card__donate">
                                <input type="text" name="phone"  placeholder="Phone">
                            </p>
                            <input type="hidden" name="name" value="{{Auth::user()->name}}">
                            <input type="hidden" name="account_id" value="{{Auth::user()->id}}">
                            <input type="hidden" name="projects_id" value="{{$donate->id}}">
                            <input type="hidden" name="doituong" value="{{$donate->doi_tuong}}">
                            <button class="w3-btn w3-blue">Donate</button>
                        </form>
                    </div>

                    <div id="Tokyo" class="tabcontent" style="display: none">
                        @if(Auth::check())
                       <form action="{{url('home/donate/order')}}" method="post" class="other__donate">
                           <input type="hidden" name="_token" value="{{csrf_token()}}">
                           <input type="hidden" name="name" value="{{Auth::user()->name}}">
                           <input type="hidden" name="account_id" value="{{Auth::user()->id}}">
                           <input type="hidden" name="projects_id" value="{{$donate->id}}">
                           <input type="hidden" name="doituong" value="{{$donate->doi_tuong}}">
                           <p>
                           <input style="margin-top: 20px" id="others" name="other" placeholder="Payment methods">
                           </p>
                           <p>
                           <input type="text" name="money"  placeholder="$100.00">
                           </p>
                           <p>
                           <input type="text" name="email"  placeholder="Email">
                           </p>
                           <p>
                           <input type="text" name="phone"  placeholder="Phone">
                           </p>
                          <button>Donate</button>
                       </form>
                        @endif
                    </div>
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

            // Create a Stripe client.
            var stripe = Stripe('pk_test_51HFbVQDI7hfCJO2cMyAGFGqX4HoRfIyWZr4eVsyteUTHkGBmA6XYXQhvv5O6BbMFWg148FlKKrRIHce0QUhsGlXg00KDnK9rM8');

            // Create an instance of Elements.
            var elements = stripe.elements();

            // Custom styling can be passed to options when creating an Element.
            // (Note that this demo uses a wider set of styles than the guide below.)
            var style = {
                base: {
                    color: '#32325d',
                    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                    fontSmoothing: 'antialiased',
                    fontSize: '16px',
                    '::placeholder': {
                        color: '#aab7c4'
                    }
                },
                invalid: {
                    color: '#fa755a',
                    iconColor: '#fa755a'
                }
            };

            // Create an instance of the card Element.
            var card = elements.create('card', {style: style});

            // Add an instance of the card Element into the `card-element` <div>.
            card.mount('#card-element');

            // Handle real-time validation errors from the card Element.
            card.on('change', function(event) {
                var displayError = document.getElementById('card-errors');
                if (event.error) {
                    displayError.textContent = event.error.message;
                } else {
                    displayError.textContent = '';
                }
            });

            // Handle form submission.
            var form = document.getElementById('payment-form');
            form.addEventListener('submit', function(event) {
                event.preventDefault();

                stripe.createToken(card).then(function(result) {
                    if (result.error) {
                        // Inform the user if there was an error.
                        var errorElement = document.getElementById('card-errors');
                        errorElement.textContent = result.error.message;
                    } else {
                        // Send the token to your server.
                        stripeTokenHandler(result.token);
                    }
                });
            });

            // Submit the form with the token ID.
            function stripeTokenHandler(token) {
                // Insert the token ID into the form so it gets submitted to the server
                var form = document.getElementById('payment-form');
                var hiddenInput = document.createElement('input');
                hiddenInput.setAttribute('type', 'hidden');
                hiddenInput.setAttribute('name', 'stripeToken');
                hiddenInput.setAttribute('value', token.id);
                form.appendChild(hiddenInput);

                // Submit the form
                form.submit();
            }


            function openCity(evt, cityName) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }
                document.getElementById(cityName).style.display = "block";
                evt.currentTarget.className += " active";
            }

            // Get the element with id="defaultOpen" and click on it
            document.getElementById("defaultOpen").click();
        </script>

    @endforeach
    @endif
@endsection
