<?php
if(isset($_POST['login-admin'])) {
  $usuario = $_POST['usuario'];
  $password = $_POST['password'];
  // die(json_encode($_POST));

  try {
    include_once 'funciones/funciones.php';
    $stmt = $conn->prepare("SELECT * FROM admins WHERE usuario = ?;");
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $stmt->bind_result($id_admin, $usuario_admin, $nombre_admin, $password_admin);
    if ($stmt->affected_rows) {
        $existe = $stmt->fetch();
        if ($existe) {
          session_start();
           if(password_verify($password, $password_admin)) {
             $_SESSION['usuario'] = $usuario_admin;
             $_SESSION['nombre'] = $nombre_admin;

            $respuesta = array(
              'respuesta' => 'exitoso',
              'usuario' => $nombre_admin
            );
          }else {
            $respuesta = array(
              'respuesta' => 'error'
            );
          }
      }else {
        $respuesta = array(
          'respuesta' => 'error'
         );
      }
    }
  } catch (\Exception $e) {
    echo "Error: " . $e->getMessage();
  }
  die(json_encode($respuesta));
}

 ?>
