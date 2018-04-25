

var chat = document.getElementById('estado');

firebase.database().ref('Citt')
    .on('value', function (s) {
        var html = '';
        s.forEach(function (e) {
            var element = e.val();
            var fecha = element.date;
            var nombre = element.name;
            var correo = element.email;
            var mensaje = element.message;


            html += "<tr><td>" + fecha + "</td><td><strong>" + nombre + "</strong></td><td>" + correo + "</td><td>" + mensaje + "</td></tr>";
        });
        chat.innerHTML = html;
    });