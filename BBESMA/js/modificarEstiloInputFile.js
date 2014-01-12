/**
 * Permite que se muestre el contenido del input file en el que se ha modificado el estilo.
 * 
 * @param nombreInput Nombre del input file que se quiere ver con un estilo modificado
 */
function mostrarInputFileModificado(nombreInput) {
    // Creamos la división para mostrar el input file con otro estilo.
    var nuevaDiv = document.createElement('div');
    nuevaDiv.className = 'inputParaMostrar';

    // Se añade el campo en el que se mostrara el nombre del archivo selecionado.
    nuevaDiv.appendChild(document.createElement('input'));

    // Almacena en arrayInptuts todos los input de la 'pagina'.
    var arrayInputs = document.getElementsByTagName('input');

    
    for (var i=0; i<arrayInputs.length; i++) {
        // Si el input es de tipo file se modifica.
        if (arrayInputs[i].name == nombreInput){
            // Se clona la division creada y se agrega el input a la lista de inputs. ParentNode y [0]???? y ver si getElementsByTagName es lo mas adecuado
            var clonado = nuevaDiv.cloneNode(true);
            arrayInputs[i].parentNode.appendChild(clonado);

            // Se obtiene el input clonado y se reflejan en el los cambios producidos en el input file original.   
            arrayInputs[i].campoClonado = clonado.getElementsByTagName('input')[0];
            arrayInputs[i].onchange = function (){
                    this.campoClonado.value = this.value;
            }
            
            // Se sale del for porque ya se ha encontrado el input que se buscaba.
            break;
        }
    }
}

