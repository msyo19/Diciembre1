@extends('layout.app')
@section('title', 'Inicio')
@section('content') 

<section class="landing-page">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 landing-text">
                <h1 class="text-logo">UBRAND</h1>
                <h2>Óbten el brand de tu empresa con pocos clicks.</h2>
                <br>
                <a href="/register" class="btn btn-landing-page">CREA UNA CUENTA</a>
                <a href="#" class="btn btn-landing-page">CARACTERÍSTICAS</a>
            </div>
        </div>
    </div>
</section>

@endsection