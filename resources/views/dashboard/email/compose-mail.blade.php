@extends('admin')
@section('content_admin')
    <div class="mail-w3agile">
        <div class="row">
            <div class="col-sm-3 com-w3ls">
                <section class="panel">
                    <div class="panel-body">
                        <a href="mail_compose.html"  class="btn btn-compose">
                            Compose Mail
                        </a>
                        <ul class="nav nav-pills nav-stacked mail-nav">
                            <li class="active">
                                <a href="mail.html"> <i class="fa fa-inbox"></i> Inbox
                                    <span class="label label-danger pull-right inbox-notification">0</span>
                                </a>
                            </li>
                            <li><a href="#"> <i class="fa fa-envelope-o"></i> Send Mail</a></li>
                            <li><a href="#"> <i class="fa fa-certificate"></i> Important</a></li>
                        </ul>
                    </div>
                </section>
            </div>
            <div class="col-sm-9 mail-w3agile">
                <section class="panel">
                    <header class="panel-heading wht-bg">
                        <h4 class="gen-case"> Compose Mail</h4>
                    </header>
                    <div class="panel-body">
                        <div class="compose-btn pull-right">
                            <button class="btn btn-primary btn-sm"><i class="fa fa-check"></i> Send</button>
                        </div>
                        <div class="compose-mail">
                            <div class="error" style="text-align: center;margin-top: -22px;margin-bottom: 20px;font-size: 20px;color: red;">
                                @if(count($errors)>0)
                                    @foreach($errors->all() as $err)
                                        <p>{{$err}}</p>
                                    @endforeach
                                @endif
                            </div>
                            <div class="thanhcong">
                                @if(Session::has('thanhcong'))
                                    <div class="success" style="text-align: center;margin-bottom: 20px;margin-top: -20px; font-size: 20px;font-weight: 600;">
                                        {{Session::get('thanhcong')}}
                                    </div>
                                @endif
                            </div>
                            <form role="form-horizontal" action="{{route('sendmail')}}" method="post">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="form-group">
                                    <label for="to" class="">To:</label>
                                    <input type="text" name="to" tabindex="1" id="to" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="subject" class="">Subject:</label>
                                    <input type="text" name="subject" tabindex="1" id="subject" class="form-control">
                                </div>

                                <div class="compose-editor">
                                    <textarea name="body" class="wysihtml5 form-control" rows="9"></textarea>
                                    <input type="file" class="default">
                                </div>
                                <div class="compose-btn">
                                    <button class="btn btn-primary btn-sm"><i class="fa fa-check"></i> Send</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection


