<?php
require ("clsconexion.php");
include ("conexion.php");
?>
<html>

    <?php

         include("head.php");

?>

   <body style= "background: whitesmoke !important;">


<?php


        //ELIMINA  AQUII
   //  if(isset($_GET['idl']) && $_GET['action'] == "delete")
       //    { 
       //                                                   
     //      echo "<h2>El libro &nbsp;". "<b>" . $_GET['idl'] ."</b>" . "&nbsp;ha sido eliminado</h2>";
       //    $vard  =$_GET['idl'];
        //   $sqle="delete from libros where titulo_libro='$vard'";
       //    
        //   mysql_query($sqle) ;
//

       //   }






                        //modifica

           if(isset($_GET['idl']) && $_GET['action'] == "edit")
{                      $identificador = $_GET['idl'];
                                //echo "edita";

 $cons="select * from libros  WHERE titulo_libro= '$identificador'";

 $ejec=mysql_query($cons)or die('
 '.mysql_error());

while ($row=mysql_fetch_array($ejec))
{

$libro=$row['codigo_libro'];
$titulo= $row['titulo_libro'];
$autor= $row['autor'];
$edi= $row["edicion"];
$gen=$row['genero'];
$ubi=$row['ubicacion'];
$edicion=$row['lugar_edicion'];
$edito=$row['editorial'];
$año=$row['año'];
$cantidad=$row['cant_paginas'];
$is=$row['ISBN_ISSN'];
$nive=$row['nivel'];
$idio=$row['idioma'];
$descrip=$row['descriptor'];
$ejemplares=$row['cant_ejemplares'];

          }



?>

    <link rel="stylesheet" type="text/css" href="table.css">
<link rel="stylesheet" type="text/css" href="formulario.css">
    <fieldset id="form">
            <h2>Modificando <?php echo $titulo; ?> </h2>  <br>
<ol> 
  <form action="listar.php" method="post" autocomplete="off">
   <input type="hidden" value="<?php echo $identificador; ?>" name="identi" size="25"/>
  <li><label>ID Libro: </label><input type="text" value="<?php echo $libro; ?>" name="id" id="miCampo4"  size="25"  readonly style="background:#F3FCFF"/></li>
   <li> <label>Titulo: </label><input type="text"  value="<?php echo $titulo; ?>" name="titulo" size="25" style="background:#F3FCFF"/></li>
   <li> <label>Autor: </label><input  value="<?php echo $autor; ?>" type="text" name="au" id="miCampo1" size="25" style="background:#F3FCFF"/></li>
  <li><label>Edicion: </label><input type="text" name="edicion"  value="<?php echo $edi; ?>" size="25" style="background:#F3FCFF"/> </li>
   <li> <label>Genero: </label><input type="text"  value="<?php echo $gen; ?>"  name="gene" id="miCampo2" size="25" style="background:#F3FCFF"/> </li>
   <li> <label>Ubicacion: </label><input type="text"  value="<?php echo $ubi; ?>" name="ubica" size="25" style="background:#F3FCFF"/> </li>
  <li><label>Lugar Edicion: </label><input type="text"  value="<?php echo $edicion;  ?>" name="lugar" size="25" style="background:#F3FCFF"/> </li>
  <li><label>Editorial: </label><input type="text"  value="<?php echo $edito; ?>" name="edit" id="miCampo2" size="25" style="background:#F3FCFF"/>  </li>
  <li><label>Año: </label><input type="text"  value="<?php echo $año; ?>" name="ao" id="miCampo5" size="25" style="background:#F3FCFF"/></li>
  <li><label>Cant Paginas: </label><input type="text"  value="<?php echo $cantidad; ?>" name="canti"  size="25" style="background:#F3FCFF"/>  </li>
  <li><label>ISBN: </label><input type="text"  value="<?php echo $is; ?>" name="isb" size="25" style="background:#F3FCFF"/>  </li>
  <li><label>Nivel: </label><input type="text"  value="<?php echo $nive; ?>" name="nivel" size="25" style="background:#F3FCFF"/>  </li>
  <li><label>Idioma: </label><input type="text"  value="<?php echo $idio; ?>" name="idiom" id="miCampo3" size="25" style="background:#F3FCFF"/>  </li>
  <li><label>Descriptor: </label><input type="text"  value="<?php echo $descrip; ?>" name="descriptor" size="25" style="background:#F3FCFF"/>  </li>
  <li><label>Ejemplares: </label><input type="text"  value="<?php echo $ejemplares; ?>" name="cante" id="miCampo7"  size="25" style="background:#F3FCFF"/>  </li>

    
</ul>
   
</fieldset>
<input type="submit" name="modificar" value="Modificar" />
  </form>

     <?php 




            }


       if(isset($_REQUEST['modificar']))
{
        echo "<script language='JavaScript'>
            alert('Modificacion exitosa');
            window.location.href='listar.php';
            </script>";



        
      $identi=$_POST["identi"];
      if (isset($_POST["id"]))

      {
$lb=$_POST["id"];


  $que1="UPDATE libros SET codigo_libro='$lb' WHERE titulo_libro='$identi'";
           mysql_query($que1); 

              

             //  echo "<div class='exito mensajes'>Titulo de libro modificado exitosamente</div>";
}

//TITULO//

   if (isset($_POST["titulo"]))

      {
$tit=$_POST["titulo"];


  $cons="UPDATE libros SET titulo_libro='$tit' WHERE titulo_libro='$identi'";
           mysql_query($cons);

               
}

                            
    //FUNCIONA//
       
   if (isset($_POST["nombre"]))

      {
$autor=$_POST["nombre"];


  $cont="UPDATE libros SET autor='$autor' WHERE titulo_libro='$identi'";
           mysql_query($cont);

}





//////FUNCIONA////////////
       
   if (isset($_POST["au"]))

      {
$auto=$_POST["au"];


  $conn="UPDATE libros SET autor='$auto' WHERE titulo_libro='$identi'";
           mysql_query($conn);

}


   //FUNCIONA//
                    
   if (isset($_POST["edicion"]))

      {
$edit=$_POST["edicion"];


  $cont="UPDATE libros SET edicion='$edit' WHERE titulo_libro='$identi'";
           mysql_query($cont);

}



            /////////////FUNCIONA/////
   if (isset($_POST["gene"]))

      {
$gen=$_POST["gene"];


  $contt="UPDATE libros SET genero='$gen' WHERE titulo_libro='$identi'";
           mysql_query($contt);

}

  
               
            /////////////FUNCIONA/////
   if (isset($_POST["ubica"]))

      {
$ub=$_POST["ubica"];


  $coni="UPDATE libros SET ubicacion='$ub' WHERE titulo_libro='$identi'";
           mysql_query($coni);

}

  
                           
                 
            /////////////FUNCIONA/////
   if (isset($_POST["ubicacion"]))

      {
$ubic=$_POST["ubicacion"];


  $conu="UPDATE libros SET ubicacion='$ubic' WHERE titulo_libro='$identi'";
           mysql_query($conu);

}



                 
            /////////////FUNCIONA/////
   if (isset($_POST["lugar"]))

      {
$lu=$_POST["lugar"];


  $conis="UPDATE libros SET lugar_edicion='$lu' WHERE titulo_libro='$identi'";
           mysql_query($conis);

}

  
   /////////////FUNCIONA/////
                           
   if (isset($_POST["edit"]))

      {
$cant=$_POST["edit"];


  $conc="UPDATE libros SET editorial='$cant' WHERE titulo_libro='$identi'";
           mysql_query($conc);

}

  

  
   /////////////FUNCIONA/////
                           
   if (isset($_POST["año"]))

      {
$des=$_POST["año"];


  $desc="UPDATE libros SET año='$des' WHERE titulo_libro='$identi'";
           mysql_query($desc);

}

       
   /////////////FUNCIONA/////
                           
   if (isset($_POST["canti"]))

      {
$des=$_POST["canti"];


  $descs="UPDATE libros SET cant_paginas='$des' WHERE titulo_libro='$identi'";
           mysql_query($descs);

}
     

   /////////////FUNCIONA/////
                           
   if (isset($_POST["canti"]))

      {
$dest=$_POST["canti"];


  $desce="UPDATE libros SET cant_paginas='$dest' WHERE titulo_libro='$identi'";
           mysql_query($desce);

}

                      
   /////////////FUNCIONA/////
                           
   if (isset($_POST["isb"]))

      {
$ib=$_POST["isb"];


  $desct="UPDATE libros SET ISBN_ISSN='$ib' WHERE titulo_libro='$identi'";
           mysql_query($desct);

}
      

   /////////////FUNCIONA/////
                           
   if (isset($_POST["nivel"]))

      {
$ni=$_POST["nivel"];


  $nvl="UPDATE libros SET nivel='$ni' WHERE titulo_libro='$identi'";
           mysql_query($nvl);

}

      
   /////////////FUNCIONA/////
                           
   if (isset($_POST["idiom"]))

      {
$im=$_POST["idiom"];


  $oma="UPDATE libros SET idioma='$im' WHERE titulo_libro='$identi'";
           mysql_query($oma);

}


       /////////////FUNCIONA/////
                           
   if (isset($_POST["descriptor"]))

      {
$descp=$_POST["descriptor"];


  $dc="UPDATE libros SET descriptor='$descp' WHERE titulo_libro='$identi'";
           mysql_query($dc);

}
    


         /////////////FUNCIONA/////
                           
   if (isset($_POST["cante"]))

      {
$ctd=$_POST["cante"];


  $cantidd="UPDATE libros SET cant_ejemplares='$ctd' WHERE titulo_libro='$identi'";
           mysql_query($cantidd);
}
              } 
       ?>