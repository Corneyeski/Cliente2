$(document).ready(iniciar);

function iniciar() {
    
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
                password: true,
                minlength: 2,
                maxlength: 15
            }
        }
    });
}
