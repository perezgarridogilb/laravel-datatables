@extends('layouts.plantilabase')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.bootstrap5.css">
@endsection

@section('contenido')

    <a href="articulos/create" class="btn btn-primary mb-3 mt-3">CREATE</a>

    <table id="articulos" class="table table-dark table-striped mt-4 shadow-lg mt-4">
        <thead class="bg-primary text-white">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Código</th>
                <th scope="col">Descripción</th>
                <th scope="col">Cantidad</t>
                <th scope="col">Precio</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articulos as $articulo)
                <tr>
                    <td>{{ $articulo->id }}</td>
                    <td>{{ $articulo->codigo }}</td>
                    <td>{{ $articulo->descripcion }}</td>
                    <td>{{ $articulo->cantidad }}</td>
                    <td>{{ $articulo->precio }}</td>
                    <td>
                        <form action="{{ url('articulos') }}/{{$articulo->id}}/destroy" method="post">
                        @csrf
                        <a href="{{ url('articulos') }}/{{$articulo->id}}/edit" class="btn btn-info" rel="noopener noreferrer">Editar</a>
                        <button action="sumbit"  class="btn btn-danger">Borrar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @section('js')
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script> 
    <script src="https://cdn.datatables.net/2.0.5/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.5/js/dataTables.bootstrap5.js"></script>

    <script>
        new DataTable('#articulos', {
    lengthMenu: [
        [5, 10, 50, -1],
        [5, 10, 50, 'All']
    ]
});
    </script>
    @endsection
@endsection
