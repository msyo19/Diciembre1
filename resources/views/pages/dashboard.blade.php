@extends('layout.app')
@section('title', 'Inicio')
@section('content')

<!--PONER RUTA DE LAS BRANDS-->
<br>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <h1 class="text-logo">BRANDS</h1>
        </div>
        <div class="col-sm-12 col-md-6">
            <a href="/brands/new" class="btn btn-register">+ Añadir</a>
        </div>
    </div><br>
    <div class="row">
        <div class="col-sm-12 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-logo">DigitalMedia</h5>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <a href="/brand/1" class="btn btn-register">Ver Más</a>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-logo">FoodXYZ</h5>
                    <p class="card-text">
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <a href="/brand/1" class="btn btn-register">Ver Más</a>
                </div>
            </div>
        </div>
    </div><br>
</div>

@endsection
