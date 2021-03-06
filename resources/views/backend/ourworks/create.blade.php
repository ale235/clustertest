@extends('backend.layouts.master')
@section ('content')
    <div class="wizard">
        <div class="wizard-inner">
            <div class="connecting-line"></div>
            <ul class="nav nav-tabs" role="tablist">

                <li role="presentation" class="active">
                    <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                            <span class="round-tab">
                                <i class="">1º</i>
                            </span>
                    </a>
                </li>

                <li role="presentation" class="disabled">
                    <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                            <span class="round-tab">
                                <i class="">2º</i>
                            </span>
                    </a>
                </li>

                <li role="presentation" class="disabled">
                    <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                            <span class="round-tab">
                                <i class="">3º</i>
                            </span>
                    </a>
                </li>

                <li role="presentation" class="disabled">
                    <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                            <span class="round-tab">
                                <i class="">4º</i>
                            </span>
                    </a>
                </li>
            </ul>
        </div>

        <form role="form" enctype="multipart/form-data" method="post" action="{{url('admin/ourworks')}}">
            {{ csrf_field() }}
            <div class="tab-content">
                <div class="tab-pane active" role="tabpanel" id="step1">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Título - Descripción</h3>
                            <div class="box-tools">
                                <ul class="pull-right" style="list-style-type: none;">
                                    <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
                                </ul>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="fortitulo">Título</label>
                                <input type="text" class="form-control" id="titulo_principal" name="titulo_principal" maxlength="50" placeholder="Ingrese el Título: Máx 50">
                            </div>
                            <div class="form-group">
                                <label for="fordescripcion">Descripción</label>
                                <input type="text" class="form-control" id="descripcion_principal" name="descripcion_principal" maxlength="250"  placeholder="Ingrese la descripción: Máx 250">
                            </div>
                            <div class="form-group">
                                <label for="forimagen_principal">Imagen Principal</label>
                                <input class="form-control" name="imagen_principal" type="file" id="imagen_principal">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" role="tabpanel" id="step2">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Contenido del Trabajo</h3>
                            <div class="box-tools">
                                <ul class="list-inline pull-right" style="list-style-type: none;">
                                    <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                                    <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
                                </ul>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="fortitulo">Título</label>
                                <input type="text" class="form-control" id="titulo_blog" name="titulo_blog" maxlength="50" placeholder="Ingrese el Título: Máx 50">
                            </div>
                            <div class="form-group">
                                <label for="forubicacion">Ubicación</label>
                                <input type="text" class="form-control" id="ubicacion" name="ubicacion" maxlength="250"  placeholder="Ingrese la ubicacion: Máx 250">
                            </div>
                            <div class="form-group">
                                <label for="forcubiertos">Cubiertos</label>
                                <input type="text" class="form-control" id="cubiertos" name="cubiertos" maxlength="250"  placeholder="Ingrese los metros cubiertos: Máx 250">
                            </div>
                            <div class="form-group">
                                <label for="forsemicubiertos">Semicubiertos</label>
                                <input type="text" class="form-control" id="semicubiertos" name="semicubiertos" maxlength="250"  placeholder="Ingrese los metros semicubiertos: Máx 250">
                            </div>
                            <div class="form-group">
                                <label for="forcubiertos">Año</label>
                                <input type="text" class="form-control" id="ano" name="ano" maxlength="250"  placeholder="Ingrese el Año del Proyecto: Máx 250">
                            </div>
                            <div class="form-group">
                                <label for="forsemicubiertos">Etapa</label>
                                <input type="text" class="form-control" id="etapa" name="etapa" maxlength="250"  placeholder="Ingrese la etapa del Proyecto: Máx 250">
                            </div>
                            <div class="form-group">
                                <label for="formemoria">Memoria Descriptiva</label>
                                <textarea name="memoria" id="memoria" cols="30" class="form-control textarea" rows="40"></textarea>
                                {{--<input type="text" class="form-control" id="memoria" name="memoria" maxlength="250"  placeholder="Ingrese la etapa del Proyecto: Máx 250">--}}
                            </div>
                            <div class="form-group">
                                <label for="forimagen_del_trabajo">Imagenes del Trabajo</label>
                                <input class="form-control" name="imagen_trabajos[]" type="file" id="imagen_trabajos" multiple>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" role="tabpanel" id="step3">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Vista Previa</h3>
                            <div class="box-tools">
                                <ul class="list-inline pull-right" style="list-style-type: none;">
                                    <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                                    <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>                                            </ul>
                            </div>
                        </div>
                        <div class="box-body">

                        </div>
                    </div>
                </div>
                <div class="tab-pane" role="tabpanel" id="complete">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Corroborá si están todos bien los campos y en caso de existir algún error, regresar y corregir.</h3>
                            <div class="box-tools">
                                <ul class="list-inline pull-right" style="list-style-type: none;">
                                    <li><button id="submit" type="submit" class="btn btn-success">Guardar</button></li>
                                </ul>
                            </div>
                        </div>
                        <div class="box-body">
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </form>
    </div>

@endsection
@push ('scripts')
<link href="{{ asset('summernote/summernote.css')}}" rel="stylesheet" type="text/css" />
<script src="{{ asset('summernote/summernote.js')}}"></script>
<script>
    $(document).ready(function() {
        $('#memoria').summernote({
            lang: 'es-ES',
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear']],
//                ['font', ['strikethrough', 'superscript', 'subscript','fontname']],
//                ['fontsize', ['fontsize']],
//                ['color', ['color']],
//                ['para', ['ul', 'ol', 'paragraph']],
//                ['height', ['height']],
//                ['insert', ['picture','video','hr']],
//                ['view', ['fullscreen', 'codeview']],
            ],
            height:350,
        });
    });
</script>
<script>
    $(document).ready(function () {
        //Initialize tooltips
        $('.nav-tabs > li a[title]').tooltip();

        //Wizard
        $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

            var $target = $(e.target);

            if ($target.parent().hasClass('disabled')) {
                return false;
            }
        });

        $(".next-step").click(function (e) {

            var $active = $('.wizard .nav-tabs li.active');
            $active.next().removeClass('disabled');
            nextTab($active);

        });
        $(".prev-step").click(function (e) {

            var $active = $('.wizard .nav-tabs li.active');
            prevTab($active);

        });
        $("#submit").submit();
    });

    function nextTab(elem) {
        $(elem).next().find('a[data-toggle="tab"]').click();
    }
    function prevTab(elem) {
        $(elem).prev().find('a[data-toggle="tab"]').click();
    }

</script>
<style>
    .wizard {
        margin: 20px auto;
        background: #fff;
    }

    .wizard .nav-tabs {
        position: relative;
        margin: 40px auto;
        margin-bottom: 0;
        border-bottom-color: #e0e0e0;
    }

    .wizard > div.wizard-inner {
        position: relative;
    }

    .connecting-line {
        height: 2px;
        background: #e0e0e0;
        position: absolute;
        width: 80%;
        margin: 0 auto;
        left: 0;
        right: 0;
        top: 50%;
        z-index: 1;
    }

    .wizard .nav-tabs > li.active > a, .wizard .nav-tabs > li.active > a:hover, .wizard .nav-tabs > li.active > a:focus {
        color: #555555;
        cursor: default;
        border: 0;
        border-bottom-color: transparent;
    }

    span.round-tab {
        width: 70px;
        height: 70px;
        line-height: 70px;
        display: inline-block;
        border-radius: 100px;
        background: #fff;
        border: 2px solid #e0e0e0;
        z-index: 2;
        position: absolute;
        left: 0;
        text-align: center;
        font-size: 25px;
    }
    span.round-tab i{
        color:#555555;
    }
    .wizard li.active span.round-tab {
        background: #fff;
        border: 2px solid #5bc0de;

    }
    .wizard li.active span.round-tab i{
        color: #5bc0de;
    }

    span.round-tab:hover {
        color: #333;
        border: 2px solid #333;
    }

    .wizard .nav-tabs > li {
        width: 25%;
    }

    .wizard li:after {
        content: " ";
        position: absolute;
        left: 46%;
        opacity: 0;
        margin: 0 auto;
        bottom: 0px;
        border: 5px solid transparent;
        border-bottom-color: #5bc0de;
        transition: 0.1s ease-in-out;
    }

    .wizard li.active:after {
        content: " ";
        position: absolute;
        left: 46%;
        opacity: 1;
        margin: 0 auto;
        bottom: 0px;
        border: 10px solid transparent;
        border-bottom-color: #5bc0de;
    }

    .wizard .nav-tabs > li a {
        width: 70px;
        height: 70px;
        margin: 20px auto;
        border-radius: 100%;
        padding: 0;
    }

    .wizard .nav-tabs > li a:hover {
        background: transparent;
    }

    .wizard .tab-pane {
        position: relative;
        padding-top: 50px;
    }

    .wizard h3 {
        margin-top: 0;
    }

    @media( max-width : 585px ) {

        .wizard {
            width: 90%;
            height: auto !important;
        }

        span.round-tab {
            font-size: 16px;
            width: 50px;
            height: 50px;
            line-height: 50px;
        }

        .wizard .nav-tabs > li a {
            width: 50px;
            height: 50px;
            line-height: 50px;
        }

        .wizard li.active:after {
            content: " ";
            position: absolute;
            left: 35%;
        }
    }
</style>
@endpush