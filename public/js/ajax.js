var hola = null;
function ConsultaAjax(ruta){
    axios.get(ruta)
        .then((response) => {
            hola =  response.data.result;
        })
        .catch((error) => {
            hola =  error;
        })
}

function CreacionBrand() {
    if(hola != null){
        for (let i = 0; i < hola.length; i++) {
            var plantillaBrand = `
        <div class="col-sm">
        <div class="card border-primary mb-3" style="max-width: 25rem;">
            <div class="card-body">
                <h5 class="card-title">${hola[i].name}</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">${hola[i].description} </p>
                <a href="#" class="card-link">More information</a>
            </div>
        </div>
        </div>
        `;
        let contenedor = document.getElementById('contenedor');
        contenedor.innerHTML += plantillaBrand; 
        }
    }
}