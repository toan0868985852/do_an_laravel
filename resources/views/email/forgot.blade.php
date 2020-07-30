<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<section>
    <div class="conten">
        <h3>FABV</h3>
        <img src="{{asset('fronend/img/lago2.png')}}" alt="img" width="100px">

        <div class="text">
            <h1>
                Bạn đã quên mật khẩu
            </h1>
            <p>Chào {{ $user->name }} - bạn muốn đổi lại mật khẩu</p>
            <a href="{{url('reset_password'.'/'.$user->email.'/'.$code)}}">reset password</a>
        </div>
    </div>
</section>

</body>

</html>
