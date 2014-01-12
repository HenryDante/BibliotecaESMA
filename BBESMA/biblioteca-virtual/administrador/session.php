<?php

    if (isset($_POST['mierda']))
   {
    $Usuario = $_POST['user'];
    $Contra = $_POST['password'];
    require("Conexion.php");
    $query = mysql_query('SELECT * FROM usuarios WHERE usuario="'. mysql_real_escape_string($Usuario) .'" AND password="'. mysql_real_escape_string($Contra) .'"');
    if ($existe = @mysql_fetch_object($query)) {
        header("location:inicio.php");
        $_SESSION['iniciar']= "si";
     }
    else {
        echo "Debes crear una cuenta";
    }
}

?>