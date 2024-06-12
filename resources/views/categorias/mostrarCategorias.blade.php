@extends('default')

@section('title', 'Mostrar')
@section('content')
    <div class="container">
        <br><a href="/categoria/nuevo" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Agregar nueva categoría</a>
        <div class="row justify-content-center text-center">
            <h4>Lista de categorias</h4><br><br>

            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="col-12">
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th>Nombre</th>
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categorias as $categoria)
                            <tr>
                                <td>{{ $categoria->nombre }}</td>
                                <td>
                                    <form action="{{ route('categoria.destroy', ['codigo' => $categoria->codigo]) }}" style="display: inline;" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                    <a href="{{ route('categoria.edit', ['codigo' => $categoria->codigo]) }}" class="btn btn-success">Editar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection