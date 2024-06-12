@extends('default')

@section('title', 'Mostrar')
@section('content')
    <div class="container">
        <br><a href="/cliente/nuevo" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Agregar nuevo cliente</a>
        <div class="row justify-content-center text-center">
            <br><h4>Lista de clientes</h4><br><br>
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <div class="col-12">
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th>Nombre</th>
                            <th>Edad</th>
                            <th>Categoria</th>
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($datos as $cliente)
                            <tr>
                                <td>{{ $cliente->nombre_cliente }}</td>
                                <td>{{ $cliente->edad }}</td>
                                <td>{{ $cliente->categoria }}</td>
                                <td>
                                    <form action="{{ route('cliente.destroy', ['codigo' => $cliente->codigo]) }}" style="display: inline;" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                    <a href="{{ route('cliente.edit', ['codigo' => $cliente->codigo]) }}" class="btn btn-success">Editar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection