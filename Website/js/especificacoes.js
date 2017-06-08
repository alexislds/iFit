
$(document).ready(function(){
    editarInputsEspecificacoes();
});

function editarInputsEspecificacoes(){
$(".especificacoes-lista-editar").click(function(){
    var inputs = $(this).closest('.especificacoes-lista').find('.especificacoes-lista-input');
    inputs.attr("disabled",false);
    inputs.addClass('campo-habilitado');
}); 
};
