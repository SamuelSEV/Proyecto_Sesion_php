<?php
// Se accede a la sesión
session_name("sesiones1");
session_start();

// Si el número no está guardado en la sesión, lo pone a cero (el valor inicial)
if (!isset($_SESSION["numero"])) {
    $_SESSION["numero"] = 0;
}

// Funciones auxiliares
function recoge($var, $m = "")
{
    if (!isset($_REQUEST[$var])) {
        $tmp = (is_array($m)) ? [] : "";
    } elseif (!is_array($_REQUEST[$var])) {
        $tmp = trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"));
    } else {
        $tmp = $_REQUEST[$var];
        array_walk_recursive($tmp, function (&$valor) {
            $valor = trim(htmlspecialchars($valor, ENT_QUOTES, "UTF-8"));
        });
    }
    return $tmp;
}

// Recogida de accion
$accion   = recoge("accion");

// Dependiendo de la acción recibida, modifica el número guardado
if ($accion == "cero") {
    $_SESSION["numero"] = 0;
} elseif ($accion == "subir") {
    $_SESSION["numero"]++;
} elseif ($accion == "bajar") {
    $_SESSION["numero"]--;
}

// y vuelve al formulario
header("Location:sesiones-1.php");
?>