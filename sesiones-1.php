<?php
// Se accede a la sesión
session_name("sesiones1");
session_start();

// Si el número no está guardado en la sesión, lo pone a cero
if (!isset($_SESSION["numero"])) {
    $_SESSION["numero"] = 0;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>SESION</title>
</head>
<body>
    <form action="sesiones-1-2.php" method="get">
        <p>Haga clic en los botones para modificar el valor:</p>

        <p>
          <button type="submit" name="accion" value="bajar" style="font-size: 4rem">-</button>
          
<?php
// Muestra el número, guardado en la sesión 
print "      <span style=\"font-size: 4rem\">$_SESSION[numero]</span>\n";
?>

          <button type="submit" name="accion" value="subir" style="font-size: 4rem">+</button>
        </p>
        <p>
          <button type="submit" name="accion" value="cero">Poner a cero</button>
        </p>
  </form>
</body>
</html>