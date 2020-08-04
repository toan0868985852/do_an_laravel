@extends('home.Blog_Details')
@section('blog_details_1')
    @foreach($blog as $b)
        <h3>{{$b->tieu_de}}</h3>
        <p>{{$b->p1}}</p>
        <p>{{$b->p2}}</p>
        <p>{{$b->p3}}</p>
        <p>{{$b->p4}}</p>
    @endforeach
@endsection
