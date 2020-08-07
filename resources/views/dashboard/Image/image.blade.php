@extends('admin')
@section('content_admin')
    <div class="title_image">
        <h1>Photo List</h1>
    </div>
    <section class="flex">
    <div class="card">
        <img class="card__image" src="{{asset('backend/img-list/5.jpg')}}" alt="img">
        <div class="card__title">
            <h2>Lorem, ipsum dolor.</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita eos, obcaecati illum quo rem laudantium?</p>
            <div class="card__title--icon">
                <a href="#">All Photos</a>
            </div>
        </div>
    </div>
    <div class="card">
        <img class="card__image" src="{{asset('backend/img-list/1.jpg')}}" alt="img">
        <div class="card__title">
            <h2>Lorem, ipsum dolor.</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita eos, obcaecati illum quo rem laudantium?</p>
            <div class="card__title--icon">
{{--                <a href="#" class="fab fa-facebook-f"></a>--}}
{{--                <a href="#" class="fab fa-twitter"></a>--}}
{{--                <a href="#" class="fab fa-instagram"></a>--}}
{{--                <a href="#" class="fab fa-linkedin-in"></a>--}}
                <a href="#">All Photos</a>
            </div>
        </div>
    </div>
    <div class="card">
        <img class="card__image" src="{{asset('backend/img-list/4.jpg')}}" alt="img">
        <div class="card__title">
            <h2>Lorem, ipsum dolor.</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita eos, obcaecati illum quo rem laudantium?</p>
            <div class="card__title--icon">
                <a href="#">All Photos</a>
            </div>
        </div>
    </div>
        <div class="card">
            <img class="card__image" src="{{asset('backend/img-list/6.jpg')}}" alt="img">
            <div class="card__title">
                <h2>Lorem, ipsum dolor.</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita eos, obcaecati illum quo rem laudantium?</p>
                <div class="card__title--icon">
                    <a href="#">All Photos</a>
                </div>
            </div>
        </div>
        <div class="card">
            <img class="card__image" src="{{asset('backend/img-list/2.jpg')}}" alt="img">
            <div class="card__title">
                <h2>Lorem, ipsum dolor.</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita eos, obcaecati illum quo rem laudantium?</p>
                <div class="card__title--icon">
                    <a href="#">All Photos</a>
                </div>
            </div>
        </div>
        <div class="card">
            <img class="card__image" src="{{asset('backend/img-list/3.jpg')}}" alt="img">
            <div class="card__title">
                <h2>Lorem, ipsum dolor.</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita eos, obcaecati illum quo rem laudantium?</p>
                <div class="card__title--icon">
                    <a href="#">All Photos</a>
                </div>
            </div>
        </div>
    </section>
@endsection

