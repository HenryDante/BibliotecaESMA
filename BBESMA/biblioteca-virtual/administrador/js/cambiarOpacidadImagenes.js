/**
 * Cambia la opacidad de las imagenes de la galeria cuando no se esta sobre ellas al valor pasado como parametro.
 * 
 * @param opacidad Valor entre 0 y 1 que determinara la opacidad de la imagen.
 *  
 */
function cambiarOpacidadImagenes(opacidad){
    $(document).ready(function(){
        // Pone la opacidad de las imagenes al porcentaje indicado en opacidad.
        $('.galeria img').animate({"opacity" : opacidad});

        // Al pasar el raton sobre la imagen (over) se ejecuta la primera funcion y al salirse la segunda (out).
        $('.galeria img').hover(
            function(){
                $(this).animate({"opacity" : 1});
            },
            function(){
                $(this).animate({"opacity" : opacidad});
            }
        );
    });
}

