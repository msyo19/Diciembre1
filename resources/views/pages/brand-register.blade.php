@extends('layout.app')
@section('title', 'Inicio')
@section('content')

<div class="container"><br>
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <h2 class="text-logo">Llena el formulario de tu negocio.</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="email" class="form-control" id="exampleInputEmail1"
                        placeholder="Nombre negocio">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Descripción</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <label for="dropdown">Giro del negocio</label>
                <select class="form-control" id="dropdown">
                    <option>Medicina</option>
                    <option>Comida</option>
                    <option>Mercadotecnia</option>
                    <option>Tecnología</option>
                </select><br>
                <div class="form-group">
                    <label for="exampleInputPassword1">Tags</label>
                    <input type="text" class="form-control" placeholder="Farmacia, hamburguesa, etc.">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlFile1">Logo</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>

                <button type="submit" class="btn btn-register">Guardar</button>
            </form>
        </div>
    </div><br>
</div>

@endsection
