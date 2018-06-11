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
                    <table id="tabla">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Titulo</th>
                                <th>Descripcion</th>
                                <th>Imagen</th>
                                {{--<th>Action</th>--}}
                            </tr>
                        </thead>
                    </table>
                </div>
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
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script>
    $(function() {
        $('#tabla').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('datatable/getdata') }}',
//            language: {
//                url: "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
//            },
            exportable:true,
            printable :true,
            columns: [
                {data: 'id', name: 'id', visible : false},
                {data: 'titulo', name: 'titulo'},
                {data: 'descripcion', name: 'descripcion'},
                {data: 'imagen', name: 'imagen'},
//                {data: 'action', name: 'action'},
            ]
        });
    });
</script>
@endpush