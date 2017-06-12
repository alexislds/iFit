$(document).ready(function(){
    editarInputsFicha();
});

function editarInputsFicha(){
$(".ficha-botoes-editar").click(function(){
    var inputs = $(this).parent().parent().find('.ficha-conteudo-cima-campo');
    var inputTd = $('tbody').find('input').attr("disabled",false);
    inputTd.addClass('campo-habilitado');
    inputs.attr("disabled",false);
    inputs.addClass('campo-habilitado');
}); 
};
  