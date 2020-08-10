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
                            <li class="active"><a href="mail.html"> <i class="fa fa-inbox"></i> Inbox <span class="label label-danger pull-right inbox-notification">0</span></a></li>
                            <li><a href="#"> <i class="fa fa-envelope-o"></i> Send Mail</a></li>
                            <li><a href="#"> <i class="fa fa-certificate"></i> Important</a></li>
                        </ul>
                    </div>
                </section>
            </div>
            <div class="col-sm-9 mail-w3agile">
                <section class="panel">
                    <header class="panel-heading wht-bg">
                        <h4 class="gen-case">Sent</h4>
                    </header>
                    <div class="panel-body minimal">
                        <div class="table-inbox-wrap ">
                            <table class="table table-inbox table-hover">
                                <tbody>
                                @foreach($mail as $email)
                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                    <td class="view-message dont-show"><a href="#">{{$email->email}}</a></td>
                                    <td class="view-message"><a href="#">{{$email->title}}</a></td>
                                    <td class="view-message inbox-small-cells"></td>
                                    <td class="view-message text-right">{{$email->created_at}}</td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </section>
            </div>
        </div>

    </div>
@endsection



