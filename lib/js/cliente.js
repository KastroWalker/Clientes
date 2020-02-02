function formata_mascara(campo_passado, mascara) {
    var campo = campo_passado.value.length;
    var saida = mascara.substring(0,1);
    var texto = mascara.substring(campo);
    if(texto.substring(0,1) != saida){
        campo_passado.value += texto.substring(0,1);
    }
}

function frm_number_only_exc(){
    /**
      * Função pada deixar digitar apenas numero
      */
      if ( event.keyCode == 37 || event.keyCode == 38 || event.keyCode == 39 || event.keyCode == 40 || event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || ( event.keyCode < 106 && event.keyCode > 95 ) ) { 
        return true;
    }else{
        return false;
    }
}

$(document).ready(function(){

    $("input.frm_number_only").keydown(function(event) { 

       if ( frm_number_only_exc() ) { 

       } else { 
           if ( event.keyCode < 48 || event.keyCode > 57 ) { 
               event.preventDefault();  
           }        
       } 
   }); 

});