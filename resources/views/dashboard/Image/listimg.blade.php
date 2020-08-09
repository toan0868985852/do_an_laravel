@extends('admin')
@section('content_admin')
    <div class="title_image">
        <h1>List Image</h1>
    </div>
    <section class="flex">
        @foreach($imagelist as $img)
            <div class="card">
                <img class="card__image" src="{{asset("backend/img-list/".$img->img."")}}" alt="img">
            </div>
        @endforeach
    </section>
@endsection
