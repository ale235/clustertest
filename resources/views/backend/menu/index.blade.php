@extends('backend.layouts.master')
@section ('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Listado de Proveedores</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Titulo</th>
                            <th>Subtitulo</th>
                            <th>Descripción</th>
                            <th>Imagen</th>
                            <th>Orden</th>
                            <th>Estado</th>
                            <th>Opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sliders as $slider)
                            <tr>
                                <td>{{$slider->id}}</td>
                                <td>{{$slider->titulo}}</td>
                                <td>{{$slider->subtitulo}}</td>
                                <td>{{$slider->descripcion}}</td>
                                <td>{{$slider->imagen}}</td>
                                <td>{{$slider->orden}}</td>
                                <td>ESTADO</td>
                                <td>
                                    <a href="proveedor/'{{$slider->id}}'" class="btn btn-xs btn-primary edit" id="'.$proveedor->id.'"><i class=""></i> Ver</a>
                                    <a href="proveedor/'{{$slider->id}}'/edit" class="btn btn-xs btn-primary edit" id="'.$proveedor->id.'"><i class=""></i> Editar</a>
                                    <a href="" data-toggle="modal" data-target="#myModal" class="btn btn-xs btn-primary" id="'{{$slider->id}}'"><i class=""></i> Borrar</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            {!! $sliders->render() !!}
                <!-- /.box-body -->
                <div class="box-footer">
                    <a  href="{{url('/admin/slider/create/')}}"><button type="button" class="btn btn-default pull-left"><i class="fa fa-plus"></i> Agregar Proveedor</button></a>
                </div>
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection
@push ('scripts')
@endpush