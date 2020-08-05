@extends('home.Blog_Details')
@section('blog_details_1')
    @foreach($blog as $b)
        <img src="{{asset("fronend/img_blog/blog/" . "$b->img" . "")}}" style="width: 100%;">
        <div class="article-content">
            <div class="entry-meta">
                <ul>
                    <li style="width: 50%;"><span style="color: #fd3c65">Posted On:</span> <a href="#">September 31, 2020</a></li>
                    <li style="width: 50%;text-align: right"><span style="color: #fd3c65">Posted By:</span> <a href="#">John Anderson</a></li>
                </ul>
        <h3>{{$b->tieu_de}}</h3>
        <p>{{$b->p1}}</p>
        <p>{{$b->p2}}</p>
        <p>{{$b->p3}}</p>
        <p>{{$b->p4}}</p>
            </div>
        </div>
    @endforeach
@endsection

@section('message')
    <div class="comments-area">
        <h3 class="comments-title">
                {{count($massages)}} Comments:
        </h3>
        <ul class="comments-list">
            @foreach($massages as $message)
                <li class="comment">
                    <div class="comment-body">
                        <footer class="comments-meta">
                            <div class="comment-author vcard">
                                <img src="{{asset('fronend/img_blog/Blog-Details/11.jpg')}}" class="avatar" alt="image">
                                <b class="fn">{{ $message->name }}</b>
                            </div>
                            <div class="comment-metadata">
                                <a href="#">
                                    <span>{{ $message->create_at }}</span>
                                </a>
                            </div>
                            <div class="comment-content">
                                <p>{{ $message->comment }}</p>
                            </div>
                            <div class="reply">
                                <a href="#" class="comment-reply-link">Reply</a>
                            </div>
                        </footer>
                    </div>
                </li>
            @endforeach
        </ul>
        <div class="comments-respond">
            <h3 class="comment-reply-title">Leave a Reply</h3>
            <form class="comment-form" action="{{route('message.store')}}" method="post">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <p class="comment-notes">
                    <span id="email-notes">Your email address will not be published.</span>
                    Required fields are marked
                    <span class="required">*</span>
                </p>
                <p class="comment-form-comment">
                    <label>Comment</label>
                    <textarea name="comment" id="comment" cols="45" rows="5" maxlength="65525" required="required"></textarea>
                </p>
                <p class="comment-form-author">
                    <label>Name <span class="required">*</span></label>
                    <input type="text" id="author" name="name" required="required">
                </p>
                <p class="comment-form-email">
                    <label>Email <span class="required">*</span></label>
                    <input type="email" id="email" name="email" required="required">
                </p>
                <p class="form-submit">
                    <input type="submit" name="submit" id="submit" class="submit" value="Post A Comment">
                </p>

            </form>
        </div>
    </div>
@endsection


