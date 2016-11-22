$(document).ready(iniciar);

function iniciar() {
 
    jQuery.validator.setDefaults({
        debug: true,  //nunca se envía el formulario y se muestran errores en consola
        success: "valid" //nom de la clase dels missatges de input correctes
    });
    $("#formulari1").validate({
        rules: {
            nombre: {
                required: true,
                minlength: 3
            },
            
            apellido: {
                required: true,
                nimlength: 4
            },
         
            fecha: {
                required: true,
                date: true
            },
            numero: {
                required: true,
                range: [0, 10]
            },
            aceptar: {
                required: true
            }
        }
    });
    $("#form2").validate({
        rules: {
            nombre: {
                required: true,
                minlength: 3
            },
            codigo: {
                required: false,
                minlenght: 13,
                maxlenght: 13
            },
            cad: {
                required: false,
                date: true
            },
            estado: {
                required: true
            }
            
        }
    });

   $("#nutricion").click(function(){
       
       if($("#nutricion").is(':checked')){
           $("#oculto").fadeIn();
       }
       else{
           $("#oculto").fadeOut();
       }
       
   });


}

