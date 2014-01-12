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
<title>Biblioteca Virtual ESMA</title>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1"/>

        <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="js/agregarNuevaFila.js"></script>
        <script type="text/javascript" src="js/modificarEstiloInputFile.js"></script>
        <script type="text/javascript" src="js/cambiarOpacidadImagenes.js"></script>
        <link rel="stylesheet" type="text/css" href="css/estiloo.css"/>
    
        <!-- Lightbox -->
        <script type="text/javascript" src="lightbox/js/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="lightbox/js/jquery-ui-1.8.18.custom.min.js"></script>
        <script type="text/javascript" src="lightbox/js/jquery.smooth-scroll.min.js"></script>
        <script type="text/javascript" src="lightbox/js/lightbox.js"></script>
        <link rel="stylesheet" href="lightbox/css/lightbox.css" type="text/css" />



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


<script src="js/jcarousellite_1.0.1c5.js" type="text/javascript"></script>
<script type="text/javascript">



$(function() {
    $("#slidebox").jCarouselLite({
        vertical: false,
        hoverPause:true,
        btnPrev: ".previous",
        btnNext: ".next",
        visible: 1,
        start: 0,
        scroll: 0,
        circular: true,
        auto:1000,
        speed:700,
        btnGo:
            [".1", ".2",
            ".3", ".4"],
        
        afterEnd: function(a, to, btnGo) {
                if(btnGo.length <= to){
                    to = 0;
                }
                $(".thumbActive").removeClass("thumbActive");
                $(btnGo[to]).addClass("thumbActive");
            }
    });
});
</script>
   <style type="text/css">
.imags{
    height:260px;
    width: 592px;
    padding:3px;
    background-color: white;
}


</style>
<!-- Include the basic styles -->
<link type="text/css" rel="Stylesheet" href="bjqs.css" />
  
</head>

 
<body>
<div id="templatemo_container">

        
        <div id="templatemo_shopping_cart">
              
        </div>
 
     
     
        
   <div id="banner-fade">
 
          <img src="img/banner.fw.png" title="Automatically generated caption"></li>
          
         
        <!-- start Basic Jquery Slider -->
        <ul class="bjqs">
        
          
         
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
            
            
            <li><a href="index.php" target="_parent">INICIO</a></li>
            <li><a href="galeria.php" target="_parent">GALERIA</a></li>  
            <li><a href="login.php">LOGIN</a></li> 
            <li><a href="contactanos.php">CONTACTANOS</a></li>                      
        </ul> 
    </div> <!-- end of menu -->
    
    <div id="templatemo_content">
    
        <div id="templatemo_content_left">

            <div class="galeria">
            <h1>Mis Imagenes</h1>
            <?php
                require 'biblioteca-virtual/administrador/config.php';
                require 'biblioteca-virtual/administrador/GestorArchivos.php'; 
                
                $conexion = new mysqli($servidor, $usuarioBD, $passwordBD, $baseDatos);
                
                $consulta = "SELECT archivo, directorio FROM galeriaimagenes ORDER BY id";
                $resultado = $conexion->query($consulta);

                // Muestra las imagenes de la galeria.
                while($filas = $resultado->fetch_array(MYSQLI_ASSOC)) {
                    // Se comprueba que existan las imagenes
                    if (file_exists("biblioteca-virtual/administrador/imagenes/".$filas["directorio"]."/".$filas["archivo"])){
                        echo'<a href="biblioteca-virtual/administrador/imagenes/'.$filas['directorio'].'/'.$filas['archivo'].'" rel="lightbox[galeria]" title="'.$filas['archivo'].'"><img src="biblioteca-virtual/administrador/imagenes/'.$filas['directorio'].'/'.$filas['archivo'].'"/></a>';
                    }                    
                }
            ?>
        </div>
        
       
                    
            <!-- Para poder subir archivos con PHP hay que poner enctype="multipart/form-data" para que no se encripte ningun caracter y el archivo no se modifique/estropee -->
            
            
            <?php
                // Subir todas las imagenes
                if(isset($_POST['botonSubir'])){
                    subirImagenes('prueba',$conexion);
                }
            ?>
            <br />
     
        
        <!-- Muestra el estilo modificado para el input file y cambia la opacidad de las imagenes de la galeria     -->
        <body onLoad="
            mostrarInputFileModificado('imagen1');
            cambiarOpacidadImagenes(0.5);
        ">
                        
              <div style="padding: 8px 3px 8px 3px;">



           
           

<div class="thumbs">


    <ul>
        

    </ul>
</div>









              </div>


             <div class="cleaner_with_height">&nbsp;</div>
             
              
             <div class="product_box">
               

                <div style=" float: left; ">
                   
                </p>   

                </div></br>
               <div style=" float: left; width: 420px; padding-left: 20px;" > 
               </br>   </br>
                <div class="prestar">

                </div></a>
                </div> </div>
             <div class="product_box">
             
              <div style=" float: left; ">  
            
                </p>   

              </div></br>
               <div style=" float: left; width: 420px; padding-left: 20px;">


               </br>
                <div class="prestar"></div><a href="#"></a>
          </div>   </div>
             <div class="product_box">
                 
             <div style=" float: left; "> </div></br>
              <ul>
                        
                    </ul>
                <div style=" float: left; width:420px; padding-left: 20px;">  


                </br> </br>
                                           
                <div class="prestar">
                </div>
           </div>  </div>
             
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
                 <center><img width="180px" height="130px" src ="<?php echo $imge1;?>"/> </center>



                </div>

                            <?php     }  ?>



            </div>
        </div> <!-- end of content right-->
        
        <div class="cleaner">&nbsp;</div>
    </div>
    
     <div id="templatemo_footer_panel">
        <div id="footer_left">
         
        </div>
        <div id="footer_right">
            Copyright © ESMA <a href="#"></a><br />
            
        </div>
        
        <div class="cleaner">&nbsp;</div>
    </div>
</div>
<!--  Free CSS Template | Designed by TemplateMo.com  --> 
</a></div></body>
</html>