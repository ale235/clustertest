@extends('frontend.layouts.master')

@section('titulo',  config('app.name', 'Laravel'))
@section('descripcion')
    {{config('app.name', 'Laravel')}} es un blog en el que vas a poder encontrar opiniones de muchas áreas, desde Entretenimiento, Cine, Política hasta Reflexiones y opiniones personales. ¡Pasate!
@endsection


@section('content')
    {{--<div id="page-content" class="container" style="border: 0px solid red;">--}}
        {{--<div class="row">--}}

            @include('frontend.includes.slider')
            @include('frontend.includes.services')
            @include('frontend.includes.our-works')
            @include('frontend.includes.pricing')
            @include('frontend.includes.our-team')
            @include('frontend.includes.about-us')
            @include('frontend.includes.testimonial')
            @include('frontend.includes.fun-facts')
            @include('frontend.includes.contact')

        {{--</div>--}}
    {{--</div>--}}
@endsection
