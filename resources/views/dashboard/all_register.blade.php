@extends('admin')
@section('content_admin')
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
               Danh sách những người đã đăng ký
            </div>
            <div class="row w3-res-tb">
                <div class="col-sm-4">
                </div>
                <div class="col-sm-3">
                    <p style="position: relative; left: 497px">Tìm kiếm theo tên</p>
                    <div class="input-group">
                        <input type="text" class="input-sm form-control" placeholder="Search">
                        <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button"><i class="fa fa-search"></i></button>
          </span>
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
                    @foreach($users as $user)
                    <tr>
                        <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                        <td>{{ $user->name }}</td>
                        <td><span class="text-ellipsis">{{ $user->email }}</span></td>
                        <td><span class="text-ellipsis">{{ $user->created_at }}</span></td>
                        <td>
                            <a href="/do_an_laravel/public/admin/edit/{{$user->id}}" class="active">
                                <i class="fa fa-pencil-square-o text-success text-active"></i></a>
                            <a href="">
                                <i class="fa fa-times text-danger text"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

