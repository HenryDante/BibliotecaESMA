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

<html>
<head>
	<title> </title>
</head>
<body>
	<form action="" method="post">
		<fieldset id="form">
			<label>Nombre:&nbsp;<input type="text" name="nombre"/></label>
			<label>Documento:&nbsp;<select id = "documento">
                       <option> </option>
                       <option value = "1">DUI</option>
                       <option value = "2">Licencia de conducir</option>
                       </select></label>
      <label>Cantidad a prestar:&nbsp;<input type="text" name="cantidad" id="cantidad"/></label>
		

             <?php
        $var=$_GET['tit'];
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
</fieldset>
	</form>
</body>
</html>

