    <?php
    session_start();
     if (isset($_SESSION['userid']))
       { 
 echo "BIENVENIDO ADMINISTRADOR &nbsp;".strtoupper($_SESSION['userid']);  
require_once("mantenimiento.php");
include("conexion.php");
$gene = "SELECT * FROM home";
$resu = mysql_query($gene);
while ($row = mysql_fetch_array($resu)) {
$notie1=$row['noti1'];
$imge1=$row['img1'];

  }

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">


<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="content-type" content="text/html;  ISO-8859-1"/>
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

<form action="edithome.php" enctype=multipart/form-data name="home"  method="post">


   <h1> Noticia Actual: </h1><br>
    </div>

      <textarea style="border: none;" disabled name="noti1" cols="40" rows="4"><?php echo $notie1;?></textarea>
      <img src="images/edit.png" style="cursor: pointer;" onclick="document.home.noti1.disabled=!document.home.noti1.disabled">
      <div><br> <img width="130px" height="130px"  src="<?php echo $imge1;?>"/>      </div>
      <br><input type="file" name="img1" />
      <div> 
     <br>


   <input type="submit" value="Actualizar" name="actualizar">


               </form>









  <?php

  if(isset($_REQUEST['actualizar']))
{
        echo "<script language='JavaScript'>
            alert('Noticia actualizada corecctamente');
            window.location.href='edithome.php';
            </script>";
            

            }

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

      }

     else {
     mysql_query("UPDATE home SET img1 = '$img1'") or die(mysql_error());

}

   } 
  if (isset($_POST["noti1"]))    {


 $noti1=$_POST["noti1"];

mysql_query("UPDATE home SET noti1 = '$noti1'") or die(mysql_error());


}

?>
 <div id="content_bottom"></div>
  </div>   </div>   </div>

  <div id="footer"><h3 style="margin-left: 40%;text-transform: uppercase;"><a href="">Direccion Nacional de Formacion Continua</a></h3>

  <h4 style="margin-left: 46%;margin-top:5px;color:#EBEBEB;"> Copyright © ESMA       </h4>
  </div>

</body>
</html>
<?php
  }
  else
  {
     header('Location: ../../login.php');  
  }
?>