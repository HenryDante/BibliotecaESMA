 <?php

       include("conexion.php");

      $gene = "SELECT * FROM home";
      $resu = mysql_query($gene);
      while ($row = mysql_fetch_array($resu)) {
      $notie1=$row['noti1'];
      $dir="biblioteca-virtual/administrador/";
      $imn1=$row['img1'];
      $imge1=$dir.$imn1;
          $imni=$dir.$row['imgi'];
           $textn=$row['txtn'];

           }
           
            ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>

<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1"/>
<title>Biblioteca Virtual ESMA</title>

<!-- Código del Icono -->
<link href="iconos/Favicon.ico" type="image/x-icon" rel="shortcut icon" />
    <link href='http://fonts.googleapis.com/css?family=Quicksand:400,700' rel='stylesheet' type='text/css'>
     <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>


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

#slidebox{position:relative; border:0px solid #ccc; margin:40px auto;overflow:hidden;}
#slidebox, #slidebox ul {width:600px;height:300px;}
#slidebox, #slidebox ul li{width:600px;height:300px;}
#slidebox ul li{position:relative; left:0; background:transparent; float:left;list-style: none;   font-family:Verdana, Geneva, sans-serif; font-size:13px;}
#slidebox .next, #slidebox .previous{position:absolute; z-index:2; display:block; width:21px; height:21px;top:139px;}
#slidebox .next{right:0; margin-right:10px; background:url(slidebox_next.png) no-repeat left top; border:1px solid white;}
#slidebox .next:hover{background:url(slidebox_next_hover.png) no-repeat left top;}
#slidebox .previous{margin-left:10px; background:url(slidebox_previous.png) no-repeat left top; border:1px solid white;}
#slidebox .previous:hover{background:url(slidebox_previous_hover.png) no-repeat left top;}
#slidebox .thumbs{position:absolute; z-index:2; bottom:10px; right:10px;}
#slidebox .thumbs a{display:block; margin-left:5px; float:left; font-family:Verdana, Geneva, sans-serif; font-size:9px;background: #eee;color: #000; text-decoration:none; padding:2px 4px;  }
#slidebox .thumbs a:hover{background:#fff; color:#000;}
#slidebox .thumbs .thumbActive{background: #eee;
color: #000;
display: block;
margin-left: 5px;
float: left;
font-family: Verdana, Geneva, sans-serif;
font-size: 9px;
text-decoration: none;
padding: 2px 4px;
font-weight: bold;
border: 0px solid #AFAFAF;}
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
             <li><a href="titulos.php" target="_parent">BUSCAR TITULOS</a></li>
            <li><a href="galeria.php" target="_parent">GALERIA</a></li>  
            <li><a href="login.php">LOGIN</a></li> 
            <li><a href="contactanos.php">CONTACTANOS</a></li>                      
        </ul> 
    </div> <!-- end of menu -->
    
    <div id="templatemo_content">
    
        <div id="templatemo_content_left">


                        
              <div style="padding: 8px 3px 8px 3px;">



     
           <?php     if (!empty($imni))    {     ?>

            <div>

                <div>

                 <img style=" margin-bottom: 23px; " width="648px" height="340px" src ="<?php echo $imni;?>"/>



                </div>    </div>

        <?php     }  ?>



            
     
           <?php     if (!empty($textn))    {     ?>

            <div>
                <h4 class="titlibro">Noticias</h4>
                <div class="templatemo_right_section_content">
                        <p>        <?php echo $textn;?>    </p>




                </div>           </div>

        <?php     }  ?>

        






              </div>


             <div class="cleaner_with_height">&nbsp;</div>
             
             <h3 class="titlibro">Vision</h3> </br> 
             <div class="product_box">
               <p>Contribuir,  por medio de la educaci&oacute;n de  calidad y con amplia cobertura, a formar personas:


                <div style=" float: left; ">
                   <ul>
                        <li>Conscientes de sus derechos y responsabilidades para  con la familia, la sociedad y el pa&iacute;s</li>
                        <li>Con los conocimientos, habilidades destrezas y actitudes necesarios para su plena realizaci&oacute;n en lo social, cultural, pol&iacute;tico y econ&oacute;mico.</li>
                        <li>Con pensamiento cr&iacute;tico y creativo, en un marco de valores &eacute;ticos, humanistas y espirituales, coadyuven a  la construcci&oacute;n de un pa&iacute;s más equitativo, democr&aacute;tico y desarrollado, en camino hacia una sociedad del conocimiento.</li>
                    </ul> 
                </p>   

                </div></br>
               <div style=" float: left; width: 420px; padding-left: 20px;" > 
               </br>   </br>
                <div class="prestar">

                </div></a>
                </div> </div>
             <div class="product_box">
              <h3 class="titlibro">Vision</h3> </br>  
              <div style=" float: left; ">  
              <p>Ser reconocida como la instituci&oacute;n l&iacute;der en impulsar y desarrollar:
                 <ul>
                        <li>Un modelo educativo de alta calidad y cobertura, que concibe el ser y el hacer de la educaci&oacute;n, centrado en los estudiantes, partiendo de las necesidades culturales, sociales, econ&oacute;micas, pol&iacute;ticas y ambientales, de sus familias y comunidades; con docentes de excelente condici&oacute;n profesional, motivados y &eacute;ticos.</li>
                        <li>La formaci&oacute;n de una ciudadan&iacute;a con cultura democr&aacute;tica, valores humanistas, &eacute;ticos y espirituales; conocimientos cient&iacute;ficos y  tecnol&oacute;gicos aplicables en la resoluci&oacute;n de problemas; juicio cr&iacute;tico, capacidad reflexiva e investigativa y con las habilidades y destrezas para la construcci&oacute;n colectiva de nuevos conocimientos para transformar la realidad social y valorar y proteger el medio ambiente</li>
                    </ul>
                </p>   

              </div></br>
               <div style=" float: left; width: 420px; padding-left: 20px;">


               </br>
                <div class="prestar"></div><a href="#"></a>
          </div>   </div>
             <div class="product_box">
                <h3 class="titlibro">Valores</h3></br>  
             <div style=" float: left; "> </div></br>
              <ul>
                        <li>Solidaridad. Adhesi&oacute;n y comprensi&oacute;n generosa de la situaci&oacute;n de  los menos favorecidos  y trabajar con ellos y para ellos de manera preferencial.</li>
                        <li>Compromiso: Con los actores protag&oacute;nicos de la educaci&oacute;n, y adherirse voluntariamente al efectivo cumplimiento de los principios,  valores y funciones del MINED.</li>
                        <li>Calidad: Preocupaci&oacute;n permanente por la superioridad o excelencia en el trabajo y la mejora continua de nuestras funciones y actividades.</li>
                        <li>Equidad; Propensi&oacute;n a dejarse guiar por el sentimiento del deber o de la conciencia, m&aacute;s bien que por otras prescripciones. Disposici&oacute;n del &aacute;nimo que mueve a dar a cada uno lo que merece,  en particular al g&eacute;nero femenino y a la/os despose&iacute;da/os.</li>
                        <li>Transparencia: Actitud firme de trabajar de cara a quienes  servimos, con apego a la honradez y buen manejo de los bienes p&uacute;blicos y disposici&oacute;n de rendir cuentas  a la ciudadan&iacute;a.(Auditor&iacute;a social).</li>
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
                 <center><img width="180px" height="130px" src ="<?php echo $imge1;?>"/> <a href="img/acimuperu.jpg"> 



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
     </div>
        
        <div class="cleaner">&nbsp;</div>
    </div>
</div>
<!--  Free CSS Template | Designed by TemplateMo.com  --> 
</a></div></body>
</html>