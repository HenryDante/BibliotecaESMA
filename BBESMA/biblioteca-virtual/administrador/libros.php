

<?php
require_once("mantenimiento.php");
       include("conexion.php");
$clase = new mmto();

$gene = "SELECT nombre_genero FROM genero";
$resu = mysql_query($gene);


$ed = "SELECT nombre_editorial FROM editorial";
$resul = mysql_query($ed);

?>

<html>
  <?php

         include("head.php");

?>

<body>
<div id="container">
        <div id="header">
        
           <!-- <h1>SISTEMA<span class="off">BIBLIOTECARIO</span></h1> 
            
            <h2>ESMA</h2>-->
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
            <center><h2>Ingreso de nuevos libros</h2></center>
            </br>
            </br>
            

<link rel="stylesheet" type="text/css" href="table.css">
<link rel="stylesheet" type="text/css" href="formulario.css">
<script src="validCampoFranz.js"></script>
      <script type="text/javascript">
            $(function(){
                //Validar
                //Para escribir solo letras
                $('#miCampo1').validCampoFranz(' abcdefghijklmnñopqrstuvwxyzáéiou');
                $('#miCampo2').validCampoFranz(' abcdefghijklmnñopqrstuvwxyzáéiou');
                $('#miCampo4').validCampoFranz(' abcdefghijklmnñopqrstuvwxyzáéiou');
               

                //Para escribir solo numeros    
                $('#miCampo2').validCampoFranz('0123456789');  
                $('#miCampo3').validCampoFranz('0123456789');
                $('#miCampo5').validCampoFranz('0123456789'); 
                $('#miCampo6').validCampoFranz('0123456789'); 
                $('#miCampo7').validCampoFranz('0123456789'); 
                $('#miCampo8').validCampoFranz('0123456789');  
                $('#miCampo9').validCampoFranz('0123456789');    
            });
        </script>             
<form name="new" action="" method="post" enctype=multipart/form-data autocomplete="off">
<fieldset id="form">

<ol>
     <li><label> ID Libro: </label><input type="text" id="miCampo6" name="id" size="25" style="background:#F3FCFF"/></li>
     <li><label>Titulo: </label><input type="text" name="titulo" size="25" style="background:#F3FCFF"/></li>
     <li> <label> Portada: </label> <input type="file" name="img1" /></li>

    <li><label>Nombre autor: </label><input type="text" id="miCampo1" name="nombre" size="25" style="background:#F3FCFF"/></li>        
    <li><label>Edici&oacuten: </label><input type="text" name="edicion" size="25" style="background:#F3FCFF"/></li>       
<li><label>Gen&eacutero: </label>
    <?php
    
   echo "<select name='genero'>";
    echo "<option value=none>      </option>";
while ($row = mysql_fetch_array($resu)) {
    echo "<option value='" . $row['nombre_genero'] . "'>" . $row['nombre_genero'] . "</option>";
}
echo "</select>";
    
    
    ?>
    
    </select>   </li>  
    
    <li><label>Ubicaci&oacuten: </label><input type="text" name="ubicacion" size="25" style="background:#F3FCFF"/></li>  
    <li><label>Lugar de edici&oacuten: </label><input type="text" name="edicion" size="25" style="background:#F3FCFF"/></li>  
    
    <li><label>Editorial: </label>
      <?php
    
   echo "<select name='editorial'>";
        echo "<option value=none>      </option>";


while ($row = mysql_fetch_array($resul)) {

    echo "<option value='" . $row['nombre_editorial'] . "'>" . $row['nombre_editorial'] . "</option>";
}
echo "</select>";
    
    
    
    ?>
    <li><label>A&ntildeo: </label><input type="text" id="miCampo3" name="año" size="25" style="background:#F3FCFF"/></li>  
    <li><label>Cant de paginas: </label><input type="text" id="miCampo8" name="paginas" size="25" style="background:#F3FCFF"/></li>
    <li><label>ISBN ISSN: </label><input type="text"  name="isbn" size="25" style="background:#F3FCFF"/></li>
    <li><label>Nivel: </label><input type="text" name="nivel" size="25" style="background:#F3FCFF"/></li>
    <li><label>Idioma: </label><input type="text" id="miCampo4" name="idioma" size="25" style="background:#F3FCFF"/></li>
    <li><label>Descriptor: </label><input type="text" name="descrip" size="25" style="background:#F3FCFF"/></li>
    <li><label>Cant Ejemplares: </label><input type="text"  id="miCampo9" name="ejemplares" size="25" style="background:#F3FCFF"/></li>
    
</ul>
   
</fieldset>
</br>
</br>


&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="insertar" value="insertar"/>
<input type="button" value="Listar Libros" onClick=" window.location.href='./dataTables/' ">



</form>

</br>
</br>   







<?php

if(isset($_REQUEST['insertar']))
{
  
$id=$_REQUEST['id'];
$titulo_libro=$_REQUEST['titulo'];
$img="img/imagen.jpg";
$autor=$_REQUEST['nombre'];
$edicion=$_REQUEST['edicion'];
$genero=$_REQUEST['genero'];
$ubicacion=$_REQUEST['ubicacion'];
$lugar_edicion=$_REQUEST['edicion'];
$editorial=$_REQUEST['editorial'];
$año=$_REQUEST['año'];
$cant_paginas=$_REQUEST['paginas'];
$ISBN_ISSN=$_REQUEST['isbn'];
$nivel=$_REQUEST['nivel'];
$idioma=$_REQUEST['idioma'];
$descriptor=$_REQUEST['descrip'];
$cant_ejemplares=$_REQUEST['ejemplares'];
$SQL= "insert into libros values($id , \"$titulo_libro \",\"$img\",\"$autor\", \"$edicion\", \"$genero\", \"$ubicacion\", \"$lugar_edicion\", \"$editorial\", \"$año\", \"$cant_paginas\", \"$ISBN_ISSN\", \"$nivel\", \"$idioma\", \"$descriptor\", \"$cant_ejemplares\")";
$clase->insertar($SQL);






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

  
if($_FILES["img1"]["name"] == "") {
mysql_query("UPDATE libros SET img1 = 'img/imagen.jpg'") or die(mysql_error());

   }

else 
{
mysql_query("UPDATE libros SET img1 = '$img1'") or die(mysql_error());

}

   } 

header("Location:libros.php");
}


?>

<?php
if(isset($_REQUEST['modificar'])){
$id=$_REQUEST['id'];
$titulo_libro=$_REQUEST['titulo'];
$nombre_autor=$_REQUEST['nombre'];
$nombre_genero=$_REQUEST['genero'];
$editorial=$_REQUEST['editorial'];
$nivel=$_REQUEST['nivel'];
$idioma=$_REQUEST['idioma'];
$ubicacion=$_REQUEST['ubicacion'];
$ISBN_ISSN=$_REQUEST['isbn'];
$cant_ejemplares=$_REQUEST['cantidad'];
$sql="update libros set titulo_libro=\"$titulo_libro\", autor=\"$nombre_autor \", genero=\"$nombre_genero \" ,editorial=\"$editorial \",nivel=\"$nivel \", idioma=\"$idioma \", ubicacion=\"$ubicacion \", ISBN_ISSN=\"$ISBN_ISSN \", cant_ejemplares=$cant_ejemplares  where codigo_libro=$id";
$clase->modificar($sql);
header("Location:listar.php");
}
?>


<?php

if(isset($_REQUEST['eliminar'])){
$id=$_REQUEST['id'];
$clase->eliminar('libros',codigo_libro,$id);
header("Location:libros.php");
}
?>




        </div>
         <div id="content_bottom"></div>
            

   </div>
      </div>


       <div id="footer"><h3 style="margin-left: 40%;text-transform: uppercase;"><a href="">Direccion Nacional de Formacion Continua</a></h3>

      <h4 style="margin-left: 46%;margin-top:5px;color:white;"> Copyright  ESMA       </h4>



      </div>
</body>
</html>