
$(document).ready(function(){
    editarInputs();
});

function editarInputs(){
$(".perfil-lista-editar").click(function(){
    var inputs = $(this).parent().parent().find('.perfil-lista-input');
    inputs.attr("disabled",false);
    inputs.addClass('campo-habilitado');
}); 
};


 
  