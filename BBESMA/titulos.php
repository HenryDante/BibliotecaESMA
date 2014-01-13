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

  <!-- CÃ³digo del Icono -->
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
  <link type="text/css" rel="Stylesheet" href="css/bootstrap.css" />
  <script src="js/bootstrap.js"></script>

  <style>
  p {
    font-size: 14px;
  }
  #templatemo_content_left .product_box {
    float: left;
    width: 650px;
    padding: 4px;
    margin-right: 10px;
    background: #fff;
    -webkit-box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.18);
    -o-box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.18);
    box-shadow: 0 0 4px rgba(0, 0, 0, 0.18);
  }     
  h3 {
    margin: 0 0 10px 0 !important;
    padding: 5px 0 5px 10px !important;
    font-size: 22px !important;
    color: #000 !important;            background: transparent !important;
    font-weight: bold !important;
    font-family: 'Quicksand', verdana;  !important
  }
  #templatemo_menu_panel ul li a {

    padding: 0px 0 !important;

  }
  </style>

  
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
     <form action="titulos.php" method="post">
      <fieldset style=" text-align: center; " id="form">
       <center><h1>Buscar Titulos</h1></center>  <br>
       <font style="font-weight:bold;font-size:13px;"></font><input name="busq" placeholder="Busqueda por Titulo de Libro o Autor" type="text" style="background:#F3FCFF;height: 27px;width: 395px;">
       <input id="btnbuscar" value="Buscar" style=" -webkit-border-radius: 3px; background: #ffb76b; background: -moz-linear-gradient(top,#ffb76b 0%,#ffa73d 50%,#ff7c00 51%,#ff7f04 100%); background: -webkit-gradient(linear,left top,left bottom,color-stop(0%,#ffb76b),color-stop(50%,#ffa73d),color-stop(51%,#ff7c00),color-stop(100%,#ff7f04)); background: -webkit-linear-gradient(top,#ffb76b 0%,#ffa73d 50%,#ff7c00 51%,#ff7f04 100%); background: -o-linear-gradient(top,#ffb76b 0%,#ffa73d 50%,#ff7c00 51%,#ff7f04 100%); background: -ms-linear-gradient(top,#ffb76b 0%,#ffa73d 50%,#ff7c00 51%,#ff7f04 100%); background: linear-gradient(to bottom,#ffb76b 0%,#ffa73d 50%,#ff7c00 51%,#ff7f04 100%); border: 1px solid #ffb76b; border-radius: 3px; color: #fff; cursor: pointer; filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffb76b', endColorstr='#ff7f04',GradientType=0 ); font: bold 12px arial; padding: 12px 3px; width: 15%; " name="enviar" type="submit">
     </fieldset>      <br> <br>
     <div id="botton">
     </div>
   </form>


   <?php


   if(isset($_REQUEST['enviar']))
   {
    echo "<h3>Resultados de la Busqueda</h3>";
    $busq=$_POST['busq'];

    $consulta_mysql="select * from libros  WHERE titulo_libro LIKE '%".$busq."%' OR ISBN_ISSN LIKE '%".$busq."%' OR autor LIKE '%".$busq."%'";

    $resultado_consulta_mysql= mysql_query($consulta_mysql);
    if (strlen($busq)<1) 
    {
      echo "<h3></br></br>No existe ningun registro asegurese de introducir un campo en la caja de texto.</h3>"; }

      else {

       $num_reply = @mysql_num_rows($resultado_consulta_mysql);



       if ($num_reply==0) {

        echo "</br></br><h3>No existe ningun registro con ese nombre</h3>";

      }

      else {
        while($registro=mysql_fetch_array($resultado_consulta_mysql)){
          $dir="biblioteca-virtual/administrador/";
          $id = $registro["codigo_libro"];
          $tit=$registro["titulo_libro"] ;
          $autor=$registro["autor"]   ;   $des=$registro["descriptor"]   ;
          $img1=$dir.$registro["img1"]   ;
          $anio=$registro["año"]   ;   $idio=$registro["idioma"]   ;  $edi=$registro["editorial"]   ;
          $ejem=$registro["cant_ejemplares"]   ;
          echo "<div class=product_box>
          <h2 style='text-transform:uppercase;' class=titlibro>$tit</h2>
          <div  style='float: left;'> <img src=$img1 width=200px height=250px /></div>
          <div style='float: left; width: 420px; padding-left: 20px;' ><p>$des </p>
          <p>ID = $id</p>
          <p>Editorial: $edi </p>
          <p>Autor: $autor</p>
          <p>Año: $anio</p>
          <p>Idioma: $idio</p>
          <p style='font-size:15px;font-weight:bold;'>Ejemplares Disponibles: $ejem</p>
          </div>
          </div>";
        }
      }
    }
  }
  ?>
 
  <div class="cleaner_with_height">&nbsp;
  </div>

  <div>

    <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
Prestar
</button>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
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
    Copyright &copy; ESMA <a href=""></a><br />

  </div>

  <div class="cleaner">&nbsp;</div>
</div>
</div>
<!--  Free CSS Template | Designed by TemplateMo.com  --> 
</a></div>

</body>
</html>