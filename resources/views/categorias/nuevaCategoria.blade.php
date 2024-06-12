@extends('default')

@section('title', 'Nuevo')
@section('content')
    <br><h4 class="text-center">Agregar categoria</h4><br>
    <form action="/categoria/nuevo" method="POST">
        @csrf
        <div class="container">
            <div class="row justify-content-center">
                <div class="form-column col-md-6 col-sm-6 col-xs-6">
                    <div class="form-group required">
                        <label for="nombre" class="control-label">Nombre</label>
                        <input type="text" class="form-control" 
                            id="nombre" 
                            placeholder="Nombre" 
                            name="nombre" required>
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