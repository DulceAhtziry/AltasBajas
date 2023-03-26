@extends('layouts/main')
@section('contenido')
    <p class="fs-2 text-center">Ingresos</p>
    <a href="/create" class=" btn btn-primary">Agregar ingresos</a>
    <div class="card mt-4">
        <div class="card-body">
            <p>Ingresos total: {{ $resultado }}</p>
            <p>Ingresos gastado total: {{ $perdido }}</p>
        </div>
    </div>
    <script>
        $(function() {
            $('#items-table').DataTable();
        });
    </script>
@endsection
