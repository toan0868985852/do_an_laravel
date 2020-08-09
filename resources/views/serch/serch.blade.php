@extends('admin')
@section('content_admin')
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                @if(count($serch) > 0)
                    {{count($serch)}} people found in the list registered
                    @else
                    Name does not exist
                @endif
            </div>
            <div class="row w3-res-tb">
                <div class="col-sm-4">
                </div>
                <div class="col-sm-3">
                    <p style="position: relative; left: 497px">Search by name</p>
                    <div class="input-group">
                        <form action="{{route('serch')}}" method="get">
                            <input style="outline: none; width: 200px" type="text" name="key" class="input-sm form-control" placeholder="Search">
                            <button style="float: right; position: absolute" class="btn btn-sm btn-default" ><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped b-t b-light">
                    <thead>
                    <tr>
                        <th style="width:20px;">
                            <label class="i-checks m-b-none">
                                <input type="checkbox"><i></i>
                            </label>
                        </th>
                        <th>User name</th>
                        <th>Email</th>
                        <th>Date</th>
                        <th style="width:30px;"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($serch as $user)
                        <tr>
                            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                            <td>{{ $user->name }}</td>
                            <td><span class="text-ellipsis">{{ $user->email }}</span></td>
                            <td><span class="text-ellipsis">{{ $user->created_at }}</span></td>
                            <td style="position: relative">
                                <a href="/do_an_laravel/public/admin/edit/{{$user->id}}" class="active">
                                    <i style="position: relative; top: -10px" class="far fa-edit text-success text-active"></i></a>
                                <a style="position: absolute; top: 25px; right: 20px" href="#myModal-2" data-toggle="modal">
                                    <i class="fa fa-times text-danger text"></i>
                                </a>
                                <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal-2" class="modal fade">
                                    <div class="modal-dialog">
                                        <div class="modal-content col-lg-6" style="margin-left: 28%">
                                            <div class="modal-header">
                                                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                                <h4 class="modal-title">ADMIN</h4>
                                            </div>
                                            <div class="modal-body">
                                                <p style="line-height: 57px; text-align: center">Bạn có muốn xóa người dùng này</p>
                                                <form style="margin-left: 67%" action="{{route('edit.destroy',$user->id)}}" method="post">
                                                    {{csrf_field()}}
                                                    {{method_field('delete')}}
                                                    <button class="btn btn-default">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

