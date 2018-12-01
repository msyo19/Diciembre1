@extends('layout.app')
@section('title', 'Inicio')
@section('content') 

<!--PONER RUTA DE LAS BRANDS-->
<h1>BRANDS</h1>

<div class="container">
    <div class="row" id="contenedor">
        <div class="col-md-3">
            <div class="card border-primary mb-3" style="max-width: 25rem;">
                <a href="/brands/new">ADD +</a>
            </div>
        </div>
        @foreach($brands as $brand)
        <div class="col-md-3">
            <div class="card border-primary mb-3" style="max-width: 25rem;">
                <div class="card-body">
                <h5 class="card-title">{{ $brand->name }}</h5>
                    <p class="card-text">{{ $brand->description }} </p>
                    <a href="#" class="card-link">More information</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>

@endsection