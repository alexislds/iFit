
$(document).ready(function(){
    editarInputsPerfil();
});

function editarInputsPerfil(){
$(".perfil-lista-editar").click(function(){
    var inputs = $(this).parent().parent().find('.perfil-lista-input');
    inputs.attr("disabled",false);
    inputs.addClass('campo-habilitado');
}); 
};
 

 
   