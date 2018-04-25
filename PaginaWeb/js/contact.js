var txtNombre = document.getElementById('name');
var txtCorreo = document.getElementById('email');
var txtMensaje = document.getElementById('message');
var btnEnviar = document.getElementById('send');

var error = document.getElementById('error');
var date;

btnEnviar.addEventListener("click", function () {
    date = new Date();
    var nombre = txtNombre.value;
    var mensaje = txtMensaje.value;
    var correo = txtCorreo.value;
    var fecha = date.toISOString();
    if (nombre.length < 1 || mensaje.length < 1 || correo.length < 1) {
        alert("Ingrese datos solicitados");
    } else {
        error.innerHTML = "<p class=\"text-danger\"><strong>Mensaje enviado correctamente</strong></p>";
        document.getElementById('name').value="";
        document.getElementById('email').value="";
        document.getElementById('message').value="";

        firebase.database().ref('Citt')
            .push({
                name: nombre,
                email: correo,
                message: mensaje,
                date: fecha
            });

        

    }

});

