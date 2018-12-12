@extends('layout.app')
@section('title', 'Inicio')
@section('content') 
<!--IMAGE SECTION-->
<section>
<img src="" alt="">
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
      <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 font-weight-normal">Hospital</h1>
        <p class="lead font-weight-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts with this example based on Apple's marketing pages.</p>
        <div class="row bootom justify-content-center">
            <div class="col-ms">
                <h4>Descarga</h4>
            </div>
            <div class="col-ms">
                <a class="btn btn-outline-primary" href="#">PDF</a>        
            </div>
            <div class="col-ms">
                <a class="btn btn-outline-primary" href="#">.docx</a>        
            </div>
        </div>
      </div>
    </div>
</section>
<!--INFO SECTION-->
<section>
    <div class="container text-justify">
        <h2>Empresa</h2>
        <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </p>
    </div>
</section>
<!--COLORS SECTION-->
<section>
    <div class="container">
        <h2>Colors</h2>
        <div class="row">
            <div class="col-6">
                <div class="row">
                    <div class="col-12">
                        <div class="row text-center container">
                            <div class="col-4 p-3 mb-2 text-white" style="background-color:#FFB920">
                                Color
                            </div>
                            <div class="col-4 p-3 mb-2 text-white" style="background-color:#FF2F2A">
                                Color
                            </div>
                            <div class="col-4 p-3 mb-2 text-white" style="background-color:#FF7900">
                                Color
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-justify">
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, 
                    </p>
                </div>
            </div>
            <div class="col-6">
                <div class="row">
                    <div class="col-12">
                        <div class="row text-center container">
                            <div class="col-4 p-3 mb-2 text-white" style="background-color:#12C200">
                                Azul
                            </div>
                            <div class="col-4 p-3 mb-2 text-white" style="background-color:#7623FF">
                                Verde
                            </div>
                            <div class="col-4 p-3 mb-2 text-white" style="background-color:#C2724E">
                                 Gris
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-justify">
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, 
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection