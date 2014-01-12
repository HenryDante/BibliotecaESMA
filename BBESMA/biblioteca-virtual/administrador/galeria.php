
     <?php
require_once("mantenimiento.php");
include("conexion.php");
$gene = "SELECT * FROM galeria";
$resu = mysql_query($gene);
while ($row = mysql_fetch_array($resu)) {

$i1=$row['f1'];
$i2=$row['f2'];
$i3=$row['f3'];
$i4=$row['f4'];
$i5=$row['f5'];
$i6=$row['f6'];
$i7=$row['f7'];
$i8=$row['f8'];
$i9=$row['f9'];

$d1=$row['titulo1'];
$d2=$row['titulo2'];
$d3=$row['titulo3'];
$d4=$row['titulo4'];
$d5=$row['titulo5'];
$d6=$row['titulo6'];
$d7=$row['titulo7'];
$d8=$row['titulo8'];
$d9=$row['titulo9'];


  }
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
        <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1"/>
        <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="js/agregarNuevaFila.js"></script>
        <script type="text/javascript" src="js/modificarEstiloInputFile.js"></script>
        <script type="text/javascript" src="js/cambiarOpacidadImagenes.js"></script>
        <link rel="stylesheet" type="text/css" href="css/estiloo.css"/>
        <script type="text/javascript">
var SITE = SITE || {};

SITE.fileInputs = function() {
  var $this = $(this),
      $val = $this.val(),
      valArray = $val.split('\\'),
      newVal = valArray[valArray.length-1],
      $button = $this.siblings('.button'),
      $fakeFile = $this.siblings('.file-holder');
  if(newVal !== '') {
    $button.text('Foto Elegida');
    if($fakeFile.length === 0) {
      $button.after('<span class="file-holder">' + newVal + '</span>');
    } else {
      $fakeFile.text(newVal);
    }
  }
};

$(document).ready(function() {
  $('.file-wrapper input[type=file]').bind('change focus click', SITE.fileInputs);
});

</script>



        <!-- Lightbox -->

        <script type="text/javascript" src="lightbox/js/lightbox.js"></script>
        <link rel="stylesheet" href="lightbox/css/lightbox.css" type="text/css" />


       <title>Sistema bibliotecario</title>
   
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />

</head>

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
        

      <center>   <h1 style="text-align:center;">Imagenes de la Galeria</h1>       </center>

                                                               <BR><BR>   
        <form name="evento" action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">  

<p>  




</p>  
<p>  
  <div id="gal">



  <div style=" float: left; padding: 10px; ">
   <fieldset  style=" margin-top: 10px; margin-bottom: 10px; " class="contact">
<?php if (!empty($i1)) { ?>  <img width="140px" height="143px"  src="<?php echo $i1;?>"/> <BR>   <?php   } ?>


<div class="file-wrapper">
<input   type="file" name="foto[]" size="30" /> <span class="button">Examinar</span>
</div> <BR><BR><font style="font-weight:bold;">Descripcion</font><BR><textarea name="titulo1" cols="18" rows="2"><?php if (!empty($d1)) { ?><?php echo $d1;?><?php   } ?></textarea><BR><BR><BR>
    </fieldset>

 <fieldset  style=" margin-top: 10px; margin-bottom: 10px; " class="contact">
<?php if (!empty($i2)) { ?> <img width="140px" height="143px"  src="<?php echo $i2;?>"/> <BR>   <?php   } ?>
<div class="file-wrapper"><input type="file" name="foto[]" size="30" />  <span class="button">Examinar</span>
</div> <BR><BR><font style="font-weight:bold;">Descripcion</font> <BR><textarea maxlength="2000" name="titulo2" cols="18" rows="2"><?php if (!empty($d2)) { ?><?php echo $d2;?><?php   } ?></textarea><BR> <BR><BR>
         </fieldset>

     <fieldset style=" margin-top: 10px; margin-bottom: 10px; "  class="contact">
     <?php if (!empty($i3)) { ?> <img width="140px" height="143px"  src="<?php echo $i3;?>"/> <BR>   <?php   } ?>
 <div class="file-wrapper">
<input  type="file" name="foto[]" size="30" />  <span class="button">Examinar</span>
</div> <BR><BR><font style="font-weight:bold;">Descripcion</font><BR> <textarea maxlength="2000"  name="titulo3" cols="18" rows="2"><?php if (!empty($d3)) { ?><?php echo $d3;?><?php   } ?></textarea><BR>  <BR><BR>
    </fieldset>

</div>

  <div style=" float: left; padding: 10px; ">
    <fieldset style=" margin-top: 10px; margin-bottom: 10px; "  class="contact">
    <?php if (!empty($i4)) { ?> <img width="140px" height="143px"  src="<?php echo $i4;?>"/> <BR>   <?php   } ?>
 <div class="file-wrapper"><input  type="file" name="foto[]" size="30" /><span class="button">Examinar</span>
</div><BR><BR><font style="font-weight:bold;">Descripcion</font> <BR><textarea  maxlength="2000" name="titulo4" cols="18" rows="2"><?php if (!empty($d4)) { ?><?php echo $d4;?><?php   } ?></textarea> <BR>  <BR><BR>
 </fieldset>

       <fieldset  style=" margin-top: 10px; margin-bottom: 10px; " class="contact">
       <?php if (!empty($i5)) { ?> <img width="140px" height="143px"  src="<?php echo $i5;?>"/> <BR>   <?php   } ?>
 <div class="file-wrapper">
<input   type="file" name="foto[]" size="30" /> <span class="button">Examinar</span>
</div> <BR><BR><font style="font-weight:bold;">Descripcion</font> <BR><textarea  maxlength="2000" name="titulo5" cols="18" rows="2"><?php if (!empty($d5)) { ?><?php echo $d5;?><?php   } ?></textarea><BR><BR><BR>
   </fieldset>

     <fieldset style=" margin-top: 10px; margin-bottom: 10px; "  class="contact">
     <?php if (!empty($i6)) { ?> <img width="140px" height="143px"  src="<?php echo $i6;?>"/> <BR>   <?php   } ?>
<div class="file-wrapper"><input  type="file" name="foto[]" size="30" /> <span class="button">Examinar</span>
</div> <BR><BR><font style="font-weight:bold;">Descripcion</font><BR> <textarea  maxlength="2000" name="titulo6" cols="18" rows="2"><?php if (!empty($d6)) { ?><?php echo $d6;?><?php   } ?></textarea><BR>  <BR><BR>
    </fieldset>
</div>

<div style=" float: left; padding: 10px; ">     <fieldset style=" margin-top: 10px; margin-bottom: 10px; "  class="contact">
        <?php if (!empty($i7)) { ?> <img width="140px" height="143px"  src="<?php echo $i7;?>"/> <BR>   <?php   } ?>
<div class="file-wrapper"><input  type="file" name="foto[]" size="30" /> <span class="button">Examinar</span>
</div>  <BR><BR><font style="font-weight:bold;">Descripcion</font> <BR><textarea  maxlength="2000" name="titulo7" cols="18" rows="2"><?php if (!empty($d7)) { ?><?php echo $d7;?><?php   } ?></textarea><BR>   <BR><BR>
   </fieldset>

 <fieldset class="contact" style=" margin-top: 10px; margin-bottom: 10px; " > <?php if (!empty($i8)) { ?> <img width="140px" height="143px"  src="<?php echo $i8;?>"/> <BR>   <?php   } ?>
<div class="file-wrapper"><input  type="file" name="foto[]" size="30" /> <span class="button">Examinar</span>
</div> <BR><BR> <font style="font-weight:bold;">Descripcion</font><BR> <textarea  maxlength="2000" name="titulo8" cols="18" rows="2"><?php if (!empty($d8)) { ?><?php echo $d8;?><?php   } ?></textarea> <BR> <BR><BR>

         </fieldset>

            <fieldset style=" margin-top: 10px; margin-bottom: 10px; " class="contact"> <?php if (!empty($i9)) { ?> <img width="140px" height="143px"  src="<?php echo $i9;?>"/> <BR>   <?php   } ?>
<div class="file-wrapper"><input type="file" name="foto[]" size="30" /> <span class="button">Examinar</span>
</div> <BR><BR> <font style="font-weight:bold;">Descripcion</font> <BR> <textarea  maxlength="2000" name="titulo9" cols="18" rows="2"><?php if (!empty($d9)) { ?><?php echo $d9;?><?php   } ?></textarea><BR><BR><BR>
      </fieldset>
</div>



 </div>

</p>  

<p>  

</p>

   <BR>
<input type="submit" name="enviar" value="Actualizar" />
</form>  

     



   <?php  

if(isset($_POST['enviar']) && $_POST['enviar'] == 'Actualizar'){
              echo "<script language='JavaScript'>

            window.location.href='galeria.php';
            </script>";
            




 if (isset ($_FILES["foto"])) {
foreach ($_FILES["foto"]["error"] as $key => $error) {  

    if($error== UPLOAD_ERR_OK){  
         
$nombre_archivo = $_FILES["foto"]["name"][$key];    
$tipo_archivo = $_FILES["foto"]["type"][$key];    
$tamano_archivo = $_FILES["foto"]["size"][$key];  
$temp_archivo = $_FILES["foto"]["tmp_name"][$key];  


 if (((strpos($tipo_archivo, "gif") || strpos($tipo_archivo, "png") || strpos($tipo_archivo, "jpeg")) && (    $tamano_archivo < 1000000)))
{

   $nom_img = $nombre_archivo;   
       
    $directorio = 'galeria/';
    if (move_uploaded_file($temp_archivo,$directorio . "/" . $nom_img))   
    {  
      
   $f1 = $directorio.$_FILES["foto"]["name"][0];
    $f2 =$directorio.$_FILES["foto"]["name"][1];
    $f3 = $directorio.$_FILES["foto"]["name"][2];
    $f4 = $directorio.$_FILES["foto"]["name"][3];
    $f5 = $directorio.$_FILES["foto"]["name"][4];
     $f6 = $directorio.$_FILES["foto"]["name"][5];
     $f7 = $directorio.$_FILES["foto"]["name"][6];
     $f8 = $directorio.$_FILES["foto"]["name"][7];
   $f9= $directorio.$_FILES["foto"]["name"][8];



}   

}


}  








 }    
        } 
      if($_FILES["foto"]["name"][0] != "") {

      mysql_query("UPDATE galeria SET f1='$f1'") or die(mysql_error());

      }
                  
        if($_FILES["foto"]["name"][1] != "") {

        mysql_query("UPDATE galeria SET f2='$f2'") or die(mysql_error());
           }

           if($_FILES["foto"]["name"][2] != "") {
        mysql_query("UPDATE galeria SET f3='$f3'") or die(mysql_error());
           }

             if($_FILES["foto"]["name"][3] != "") {
        mysql_query("UPDATE galeria SET f4='$f4'") or die(mysql_error());
                             }
               if($_FILES["foto"]["name"][4] != "") {
        mysql_query("UPDATE galeria SET f5='$f5'") or die(mysql_error());
                      }
                       if($_FILES["foto"]["name"][5] != "") {
        mysql_query("UPDATE galeria SET f6='$f6'") or die(mysql_error());
                           }
                            if($_FILES["foto"]["name"][6] != "") {
                 mysql_query("UPDATE galeria SET f7='$f7'") or die(mysql_error());
                           }


                    if($_FILES["foto"]["name"][7] != "") {
                    mysql_query("UPDATE galeria SET f8='$f8'") or die(mysql_error());
                             }

                            if($_FILES["foto"]["name"][8] != "") {
                mysql_query("UPDATE galeria SET f9='$f9'") or die(mysql_error());

                                }






     if(!empty($_POST['titulo1'])){
               $tit1=$_POST['titulo1'];
          mysql_query("UPDATE galeria SET titulo1='$tit1'") or die(mysql_error());


          
     }

     if(!empty($_POST['titulo2'])){
               $tit2=$_POST['titulo2'];
          mysql_query("UPDATE galeria SET titulo2='$tit2'") or die(mysql_error());


          
     }


     if(!empty($_POST['titulo3'])){
               $tit3=$_POST['titulo3'];
          mysql_query("UPDATE galeria SET titulo3='$tit3'") or die(mysql_error());


          
     }


       if(!empty($_POST['titulo4'])){
               $tit4=$_POST['titulo4'];
          mysql_query("UPDATE galeria SET titulo4='$tit4'") or die(mysql_error());


          
     }


      if(!empty($_POST['titulo5'])){
               $tit5=$_POST['titulo5'];
          mysql_query("UPDATE galeria SET titulo5='$tit5'") or die(mysql_error());


          
     }



      if(!empty($_POST['titulo6'])){
               $tit6=$_POST['titulo6'];
          mysql_query("UPDATE galeria SET titulo6='$tit6'") or die(mysql_error());


          
     }

         if(!empty($_POST['titulo7'])){
               $tit7=$_POST['titulo7'];
          mysql_query("UPDATE galeria SET titulo7='$tit7'") or die(mysql_error());


          
     }

      if(!empty($_POST['titulo8'])){
               $tit8=$_POST['titulo8'];
          mysql_query("UPDATE galeria SET titulo8='$tit8'") or die(mysql_error());


          
     }


        if(!empty($_POST['titulo9'])){
               $tit9=$_POST['titulo9'];
          mysql_query("UPDATE galeria SET titulo9='$tit9'") or die(mysql_error());


          
     }

          
          
}  
?> 
            
            <br />
        </div>  
        </div>
        <div id="content_bottom"></div>
            
            <div id="footer"><h3><a href="">Direccion Nacional de Formacion Continua</a></h3></div>
      </div>
   </div>
   
        </div>
         <div id="content_bottom"></div>
            

   </div>
      </div>


       <div id="footer"><h3 style="margin-left: 40%;text-transform: uppercase;"><a href="">Direccion Nacional de Formacion Continua</a></h3>

      <h4 style="margin-left: 46%;margin-top:5px;color:white;"> Copyright © ESMA       </h4>



      </div>

</body>
</html>