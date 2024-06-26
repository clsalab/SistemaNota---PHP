<?php
if (!empty($_POST)) {
    if (empty($_POST['login']) || empty($_POST['pass'])) {
        echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Todos los campos son necesarios</div>';
    } else {
        require_once 'conexion.php';
        $login = $_POST['login'];
        $pass = $_POST['pass'];

        // Corrección en la consulta SQL: cambiar 'a' por 'r'
        $sql = 'SELECT * FROM usuarios as u INNER JOIN rol as r ON u.rol = r.rol_id WHERE u.usuario = ?';
        $query = $pdo->prepare($sql);
        $query->execute(array($login));
        $result = $query->fetch(PDO::FETCH_ASSOC);

        if ($query->rowCount() > 0) {
            // Verificar la contraseña
            if (password_verify($pass, $result['clave'])) {
                $_SESSION['active'] = true;
                $_SESSION['id_usuario'] = $result['usuario_id'];
                $_SESSION['nombre'] = $result['usuario'];
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
