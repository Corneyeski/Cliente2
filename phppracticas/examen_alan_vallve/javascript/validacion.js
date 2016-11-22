$(document).ready(iniciar);

function iniciar() {
    
    jQuery.validator.setDefaults({
        success: "valid" //nom de la clase dels missatges de input correctes
    });
    
    $("#formulari").validate({
        rules: {
            nombre: {
                required: true,
                minlength: 2,
                maxlength: 20
            },
            
            numero: {
                range: [1,100]
            },
         
            ciudad: {
                required: true,
                minlength: 2,
                maxlength: 20
            },
            pais: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 2,
                maxlength: 15
            },
            plantas: {
                required: true,
                range: [1,600]
            }
        }
    });
}
