 <?php

       include("conexion.php");

      $gene = "SELECT * FROM home";
      $resu = mysql_query($gene);
      while ($row = mysql_fetch_array($resu)) {
      $notie1=$row['noti1'];
      $dir="biblioteca-virtual/administrador/";
      $imn1=$row['img1'];
      $imge1=$dir.$imn1;

           }
           
            ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1"/>
<title>Biblioteca Virtual ESMA</title>
 <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>

<!-- Código del Icono -->
<link href="iconos/Favicon.ico" type="image/x-icon" rel="shortcut icon" />
   <link href='http://fonts.googleapis.com/css?family=Quicksand:400,700' rel='stylesheet' type='text/css'>

<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<!--  Free CSS Template | Designed by TemplateMo.com  -->

<!-- Include the jQuery library (local or CDN) -->
<script src="http://code.jquery.com/jquery-latest.min.js"></script>

<!-- Include the plugin *after* the jQuery library -->
<script src="bjqs.min.js"></script>
<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src="js/bjqs-1.3.min.js"></script>

<!-- Include the basic styles -->
<link type="text/css" rel="Stylesheet" href="bjqs.css" />
  
</head>

 
<body>
<div id="templatemo_container">

        
        <div id="templatemo_shopping_cart">
              
        </div>
 
     
     
     
        
   <div id="banner-fade">

        <!-- start Basic Jquery Slider -->
        <ul class="bjqs">
        
           <img src="img/banner.fw.png" title="Automatically generated caption"></li>
         
        </ul>
        <!-- end Basic jQuery Slider -->

      </div>
      <!-- End outer wrapper -->
      
<!-- Banner slider -->
      <script class="secret-source">
        jQuery(document).ready(function($) {

          $('#banner-fade').bjqs({
            height      : 250,
            width       : 990,
            responsive  : true
          });

        });
      </script>
     
     
     
     <!-- menu -->
     
<div id="templatemo_menu_panel">
        <ul>
            
           <?php
         Include ("menu2.php")
         ?>                    
        </ul> 
    </div> <!-- end of menu -->
    
    <div id="templatemo_content">
    
        <div id="templatemo_content_left">


             
             <div class="cleaner_with_height">&nbsp;</div>
             
             <div>

             <?php

    $var=$_GET['cat'];
        $cons="select * from libros  WHERE genero LIKE '%".$var."%'";
        $dir="biblioteca-virtual/administrador/";
       $res_con= mysql_query($cons);
       while($registro=mysql_fetch_array($res_con)){
        $tit=$registro["titulo_libro"] ;
        $des=   $registro["descriptor"] ;
        $edi=   $registro["editorial"] ;
        $autor=   $registro["autor"] ;
        $imn1=$registro["img1"];
        $imag=$dir.$imn1;


  echo "<div class=product_box>
<h3  class=titlibro>$tit</h3>
 <div  style='float: left;'> <img src=$imag width=200px height=250px /></div>
  <div style='float: left; width: 420px; padding-left: 20px;' ><p>$des </p>
   <p>Editorial: $edi </p>

      <p>Autor: $autor</p>



  </div>

 </div>";


    }


?>

  
             </div>
             
            <div class="cleaner_with_height">&nbsp;</div>
        </div> <!-- end of ocntent left -->
        
        <div id="templatemo_content_right">
            <div class="templatemo_right_section">
                <h4>BUSCAR</h4>
                <div class="templatemo_right_section_content">
                    <form method="get" action="#">
                            <input name="keyword" type="text" id="keyword"/>
                            <input type="submit" name="submit" class="button" value="Search" />
                     </form>
                 </div>
            </div>
            
            <div class="templatemo_right_section">
                <h4>CATEGORIAS</h4>
                <div class="templatemo_right_section_content">
                
                    <ul>
                             <?php

                        $gene = "SELECT * FROM genero";
                        $resu = mysql_query($gene);
                        while ($row = mysql_fetch_array($resu)) {
                        $identif=$row['nombre_genero'];
                       echo "  <li><a href=categorias.php?cat=$identif>$identif</a></li>";

            }

                                ?>
                        
                    </ul>
                </div>
            </div>



          
        <div class="templatemo_right_section">
                <h4>Editoriales</h4>
                <div class="templatemo_right_section_content">
                
                    <ul>

                        <?php


                        $gene = "SELECT * FROM editorial";
$resu = mysql_query($gene);


while ($row = mysql_fetch_array($resu)) {
$identif=$row['nombre_editorial'];


    echo "  <li><a href=editoriales.php?cat=$identif>$identif</a></li>";



}


                            ?>

                    </ul>
                </div>
            </div>



            <?php     if (!empty($notie1))    {     ?>

            <div class="templatemo_right_section">
                <h4>Noticias</h4>
                <div class="templatemo_right_section_content">
                        <p>        <?php echo $notie1;?>    </p>
                 <center><img width="180px" height="130px" src ="<?php echo $imge1;?>"/> <a href="img/acimuperu.jpg"> 



                </div>

        <?php     }  ?>
        </div> <!-- end of content right-->
        
        <div class="cleaner">&nbsp;</div>
    </div>
    
     <div id="templatemo_footer_panel">
        <div id="footer_left">
         
        </div>
    <div id="footer_right">
     
           <label>Copyright ESMA </label> 
            
        </div>
        
        <div class="cleaner">&nbsp;</div>
    </div>
</div>
<!--  Free CSS Template | Designed by TemplateMo.com  --> 
</a></div></body>
</html>