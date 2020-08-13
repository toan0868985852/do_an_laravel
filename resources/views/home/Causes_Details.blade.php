
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

            @yield('cause_details')

        </div>
    </div>
</section>
@include('footer.footer')

</body>
</html>

