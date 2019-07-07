//Mostrar modal
$("#btn_nuevo").click(function(){    
$("#formulario").trigger("reset");
$(".modal-header").css("background-color","#28a745"); 
$(".modal-header").css("color","white"); 
$(".modal-title").text("Agregar elemento");  
$("#modalusuario").modal("show");   
});

//Boton guardar
$("#btnGuardar").click(function(){
    console.log($(this).data("edicion"));
    let nom=$("#nombre").val();
    let email=$("#email").val();
    let pass=$("#pass").val();
    let obj={
        accion: "insertar_usuarios",
        nom: nom,
        email: email,
        pass: pass
    }

    if(mac=="" || nom=="" || pat=="" || lista==0 || mat=="" || cor=="" || tel=="" || niv=="" || pass==""){
        alert("No dejes campos vacios");
    }else{
        $.ajax({
            url: "../../includes/_funciones.php",
            type: "POST",
            dataType: "json",
            data: obj
        })
        $("#modalusuario").modal("hide");
        location.reload();
    }


});