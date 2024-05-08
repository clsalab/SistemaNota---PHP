<?php
if (!empty($_POST)) {
    if (empty($_POST['loginEstudiante']) || empty($_POST['passEstudiante'])) {
        echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Todos los campos son necesarios</div>';
    } else {
        require_once 'conexion.php';
        $loginEstudiante = $_POST['loginEstudiante'];
        $passEstudiante = $_POST['passEstudiante'];

        // Corrección en la consulta SQL: cambiar 'a' por 'r'
        $sql = 'SELECT * FROM estudiantes as u INNER JOIN rol as r ON u.rol = r.rol_id WHERE u.usuario = ?';
        $query = $pdo->prepare($sql);
        $query->execute(array($loginEstudiante));
        $result = $query->fetch(PDO::FETCH_ASSOC);

        if ($query->rowCount() > 0) {
            // Verificar la contraseña
            if (password_verify($passEstudiante, $result['clave'])) {
                $_SESSION['active'] = true;
                $_SESSION['id_estudiante'] = $result['id_estudiante'];
                $_SESSION['nombre'] = $result['nombre'];
                $_SESSION['rol'] = $result['rol_id'];
                $_SESSION['nombre_rol'] = $result['nombre_rol'];

                echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Redirecting</div>';
            } else {
                echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Usuario o contraseña incorrectos</div>';
            }
        } else {
            echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Usuario o contraseña incorrectos</div>';
        }
    }
}
?>
