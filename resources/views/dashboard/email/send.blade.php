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
                                <tr class="unread">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                    <td class="view-message  dont-show"><a href="#">ABC Company</a></td>
                                    <td class="view-message "><a href="#">Lorem ipsum dolor imit set.</a></td>
                                    <td class="view-message  inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                    <td class="view-message  text-right">12.10 AM</td>
                                </tr>
                                <tr class="unread">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                    <td class="view-message dont-show"><a href="#">Mr Bean</a></td>
                                    <td class="view-message"><a href="#">Hi Bro, Lorem ipsum dolor imit</a></td>
                                    <td class="view-message inbox-small-cells"></td>
                                    <td class="view-message text-right">Jan 11</td>
                                </tr>
                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                    <td class="view-message dont-show"><a href="#">Jonathan Smith</a></td>
                                    <td class="view-message"><a href="#">Lorem ipsum dolor sit amet</a></td>
                                    <td class="view-message inbox-small-cells"></td>
                                    <td class="view-message text-right">March 15</td>
                                </tr>
                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                    <td class="view-message dont-show"><a href="#">Facebook</a></td>
                                    <td class="view-message"><a href="#">Dolor sit amet, consectetuer adipiscing</a></td>
                                    <td class="view-message inbox-small-cells"></td>
                                    <td class="view-message text-right">June 01</td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </section>
            </div>
        </div>

    </div>
@endsection



