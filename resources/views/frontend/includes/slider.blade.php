<section id="slider">
    <div id="home-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach($sliders as $slider)
                @if($loop->first)
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
                @else
                    <div class="item" style="background-image: url({{ asset('imagenes/slider/')}}/{{$slider->imagen }})">
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
                @endif
            @endforeach
            <a class="home-carousel-left" href="#home-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
            <a class="home-carousel-right" href="#home-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
        </div>
    </div> <!--/#home-carousel-->
</section>