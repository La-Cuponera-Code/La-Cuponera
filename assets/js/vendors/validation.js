(() => {
    "use strict";

    // Seleccionar todos los elementos con la clase ".needs-validation"
    var forms = document.querySelectorAll(".needs-validation");

  // Iterar sobre cada elemento seleccionado
Array.from(forms).forEach(form => {
    // Agregar un event listener para el evento de envío del formulario
    form.addEventListener("submit", event => {
        // Obtener el ID del botón que ejecuta el envío del formulario
        const buttonId = event.submitter.id;
        
        // Realizar la validación del formulario
        if (form.checkValidity()) {
            // Si el formulario es válido, llamar a la función adicional con el ID del botón
            guardarDatos(buttonId);
            event.preventDefault();
        } else {
            // Si el formulario no es válido, prevenir el envío y detener la propagación del evento
            event.preventDefault();
            event.stopPropagation();
        }

        // Agregar la clase "was-validated" para mostrar los estilos de validación de Bootstrap
        form.classList.add("was-validated");
    }, false);
});

})();

function guardarDatos(buttonId){

    if(buttonId == "sesion"){

        var correo = document.getElementById('formSigninEmail').value;
        var clave = document.getElementById('formSigninPassword').value;
        var rol = document.getElementById('rol').value;

        $.ajax({
            url: '../../pages/iniciarSesion.php',
            method: 'POST',
            data: { correo:correo, clave:clave, rol:rol  }, // Aquí envía el valor de la variable nombre
            dataType: 'text',
            success: function(response) {
                alert(response); // Concatena la respuesta para mostrarla en el alert
                if(response=="sesion con exito"){
    
                    location.href="../../";
                }else{
    
     
                }
            },
            error: function(xhr, status, error) {
                alert('Error en la solicitud: ' + status + ' ' + error); // Concatena el estado y el error para mostrarlos en el alert
            }
        });

    }else{
    var nombre = document.getElementById('formSignupfname').value;
    var apellido = document.getElementById('formSignuplname').value;
    var correo = document.getElementById('formSignupEmail').value;
    var clave = document.getElementById('formSignupPassword').value;
    var rol = document.getElementById('rol').value;

    
    $.ajax({
        url: '../../pages/guardarDatos.php',
        method: 'POST',
        data: { nombre:nombre, apellido:apellido, correo:correo, clave:clave, rol:rol  }, // Aquí envía el valor de la variable nombre
        dataType: 'text',
        success: function(response) {
            alert(response); // Concatena la respuesta para mostrarla en el alert
            if(response=="Datos guardados!"){

                location.href="../login";
            }else{

           document.getElementById('formSignupEmail').value = "";

            }
        },
        error: function(xhr, status, error) {
            alert('Error en la solicitud: ' + status + ' ' + error); // Concatena el estado y el error para mostrarlos en el alert
        }
    });
}
    
            }
