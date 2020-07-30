<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login-logout</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link rel="icon" href="{{asset('fronend/img/lago2.png')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="{{asset('fronend/css/style.css')}}">
</head>
<body>
    <div class="img">
        <div class="container">
            <div class="background__img">
                <a class="logo" href="">FABV</a>
                <div class="img__icon">
                    <ul>
                        <li><a class="icon1" href=""><i class='fab fa-facebook-f'></i></a></li>
                        <li><a class="icon2" href=""><i class='fab fa-twitter'></i></a></li>
                        <li><a class="icon3" href=""><i class='fab fa-google'></i></a></li>
                        <li><a class="icon4" href=""><i class='fab fa-linkedin-in'></i></a></li>
                        <li><a class="icon5" href=""><i class='fab fa-pinterest'></i></a></li>
                    </ul>
                </div>
                <div class="signup-login">
                    <a class="active" href="">Login</a>
                    <a href="{{route('signup.index')}}">Register</a>
                </div>
            </div>
            <div class="form__img">
                <div class="thongbao">
                    @if(Session::has('thongbao'))
                        <div class="success">
                            {{Session::get('thongbao')}}
                        </div>
                    @endif
                </div>
                <div class="error_login">
                    @if(count($errors)>0)
                        @foreach($errors->all() as $err)
                            {{$err}}
                        @endforeach
                    @endif
                </div>
                <form action="{{route('login.store')}}" method="post" class="login">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="login__text">
                        <p>Sign into your account</p>
                    </div>
                    <div class="textbox">
                        <input type="text" name="email" placeholder="Email Address">
                        <i class="material-icons">mail_outline</i>
                    </div>
                    <div class="textbox">
                    <input type="password" name="password" placeholder="Password">
                        <i class="material-icons">lock_outline</i>
                    </div>
                    <input class="form__checkbox" type="checkbox">
                    <span>Remember</span>
                    <a href="{{route('forgotPassword')}}">Forgot Password</a>
                    <div class="button">
                        <button type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
</body>
</html>
