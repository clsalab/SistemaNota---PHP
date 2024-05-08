<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Ingreso al Sistema</title>
</head>
<body>
<header class="main-header">
        <div class="main-cont">
            <div class="desc-header">
                <img src="images/LOGO.jpg" alt="imagen3">
                <h1 style="color: #0b95d6">IDECO</h1>
            </div>
            <div class="cont-header">
                <h1>Bienvenid@</h1>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Administrador</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profesor</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="estud-tab" data-toggle="tab" href="#estud" role="tab" aria-controls="estud" aria-selected="false">Estudiante</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <form action="" id="form-admin" method="POST" onsubmit="return validar()">
                            <label for="usuario-admin">Administrador</label>
                            <input type="text" name="usuario" id="usuario" placeholder="Nombre de usuario">
                            <label for="password-admin">Contraseña</label>
                            <input type="password" name="pass" id="pass" placeholder="Contraseña">
                            <br>
                            <div id="messageUsuario"></div>
                            <br>
                            <button id="loginUsuario" type="button">INICIAR SESION</button>
                            <div id="admin-loader" class="loader" style="display:none;"></div>
                            <div id="admin-message"></div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <form action="" id="form-profesor" method="POST" onsubmit="return validar()">
                            <label for="usuario-profesor">Profesor</label>
                            <input type="text" name="usuarioProfesor" id="usuarioProfesor" placeholder="Nombre de usuario">
                            <label for="password-profesor">Contraseña</label>
                            <input type="password" name="passProfesor" id="passProfesor" placeholder="Contraseña">
                            <br>
                            <div id="messageProfesor"></div>
                            <br>
                            <button id="loginProfesor" type="button">INICIAR SESION</button>
                            <div id="profesor-loader" class="loader" style="display:none;"></div>
                            <div id="profesor-message"></div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="estud" role="tabpanel" aria-labelledby="estud-tab">
                        <form action="" id="form-estudiante" method="POST" onsubmit="return validar()">
                            <label for="usuario-estudiante">Estudiante</label>
                            <input type="text" name="usuarioEstudiante" id="usuarioEstudiante" placeholder="Nombre de usuario">
                            <label for="password-estudiante">Contraseña</label>
                            <input type="password" name="passEstudiante" id="passEstudiante" placeholder="Contraseña">
                            <br>
                            <div id="messageEstudiante"></div>
                            <br>
                            <button id="loginEstudiante" type="button">INICIAR SESION</button>
                            <div id="estudiante-loader" class="loader" style="display:none;"></div>
                            <div id="estudiante-message"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <script src="js/jquery-3.7.0.min.js"></script><!-- Essential javascripts for application to work-->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/login.js"></script>

    <!-- Page specific javascripts-->
    <script src="js/plugins/jquery.dataTables.min.js"></script>
    <script src="js/plugins/chart.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>