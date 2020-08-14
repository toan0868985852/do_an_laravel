@extends('admin')
@section('content_admin')
    <div class="title_image">
        <h1>Photo List</h1>
    </div>
    <section class="flex">
        @foreach($image as $img)
        <div class="card">
            <img class="card__image" src="{{asset("public/backend/img/".$img->img."")}}" alt="img">
                <div class="card__title">
                    <h2>{{$img->title}}</h2>
                    <p>{{ $img->content }}</p>
                    <div class="card__title--icon">
                    <a href="{{url("admin/image/listimg/".$img->id."")}}">All Photos</a>
                </div>
            </div>
        </div>
        @endforeach
    </section>
@endsection

