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

function CreacionBrand() {
    if(h != null){
        console.log("hola");
    }
    console.log("holas");
}