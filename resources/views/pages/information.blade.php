@extends('layout.app')
@section('title', 'Inicio')
@section('content') 

<div class="container"><br>
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <a href="/dashboard" class="text-logo">< Regresar</a>
        </div>
        <div class="col-sm-12 col-md-12">
            <h1 class="text-logo">Digital Media</h1>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-12 col-md-6">
            <h2 class="text-logo">Colores</h2>
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        COLORES
                    </div>
                    <img class="img-fluid" src="https://piktochart.com/wp-content/uploads/2017/09/22-800x281.jpg" width="500px" alt="">
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-6">
            <h2 class="text-logo">Template</h2>
            <div class="card">
                <div class="card-body">
                    <div class="card-title text-logo">
                        Material Design
                    </div>
                    <img  class="img-fluid" src="https://storage.googleapis.com/spec-host-backup/mio-material%2Fassets%2F1n0USi3jGBT9CHS9YH-1x7L0grDc_MToO%2Fgm-2x1-large.png" width="500px" alt="">
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-12 col-md-6">
            <h2 class="text-logo">Imagenes</h2>
            <div class="card">
                <div class="card-body">
                    <div class="card-title text-logo">
                        Pexel
                    </div>
                    <img class="img-fluid" src="https://images.pexels.com/photos/35550/ipad-tablet-technology-touch.jpg?auto=compress&cs=tinysrgb&h=650&w=940" width="245px" alt="">
                    <img class="img-fluid" src="https://images.pexels.com/photos/1549003/pexels-photo-1549003.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" width="245px" alt="">
                    <img class="img-fluid" src="https://images.pexels.com/photos/6168/hands-woman-laptop-notebook.jpg?auto=compress&cs=tinysrgb&h=650&w=940" width="245px" alt="">
                    <img class="img-fluid" src="https://images.pexels.com/photos/955447/pexels-photo-955447.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" width="245px" alt="">
                </div>
                <div class="card-footer">
                    <a href="https://www.pexels.com/search/digital%20media/" class="btn btn-register">Ver Más Imágenes en Pexel</a>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-6">
            <h2 class="text-logo">Herramientas</h2>
            <div class="card">
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">Google Analytics</li>
                        <li class="list-group-item">Google My Business</li>
                        <li class="list-group-item">Google Trends</li>
                        <li class="list-group-item">MailChimp</li>
                        <li class="list-group-item">Instagram Business</li>
                        <li class="list-group-item">FontAwesome</li>
                        <li class="list-group-item">Pexel</li>
                        <li class="list-group-item">Flaticon</li>
                        <li class="list-group-item">Facebook Business</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <br>
</div>

@endsection