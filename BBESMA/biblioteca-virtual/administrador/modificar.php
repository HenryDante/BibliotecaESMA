


<?php

if(isset($_SESSION['userid']))
{
include("conexion.php");

?>
<html>


 
   <?php

         include("head.php");

?>
    <body>
      <div id="container">
        <div id="header">
        

        </div>   
        
        <div id="menu">
                                   
   <?php

     include("menu.php");

?>
</div>
                
                
              <div id="leftmenu_bottom"></div>
        </div>
        
        
        
        
        <div id="content">
        
        
        <div id="content_top"></div>
        <div id="content_main">
            
            
             
<link rel="stylesheet" type="text/css" href="table.css">
<link rel="stylesheet" type="text/css" href="formulario.css">
<form action="buscar.php" method="post">
<fieldset id="form">
       
       <center><h2>Busque un elemento para modificar o eliminar</h2></center>  <br>
       <label>Buscar</label><input name="busq" placeholder="Titulo de Libro" type="text" style="background:#F3FCFF">

        <input name="enviar" type="submit">
        </fieldset>      <br> <br>
        <div id="botton">
        
    </div>
    </form>


 <?php


          if(isset($_REQUEST['enviar']))
       {


        $busq=$_POST['busq'];

       $consulta_mysql="select * from libros  WHERE titulo_libro LIKE '%".$busq."%' OR ISBN_ISSN LIKE '%".$busq."%' OR autor LIKE '%".$busq."%'";
 
       $resultado_consulta_mysql= mysql_query($consulta_mysql);
       if (strlen($busq)<1) 
      {
        echo "<h3></br></br>No existe ningun registro asegurese de introducir un campo en la caja de texto.</h3>"; }

else {

   $num_reply = @mysql_num_rows($resultado_consulta_mysql);



if ($num_reply==0) {

    echo "</br></br><h3>No hay ningun registro en la base de datos con ese nombre</h3>";

}

    else {
while($registro=mysql_fetch_array($resultado_consulta_mysql)){

$cod=$registro["titulo_libro"] ;
$isb=$registro["ISBN_ISSN"]   ;
echo "<table cellspacing='0'> \n";
   echo "</br></br><thead><tr><th>Codigo</th><th>Titulo</th><th>Autor</th>
 <th>Editorial</th><th>ISBN</th>
 <th>Ejemplares</th><th>Modificar</th><th>Eliminar</th></tr></thead> \n";
   
   
   do { 

         $idbook=$registro["codigo_libro"];
      echo "<tr><td>"
      .$registro["codigo_libro"]."</td><td>"
      .$registro["titulo_libro"]."</td><td>"
      .$registro["autor"]."</td><td>"
      .$registro["editorial"]."</td><td>"
      .$registro["ISBN_ISSN"]."</td><td>"
      .$registro["cant_ejemplares"]. "<td><a href='buscar.php?action=edit&idl=".$registro["titulo_libro"]."'>modificar</a></td><td><a onClick='return Confirmar(this.form)' href='buscar.php?action=delete&idl=".$registro["titulo_libro"]."'>eliminar</a></td>";
      } while ($registro = mysql_fetch_array($resultado_consulta_mysql));
      echo "</table> \n"; 
}
 }

  //echo "<a  class='btn' href=imprimir.php?id=$idbook target=popup onClick='window.open(this.href, this.target, menubar=no,status=no,titlebar=no,status=no,width=780,height=400'); return false;'>imprime</a>" ;

}
}
     ?>
  




  <?php


        //ELIMINA
     if(isset($_GET['idl']) && $_GET['action'] == "delete")
           {                              
           echo "elimina";
           $vard  =$_GET['idl'];
           $sqle="delete from libros where titulo_libro='$vard'";
           
           mysql_query($sqle) ;

          }






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
$imge1=$row['img1'];
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


    <fieldset id="form">
            <h2>Modificando <?php echo $titulo; ?> </h2>  <br>
<ol>
  <form action="buscar.php" enctype=multipart/form-data method="post">
   <input type="hidden" value="<?php echo $identificador; ?>" name="identi" size="25"/>
  <li><label>ID Libro: </label><input type="text" value="<?php echo $libro; ?>" name="id" size="25"  readonly style="background:#F3FCFF"/></li>
   <li> <label>Titulo: </label><input type="text"  value="<?php echo $titulo; ?>" name="titulo" size="25" style="background:#F3FCFF"/></li>
   <li> <img width="130px" height="130px"  src="<?php echo $imge1;?>"/>  <br><input type="file" name="img1" /> </li>




   <li> <label>Autor: </label><input  value="<?php echo $autor; ?>" type="text" name="au" size="25" style="background:#F3FCFF"/></li>
  <li><label>Edicion: </label><input type="text" name="edicion"  value="<?php echo $edi; ?>" size="25" style="background:#F3FCFF"/> </li>
   <li> <label>Genero: </label><input type="text"  value="<?php echo $gen; ?>" name="gene" size="25" style="background:#F3FCFF"/> </li>
   <li> <label>Ubicacion: </label><input type="text"  value="<?php echo $ubi; ?>" name="ubica" size="25" style="background:#F3FCFF"/> </li>
  <li><label>Lugar Edicion: </label><input type="text"  value="<?php echo $edicion;  ?>" name="lugar" size="25" style="background:#F3FCFF"/> </li>
  <li><label>Editorial: </label><input type="text"  value="<?php echo $edito; ?>" name="edit" size="25" style="background:#F3FCFF"/>  </li>
  <li><label>Año: </label><input type="text"  value="<?php echo $año; ?>" name="ao" size="25" style="background:#F3FCFF"/></li>
  <li><label>Paginas: </label><input type="text"  value="<?php echo $cantidad; ?>" name="canti" size="25" style="background:#F3FCFF"/>  </li>
  <li><label>ISBN: </label><input type="text"  value="<?php echo $is; ?>" name="isb" size="25" style="background:#F3FCFF"/>  </li>
  <li><label>Nivel: </label><input type="text"  value="<?php echo $nive; ?>" name="nivel" size="25" style="background:#F3FCFF"/>  </li>
  <li><label>Idioma: </label><input type="text"  value="<?php echo $idio; ?>" name="idiom" size="25" style="background:#F3FCFF"/>  </li>
  <li><label>Descriptor: </label><input type="text"  value="<?php echo $descrip; ?>" name="descripto" size="25" style="background:#F3FCFF"/>  </li>
  <li><label>Ejemplares: </label><input type="text"  value="<?php echo $ejemplares; ?>" name="cante" size="25" style="background:#F3FCFF"/>  </li>

    
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
            window.location.href='buscar.php';
            </script>";



        
        $identi=$_POST["identi"];


       if (isset ($_FILES["img1"])) {
    
     $imag1=$_FILES["img1"]["name"];

    

        $tmp_name = $_FILES["img1"]["tmp_name"];
        $name = $_FILES["img1"]["name"];
        $newfile = "img/".$name;   
           $ext1=$_FILES['img1']['type'];
$uploaddir = "img/";
     $tam = $_FILES['img1']['size'];
        if (is_uploaded_file($tmp_name)) {   

  
            if (!copy($tmp_name,"$newfile")) {   
                print "Error en subida de archivo.";
                exit();         
                } 
                } 



                  $uploaddir = "img/";

$img1=$uploaddir.$imag1;
   } 




   
if($_FILES["img1"]["name"] == "") {



}

else {
mysql_query("UPDATE libros SET img1 = '$img1' WHERE titulo_libro='$identi'");




}





















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
                           
   if (isset($_POST["ao"]))

      {
$des=$_POST["ao"];


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
                           
   if (isset($_POST["descripto"]))

      {
$descp=$_POST["descripto"];


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


        </div>
         <div id="content_bottom"></div>
            

   </div>
      </div>


       <div id="footer"><h3 style="margin-left: 40%;text-transform: uppercase;"><a href="">Direccion Nacional de Formacion Continua</a></h3>

      <h4 style="margin-left: 46%;margin-top:5px;color:white;"> Copyright © ESMA       </h4>



      </div>
</body>
</html>
<?php
}
else
{

  header('location:../../login.php');
  }

?>