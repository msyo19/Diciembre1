var hola = null;
function ConsultaAjax(ruta){
    axios.get(ruta)
        .then((response) => {
            hola =  response.data;
        })
        .catch((error) => {
            hola =  error;
        })
}


var plantillaBrand = `
<div class="col-sm">
<div class="card border-primary mb-3" style="max-width: 25rem;">
    <div class="card-body">
        <h5 class="card-title">Brand Title</h5>
        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
        <p class="card-text">Text about the brand search </p>
        <a href="#" class="card-link">More information</a>
    </div>
</div>
</div>
`
function CreacionBrand() {
    if(hola != null){
        var plantillaBrand = `
        <div class="col-sm">
        <div class="card border-primary mb-3" style="max-width: 25rem;">
            <div class="card-body">
                <h5 class="card-title">Brand Title</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">Text about the brand search </p>
                <a href="#" class="card-link">More information</a>
            </div>
        </div>
        </div>
        `
        let contenedor = document.getElementById('contenedor');
        contenedor.innerHTML += plantillaBrand;
    }
}