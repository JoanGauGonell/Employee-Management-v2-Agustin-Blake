const items = document.querySelectorAll(".bEliminar");

items.forEach(item => {
    item.addEventListener("click", function(){
        const id = this.dataset.id;

        const confirm = window.confirm("Deseas eliminar el elemento?");

        if(confirm){
            httpRequest("http://localhost/curso/43.%20MVC-02/consulta/eliminarEmpleado/" + id, function(e){
                console.log(this.responseText);
                const tbody = document.querySelector("#tbody-alumnos");
                const fila  = document.querySelector("#fila-" + id);
                tbody.removeChild(fila);
            })
        }
    });
});


function httpRequest(url, callback){
    const http = new XMLHttpRequest();
    http.open("GET", url);
    http.send();

    http.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            callback.apply(http);
        }
    }
}