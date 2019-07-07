$("#btn_nuevo").click(function(){    
$("#formulario").trigger("reset");
$(".modal-header").css("background-color","#28a745"); 
$(".modal-header").css("color","white"); 
$(".modal-title").text("Agregar elemento");  
$("#modalusuario").modal("show");   
});