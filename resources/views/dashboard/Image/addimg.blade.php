@extends('admin')
@section('content_admin')
    <section class="panel">
        <header class="panel-heading">
            Add image
        </header>
        <div class="panel-body">
            <div class="thanhcong">
                @if(Session::has('thanhcong'))
                    <div class="success" style="text-align: center;color: #e43d9e;">
                        {{Session::get('thanhcong')}}
                    </div>
                @endif
            </div>
            <div class="position-center">
                <form role="form" action="{{route('addimages')}}" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="title">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Content</label>
                        <textarea type="text" name="contents" class="form-control" id="exampleInputPassword1" placeholder="content"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <input type="file" name="addimg" id="exampleInputFile">
                    </div>
                    <button type="submit" class="btn btn-info">Submit</button>
                </form>
            </div>
        </div>
    </section>
@endsection
