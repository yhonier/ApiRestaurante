<?php 
    session_start();
    $datos_post = http_build_query(
        array(
            'id' => $_POST['id']
        )
    );
    $opciones = array('http' =>
        array(
            'method' => 'GET',
            'header' => 'Content-type: application/x-www-form-urlencoded',
            'content' => $datos_post
        )
        );
    $contexto = stream_context_create($opciones);
    $data = json_decode(file_get_contents('http://localhost/apicrudRestaurante/traerPlatoUnico.php?'.$datos_post,true,$contexto));
    // Crear de vbles de sesion para cada campo
    $_SESSION['id'] = $data->id;
    $_SESSION['nombre'] = $data->nombre;
    $_SESSION['precio'] = $data->precio;
    $_SESSION['descripcion'] = $data->descripcion;
    $_SESSION['img'] = $data->img;
    header('location:buscarPlato.php');