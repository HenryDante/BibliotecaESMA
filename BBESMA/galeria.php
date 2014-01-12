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
<title>Biblioteca Virtual ESMA</title>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1"/>
     <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
        <script src="SpryAssets/SpryMenuBar.js" type="text/javascript">
        <link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css" />

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
<script src="Javascript/jquery.smooth-scroll.min.js"></script>
<script src="Javascript/jquery-1.7.2.min.js"></script>
<script src="Javascript/jquery-ui-1.8.18.custom.min.js"></script>
<script src="Javascript/lightbox.js"></script>
<!--este lo ponen luego -->
<script>
  jQuery(document).ready(function($) {
      $('a').smoothScroll({
        speed: 1000,
        easing: 'easeInOutCubic'
      });

      $('.showOlderChanges').on('click', function(e){
        $('.changelog .old').slideDown('slow');
        $(this).fadeOut();
        e.preventDefault();
      })
  });

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-2196019-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

  </script>
  
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
            
            
            <li><a href="index.php" target="_parent">INICIO</a></li>   <li><a href="titulos.php" target="_parent">BUSCAR TITULOS</a></li>
            <li><a href="galeria.php" target="_parent">GALERIA</a></li>  
            <li><a href="login.php">LOGIN</a></li> 
            <li><a href="contactanos.php">CONTACTANOS</a></li>                      
        </ul> 
    </div> <!-- end of menu -->
    
    <div id="templatemo_content">
    
        <div id="templatemo_content_left">
           
       <?php

            $gene = "SELECT * FROM galeria";
   $resu = mysql_query($gene);


    
       while ($row = mysql_fetch_array($resu)) {


$dir="biblioteca-virtual/administrador/";
$i1=$dir.$row['f1'];
$i2=$dir.$row['f2'];
$i3=$dir.$row['f3'];
$i4=$dir.$row['f4'];
$i5=$dir.$row['f5'];
$i6=$dir.$row['f6'];
$i7=$dir.$row['f7'];
$i8=$dir.$row['f8'];
$i9=$dir.$row['f9'];
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

  <div id="gal">



               <div style=" float: left; padding: 10px; ">
   <div  style=" margin-top: 20px; margin-bottom: 20px; " class="contact">
   <a href="<?php echo $i1;?>" rel="lightbox[roadtrip]">
<?php if (!empty($i1)) { ?>  <img width="140px" height="155px"  src="<?php echo $i1;?>" /> <BR>   <?php   } ?>

<BR><?php if (!empty($d1)) { ?><?php echo $d1;?><?php   } ?><BR>
    </div >

 <div  style=" margin-top: 20px; margin-bottom: 20px; " class="contact">
    
<?php if (!empty($i2)) { ?> <img width="140px" height="155px"  src="<?php echo $i2;?>"/> <BR>   <?php   } ?>
<BR><?php if (!empty($d2)) { ?><?php echo $d2;?><?php   } ?><BR>
         </div >

     <div style=" margin-top: 20px; margin-bottom:20px; "  class="contact">
           <a href="<?php echo  $i3;?>" rel="lightbox[roadtrip]">
     <?php if (!empty($i3)) { ?> <img width="140px" height="155px"  src="<?php echo $i3;?>"/> <BR>   <?php   } ?>
<BR> <?php if (!empty($d3)) { ?><?php echo $d3;?><?php   } ?><BR>
    </div >

</div>

  <div style=" float: left; padding: 10px; ">
    <div  style=" margin-top: 20px; margin-bottom: 20px; "  class="contact">
          
    <?php if (!empty($i4)) { ?> <img width="140px" height="155px"  src="<?php echo $i4;?>"/> <BR>   <?php   } ?>
 <BR><?php if (!empty($d4)) { ?><?php echo $d4;?><?php   } ?><BR>
 </div >

       <div  style=" margin-top: 20px; margin-bottom: 20px; " class="contact">
          
       <?php if (!empty($i5)) { ?> <img width="140px" height="155px"  src="<?php echo $i5;?>"/> <BR>   <?php   } ?>
  <BR><?php if (!empty($d5)) { ?><?php echo $d5;?><?php   } ?><BR>
   </div >

     <div  style=" margin-top: 20px; margin-bottom: 20px; "  class="contact">
           
     <?php if (!empty($i6)) { ?> <img width="140px" height="155px"  src="<?php echo $i6;?>"/> <BR>   <?php   } ?>
 <BR> <?php if (!empty($d6)) { ?><?php echo $d6;?><?php   } ?></textarea><BR>
    </div >
</div>

<div style=" float: left; padding: 10px; ">     <div style=" margin-top: 20px; margin-bottom: 20px; "  class="contact">
       
        <?php if (!empty($i7)) { ?> <img width="140px" height="155px"  src="<?php echo $i7;?>"/> <BR>   <?php   } ?>
<BR><?php if (!empty($d7)) { ?><?php echo $d7;?><?php   } ?><BR>
   </div >

 <div  class="contact" style=" margin-top: 20px; margin-bottom: 20px; " >    <?php if (!empty($i8)) { ?> <img width="140px" height="155px"  src="<?php echo $i8;?>"/> <BR>   <?php   } ?>
<BR><?php if (!empty($d8)) { ?><?php echo $d8;?><?php   } ?> <BR>

         </div >



            <div class="contact">    <a href="<?php echo  $i9;?>" rel="lightbox[roadtrip]"> <?php if (!empty($i9)) { ?> <img width="140px" height="155px"  src="<?php echo $i9;?>"/> <BR>   <?php   } ?>
  <BR> <?php if (!empty($d9)) { ?><?php echo $d9;?><?php   } ?><BR>
      </div >




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
            Copyright &copy; ESMA <a href="#"></a><br />
            
        </div>
        
        <div class="cleaner">&nbsp;</div>
    </div>
</div>
<!--  Free CSS Template | Designed by TemplateMo.com  --> 
</a></div></body>
</html>