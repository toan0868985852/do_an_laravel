
<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
    <link rel="stylesheet" href="{{asset('fronend/css/Contact.css')}}" type="text/css">
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
@include('header.header')
<body style="background-color: #fcfcfc;">

<section class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>Contact</h2>
            <ul>
                <li>
                    <a href="#">Home</a>
                </li>
                <i class="fa fa-chevron-right" style="color:#bab0b0"></i>
                <li>Contact</li>
            </ul>
        </div>
    </div>
</section>

<section class="contact-box" style="padding-top: 100px;
    padding-bottom: 70px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-contact-box" style="height: 216px">
                    <i class="fa fa-map-marker"></i>
                    <div class="contect-title">
                        <h3>Address</h3>
                        <p>8 Ton That Thuyet, My Dinh, Tu Liem, Ha Noi </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-contact-box">
                    <i class="fa fa-envelope"></i>
                    <div class="contect-title">
                        <h3>Email</h3>
                        <p>hello@nivo.com</p>
                        <p>4475551234@fax.com</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-contact-box">
                    <i class="fa fa-phone"></i>
                    <div class="contect-title">
                        <h3>Phone</h3>
                        <p>+44 587 154756</p>
                        <p>+55 5555 14574</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="contact-area" style="padding-bottom: 100px;">
    <div class="container">
        <div class="section-title">
            <h2>Drop us message for any query</h2>
            <p>If you have an idea, we would love to hear about it.</p>
        </div>
        <div class="row">
            <div class="row align-items">
                <div class="col-lg-6">
                    <div class="contact-form">
                        <form>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" name="name"  class="form-control" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" required=""  placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" name="phone_number" id="phone_number" required="" class="form-control" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" name="msg_subject" id="msg_subject" class="form-control"  placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="6" placeholder="Your Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12" style="text-align: center;">
                                    <button type="submit" class="default-btn">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="map-area">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.09518229865!2d105.77955771540225!3d21.028877193149135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b3260b1a8b%3A0x862052392e3f478e!2zOCBUw7RuIFRo4bqldCBUaHV54bq_dCwgTeG7uSDEkMOsbmgsIFThu6sgTGnDqm0sIEjDoCBO4buZaSAxMDAwMCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1597321433036!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('footer.footer')
</body>
</html>

