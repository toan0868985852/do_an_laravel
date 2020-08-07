@extends('home.Event_Details')
@section('event_details')
@foreach($DetailsEvent as $eventDetails)
{{--        <img src="{{asset("fronend/img_blog/blog/" . "$b->img" . "")}}" style="width: 100%;">--}}
<img src="{{asset("fronend/home/img/even/" . "$eventDetails->img" . "")}}" style="width: 100%;">
        <div class="article-content">
            <div class="entry-meta">
                <ul>
                    <li style="width: 50%;"><span style="color: #fd3c65">Posted On:</span> <a href="#">{{ $eventDetails->time }} {{ $eventDetails->date }}</a></li>
                </ul>
                <h3 style="font-weight: 700">{{ $eventDetails->title }}</h3>
                <p>{{ $eventDetails->event_mission }}</p>
{{--                <h3 style="font-weight: 700">Event Mission</h3>--}}
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
        <div class="article-content">
            <div class="entry-meta">
                <p>{{ $eventDetails->event_location }}</p>
            </div>
        </div>
@endforeach
@endsection
