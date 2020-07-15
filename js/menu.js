$(document).ready(function(){

//variable

var bebida = $('.bebida');
bebida.hide();

//funcion click en el menu 

$(".link-bebida").click(function(){
    //coger los datos de cada categoria
    var customType = $(this).data('filter');
    console.log(customType);
    console.log(bebida.length);

    bebida.hide()
          .filter(function(){
              return $(this).data('cat') === customType;
          })
          .show();
});
});