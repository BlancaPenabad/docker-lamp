<?php 

function compruebaExtension ($extension){
    if ($extension=="png" || $extension=="jpg" ||$extension=="jpeg" ||$extension=="gif"){
        return true;
    }else{
        return false;
        //echo "Formato inválido. Sólo se aceptan imágenes .png, .jpg, .jpeg o .gif.";
    }
}


function compruebaTamanho ($tamanho){


    if($tamanho>50000){
        return false;
        //echo "El fichero es muy grande.";
    }else{
        return true;
    }
}
?>