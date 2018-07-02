<!-- SERVICES -->
<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h1>Nuestros Servicios</h1>
                    <span class="st-border"></span>
                </div>
            </div>

            @foreach($servicios as $servicio)
                <div class="col-md-4 col-sm-6 st-service">
                    <img src="{{ asset('imagenes/servicios/')}}/{{$servicio->icono }}" style="position: absolute;height: 10%;">
                    <h2>{{$servicio->titulo}}</h2>
                    <p>{{$servicio->descripcion}}</p>
                </div>
            @endforeach

            {{--<div class="col-md-4 col-sm-6 st-service">--}}
                {{--<h2><i class="fa fa-desktop"></i> Web Design</h2>--}}
                {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta libero autem, magni veritatis, optio dolor.</p>--}}
            {{--</div>--}}

            {{--<div class="col-md-4 col-sm-6 st-service">--}}
                {{--<h2><i class="fa fa-cogs"></i> Web Developement</h2>--}}
                {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta libero autem, magni veritatis, optio dolor.</p>--}}
            {{--</div>--}}

            {{--<div class="col-md-4 col-sm-6 st-service">--}}
                {{--<h2><i class="fa fa-code"></i> Custom Development</h2>--}}
                {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta libero autem, magni veritatis, optio dolor.</p>--}}
            {{--</div>--}}

            {{--<div class="col-md-4 col-sm-6 st-service">--}}
                {{--<h2><i class="fa fa-dashboard"></i> Super Fast Web</h2>--}}
                {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta libero autem, magni veritatis, optio dolor.</p>--}}
            {{--</div>--}}

            {{--<div class="col-md-4 col-sm-6 st-service">--}}
                {{--<h2><i class="fa fa-life-ring"></i> Friendly Support</h2>--}}
                {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta libero autem, magni veritatis, optio dolor.</p>--}}
            {{--</div>--}}

            {{--<div class="col-md-4 col-sm-6 st-service">--}}
                {{--<h2><i class="fa fa-weixin"></i> Live Support</h2>--}}
                {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta libero autem, magni veritatis, optio dolor.</p>--}}
            {{--</div>--}}
        </div>
    </div>
</section>
<!-- /SERVICES -->