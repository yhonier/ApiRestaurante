<?php 
$datos_post = http_build_query(
    array(
        'id' => $_POST['idd']
       
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
$resultado = file_get_contents('http://localhost/apicrudRestaurante/eliminarPlato.php?'.$datos_post, false, $contexto);
header('location: buscarPlato.php');
?>