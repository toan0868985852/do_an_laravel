@extends('admin')
@section('content_admin')
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                List of supporters
            </div>
            <div class="table-responsive">
                <div class="thanhcong">
                    @if(Session::has('thanhcong'))
                        <div class="success" style="text-align: center;line-height: 41px;font-weight: 600;color: #e43d9e;">
                            {{Session::get('thanhcong')}}
                        </div>
                    @endif
                </div>
                <table class="table table-striped b-t b-light">
                    <thead>
                    <tr>
                        <th>Name</th>
{{--                        <th>Email</th>--}}
                        <th>Support for</th>
                        <th>Amount of money</th>
                        <th>Form</th>
                        <th>Phone</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($donate as $donates)
                    <tr>
                        <td>{{$donates->name}}</td>
{{--                        <td>{{$donates->email}}</td>--}}
                        <td>{{$donates->doi_tuong}}</td>
                        <td>{{$donates->so_tien_donate}}</td>
                        @if($donates->hinh_thuc == 'Other')
                            <td>{{$donates->other}}</td>
                        @else
                            <td>{{$donates->hinh_thuc}}</td>
                        @endif

                        <td>{{$donates->phone}}</td>
                        <td>
                            @if($donates->history == 0)
                                <a style="color: red ;font-size: 21px;position: absolute;margin-top: -4px;" href="{{url("admin/donate/active/".$donates->id."")}}"><i class="far fa-thumbs-down"></i></a>
                            @else
                                <a style="color: #27c514 ;font-size: 21px;position: absolute;margin-top: -4px;"><i class="far fa-thumbs-up"></i></a>
                            @endif
                        </td>
                        <td class="view-message text-right">
                            @if($donates->history == 0)
                            <form style="" action="{{url("admin/donate/".$donates->id."")}}" method="post">
                                {{csrf_field()}}
                                {{method_field('delete')}}
                                <button style="border: none; background: none; outline: none"><i class="far fa-trash-alt"></i></button>
                            </form>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection


