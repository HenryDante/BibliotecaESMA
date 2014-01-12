
var numeroFila=2;

/*
 * Funcion que agrega un nueva fila a la tabla para subir imagenes, para poder subir mas de una.
 * 
 * @param idTabla Identificador de la tabla en la que se quiere añadir una nueva fila
 * @param idBoton Identificador del boton que llama a esta funcion
 */
function agregarFila(idTabla,idBoton){
    
    // Limitamos el numero de filas a 10.
    if (numeroFila <= 10){
        // Inserta una nueva fila en la posicion numeroFila (la ultima).
        nuevaFila = document.getElementById(idTabla).insertRow(numeroFila);
        
        nuevaCelda = nuevaFila.insertCell(-1);
        nuevaCelda.innerHTML = '<td><div class="inputImagenModificado"><input class="inputImagenOculto" name="imagen'+numeroFila+'" type="file"><div class="inputParaMostrar"><input><img src="imagenes/button_select2.gif"></div></div></td>';

        // Funcion para modificar el estilo de los inputs
        mostrarInputFileModificado('imagen'+numeroFila);
        
        // Incrementa numeroFila
        numeroFila ++;
    }else{
        // Inserta una nueva fila en la posicion numeroFila (la ultima).
        nuevaFila = document.getElementById(idTabla).insertRow(numeroFila);

        // Inserta una nueva celda en la fila nueva, en la ultima posicion (por el -1). 
        nuevaCelda = nuevaFila.insertCell(-1);
        nuevaCelda.innerHTML = '<td>Solo se pueden subir 10 archivos a la vez.</td>';
        
        // Desactivamos el boton para agregar mas filas.
        document.getElementById(idBoton).disabled = true;
    }
}