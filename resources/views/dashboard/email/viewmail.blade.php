@extends('admin')
@section('content_admin')
    <style>
        .table-inbox-wrap{
            margin-left: 40px;
        }
        .gen-case{
            text-align: center;
        }
    </style>
    <div class="mail-w3agile">
        <div class="row">
            <div class="col-sm-3 com-w3ls">
                <section class="panel">
                    <div class="panel-body">
                        <a href="{{route('mail')}}"  class="btn btn-compose">
                            Compose Mail
                        </a>
                        <ul class="nav nav-pills nav-stacked mail-nav">
                            <li class="active"><a href="{{route('sendmail')}}"> <i class="fa fa-inbox"></i> Inbox <span class="label label-danger pull-right inbox-notification">@if(count($mail) > 0){{count($mail)}}@endif</span></a></li>
                            <li><a href="#"> <i class="fa fa-envelope-o"></i> Send Mail</a></li>
                            <li><a href="#"> <i class="fa fa-certificate"></i> Important</a></li>
                        </ul>
                    </div>
                </section>
            </div>
            <div class="col-sm-9 mail-w3agile">
                <section class="panel">
                    <header class="panel-heading wht-bg">
                        <h4 class="gen-case">Read mail</h4>
                    </header>
                    <div class="panel-body minimal">
                        <div class="table-inbox-wrap ">
                            <table class="table table-inbox table-hover">
                                @foreach($viewmail as $mail)
                                <p><i style="font-size: 20px;color: #777777" class="far fa-user-circle"></i>to:{{$mail->email}}</p>
                                <h1 style="line-height: 100px">{{$mail->title}}</h1>
                                <p>Content: {{$mail->content}}</p>
                                @endforeach
                            </table>

                        </div>
                    </div>
                </section>
            </div>
        </div>

    </div>
@endsection



