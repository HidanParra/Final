<?php  
    require_once '_db.php';

    if(isset($_POST["accion"])){
        switch($_POST["accion"]){
            //Usuarios
            case: "eliminar_usuarios":
                eliminar_usuarios();
            break;
            case: "mostrar_usuarios":
                mostrar_usuarios();
            break;
            case: "editar_usuarios":
                editar_usuarios();
            break;
            case: "insertar_usuarios":
            insertar_usuarios();
            break;
            //Servicios
            case: "eliminar_servicios":
                eliminar_servicios();
            break;
            case: "mostrar_servicios":
                mostrar_servicios();
            break;
            case: "editar_servicios":
                editar_servicios();
            break;
            case: "insertar_servicios":
            insertar_servicios();
            break;
            //Comentarios
            case: "eliminar_comentarios":
                eliminar_comentarios();
            break;
            case: "mostrar_comentarios":
                mostrar_comentarios();
            break;
            case: "editar_comentarios":
                editar_comentarios();
            break;
            case: "insertar_comentarios":
                insertar_comentarios();
            break;
            //Roles
            case: "eliminar_roles":
                eliminar_roles();
            break;
            case: "mostrar_roles":
                mostrar_roles();
            break;
            case: "editar_roles":
                editar_roles();
            break;
            case: "insertar_roles":
            insertar_roles();
            break;
            //Clientes
            case: "eliminar_clientes":
            eliminar_clientes();
            break;
            case: "mostrar_clientes":
            mostrar_clientes();
            break;
            case: "editar_clientes":
            editar_clientes();
            break;
            case: "insertar_clientes":
            insertar_clientes();
            break;
        }
    }

    function insertar_usuarios(){
        global $db;
        extract($_POST);

        $insertar=$db->insert("usuarios",["usr_nombre"=>$nombre,
                                        "usr_email"=>$email,
                                        "usr_pass"=>$pass,
                                        "usr_fa"=>date("Y").date("m").date("d")];)

    }


?>