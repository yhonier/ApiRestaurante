<?php 
$datos_post = http_build_query(
    array(
        'nombre' => $_POST['nombre'],
        'precio' => $_POST['precio'],
        'descripcion' => $_POST['descripcion'],
        'img' => $_POST['img']

    )
    );

// stream_context_create: crear un contexto de flujo (debe ser un arreglo asociativo)

$opciones = array('http'=>
    array(
        'method' => 'GET',
        'header' => 'Content-type: application/x-www-form-urlencoded',
        'content' => $datos_post
    )    
    );

$contexto = stream_context_create($opciones);
$resultado = file_get_contents('http://localhost/apicrudRestaurante/crearPlato.php?'.$datos_post, false, $contexto);
header('location: plato.php');
?>  