$(document).ready(iniciar);

function iniciar() {
 
    jQuery.validator.setDefaults({
        debug: true,  //nunca se envía el formulario y se muestran errores en consola
        success: "valid" //nom de la clase dels missatges de input correctes
    });
    $("#fans2").validate({
        rules: {
            nombre: {
                required: true,
                minlength: 3
            },
            
            apellido: {
                required: true,
                nimlength: 4
            },
            
            ce: {
                required: true,
                email: true,
                remote: "email.php"
            },
         
            fn: {
                required: true,
                date: true
            },
            ps1: {
                required: true,
                password: true,
                minlength: 8
            },
            ps2: {
                password: true,
                equalsTo: "#ps1"
            }
        }
    });
    $("#local2").validate({
        rules: {
            nombre: {
                required: true,
                minlength: 3,
            },
            
            ce: {
                required: true,
                email: true,
                remote: "email.php"
            },
         
            fn: {
                required: true,
                date: true
            },
            ps1: {
                required: true,
                password: true,
                minlength: 8
            },
            ps2: {
                password: true,
                equalsTo: "#ps1"
            },
            numero: {
                required: true,
                range: [0, 10]
            }
        }
    });
    $("#musico2").validate({
        rules: {
            nombre: {
                required: true,
                minlength: 3
            },
            
            ce: {
                required: true,
                email: true,
                remote: "email.php"
            },
         
            fn: {
                required: true,
                date: true
            },
            ps1: {
                required: true,
                password: true,
                minlength: 8
            },
            ps2: {
                password: true,
                equalsTo: "#ps1"
            },
            numero: {
                required: true,
                range: [0, 10]
            }
        }
    });
}

