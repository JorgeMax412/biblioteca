@extends('default')

@section('title', 'Actualizar')
@section('content')
    <br><h4 class="text-center">Editar cliente</h4><br>
    <form method="POST" action="{{ route('cliente.update', ['codigo' => $cliente->codigo]) }}">
        @csrf
        @method('PUT')

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <div class="container">
            <div class="row">
                <div class="form-column col-md-6 col-sm-6 col-xs-6">
                    <div class="form-group required">
                        <label for="nombre" class="control-label">Nombre</label>
                        <input type="text" class="form-control" 
                            id="nombre" 
                            placeholder="Nombres" 
                            name="nombre" required
                            value="{{ $cliente->nombre }}">
                    </div>
                </div>
                <div class="form-column col-md-6 col-sm-6 col-xs-6">
                    <div class="form-group required">
                        <label for="edad" class="control-label">Edad</label>
                        <input type="number" class="form-control" 
                            id="edad" 
                            placeholder="Edad" 
                            name="edad" required
                            value="{{ $cliente->edad }}">
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="form-column col-md-6 col-sm-6 col-xs-6">
                    <div class="form-group required">
                        <label for="categoria" class="control-label">Categoria</label>
                        <select id="categoria" name="categoria" class="form-control" style="width: 100%" required>
                            <option value="" disabled selected hidden>--Categoria--</option>
                            @foreach ($categorias as $data)
                                <option value="{{$data->codigo}}">{{$data->nombre}}</option>
                            @endforeach
                        </select>
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