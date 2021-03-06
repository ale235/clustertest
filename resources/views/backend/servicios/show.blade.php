@extends('backend.layouts.master')
@section ('content')
        <div id="home-carousel" class="carousel slide" data-ride="carousel" style=">
            <div class="carousel-inner">
                        <div class="item active" style="background-image: url({{ asset('imagenes/slider/')}}/{{$slider->imagen }})">
                            <div class="carousel-caption container">
                                <div class="row">
                                    <div class="col-sm-7">
                                        <h1>{{$slider->titulo}}</h1>
                                        <h2>{{$slider->subtitulo}}</h2>
                                        <p>{{$slider->descripcion}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                <a class="home-carousel-left" href="#home-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="home-carousel-right" href="#home-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
        </div>
@endsection
@push ('scripts')
<link rel="stylesheet" href="{{ asset('css/style.css') }}" />
<link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
@endpush