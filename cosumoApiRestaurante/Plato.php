<?php 
    // file_get_contents: Transmite un fichero completo a una cadena $data
    $data = json_decode(file_get_contents('http://localhost/apicrudRestaurante/traerPlatos.php'),true);
?>

<!DOCTYPE html>
<html lang="es">

<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página web AlexCG</title>
    <link rel="shortcut icon" href="img/alexcgdesign.png" type="image/x-icon">
    <link rel="stylesheet" href="estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet"> 
</head>

<body>
    <header>
        <nav>
            <a href="#">Inicio</a>
            <a href="buscarPlato.php">Editar o eliminar</a>
            
        </nav>
        <section class="textos-header">
        <h1 style="margin-left:40px">Restaurante El Tragón</h1>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: #fff;"></path>
            </svg></div>
    </header>
    <main>
        <section class="contenedor sobre-nosotros">
            <h2 class="titulo">Ingreso de plato</h2>
            <div class="container">
            <div class="container">
    
    <form method="post" action="guardarPlato.php">
        <div class="mb-3">
            <label for="name" class="form-label">Nombre de plato</label>
            <input type="text" class="form-control" id="nombre" name="nombre">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Precio</label>
            <input type="number" class="form-control" id="precio" name="precio">
        </div>
        <div class="mb-3">
            <label for="designation" class="form-label">Descripción</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion">
        </div>
        <div class="mb-3">
            <label for="designation" class="form-label">Imagen</label>
            <input type="text" class="form-control" placeholder="ingrese url de la imagen" id="img" name="img">
        </div>
        <button type="submit" class="btn btn-secondary">Enviar</button>
    </form>
</div>
<br>
<br>
<br>

</div>
    
<h1 class="titulo">Productos</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4">
                     
            <?php
            foreach ($data['body'] as $row) { ?>
      
        <div class="card">
          <img  src="<?php echo $row['img']; ?>" class="card-img-top" alt="..." >
          <div class="card-body">
            <h5 class="card-title"><?php echo $row['nombre']; ?></h5>
            <p class="card-text"><?php echo "Descripción:   ".$row['descripcion']; ?></p>
          </div>
          <div class="card-footer">
            <small class="text-muted"><h4>
            <h4><?php echo "Precio:  $".$row['precio']; ?></h4></small>
          </div>
          <br>
        </div>       
            <?php
            } ?>
        
     </div>
   
       
                </div>
            </div>
               
  
    </main>
    <footer>
   
        <h2 class="titulo-final">&copy; YMM Design | Yhonier Molina</h2>
    </footer>
</body>

</html>