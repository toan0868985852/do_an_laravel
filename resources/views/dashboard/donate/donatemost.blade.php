@extends('admin')
@section('content_admin')
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                5 people who support the most
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
                            <td>{{$donates->hinh_thuc}}</td>
                            <td>{{$donates->phone}}</td>
                            <td class="view-message text-right">
                                <form style="" action="{{url("admin/donatemost/".$donates->id."")}}" method="post">
                                    {{csrf_field()}}
                                    {{method_field('delete')}}
                                    <button style="border: none; background: none; outline: none"><i class="far fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection



