@extends('admin')
@section('content_admin')
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Edit user
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <div class="error_edit_user">
                        @if(count($errors)>0)
                            @foreach($errors->all() as $err)
                                {{$err}}
                            @endforeach
                        @endif
                    </div>
                    <form role="form"  method="post" action="/do_an_laravel/public/admin/edit/{{$editUser->id}}">
                        @method('PATCH')
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="id" value="{{ $editUser->id }}">
                        <div class="form-group">
                            <label for="exampleInputEmail1">User name</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{ $editUser->name }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleInputPassword1" value="{{ $editUser->email }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Ngày sửa</label>
                            <input type="datetime-local" name="time" value="{{ $editUser->created_at }}">
                        </div>
                        <button type="submit" class="btn btn-info">Submit</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection


