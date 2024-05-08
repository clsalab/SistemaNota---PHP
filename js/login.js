$(document).ready(function(){
    $('#loginUsuario').on('click', function(){
        loginUsuario();
    });

    $('#loginProfesor').on('click', function(){
        loginProfesor();
    });

    $('#loginEstudiante').on('click', function(){
        loginEstudiante();
    });
});

function loginUsuario(){
    var login = $('#usuario').val();
    var pass = $('#pass').val();

    // Validar campos vacíos
    if(login === '' || pass === '') {
        $('#messageUsuario').html('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Todos los campos son necesarios</div>');
        return;
    }

    $.ajax({
        url: '../includes/loginUsuario.php',
        method: 'POST',
        data: {
            login: login,
            pass: pass
        },
        success: function(data){
            $('#messageUsuario').html(data);
            if(data.indexOf('Redirecting') >= 0){
                window.location = 'administrador/';
            } else {
                // Retrasar el cierre del mensaje de error por 3 segundos (3000 milisegundos)
                setTimeout(function() {
                    $('.alert-danger').alert('close');
                }, 3000);
            }
        }
    });
}

function loginProfesor(){
    var loginProfesor = $('#usuarioProfesor').val();
    var passProfesor = $('#passProfesor').val();

    // Validar campos vacíos
    if(loginProfesor === '' || passProfesor === '') {
        $('#messageProfesor').html('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Todos los campos son necesarios</div>');
        return;
    }

    $.ajax({
        url: '../includes/loginProfesor.php',
        method: 'POST',
        data: {
            loginProfesor: loginProfesor,
            passProfesor: passProfesor
        },
        success: function(data){
            $('#messageProfesor').html(data);
            if(data.indexOf('Redirecting') >= 0){
                window.location = 'profesor/';
            } else {
                // Retrasar el cierre del mensaje de error por 3 segundos (3000 milisegundos)
                setTimeout(function() {
                    $('.alert-danger').alert('close');
                }, 3000);
            }
        }
    });
}

function loginEstudiante(){
    var loginEstudiante = $('#usuarioEstudiante').val();
    var passEstudiante = $('#passEstudiante').val();

    // Validar campos vacíos
    if(loginEstudiante === '' || passEstudiante === '') {
        $('#messageEstudiante').html('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Todos los campos son necesarios</div>');
        return;
    }

    $.ajax({
        url: '../includes/loginEstudiante.php',
        method: 'POST',
        data: {
            loginEstudiante: loginEstudiante,
            passEstudiante: passEstudiante
        },
        success: function(data){
            $('#messageEstudiante').html(data);
            if(data.indexOf('Redirecting') >= 0){
                window.location = 'estudiante/';
            } else {
                // Retrasar el cierre del mensaje de error por 3 segundos (3000 milisegundos)
                setTimeout(function() {
                    $('.alert-danger').alert('close');
                }, 3000);
            }
        }
    });
}