<?php
if (!defined('visualizar')) { // Si no esta definido el visualizar
      header("Location: login.php"); // lo mandamos para el index.php
      die('No puedes visualizar esta pagina'); // ala ya esta
} // cerramos el if
?>