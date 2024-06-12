@extends('default')

@section('title', 'Actualizar')
@section('content')
    <br><h4 class="text-center">Actualizar categorias</h4><br>
    <form method="POST" action="{{ route('categoria.update', ['codigo' => $categoria->codigo]) }}">
        @csrf
        @method('PUT')

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <div class="container">
            <div class="row justify-content-center">
                <div class="form-column col-md-6 col-sm-6 col-xs-6">
                    <div class="form-group required">
                        <label for="nombre" class="control-label">Nombre</label>
                        <input type="text" class="form-control" 
                            id="nombre" 
                            placeholder="Nombres" 
                            name="nombre" required
                            value="{{ $categoria->nombre }}">
                    </div>
                </div>
                <div class="clearfix"></div>
                <br>
                <div class="form-column col-md-6 col-sm-6 col-xs-6">
                    <button type="submit" class="btn btn-warning">Actualizar</button>
                </div>
            </div>
        </div>
    </form>
@endsection


