<?php

    /**
     * Funcion que comprueba los input file que contienen algo y llama a la funcion encargada de subir las imagenes.
     * 
     * @param type $dir Directorio en el que se quiere subir las imagenes (usar '' si no se quiere usar un subdirectorio).
     * @param $conexion Conexion con la base de datos.
     */
    function subirImagenes($dir, $conexion){
        // Recorremos la lista de campos para subir archivos.
        foreach ($_FILES  as $key => $value) {
            // Se comprueba si el nombre del archivo no esta vacio para subirlo
            if ($_FILES[$key]["name"] != ''){
                subirImagen($key, $dir, $conexion);
            }
        }
    }

    /**
     * Funcion para subir imagenes
     * 
     * @param $campoArchivo Nombre del campo en el que se subira el archivo.
     * @param $dir Directorio en el que se guardara la imagen. 
     * @param $conexion Conexion con la base de datos.
     */
    function subirImagen($archivo, $dir, $conexion){     
        // Se comprueba que el archivo a subir sea una imagen.
        if($_FILES[$archivo]["type"] == "image/jpeg"){
            
            // Se comprueba si ha ocurrido algun error al subir el archivo.
            if ($_FILES[$archivo]["error"]) {
                echo '<div class="error">Error '.$_FILES["archivo"]["error"].'al intentar subir el archivo '.$_FILES[$archivo]["name"].'</div>';
            }else{
            
                // Se comprueba si ya se ha creado el subdirectorio para almacenar la imagen.
                // Y se crea si no existe aun.
                if(!is_dir("imagenes/".$dir)){
                    mkdir("imagenes/".$dir, 0800);
                }

                // Comprobamos que no haya ningun archivo con el mismo nombre en el servidor.
                if (file_exists("imagenes/".$dir."/".$_FILES[$archivo]["name"])) {
                    echo '<div class="error">Ya hay un archivo con nombre '.$_FILES[$archivo]["name"].'. Renombralo y vuelve a subirlo.</div>';   
                }else{
                    // Subimos la imagen.
                    move_uploaded_file($_FILES[$archivo]["tmp_name"], "imagenes/".$dir."/".$_FILES[$archivo]["name"]);
                    echo '<div class="subido">Archivo '.$_FILES[$archivo]["name"].' subido.</div>';
                                        
                    // Agregamos la imagen a la base de datos.
                    $consulta = sprintf("INSERT INTO galeriaimagenes (archivo, directorio) VALUES ('%s','%s')",          
                        $conexion->real_escape_string($_FILES[$archivo]["name"]),
                        $conexion->real_escape_string($dir)
                    );
                    
                    // Se ejecuta la consulta.
                    $conexion->query($consulta);
                }
            }
        }else{
             echo '<div class="error">'.$_FILES[$archivo]["name"].': Formato de archivo no permitido. </div>';
        }      
    }
?>