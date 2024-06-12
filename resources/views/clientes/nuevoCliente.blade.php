@extends('default')

@section('title', 'Nuevo')
@section('content')

    <br><h4 class="text-center">Agregar cliente</h4><br>

    @if ($errors->any())
        <div class="alert alert-danger">
            {{ $errors->first() }}
        </div>
    @endif

    <form action="/cliente/nuevo" method="POST">
        @csrf
        <div class="container">
            <div class="row">
                <div class="form-column col-md-6 col-sm-6 col-xs-6">
                    <div class="form-group required">
                        <label for="nombre" class="control-label">Nombre</label>
                        <input type="text" class="form-control" 
                            id="nombre" 
                            placeholder="Nombres" 
                            name="nombre" required>
                    </div>
                </div>
                <div class="form-column col-md-6 col-sm-6 col-xs-6">
                    <div class="form-group required">
                        <label for="edad" class="control-label">Edad</label>
                        <input type="number" class="form-control" 
                            id="edad" 
                            placeholder="Edad" 
                            name="edad" required>
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
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </div>
        </div>
    </form>
@endsection
